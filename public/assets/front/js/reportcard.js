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
  class_10:['Mil','Social','English','Science','Math'],
  class_all:['Mil','Social','English','Science','Math','Language','Evs']
}

let subjects_short_codes ={
  math:"math",
  evs:"evs",
  social:'sst',
  language:'language',
  mil:'mil',
  science:'sci',
  english:'eng'
}

let screens = ['information','participation','performance','learning','feedback']

$(document).ready(()=>{
    $.ajax({
      type: "GET",
      url: api_url + 'state_masters?limit-1&sort[]=state_name',
    }).done((response)=>{
       createSidebarStates(response.data)
       sessionStorage.setItem('states',JSON.stringify(response.data))
    });
    setScreen(screenType)
    setClass(classType)

    already_active_state = JSON.parse(sessionStorage.getItem('activeState'))
    already_active_district = JSON.parse(sessionStorage.getItem('activeDistrict'))

  });

  async function createColumnChart(where,data){
     await Highcharts.chart(where, {
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
  function createSocialBarGraph(bar,colors){
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
                color: colors.sc
              },
              {
                name: "OBC",
                y: bar.obc,
                color: colors.obc
              },
              {
                name: "ST",
                y: bar.st,
                color: colors.st
              },
              {
                name: "General",
                y: bar.gen,
                color: colors.gen
              }
            ]
          }
        ],
      });
  }

// create donought chart with data
  function createManagementPieChart(chart,colors){
    Highcharts.chart('managementPieGraph_class'+classType,  {
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
                format: '{point.percentage} %',
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
          color: colors.gov
        }, {
          name: 'Govt. Aided',
          y: chart.gov_aided,
          z: 100,
          color: colors.gov_aided
        }, {
          name: 'Private',
          y: chart.private,
          z: 100,
          color: colors.private
        }, {
          name: 'Central Govt.',
          y: chart.cent_gov,
          z: 100,
          color: colors.cent_gov
        }]
      }]
    });
  }

  async function createSidebarStates(data){
    let state_list = "<div class='mb-3' style='margin-right:20px;'><input type='text' class='form-control' id='input_state_filter' onkeyup='filterList(0,state)' placeholder='Search for state'></div><ul id='state_list_national'>"
    let district_data = []

    await $.ajax({
      type: "GET",
      url: api_url + 'district_masters?limit=-1',
    }).done(response=>{
      district_data = response.data
      sessionStorage.setItem('districts',JSON.stringify(response.data))
    });

    await data.map(state=>{

      state_list += '<li class="national_states" id="state_no'+state.udise_state_code+'"><a href="javascript:void(0)" class="national_state_list" onClick ="toggleDistrictList('+state.udise_state_code+',true,'+state.udise_state_code+')" id="showDistrict'+state.udise_state_code +'" ><span class="material-icons-round radio_checked"> radio_button_checked </span><span class="material-icons-round radio_unchecked"> radio_button_unchecked </span>'+ state.state_name +'</a>'
      const filteredDistrict = district_data.filter(district=>{
        if(district.udise_state_code === state.udise_state_code)
        return district
      })
      // console.log(filteredDistrict)

      state_list += '<div class="district-list" id="state_'+ state.udise_state_code +'"><div class="d-flex align-items-center justify-content-between pb-15"><h2>'+ state.state_name +'</h2><button class="close-btn" id="close_btn" onClick="toggleDistrictList('+state.udise_state_code+',false)"><span class="material-icons-round">highlight_off</span></button></div><ul id="district_'+state.udise_state_code+'_list">'
      state_list +=  createDistrictForStates(filteredDistrict,state.state_name,state.udise_state_code)
      state_list += '</ul></div>'
      state_list += '</li>'
    })
    state_list +="</ul>"
    document.getElementById('all-state-list').innerHTML = state_list

    if(already_active_district !== null) {

      chageDataWithFilter('global_filter','district')
      setBreadCrumb('district')
      toggleDistrictList(already_active_state.udise_state_code,true)
      toggleActiveDistrict(already_active_district.udise_district_code,true)
    }
    else if(already_active_state !== null) {

      chageDataWithFilter('global_filter','state')
      setBreadCrumb('state')
      toggleDistrictList(already_active_state.udise_state_code,true)
    }
    else{
      setBreadCrumb('national')
    }
  }


  function createDistrictForStates(data,state_name,state_id){
    let district_list = "<div class='mb-3' style='margin-right:20px;'><input type='text' class='form-control' id='input_state_"+state_id+"' onkeyup='filterList("+state_id+",district)' placeholder='Search for district' title='Type in a name'></div>"
    data.map(district=>{
      district_list +='<li class="state_'+state_id+'_districts"><a href="javascript:void(0)" class="districts" id="district_'+district.udise_district_code+'" onClick="setActiveStateDistrict('+ district.udise_state_code+','+district.udise_district_code+')">' +format_string(district.district_name) +'</a></li>'
    })
    return district_list
  }


  function toggleDistrictList(state_id,value,from_where=""){
    if(value){
      makeStateActive(state_id)
      if(from_where !== ''){
        removeItem('activeDistrict')
        activeDistrict = ''
      }
      if(activeDistrict !== null && typeof activeDistrict !== 'undefined' && activeDistrict !== ''){
        setBreadCrumb('district')
        $('#sidebar_active_district').html(activeDistrict.district_name)
        setInformation()
      }else{
        activeDistrict = ''
        setBreadCrumb('state')
        $('#sidebar_active_state').html(activeState.state_name)
        setInformation()
      }
      $('#state_'+ state_id +'').addClass("active");
      $('.national_state_list').removeClass('active')
      $('#showDistrict'+state_id).addClass("active")

    }else{
      if(from_where !== ''){
        $('.national_state_list').removeClass('active')
      }
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
        if(screen_type === 'feedback' || screen_type === 'information'){
          // setInformation()
          $('#'+screen_type+'_class3').addClass('show active')
        }else{
          $('#'+screen_type+'_class'+grade+'').removeClass('show active')
        }
      }
    })

    $('#'+screen_type+'-tab').addClass('active')
    $('#'+screen_type+'_class'+classType+'').addClass('show active')

    changePageDataViaSideFilter('all')
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
          $('#active_state').html(activeState.state_name)
          $('#sidebar_active_state').html(activeState.state_name)
          toggleActiveDistrict(activeDistrict.udise_district_code,false)
          removeItem('activeDistrict')
        }
      }
      if(value === 'national'){
        toggleDistrictList(activeState.udise_state_code,false,'global_filter')
        removeItem('activeState')
        removeItem('activeDistrict')
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
          toggleDistrictList(activeDistrict.udise_state_code,true)
          toggleActiveDistrict(activeDistrict.udise_district_code,true)
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
      filters = {...filters , state: activeState.udise_state_code}
    }
    if(activeDistrict !== ''){
      filters = {...filters ,district: activeDistrict.udise_district_code}
    }
    if(classType !== ''){
      if(classType !== 'all'){
        if(screenType !== 'information' && screenType !== 'feedback'){
          filters = {... filters,class: classType}
        }
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
    if(screenType === 'feedback'){
      data = JSON.parse(sessionStorage.getItem('feedback_data'))
    }
    if(screenType === 'information'){
      data = JSON.parse(sessionStorage.getItem('information_data'))
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
            if(screenType !== 'information'){
              if(parseInt(par.state_id) === val){
                count +=1
              }
            }else{
              if(parseInt(par.udise_state_code) === val){
                count +=1
              }
            }
          }
          if(key === 'district'){
            if(screenType !== 'information'){
              if(parseInt(par.district_id) === val){
                count +=1
              }
            }else{
              if(parseInt(par.udise_district_code) === val){
                count +=1
              }
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
      table = 'performance_master'
    }
    if(screenType === 'learning'){
      table ='district_grade_level_learningoutcome'
    }
    if(screenType === 'feedback'){
      table ='pq_district_level_feedback'
    }
    if(screenType === 'information'){
      table = 'district_masters'
    }

    await $.ajax({
      type: "GET",
      url: api_url + table + '?limit=-1',
      beforeSend: () =>{
        $('#loader').show()
      },
      complete: ()=>{
        $('#loader').hide()
      },
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
      if(screenType === 'feedback'){
        sessionStorage.setItem('feedback_data',JSON.stringify(res.data))
      }
      if(screenType === 'information'){
        sessionStorage.setItem('information_data',JSON.stringify(res.data))
      }
    });
    setInformation()
  }

  function setActiveStateDistrict(state_id,district_id){

    setBreadCrumb('district')
    makeStateActive(state_id)
    makeDistrictActive(district_id)

    $('#active_state').html(activeState.state_name)
    $('#active_district').html(activeDistrict.district_name)

    toggleActiveDistrict(activeDistrict.udise_district_code,true)
    setInformation()
  }

  function updateData(data){
    if(typeof data !== 'undefined'){
      if(screenType === 'information'){
        createInformationScreen(data)
      }
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
        
        $('#participation_school_class'+classType).html(total_school.toFixed(0))
        $('#participation_teachers_class'+classType).html(total_teacher.toFixed(0))
        $('#participation_students_class'+classType).html(total_student.toFixed(0))
        $('#paricipation_gender_male_class'+classType).html(total_male.toFixed(0) + '%')
        $('#paricipation_gender_female_class'+classType).html(total_female.toFixed(0) + '%')
        $('#participation_rural_class'+classType).html(total_urban.toFixed(0) + '%')
        $('#participation_urban_class'+classType).html(total_rural.toFixed(0) + '%')

        const doughnutChart = {
          gov: parserInt(gov.toFixed(0)),
          private: parserInt(priv.toFixed(0)),
          gov_aided: parserInt(gov_aided.toFixed(0)),
          cent_gov: parserInt(cent_gov.toFixed(0)),
        }
        const barChart = {
          gen: parserInt(gen_group.toFixed(0)),
          sc:parserInt(sc_group.toFixed(0)),
          st:parserInt(st_group.toFixed(0)),
          obc:parserInt(obc_group.toFixed(0))
        }

        const doughnutChartColors ={
          class_all:{
            gov:"#75A9D9",
            private:"#CAC55F",
            gov_aided:"#E9769F",
            cent_gov:"#3CACAE",
          },
          class_10:{
            gov:"#3CACAE",
            private:"#72B562",
            gov_aided:"#EB6C69",
            cent_gov:"#E9769F",
          },
          class_8:{
            gov:"#75A9D9",
            private:"#72B562",
            gov_aided:"#E9769F",
            cent_gov:"#3CACAE",
          },
          class_3:{
            gov:"#75A9D9",
            private:"#CAC55F",
            gov_aided:"#E9769F",
            cent_gov:"#4CAF50",
          },
          class_5:{
            gov:"#75A9D9",
            private:"#E9769F",
            gov_aided:"#CAC55F",
            cent_gov:"#4CAF50",
          },
          
        }

        const barChartColors ={
          class_3:{
            sc:'#75A9D9',
            obc:'#E9769F',
            st:'#CAC55F',
            gen:'#4CAF50'
          },
          class_5:{
            sc:'#75A9D9',
            obc:'#E9769F',
            st:'#CAC55F',
            gen:'#4CAF50'
          },
          class_8:{
            sc:'#72B562',
            obc:'#E9769F',
            st:'#3CACAE',
            gen:'#75A9D9'
          },
          class_10:{
            sc:'#3CACAE',
            obc:'#EB6C69',
            st:'#72B562',
            gen:'#E9769F'
          },
          class_all:{
            sc:'#3CACAE',
            obc:'#EB6C69',
            st:'#72B562',
            gen:'#E9769F'
          },
        }
        createManagementPieChart(doughnutChart,doughnutChartColors['class_'+classType])
        createSocialBarGraph(barChart,barChartColors['class_'+classType])
      }
      if(screenType === 'performance'){
        try{
          let empty =  false
          if(data.length === 0){
            empty = true
          }else{
            empty = false
          }
          if(!empty){
            data.forEach(performance=>{
              createPerformanceScreen(performance,empty)
            })
          }else{
            grades.forEach(grade=>{
              const sample_data = {grade: grade}
              if(grade !== 'all'){
                createPerformanceScreen(sample_data,empty)
              }
            })  
          }
        }catch(e){
          console.log(e)
        }finally{
        }
 
      }
      if(screenType === 'learning'){
        const all_subjects = class_subjects['class_all']
        all_subjects.forEach(subject => {
          if(classType === 'all'){
            grades.forEach(grade=>{
              if(grade !== 'all'){
                $('.'+subject.toLowerCase()+'_lo'+grade+'_class'+classType).empty()
              }
            })
          }else{
            $('.'+subject.toLowerCase()+'_lo_class'+classType).empty()

          }
        });  

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
            if(classType === 'all'){
              $('.language_lo'+ lo.grade +'_class'+classType).append(getOutcomeRow(lo,classStyle));

            }else{
              $('.language_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
            }
          }
          if(lo.language === 'M'){

            count_object.math += 1
            if(count_object.math > 0 && count_object.math % 2 === 0){
              classStyle = 'light-pink'
            }
            else{
              classStyle = ''
            }
            if(classType === 'all'){
              $('.math_lo'+ lo.grade +'_class'+classType).append(getOutcomeRow(lo,classStyle));

            }else{
              $('.math_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
            }
          }
          if(lo.language === 'EVS'){

            count_object.evs += 1
            if(count_object.evs >0 && count_object.evs % 2 === 0){
              classStyle = 'light-yellow'
            }else{
              classStyle = ''
            }

            if(classType === 'all'){
              $('.evs_lo'+ lo.grade +'_class'+classType).append(getOutcomeRow(lo,classStyle));

            }else{
              $('.evs_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
            }
          }
          if(lo.language === 'SCI'){

            count_object.sci += 1

            if(count_object.sci >0 && count_object.sci % 2 === 0){
              classStyle = 'light-sagegreen'
            }else{
              classStyle = ''
            }

            if(classType === 'all'){
              $('.science_lo'+ lo.grade +'_class'+classType).append(getOutcomeRow(lo,classStyle));

            }else{
              $('.science_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
            }

          }
          if(lo.language === 'SST'){

            count_object.sst += 1
            if(count_object.sst > 0 && count_object.sst %2 == 0){
              classStyle='light-green'
            }
            else{
              classStyle = ''
            }
            if(classType === 'all'){
              $('.social_lo'+ lo.grade +'_class'+classType).append(getOutcomeRow(lo,classStyle));

            }else{
              $('.social_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
            }
          }
          if(lo.language === 'E'){

            count_object.eng += 1
            if(count_object.eng >0 && count_object.eng % 2 === 0){
              classStyle = 'light-purple'
            }else{
              classStyle = ''
            }
            if(classType === 'all'){
              $('.english_lo'+ lo.grade +'_class'+classType).append(getOutcomeRow(lo,classStyle));

            }else{
              $('.english_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
            }
          }

          if(lo.language === 'MIL'){

            count_object.mil += 1
            if(count_object.mil >0 && count_object.mil % 2 === 0){
              classStyle = 'light-red'
            }else{
              classStyle = ''
            }
            if(classType === 'all'){
              $('.mil_lo'+ lo.grade +'_class'+classType).append(getOutcomeRow(lo,classStyle));

            }else{
              $('.mil_lo_class'+classType).append(getOutcomeRow(lo,classStyle));
            }
          }

        })
      }
      if(screenType === 'feedback'){
        $('#feedback_pq_class3').empty()
        $('#feedback_tq_class3').empty()
        $('#feedback_htq_class3').empty()

        data.forEach(fb=>{
          const percentage = Math.round(fb.avg) 
          if(fb.level === 'pq'){
            const pqChart = '<div class="col-lg-3 mb-15"><div class="student-fbcard light-blue-bg"><div class="progressbar-blue"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'%</div></div></div><p class="title">'+fb.question_desc+'</p></div></div>'
            $('#feedback_pq_class3').append(pqChart)
          }
          if(fb.level === 'tq'){
            const tqChart = '<div class="col-md-4 mb-15"><div class="teacher-fbcard light-green-bg"><div class="progressbar-green"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="'+percentage+'" aria-valuemin="0" aria-valuemax="100" style="max-width: '+percentage+'%"><span class="title">'+percentage+'%</span></div></div><p>'+fb.question_desc+'</p></div></div></div>'
            $('#feedback_tq_class3').append(tqChart)
          }
          if(fb.level === 'htq'){
            const htqChart = '<div class="col-md-3 mb-15"><div class="headteacher-fbcard"><div class="progressbar-pink"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'%<p>'+fb.question_desc+'</p></div></div></div></div></div>'
            $('#feedback_htq_class3').append(htqChart)
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
    let row = '<tr class="'+classStyle+'"><td>'+lo.subject_code+'</td><td>'+lo.question+'</td><td>'+parserInt(lo.avg)+'</td><td>'+parseInt(lo.state_avg)+'</td><td>'+parseInt(lo.national_avg)+'</td></tr>'
    return row
  }

  function createPerformanceScreen(data,empty){
    try {
      const all_data = data 

      if(!empty){
        data = JSON.parse(all_data.data)
      }

      let graphs = []

      const sections = ['Location','Gender','SocialGroup','Management']
      
      if(classType === 'all'){
        graphs = class_subjects['class_'+ all_data.grade]
      }else{
        graphs = class_subjects['class_'+classType]
      }

      const entities = {
        boys:'Boys',
        girls:'Girls',
        govt:'Govt.',
        govt_aided:'Govt. Aided',
        private:'Private',
        central_govt:'Central Govt.',
        sc:'SC',
        st:'ST',
        obc:'OBC',
        general:'General',
        urban:'Urban',
        rural:'Rural'

      }   
      const scales= {
        gender: ['boys','girls'],
        management:['govt','govt_aided','private','central_govt'],
        socialgroup:['sc','obc','st','general'],
        location:['rural','urban']
      }
      const colorCode = {
        language: ['#BAD4EC','#9EC2E4','#83B1DD','#6997C3'],
        evs: ['#E5E2AF','#DAD68F','#CFCB6F','#B6B156'],
        math: ['#F4BBCF','#F09FBB','#EB84A8','#D26A8E'],
        social:['#C7E1C0','#ABD3A1','#8FC481','#68A358'],
        science:['#B1DEDF','#8ACDCE','#63BDBE','#369B9D'],
        mil:['#F7C4C3','#F3A6A5','#EF8987','#D4605F'],
        english:['#E8C7E6','#DCACD9','#D190CD','#B168AD'],
      }  
      const demographics = ['national','state','district']

      let cumulative_subject_count = {
        language:{
          district:0,
          state:0,
          national:0
        },
        evs:{
          district:0,
          state:0,
          national:0
        },
        math:{
          district:0,
          state:0,
          national:0
        },
        mil:{
          district:0,
          state:0,
          national:0
        },
        sci:{
          district:0,
          state:0,
          national:0
        },
        sst:{
          district:0,
          state:0,
          national:0
        },
        eng:{
          district:0,
          state:0,
          national:0
        },
      }

      const table_criteria = ['below_basic','basic','proficient','advanced']
      sections.forEach(section => {

        graphs.forEach(sub=>{
          let where = ''
          if(classType !== 'all'){
            where = section + sub +'BarGraph_class' +classType

          }else{
            where = section + sub + all_data.grade +'BarGraph_class'+classType
          }
          const scale = scales[section.toLowerCase()]
          let chart = []

          if(!empty){
            table_criteria.forEach((criteria)=>{
              const table_tupple =  parserInt(data[subjects_short_codes[sub.toLowerCase()]]['performance_level']['district'][criteria])
              const table_where = "peformance_"+ sub +"_"+criteria+"_table_class"+ classType 
              $('#'+table_where).html(table_tupple)
            })
          }

          demographics.forEach(demo => {

            if(classType === 'all'){
              if(!empty){
                cumulative_subject_count[subjects_short_codes[sub.toLowerCase()]][demo] += parserInt(data[subjects_short_codes[sub.toLowerCase()]]['cards'][demo])
              }
            }else{
              const card_where = screenType + '_' + subjects_short_codes[sub.toLowerCase()] + '_' + demo + '_class' + classType
              let cardData = 0
              if(!empty){
                cardData = parserInt(data[subjects_short_codes[sub.toLowerCase()]]['cards'][demo])
              }
              updateCards(card_where,cardData)
            }
          });

          scale.forEach((element,index) => {
            const color =  colorCode[sub.toLowerCase()]
            let chart_data = []
            demographics.forEach(demo => {
              let dataToShow = 0
              if(empty){
                dataToShow = 0
              }else{
                dataToShow = parserInt(data[subjects_short_codes[sub.toLowerCase()]][section.toLowerCase()][demo][element])
              }
              chart_data.push(dataToShow)
            });
            const item = {
              color: color[index],
              data:chart_data,
              name: entities[element] 
            }
            chart.push(item)
          });
          
          createColumnChart(where,chart)

        })
        
      });
      if(classType === 'all'){
        Object.keys(cumulative_subject_count).forEach(key => {
          let subject  = key
          demographics.forEach(demo => {
            const where = screenType + '_' + subject + '_' + demo + '_class' + classType
            const val =cumulative_subject_count[subject][demo]
            updateCards(where,val)
          })
        })
      }
    }catch(e){
      console.log(e)
    }finally{
    }

  }

  function updateCards(cardPosition,data){
    $('#'+cardPosition).html(data)
  }

  function createInformationScreen(data){
    // const dataToShow = data.pop()
    if(activeState === '' || activeDistrict === ''){
      alert('please select state and district')
      // setScreen('participation')
      return
    }
    const dataToShow = activeDistrict
    let state_name = ''
    if(activeState.state_name === 'Delhi'){
      state_name = 'nct of delhi'
    }else{
      state_name = activeState.state_name
    }

    const selectedMapData = DISTRICT_MAPS.find(data=> data.name === state_name.toUpperCase())
    const prefix = 'information_district_'
    const where = prefix + 'map'

    $('.information_state_name').html(format_string(activeState.state_name))
    $('.'+prefix+'name').html(format_string(activeDistrict.district_name))
    $('#'+prefix +'area_class'+classType).html(parserInt(dataToShow.total_district_area))
    $('#'+prefix +'description_class'+classType).html(dataToShow.description)
    $('#'+prefix +'population_class'+classType ).html(parserInt(dataToShow.total_population))
    $('#'+prefix+'rural_class'+classType ).html(parserInt(dataToShow.rural_population))
    $('#'+prefix+'urban_class'+classType ).html(parserInt(dataToShow.urban_population))
    $('#'+prefix + 'density_class'+classType ).html(parserInt(dataToShow.density_of_population))
    $('#'+prefix +'literacy_class'+classType ).html(parserInt(dataToShow.literacy_rate))
    $('#'+prefix +'sex_ratio_class'+classType ).html(parserInt(dataToShow.child_sex_ratio))
    $('#'+prefix +'total_school_class'+classType ).html(parserInt(dataToShow.no_of_schools))
    $('#'+prefix + 'state_school_class'+classType ).html(parserInt(dataToShow.state_govt_schools))
    $('#'+prefix +'govt_aided_school_class'+classType ).html(parserInt(dataToShow.govt_aided_schools))
    $('#'+prefix + 'govt_school_class'+classType ).html(parserInt(dataToShow.state_govt_schools))
    $('#'+prefix+'private_school_class'+classType ).html(parserInt(dataToShow.private_unaided_reco_schools))
    $('#'+prefix +'state_teacher_class'+classType ).html(parserInt(dataToShow.teacher_state_govt_schools))
    $('#'+prefix + 'govt_teacher_class'+classType ).html(parserInt(dataToShow.teacher_state_govt_schools))
    $('#'+prefix + 'govt_aided_teacher_class'+classType ).html(parserInt(dataToShow.teacher_govt_aided_schools))
    $('#'+prefix + 'private_teacher_class'+classType ).html(parserInt(dataToShow.teacher_private_unaided_reco_schools))

    createChart(where,selectedMapData)

  }

  function createChart(where,data){
    data.data[0].data.forEach((item)=>{
      // if(item.id=='1007'){
        item.color="#9ec2e4";
        item.borderColor="#6e6f70";
        item.states.hover.color="#f7941c";
      // }
    })
    Highcharts.mapChart(where,{
      chart:{
        backgroundColor: 'transparent',
      },
      title: {
          text: data.name
      },
      legend: {
        enabled: false
      },
      credits: {
        enabled: false
      },
      series:data.data,
      tooltip: { 
        enabled: true 
      },
      navigation: {
          buttonOptions: {
              enabled: false
          }
      }

    })
  }

  function filterList(state_id,type){
    let ul = []
    let li = []
    let filter = ''

    if(type === district){
      filter = $('#input_state_'+state_id).val().toLowerCase()
      ul = document.getElementById('district_'+state_id+'_list')
      li = ul.getElementsByClassName('state_'+state_id+'_districts')
    }
    else{
      filter = $('#input_state_filter').val().toLowerCase()
      ul = document.getElementById('state_list_national')
      li = ul.getElementsByClassName('national_states')
    }
    for (i = 0; i < li.length; i++) {
      let txtValue = ''
      if(type === district){
        const a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
      }else{
       const a = li[i].getElementsByTagName("a")[0]
        txtValue = a.textContent || a.innerText;
        txtValue = txtValue.replace('radio_button_checked','')
        txtValue = txtValue.replace('radio_button_unchecked','')
      }
      if (txtValue.toLowerCase().indexOf(filter) > -1) {
          li[i].style.display = "";
      } else {
          li[i].style.display = "none";
      }
    } 

  }

  function makeStateActive(state_id){
    const all_states = JSON.parse(sessionStorage.getItem('states'))

    activeState =all_states.filter(state=>{
      if(state.udise_state_code === parseInt(state_id))
      return state
    }).pop()

    sessionStorage.setItem('activeState',JSON.stringify(activeState)) 

  }

  function makeDistrictActive(district_id){
    const all_districts = JSON.parse(sessionStorage.getItem('districts'))

    activeDistrict = all_districts.filter(district =>{
      if(district.udise_district_code === district_id)
      return district
    }).pop()

    sessionStorage.setItem('activeDistrict',JSON.stringify(activeDistrict)) 

  }

  function removeItem(item){
    sessionStorage.removeItem(item)
  }