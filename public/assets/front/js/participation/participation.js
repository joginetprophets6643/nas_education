let screenType;
let classType = '3';
let activeState = '';
let activeDistrict ='';

$(document).ready(()=>{
    $.ajax({
      type: "GET",
      url: api_url + 'state_masters?limit-1',
    }).done((response)=>{
       createSidebarStates(response.data)
       sessionStorage.setItem('states',JSON.stringify(response.data))
    });
    setScreen(screenType)
    getParicipationData()
    setClass(classType)
    setBreadCrumb('national')

  });



  function setClass(value){
    if(classType === ''){
      $('#current_class').html('All Classes')
    }else{
      $('#current_class').html(classType)
    }
  }
// create bar graph with data
  function createSocialBarGraph(bar){
    Highcharts.chart('socialBarGraph', {
        chart: {
          type: 'column'
        },
        title: {
          text: ''
        },
        accessibility: {
          announceNewData: {
            enabled: true
          }
        },
        xAxis: {
          type: 'category'
        },
        yAxis: {
          title: {
            text: ''
          }

        },
        legend: {
          enabled: false
        },
        plotOptions: {
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: '{point.y:.1f}%'
            }
          }
        },

        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [
          {
            name: "Groups",
            colorByPoint: true,
            data: [
              {
                name: "SC",
                y: bar.sc,
                color: '#75A9D9'
              },
              {
                name: "OBC",
                y: bar.obc,
                color: '#E9769F'
              },
              {
                name: "ST",
                y: bar.st,
                color: '#CAC55F'
              },
              {
                name: "General",
                y: bar.gen,
                color: '#4CAF50'
              }
            ]
          }
        ],
      });
  }

// create donought chart with data
  function createManagementPieChart(chart){
    Highcharts.chart('managementPieGraph', {
      chart: {
        type: 'variablepie'
      },
      title: {
        text: ''
      },
      tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
          '{point.y}%'
      },
      
      plotOptions: {
        variablepie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: true,
                format: '{point.percentage:.1f} %',
                distance: -50,
                filter: {
                    property: 'percentage',
                    operator: '>',
                    value: 4
                }
            },
            showInLegend: true
        }
      },
      series: [{
        minPointSize: 10,
        innerSize: '40%',
        zMin: 0,
        name: 'Management',
        data: [{
          name: 'Govt.',
          y: chart.gov,
          z: 100,
          color: '#75A9D9'
        }, {
          name: 'Govt. Aided',
          y: chart.gov_aided,
          z: 100,
          color: '#E9769F'
        }, {
          name: 'Private',
          y: chart.private,
          z: 100,
          color: '#CAC55F'
        }, {
          name: 'Central Govt.',
          y: chart.cent_gov,
          z: 100,
          color: '#4CAF50'
        }]
      }]
    });
  }

  async function createSidebarStates(data){
    let state_list = "<ul>"
    let district_data = []

    await $.ajax({
      type: "GET",
      url: api_url + 'district_masters?limit=-1',
    }).done(response=>{
      district_data = response.data
      sessionStorage.setItem('districts',JSON.stringify(response.data))
      // console.log(district_data)
    });

    await data.map(state=>{
      // console.log(state.state_id)
      state_list += '<li><a href="javascript:void(0)" class="active" onClick ="toggleDistrictList('+state.state_id+',true)" id="showDistrict'+state.state_id +'" ><span class="material-icons-round radio_checked"> radio_button_checked </span><span class="material-icons-round radio_unchecked">radio_button_unchecked</span>'+ state.state_name +'</a>'
      const filteredDistrict = district_data.filter(district=>{
        if(district.state_id === state.state_id)
        return district
      })
      // console.log(state.state_name)
      // console.log(filteredDistrict)
      state_list += '<div class="district-list" id="state_'+ state.state_id +'"><div class="d-flex align-items-center justify-content-between pb-15"><h2>'+ state.state_name +'</h2><button class="close-btn" id="close_btn" onClick="toggleDistrictList('+state.state_id+',false)"><span class="material-icons-round">highlight_off</span></button></div><ul>'
      state_list +=  createDistrictForStates(filteredDistrict,state.state_name,state.state_id)
      state_list += '</ul></div>'
      state_list += '</li>'
    })
    state_list +="</ul>"
    document.getElementById('all-state-list').innerHTML = state_list
  }


  function createDistrictForStates(data){
    let district_list = ''
    data.map(district=>{
      district_list +='<li><a href="javascript:void(0)" onClick="setActiveStateDistrict('+ district.state_id+','+district.district_id+')">' + district.district_name +'</a></li>'
    })
    return district_list
  }


  function toggleDistrictList(state_id,value){
    if(value){
      $('#state_'+ state_id +'').addClass("active");
    }else{
      $('#state_'+ state_id +'').removeClass("active");

    }
  }

  function changePageDataViaSideFilter(value){
    $('.side_filter').removeClass('active')
    $('#'+ value+'').addClass('active')
    chageDataWithFilter('sidebar_filter',value)
  }

  function setScreen(screen_type = 'participation'){
    screenType = screen_type
    $('#'+screen_type+'-tab').addClass('active')
    $('#'+screen_type+'').addClass('show active')
    chageDataWithFilter('sidebar_filter','all')
  }

  function chageDataWithFilter(filter_type, value){
    const lastActiveState =JSON.parse(sessionStorage.getItem('activeState'))
    const lastActiveDistrict =JSON.parse(sessionStorage.getItem('activeDistrict'))

    if(filter_type === 'sidebar_filter'){
      manipulateView(value)
    }
    if(filter_type === 'data_filter'){
      classType = value
      setClass()
      setInformation()
    }
    if(filter_type === 'global_filter'){
      if(value === 'state'){
        activeDistrict = ''
        if(typeof lastActiveState === 'undefined' || lastActiveState === null ){
          alert('you do not have any active state')
          return
        }
        else{
          activeState = lastActiveState
          activeDistrict = ''
          console.log(activeState)
          $('#sidebar_active_state').html(activeState.state_name)
        }
      }
      if(value === 'national'){
        activeState = ''
        activeDistrict = ''
      }
      if(value === 'district'){
        if(lastActiveDistrict === null || lastActiveState === null ){
          alert('you do not have any active state')
          return
        }
        else{
          activeState = lastActiveState
          activeDistrict = lastActiveDistrict
          $('#active_state').html(activeState.state_name)
          $('#active_district').html(activeDistrict.district_name)
        }
      }
      setInformation()
      setBreadCrumb(value)
    }
  }

  function manipulateView(value){
    if(value === 'all'){
       toggleSection('all')
    }
    if(value === 'gender'){
      toggleSection('gender')
    }
    if(value === 'location'){
      toggleSection('location')
    }
    if(value === 'management'){
      toggleSection('management')

    }
    if(value === 'social_group'){
      toggleSection('social')
    }
  }


  function toggleSection(value){
    let section = ''
    let availableSections = ['gender','location','management','social']
    if(value !== 'all'){
      section += value+ '_section_'+ screenType
    }else{
      section = ''
    }
    if(section === ''){
      availableSections.forEach(sec=>{
        $('#'+sec+'_section_'+screenType).removeAttr('style')
        $('#'+sec+'_section_'+screenType).removeClass('col-md-12 text-center')
        $('#'+sec+'_section_'+screenType).addClass('col-md-6')
      })
    }else{
      const filteredSections = availableSections.filter(sec=>{
        const temp_name = sec + '_section_' + screenType
        if(section !== temp_name){
          return sec
        }
      })

      $('#'+section+'').removeAttr('style')
      $('#'+section +'').removeClass('col-md-6')
      $('#'+section +'').addClass('col-md-12 text-center')
      filteredSections.forEach(sec =>{
        $('#'+sec+'_section_'+screenType).attr('style','display:none;')
      })
    }
  }

  function setInformation(){
    let filters = {};
    if(activeState !== ''){
      filters = {...filters , state: activeState.state_id}
    }
    if(activeDistrict !== ''){
      filters = {...filters ,district: activeDistrict.district_id}
    }
    if(classType !== ''){
      filters = {... filters,class: classType}
    }

    console.log(filters)
    if(screenType === 'participation'){
      const data = JSON.parse(sessionStorage.getItem('participation_data'))
      const filteredData = data.filter(par =>{
        let count = 0
        if (Object.keys(filters).length === 0) {
          return true
        }else{
          for (const [key, val] of Object.entries(filters)) {
            if(key === 'class'){
              if(par.grade === val){
                count +=1
              }
            }
            if(key === 'state'){
              if(parseInt(par.state_id) === val){
                count +=1
              }
            }
            if(key === 'district'){
              if(parseInt(par.district_id) === val){
                count +=1
              }
            }
          }
        }
        if (count === Object.keys(filters).length) {
          return true
        }
      })
      // console.log(filteredData)
      updateData(filteredData)
    }
  }

  async function getParicipationData(){
    await $.ajax({
      type: "GET",
      url: api_url + 'all_grade_participation_tbl?limit=-1',
    }).done(res=>{
      // console.log(res.data)
      sessionStorage.setItem('participation_data',JSON.stringify(res.data))
    });
    setInformation()
  }

  function setActiveStateDistrict(state_id,district_id){
    setBreadCrumb('district')
    const all_states = JSON.parse(sessionStorage.getItem('states'))
    const all_districts = JSON.parse(sessionStorage.getItem('districts'))
    activeState =all_states.filter(state=>{
      if(state.state_id === parseInt(state_id))
      return state
    }).pop()

    activeDistrict = all_districts.filter(district =>{
      if(district.district_id === district_id)
      return district
    }).pop()

    sessionStorage.setItem('activeState',JSON.stringify(activeState)) 
    sessionStorage.setItem('activeDistrict',JSON.stringify(activeDistrict)) 
    $('#active_state').html(activeState.state_name)
    $('#active_district').html(activeDistrict.district_name)

    setInformation()
  }

  function updateData(data){
    // console.log(data)
    if(typeof data !== 'undefined'){
      if(screenType === 'participation'){
        let total_school = 0
        let total_student = 0
        let total_teacher = 0
        let total_male = 0
        let total_female = 0
        let total_urban = 0
        let total_rural = 0
        let gen_group = 0
        let sc_group = 0
        let st_group = 0
        let obc_group = 0
        let cent_gov = 0
        let gov_aided = 0
        let priv = 0
        let gov = 0

        data.map(pari_inf=>{
          total_school += parseInt(pari_inf.total_school)
          total_teacher += parseInt(pari_inf.total_teacher)
          total_student += parseInt(pari_inf.total_student)
          total_male += parseInt(pari_inf.male_gender)
          total_female += parseInt(pari_inf.female_gender)
          total_urban += parseInt(pari_inf.urban_location)
          total_rural += parseInt(pari_inf.rural_location)
          gen_group += parseInt(pari_inf.general_social_group)
          sc_group += parseInt(pari_inf.sc_social_group)
          st_group += parseInt(pari_inf.st_social_group)
          obc_group += parseInt(pari_inf.obc_social_group)
          cent_gov += parseInt(pari_inf.central_govt_school)
          gov_aided += parseInt(pari_inf.govt_aided_school)
          priv += parseInt(pari_inf.private_school)
          gov += parseInt(pari_inf.govt_school)

        })

        total_female = total_female/Object.keys(data).length
        total_male = total_male/Object.keys(data).length
        total_urban = total_urban/Object.keys(data).length
        total_rural = total_rural/Object.keys(data).length
        gen_group = gen_group/Object.keys(data).length
        sc_group = sc_group/Object.keys(data).length
        st_group = st_group/Object.keys(data).length
        obc_group = obc_group/Object.keys(data).length
        cent_gov = cent_gov/Object.keys(data).length
        gov_aided = gov_aided/Object.keys(data).length
        priv = priv/Object.keys(data).length
        gov = gov/Object.keys(data).length
        
        $('#participation_school').html(total_school)
        $('#participation_teachers').html(total_teacher)
        $('#participation_students').html(total_student)
        $('#paricipation_gender_male').html(total_male)
        $('#paricipation_gender_female').html(total_female)
        $('#participation_rural').html(total_urban)
        $('#participation_urban').html(total_rural)

        const doughnutChart = {
          gov: gov,
          private: priv,
          govt_aided: gov_aided,
          cent_gov: cent_gov,
        }
        const barChart = {
          gen: gen_group,
          sc:sc_group,
          st:st_group,
          obc:obc_group
        }
        createManagementPieChart(doughnutChart)
        createSocialBarGraph(barChart)
      }
    }else{
      console.log('no data ')
    }
  }


  function setBreadCrumb(active){
    let items = ['state','national','district']
    items.map(item=>{
      if(item === active){
        $('#'+item+'-tab').addClass('active')
        $('#'+item+'_geography').removeAttr('style')
      }else{
        $('#'+item+'-tab').removeClass('active')
        $('#'+item+'_geography').attr('style','display:none')

      }
    })
  }
  