let screenType;
let classType = '3';
let activeState = '';
let activeDistrict ='';
let grades = ['3','5','8','10','all']
let already_active_state = null
let already_active_district = null
let class_subjects = {
  class_3:['Language','Evs','Math'],
  class_5:['Language','Evs','Math'],
  class_8:['Language','Science','Math','Social'],
  class_10:['Language','Evs','Math'],
  class_all:['Language','Evs','Math']
}

$(document).ready(()=>{
    $.ajax({
      type: "GET",
      url: api_url + 'state_masters?limit-1',
    }).done((response)=>{
       createSidebarStates(response.data)
       sessionStorage.setItem('states',JSON.stringify(response.data))
    });
    setScreen(screenType)
    setClass(classType)

    already_active_state = JSON.parse(sessionStorage.getItem('activeState'))
    already_active_district = JSON.parse(sessionStorage.getItem('activeDistrict'))

  });

  function createColumnChart(where,data){
    console.log(data)
    Highcharts.chart(where, {
      chart: {
        backgroundColor: 'transparent',
        height: 300,
        type: 'column',
      },
      title: {
        text: ''
      },
      
      xAxis: {
        categories: [
          'District',
          'State',
          'National'
        ],
        crosshair: true
      },
      yAxis: {
        min: 0,
        title: false
      },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}%</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
      },
      plotOptions: {
        column: {
          pointPadding: 0.1,
          borderWidth: 0
        },
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        }
      },
      series: data
    });

  }

  function setClass(value){
    if(classType === ''){
      $('#current_class').html('All Classes')
    }else{
      $('#current_class').html(classType)
    }
  }
// create bar graph with data
  function createSocialBarGraph(bar){
    Highcharts.chart('socialBarGraph_class'+classType, {
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

    Highcharts.chart('managementPieGraph_class'+classType, {
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
    });

    await data.map(state=>{

      state_list += '<li><a href="javascript:void(0)" class="active" onClick ="toggleDistrictList('+state.state_id+',true)" id="showDistrict'+state.state_id +'" ><span class="material-icons-round radio_checked"> radio_button_checked </span><span class="material-icons-round radio_unchecked">radio_button_unchecked</span>'+ state.state_name +'</a>'
      const filteredDistrict = district_data.filter(district=>{
        if(district.state_id === state.state_id)
        return district
      })

      state_list += '<div class="district-list" id="state_'+ state.state_id +'"><div class="d-flex align-items-center justify-content-between pb-15"><h2>'+ state.state_name +'</h2><button class="close-btn" id="close_btn" onClick="toggleDistrictList('+state.state_id+',false)"><span class="material-icons-round">highlight_off</span></button></div><ul>'
      state_list +=  createDistrictForStates(filteredDistrict,state.state_name,state.state_id)
      state_list += '</ul></div>'
      state_list += '</li>'
    })
    state_list +="</ul>"
    document.getElementById('all-state-list').innerHTML = state_list

    if(already_active_district !== null) {
      chageDataWithFilter('global_filter','district')
      setBreadCrumb('district')
      toggleDistrictList(already_active_state.state_id,true)
      toggleActiveDistrict(already_active_district.district_id,true)
    }
    else if(already_active_state !== null) {
      chageDataWithFilter('global_filter','state')
      setBreadCrumb('state')
      toggleDistrictList(already_active_state.state_id,true)
    }
    else{
      setBreadCrumb('national')
    }
  }


  function createDistrictForStates(data){
    let district_list = ''
    data.map(district=>{
      district_list +='<li><a href="javascript:void(0)" class="districts" id="district_'+district.district_id+'" onClick="setActiveStateDistrict('+ district.state_id+','+district.district_id+')">' +format_string(district.district_name) +'</a></li>'
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
    if(screenType !== screen_type){
      grades.forEach(grade=>{
          $('#'+screenType+'_class'+grade+'').removeClass('show active')
      })
      screenType = screen_type
      getData()
    }
    grades.forEach(grade=>{
      if(grade === classType){
        $('#'+screen_type+'_class'+grade+'').addClass('show active')
      }else{
        $('#'+screen_type+'_class'+grade+'').removeClass('show active')
      }
    })

    $('#'+screen_type+'-tab').addClass('active')
    $('#'+screen_type+'_class'+classType+'').addClass('show active')

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
      setScreen(screenType)
      setInformation()
      changePageDataViaSideFilter('all')
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
          $('#sidebar_active_state').html(activeState.state_name)
          toggleActiveDistrict(activeDistrict.district_id,false)

        }
      }
      if(value === 'national'){
        toggleDistrictList(activeState.state_id,false)
        sessionStorage.removeItem('activeState')
        sessionStorage.removeItem('activeDistrict')
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
      console.log('hoo')
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
      section += value+ '_section_'+ screenType +'_class' + classType
    }else{
      section = ''
    }
    if(section === ''){
      availableSections.forEach(sec=>{
        $('#'+sec+'_section_'+screenType+'_class'+classType).removeAttr('style')
        $('#'+sec+'_section_'+screenType+'_class'+classType).removeClass('no-border')
      })
    }else{
      const filteredSections = availableSections.filter(sec=>{
        const temp_name = sec + '_section_' + screenType +'_class' + classType
        if(section !== temp_name){
          return sec
        }
      })

      $('#'+section+'').removeAttr('style')
      // $('#'+section +'').removeClass('col-md-6')
      $('#'+section +'').addClass('no-border')
      filteredSections.forEach(sec =>{
        $('#'+sec+'_section_'+screenType+'_class'+classType).attr('style','display:none;')
      })
    }
  }

  function setInformation(){
    let filters = {};
    let data = []
    if(activeState !== ''){
      filters = {...filters , state: activeState.state_id}
    }
    if(activeDistrict !== ''){
      filters = {...filters ,district: activeDistrict.district_id}
    }
    if(classType !== ''){
      if(classType !== 'all'){
        filters = {... filters,class: classType}
      }
    }

    console.log(filters)
    if(screenType === 'participation'){
      data = JSON.parse(sessionStorage.getItem('participation_data'))
    }
    if(screenType === 'performance'){
      data = JSON.parse(sessionStorage.getItem('performance_data'))
    }
    if(screenType === 'learning'){
      data = JSON.parse(sessionStorage.getItem('learning_data'))
    }
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
    updateData(filteredData)
  }

  async function getData(){
    console.log(screenType)
    let table = ''
    if(screenType === 'participation' || typeof screenType === 'undefined'){
      table = 'all_grade_participation_tbl'
    }
    if(screenType === 'performance'){
      table = 'district_grade_level_performance'
    }
    if(screenType === 'learning'){
      table ='district_grade_level_learningoutcome'
    }

    await $.ajax({
      type: "GET",
      url: api_url + table + '?limit=-1',
    }).done(res=>{
      if(screenType === 'participation'){
        sessionStorage.setItem('participation_data',JSON.stringify(res.data))
      }
      if(screenType === 'performance'){
        sessionStorage.setItem('performance_data',JSON.stringify(res.data))
      }
      if(screenType === 'learning'){
        sessionStorage.setItem('learning_data',JSON.stringify(res.data))
      }
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
    toggleActiveDistrict(activeDistrict.district_id,true)
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

        total_female = total_female > 0 ? total_female/Object.keys(data).length : 0
        total_male = total_male > 0 ? total_male/Object.keys(data).length  : 0
        total_urban = total_urban > 0 ? total_urban/Object.keys(data).length : 0
        total_rural = total_rural > 0 ? total_rural/Object.keys(data).length : 0
        gen_group = gen_group > 0 ? gen_group/Object.keys(data).length : 0
        sc_group = sc_group > 0 ? sc_group/Object.keys(data).length : 0
        st_group = st_group > 0 ? st_group/Object.keys(data).length : 0
        obc_group = obc_group > 0 ? obc_group/Object.keys(data).length : 0
        cent_gov = cent_gov > 0 ? cent_gov/Object.keys(data).length : 0
        gov_aided = gov_aided > 0 ? gov_aided/Object.keys(data).length : 0
        priv = priv > 0 ? priv/Object.keys(data).length : 0
        gov = gov > 0 ? gov/Object.keys(data).length : 0
        
        $('#participation_school_class'+classType).html(total_school)
        $('#participation_teachers_class'+classType).html(total_teacher)
        $('#participation_students_class'+classType).html(total_student)
        $('#paricipation_gender_male_class'+classType).html(total_male + '%')
        $('#paricipation_gender_female_class'+classType).html(total_female + '%')
        $('#participation_rural_class'+classType).html(total_urban + '%')
        $('#participation_urban_class'+classType).html(total_rural + '%')

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
      if(screenType === 'performance'){
        createCharts()
        console.log(data)
      }
      if(screenType === 'learning'){
        // if(data.length === 0){
          $('.language_lo_class'+classType).empty();
          $('.math_lo_class'+classType).empty();
          $('.evs_lo_class'+classType).empty();
          $('.sci_lo_class'+classType).empty();
          $('.sst_lo_class'+classType).empty();
          $('.mil_lo_class'+classType).empty();

        // }
        console.log(data)

        let count_object = {
          language:0,
          evs:0,
          sst:0,
          sci:0,
          math:0,
          mil:0,
          eng:0, 
        }
        data.forEach(lo=>{
          let classStyle = ''
          if(lo.language === 'L'){
            count_object.language +=1
            if(count_object.language > 0 && count_object.language %2 === 0){
              classStyle = 'light-blue'
            }else{
              classStyle = ''
            }
            $('.language_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
          }
          if(lo.language === 'M'){
            count_object.math += 1
            if(count_object.math > 0 && count_object.math % 2 === 0){
              classStyle = 'light-pink'
            }
            else{
              classStyle = ''
            }
            $('.math_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
          }
          if(lo.language === 'EVS'){
            count_object.evs += 1
            if(count_object.evs >0 && count_object.evs % 2 === 0){
              classStyle = 'light-yellow'
            }else{
              classStyle = ''
            }
            $('.evs_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
          }
          if(lo.language === 'SCI'){
            count_object.sci += 1

            if(count_object.sci >0 && count_object.sci % 2 === 0){
              classStyle = 'light-sagegreen'
            }else{
              classStyle = ''
            }

            $('.science_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
          }
          if(lo.language === 'SST'){
            count_object.sst += 1
            if(count_object.sst > 0 && count_object.sst %2 == 0){
              classStyle='light-green'
            }
            else{
              classStyle = ''
            }
            $('.social_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
          }
          if(lo.language === 'E'){
            count_object.eng += 1
            if(count_object.eng >0 && count_object.eng % 2 === 0){
              classStyle = 'light-purple'
            }else{
              classStyle = ''
            }
            $('.eng_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
          }

          if(lo.language === 'MIL'){
            count_object.mil += 1
            if(count_object.mil >0 && count_object.mil % 2 === 0){
              classStyle = 'light-red'
            }else{
              classStyle = ''
            }
            $('.mil_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
          }

        })
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
  
  function format_string(str){
    const formatted_string = str.split(' ').map((word,index) =>{
      return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase()
    }).join(' ')
    return formatted_string
  }

  function createCharts(data){
    console.log(data)
    const sections = ['Location','Gender','Social','Management']
    const graphs = class_subjects['class_'+classType]
    console.log(graphs)
    const entities = {
      gender: ['Boys','Girls'],
      management:['Govt.','Govt. Aided','Private','Central Govt.'],
      social:['SC','OBC','ST','General'],
      location:['Rural','Urban']
    }

    let dataList = {}
    sections.forEach(section =>{
      let temp_data = {}
      graphs.map(sub => {
        temp_data = {... temp_data ,[sub.toLowerCase()]:[10,10,10]}
      })
      dataList[section.toLowerCase()] = temp_data

    })
    // console.log(dataList)
    // return
    
    const colorCode = {
      language: ['#BAD4EC','#9EC2E4','#83B1DD','#6997C3'],
      evs: ['#E5E2AF','#DAD68F','#CFCB6F','#B6B156'],
      math: ['#F4BBCF','#F09FBB','#EB84A8','#D26A8E'],
      social:['#C7E1C0','#ABD3A1','#8FC481','#68A358'],
      science:['#B1DEDF','#8ACDCE','#63BDBE','#369B9D']
    }  

    sections.forEach(section => {
      graphs.forEach(sub=>{
        const where = section + sub +'BarGraph_class'+classType
        let data = []
        const items = entities[section.toLowerCase()]
        items.forEach((element,index) => {
          const color =  colorCode[sub.toLowerCase()]
          const dataToShow = dataList[section.toLowerCase()]
          const item = {
            color: color[index],
            data:dataToShow[sub.toLowerCase()],
            name: element 
          }
          data.push(item)
        });
        console.log(where)
        createColumnChart(where,data)
      })
      
    });
  }

  function toggleActiveDistrict(district_id,value){
    if(value){
      $('.districts').removeClass('active')
      $('#district_'+district_id).addClass('active')
    }else{
      $('.districts').removeClass('active')
      $('#district_'+district_id).removeClass('active')
    }
  }

  function getOutcomeRow(lo,classStyle){
    let row = '<tr class="'+classStyle+'"><td>'+lo.subject_code+'</td><td>'+lo.question+'</td><td>'+Math.round(lo.avg)+'</td><td>'+Math.round(lo.state_avg)+'</td><td>'+Math.round(lo.national_avg)+'</td></tr>'
    return row
  }