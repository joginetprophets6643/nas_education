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

let subjects_full_names ={
  math: "Mathematics",
  evs: "EVS",
  sst: "Social Science",
  language: "Language",
  mil: "Mil",
  sci:"Science",
  eng:"English"
}

const colorCode = {
  language: ['#BAD4EC','#9EC2E4','#83B1DD','#6997C3'],
  evs: ['#E5E2AF','#DAD68F','#CFCB6F','#B6B156'],
  math: ['#F4BBCF','#F09FBB','#EB84A8','#D26A8E'],
  sst:['#C7E1C0','#ABD3A1','#8FC481','#68A358'],
  sci:['#B1DEDF','#8ACDCE','#63BDBE','#369B9D'],
  mil:['#F7C4C3','#F3A6A5','#EF8987','#D4605F'],
  eng:['#E8C7E6','#DCACD9','#D190CD','#B168AD'],
}
// legends for column charts
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
  rural:'Rural',
  state_average:'State Average',
  national_average:'National Average',
}   

// geography wise screen
const geography_wise_screen = {
  district:['information','participation','performance','learning','feedback'],
  state:['information','participation','performance','learning','feedback','achievement'],
  national:['information','participation','performance','glimpses','feedback']
}
const category_filter_screen = ['participation','performance','glimpses']

let screens = ['information','participation','performance','learning','feedback','glimpses','achievement']

let selected_geography = ''

$(document).ready(()=>{
    $.ajax({
      type: "GET",
      url: api_url + 'state_masters?limit-1&sort[]=state_name',
    }).done((response)=>{
       createSidebarStates(response.data)
       sessionStorage.setItem('states',JSON.stringify(response.data))
    });
    setClass(classType)
    already_active_state = JSON.parse(sessionStorage.getItem('activeState'))
    already_active_district = JSON.parse(sessionStorage.getItem('activeDistrict'))

  });

// doghnut chart for performance only
  async function createDoghnutChart(where,data,title){
   await Highcharts.chart(where, {
      chart: {
        type: 'variablepie'
      },
      title: {
        text: title,
        align: 'center',
        verticalAlign: 'middle',
        y: 0
      },
      exporting: { enabled: false },
      tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
          '{point.y}%'
      },
      
      plotOptions: {
        variablepie: {
            borderWidth: 0,
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
              enabled: true,
                format: '{point.percentage,.0f}',
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
        innerSize: '50%',
        zMin: 0,
        name: 'Range',
        data: data
      }]

    });
  }

  // column chart for performance only
  async function createColumnChart(where,data,type=''){
    let config = {}
    if(type === ''){
      let categories = []
      if(selected_geography === 'district'){
        categories = [
          'District',
          'State',
          'National'
        ]
      }
  
      if(selected_geography === 'state'){
        categories = [
          'State',
          'National'
        ]
      }
      config['xAxis']= {
        categories: categories,
        crosshair: true
      }
      config['plotOptions'] = {
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
      }
      
    }else{
      config['xAxis'] = {
        type: 'category'
      }
      config['legend'] = { enabled:false }
      config['plotOptions'] = {
        column: {
            pointWidth: 25,
            
          },
          series: {
              borderWidth: 0,
              dataLabels: {
                  enabled: true,
                  format: '{point.y}'
              }
          }
      }
      
    }

    config = {... config,
      chart: {
        backgroundColor: 'transparent',
        height: 300,
        type: 'column',
      },
      title: {
        text: ''
      },
      yAxis: {
        min: 0,
        title: false
      },
      exporting: { enabled: false },
      tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y}%</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
      },
      series: data
    }
    await Highcharts.chart(where,config);

  }

  function setClass(value){
    if(classType === ''){
      $('#current_class').html('All Classes')
    }else{
      $('#current_class').html(classType)
    }
  }

// create bar graph with data for participation only
  function createSocialBarGraph(bar,colors){
    Highcharts.chart('socialBarGraph_class'+classType, {
        chart: {
          type: 'column'
        },
        title: {
          text: ''
        },
        exporting: { enabled: false },    
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

// create donought chart with data for participation only
  function createManagementPieChart(chart,colors){
    Highcharts.chart('managementPieGraph_class'+classType,  {
      chart: {
        type: 'variablepie'
      },
      title: {
        text: ''
      },
      exporting: { enabled: false },
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
                format: '{point.percentage,.1f}',
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

  // sidebar states for report card
  async function createSidebarStates(data){
    let state_list = "<div class='mb-3' style='margin-right:20px;'><input type='text' class='form-control' id='input_state_filter' onkeyup='filterList(0,state)' placeholder='Search for State'></div><ul id='state_list_national'>"
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
      toggleDistrictList(already_active_state.udise_state_code,true)
      toggleActiveDistrict(already_active_district.udise_district_code,true)
    }
    else if(already_active_state !== null) {

      chageDataWithFilter('global_filter','state')
      toggleDistrictList(already_active_state.udise_state_code,true)
    }
    else{
      chageDataWithFilter('global_filter','national')
    }
  }

// sidebar districts for report card
  function createDistrictForStates(data,state_name,state_id){
    let district_list = "<div class='mb-3' style='margin-right:20px;'><input type='text' class='form-control' id='input_state_"+state_id+"' onkeyup='filterList("+state_id+",district)' placeholder='Search for District' title='Type in a name'></div>"
    data.map(district=>{
      district_list +='<li class="state_'+state_id+'_districts"><a href="javascript:void(0)" class="districts" id="district_'+district.udise_district_code+'" onClick="setActiveStateDistrict('+ district.udise_state_code+','+district.udise_district_code+')">' +format_string(district.district_name) +'</a></li>'
    })
    return district_list
  }

//  toggling district lists
  function toggleDistrictList(state_id,value,from_where=""){
    if(value){
      makeStateActive(state_id)
      if(from_where !== ''){
        toggleActiveDistrict(activeDistrict.udise_district_code,false)
        removeItem('activeDistrict')
        activeDistrict = ''
      }
      if(activeDistrict !== null && typeof activeDistrict !== 'undefined' && activeDistrict !== ''){
        setBreadCrumb('district',false)
        $('#sidebar_active_district').html(activeDistrict.district_name)
        setInformation()
      }else{
        activeDistrict = ''
        if(from_where === ''){
          setBreadCrumb('state',false)
          setInformation()
        }else{
          setBreadCrumb('state',true)
        }
        $('#sidebar_active_state').html(activeState.state_name)
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

  //  setting screens for geographies
  async function setScreen(screen_type = 'information', load_data = true){
    const exceptions = ['participation','learning']
    const current_demography = ( selected_geography === 'district' || exceptions.includes(screen_type) ? '' : selected_geography )
    const demographics = ['','state','national']

    // if(category_filter_screen.includes(screen_type)){
    // }else{
    // }
    grades.forEach(grade=>{
      demographics.forEach(demo=>{
        screens.forEach(sc=>{
          $('#'+sc+ demo + '_class'+grade+'').removeClass('show active')
          $('#'+sc+'-tab').removeClass('active')
        })
      })
    })
    screenType = screen_type
    if(load_data){
      await getData()
    }
    grades.forEach(grade=>{
        if(grade === classType){
          $('#'+screen_type+ current_demography +'_class'+grade+'').addClass('show active')
        }else{
          if(screen_type === 'feedback' || screen_type === 'information' || screen_type === 'achievement'){
            $('#'+screen_type+ current_demography +'_class3').addClass('show active')
          }else{
            $('#'+screen_type+ current_demography +'_class'+grade+'').removeClass('show active')
          }
        }
    })

    $('#'+screen_type+'-tab').addClass('active')
    $('#'+screen_type+ current_demography+ '_class'+classType+'').addClass('show active')

    changePageDataViaSideFilter('all')
    if(screenType === 'learning' || screenType === 'feedback'){
      $('.side_list_action').prop('disabled',true)
      $('.side_filter').prop('disabled',true)
    }
  }

// data change via any action
  function chageDataWithFilter(filter_type, value){
    const lastActiveState =JSON.parse(sessionStorage.getItem('activeState'))
    const lastActiveDistrict =JSON.parse(sessionStorage.getItem('activeDistrict'))

    if(filter_type === 'sidebar_filter'){
      manipulateView(value)
    }
    if(filter_type === 'data_filter'){
      classType = value
      setClass()
      setScreen(screenType,false)
      setInformation()
      changePageDataViaSideFilter('all')
    }
    if(filter_type === 'global_filter'){
      setBreadCrumb(value)
      if(value === 'state'){
        // activeDistrict = ''
        // if(typeof lastActiveState === 'undefined' || lastActiveState === null ){
        //   alert('you do not have any active state')
        //   return
        // }
        // else{
          activeState = lastActiveState
          activeDistrict = ''
          $('#active_state').html(activeState.state_name)
          $('#sidebar_active_state').html(activeState.state_name)
          toggleActiveDistrict(activeDistrict.udise_district_code,false)
          removeItem('activeDistrict')
        // }
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
      // setInformation()
    }
  }

// sidebar filters action 
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

//  manipulaing via sidebar filter actions
  function toggleSection(value){
    const exceptions = ['participation','learning']
    const current_demography = ( selected_geography === 'district' || exceptions.includes(screenType) ? '' : selected_geography )
    let section = ''
    let availableSections = ['gender','location','management','social']
    if(value !== 'all'){
      section += value+ current_demography+ '_section_'+ screenType +'_class' + classType
    }else{
      section = ''
    }
    if(section === ''){
      availableSections.forEach(sec=>{
        $('#'+sec+current_demography+'_section_'+screenType+'_class'+classType).removeAttr('style')
        $('#'+sec+current_demography+'_section_'+screenType+'_class'+classType).removeClass('no-border')
      })
    }else{
      const filteredSections = availableSections.filter(sec=>{
        const temp_name = sec + current_demography +  '_section_' + screenType +'_class' + classType
        if(section !== temp_name){
          return sec
        }
      })

      $('#'+section+'').removeAttr('style')
      // $('#'+section +'').removeClass('col-md-6')
      $('#'+section +'').addClass('no-border')
      filteredSections.forEach(sec =>{
        $('#'+sec+current_demography+'_section_'+screenType+'_class'+classType).attr('style','display:none;')
      })
    }
  }

// changing the screen with the data
  async function setInformation(){
    try{
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
          if(screenType !== 'information'){
            filters = {... filters,class: classType}
          }
          if(screenType !== 'feedback'){
            if(selected_geography === 'state'){
              filters = {...filters , class: classType}
            }
          }
        }else{
          if(screenType === 'feedback'){
            filters = {...filters , class: "11"}
          }
        }
      }
  
      console.log(filters)
      if(screenType === 'participation'){
        data = await JSON.parse(sessionStorage.getItem('participation_data'))
      }
      if(screenType === 'performance'){
        data = await JSON.parse(sessionStorage.getItem('performance_data'))
      }
      if(screenType === 'learning'){
        data = await JSON.parse(sessionStorage.getItem('learning_data'))
      }
      if(screenType === 'feedback'){
        data = await JSON.parse(sessionStorage.getItem('feedback_data'))
      }
      if(screenType === 'information'){
        data = await JSON.parse(sessionStorage.getItem('information_data'))
      }
      if(screenType === 'glimpses'){
        data = await JSON.parse(sessionStorage.getItem('glimpses_data'))
      }
      const filteredData = await data.filter(par =>{
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
      await updateData(filteredData)

    }catch(exceptions){
      console.log(exceptions)
    }finally{
    }

  }

  // getting data for screens
  async function getData(){
    const screen_wise_table = {

      information :{
        state: 'state_masters',
        national: 'national_statistic',
        district: 'district_masters',
      },
      performance :{
        state: 'state_grade_level_performance',
        national: 'performance_master',
        district: 'performance_master',
      },
      learning :{
        state: 'district_grade_level_learningoutcome',
        national: 'district_grade_level_learningoutcome',
        district: 'district_grade_level_learningoutcome',
      },
      feedback :{
        state: 'pq_state_level_feedback',
        national: 'pq_national_level_feedback',
        district: 'pq_district_level_feedback',
      },
      participation :{
        state: 'all_grade_participation_tbl',
        national: 'all_grade_participation_tbl',
        district: 'all_grade_participation_tbl',
      },
      glimpses :{
        national: 'national_result_glimpses',
      },
      achievement :{
        state: 'all_grade_participation_tbl',
        national: 'all_grade_participation_tbl',
        district: 'all_grade_participation_tbl',
      }
    }
    let table = ''
    if(typeof screenType === 'undefined'){
       table = screen_wise_table['information'][selected_geography]

    }else{
      table = screen_wise_table[screenType][selected_geography]
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
      if(screenType === 'feedback'){
        sessionStorage.setItem('feedback_data',JSON.stringify(res.data))
      }
      if(screenType === 'information'){
        sessionStorage.setItem('information_data',JSON.stringify(res.data))
      }
      if(screenType === 'glimpses'){
        sessionStorage.setItem('glimpses_data',JSON.stringify(res.data))
      }
      setInformation()
    });
  }

// setting state and district
  function setActiveStateDistrict(state_id,district_id){

    setBreadCrumb('district',true)
    makeStateActive(state_id)
    makeDistrictActive(district_id)

    $('#active_state').html(activeState.state_name)
    $('#active_district').html(activeDistrict.district_name)

    toggleActiveDistrict(activeDistrict.udise_district_code,true)
    // setInformation()
  }

// updating view screenwise
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
            if(selected_geography  === 'national'){
              data = [data.pop()]
            }
            if(classType === 'all'){
              createCumulativeCardsForPerformance(data)
            }
            data.forEach(performance=>{
              createPerformanceScreen(performance,empty)
            })
          }else{
            if(classType === 'all'){
              grades.forEach(grade=>{
                const sample_data = {grade: grade}
                if(grade !== 'all'){
                  createPerformanceScreen(sample_data,empty)
                }
              }) 
              createCumulativeCardsForPerformance([])
            }else{
              createPerformanceScreen({grade: classType},empty)
            }
 
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
        // console.log(data)
        $('.state-header').hide()
        $('.district-header').hide()
        $('.national-header').hide()

        if(selected_geography === 'national'){
          $('.national-header').show()
        }
        else if(selected_geography === 'state'){
          $('.national-header').show()
          $('.state-header').show()
        }else{
          $('.state-header').show()
          $('.district-header').show()
          $('.national-header').show()
        }
        data.forEach(lo=>{
          let classStyle = ''
          if(lo.language === 'language'){

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
          if(lo.language === 'math'){

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
          if(lo.language === 'evs'){

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
          if(lo.language === 'sci'){

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
          if(lo.language === 'sst'){

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
          if(lo.language === 'eng'){

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

          if(lo.language === 'mil'){

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
        const current_demography = ( selected_geography === 'district'  ? '' : selected_geography )

        $('#feedback'+current_demography+'_pq_class3').empty()
        $('#feedback'+current_demography+'_tq_class3').empty()
        $('#feedback'+current_demography+'_htq_class3').empty()
        $('#feedback'+current_demography+'_sq_class3').empty()
        $('#feedback'+current_demography+'_sqn1_class3').empty()
        $('#feedback'+current_demography+'_sqn2_class3').empty()
        $('#feedback'+current_demography+'_sq_class3').empty()
        $('#feedback'+current_demography+'_tqn_class3').empty()

        let countPq2 =1
        let countPq3 =1
        let pq2Average = 0
        let pq3Average = 0
        data.forEach(fb=>{
          const percentage = Math.round(fb.avg) 
          if(fb.level === 'pq'){
            let pqChart = ''
            if(current_demography === 'national'){
              pqChart = '<div class="col-lg-3 mb-15"><div class="student-fbcard light-blue-bg"><div class="progressbar-circle-sm progressbar-blue"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'%</div></div></div><p class="title">'+fb.question_desc+'</p></div></div>'
            }else{
              pqChart = '<div class="col-lg-3 mb-15"><div class="student-fbcard light-blue-bg"><div class="progressbar-circle-sm progressbar-blue"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'%</div></div></div><p class="title">'+fb.question_desc+'</p></div></div>'
            }
            $('#feedback'+current_demography+'_pq_class3').append(pqChart)

          }
          if(fb.level === 'tq'){
            let tqChart = ''
            if(current_demography === 'national'){
              tqChart = '<div class="col-md-4 mb-15"><div class="teacher-fbcard light-green-bg"><div class="progressbar-line progressbar-green"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="'+percentage+'" aria-valuemin="0" aria-valuemax="100" style="max-width: '+percentage+'%"><span class="title">'+percentage+'%</span></div></div><p class="title">'+fb.question_desc+'</p></div></div></div>'
            }else{
              tqChart = '<div class="col-md-4 mb-15"><div class="teacher-fbcard light-green-bg"><div class="progressbar-line progressbar-green"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="'+percentage+'" aria-valuemin="0" aria-valuemax="100" style="max-width: '+percentage+'%"><span class="title">'+percentage+'%</span></div></div><p class="title">'+fb.question_desc+'</p></div></div></div>'
            }
            $('#feedback'+current_demography+'_tq_class3').append(tqChart)
          }
          if(fb.level === 'sq'){
            let htqChart = ''
            if(current_demography === 'national'){
              htqChart = '<div class="col-md-3 mb-15"><div class="headteacher-fbcard"><div class="progressbar-circle-lg progressbar-pink"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'%<p>'+fb.question_desc+'</p></div></div></div></div></div>'
              $('#feedback'+current_demography+'_sq_class3').append(htqChart)
            }else{
              htqChart = '<div class="col-md-3 mb-15"><div class="headteacher-fbcard"><div class="progressbar-circle-lg progressbar-pink"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'%<p>'+fb.question_desc+'</p></div></div></div></div></div>'
              $('#feedback'+current_demography+'_htq_class3').append(htqChart)
            }
          }
          if(fb.level === 'sqn1'){
            let sqn1 = ''
            if(current_demography === 'national'){
              sqn1 = '<div class="col-md-4 mb-15"><div class="teacher-fbcard light-pink-bg"><div class="progressbar-line progressbar-pink"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="'+percentage+'" aria-valuemin="0" aria-valuemax="100" style="max-width: '+percentage+'%"><span class="title">'+percentage+'%</span></div></div><p>'+fb.question_desc+'</p></div></div></div>'
              $('#feedback'+current_demography+'_sqn1_class3').append(sqn1)
            }
          }
          if(fb.level === 'sqn2'){
            let sqn2 = ''
            if(current_demography === 'national'){
              sqn2 = '<div class="col-lg-3 mb-15"><div class="student-fbcard light-pink-bg"><div class="progressbar-circle-sm progressbar-pink"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'%</div></div></div><p class="title">'+fb.question_desc+'</p></div></div>'
              $('#feedback'+current_demography+'_sqn2_class3').append(sqn2)
            }
          }
          if(fb.level === 'pq1'){
            let pq1 = ''
            if(current_demography === 'national'){

            }else{
              pq1 = '<div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'%</div></div>'
            }
            $('#feedback'+current_demography +'_pq1_class3').html(pq1)
          }
          if(fb.level === 'pq2'){
            if(current_demography === '' || current_demography === 'state'){
              const pq2 = '<div class="pendamic-progrssbar-content ptb-15"><div class="progressbar-circle-sm progressbar-pink"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'</div></div></div><p class="title">'+fb.question_desc+'</p></div>'
              $('#feedback'+current_demography +'_pq2_'+countPq2+'_class3').html(pq2)
              countPq2+=1
              pq2Average += percentage
            }
          }
          if(fb.level === 'pq3'){
            if(current_demography === '' || current_demography === 'state'){
              const pq3 = '<div class="pendamic-progrssbar-content ptb-15"><div class="progressbar-circle-sm progressbar-green"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'</div></div></div><p class="title">'+fb.question_desc+'</p></div>'
              $('#feedback'+current_demography +'_pq3_'+countPq3+'_class3').html(pq3)
              countPq3+=1
              pq3Average+=percentage
            }
          }
          if(fb.level === 'tqn'){
            let tqn = ''
            if(current_demography === 'national'){
              tqn = '<div class="col-md-3 mb-15"><div class="headteacher-fbcard"><div class="progressbar-circle-lg progressbar-green"><div class="progress" data-percentage="'+percentage+'"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">'+percentage+'%<p>'+fb.question_desc+'</p></div></div></div></div></div>'
              $('#feedback'+current_demography+'_tqn_class3').append(tqn)
            }
          }
        })

        $('#feedback'+current_demography +'_pq2_average_class3').html(parserInt(pq2Average/4)+ '%')
        $('#feedback'+current_demography +'_pq3_average_class3').html(parserInt(pq3Average/3)+ '%')

      }

      if(screenType === 'glimpses'){
        if(classType === 'all'){
          data.forEach(glimpse=>{
            createGlimpsesScreen([glimpse])
          })
        }else{
          createGlimpsesScreen(data)
        }
      }
    }else{
      console.log('no data ')
    }
  }


  function setBreadCrumb(active,load = true){
    selected_geography = active
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
    if(active === 'state'){
      $('#district-tab').prop('disabled', true);
    }
    if(active === 'national'){
      $('#state-tab').prop('disabled', true);
      $('#district-tab').prop('disabled', true);
    }
    if(active === 'district'){
      items.map(item=>{
        $('#'+item+'-tab').prop('disabled', false);
      })
    }
    showAdditionalTab()
    if(geography_wise_screen[selected_geography].includes(screenType)){
      setScreen(screenType,load)
    }else{
      setScreen('information',true)
    }
  }
  
  // formatting string
  function format_string(str){
    const formatted_string = str.split(' ').map((word,index) =>{
      return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase()
    }).join(' ')
    return formatted_string
  }

// highlighting districts
  function toggleActiveDistrict(district_id,value){
    if(value){
      $('.districts').removeClass('active')
      $('#district_'+district_id).addClass('active')
    }else{
      $('.districts').removeClass('active')
      $('#district_'+district_id).removeClass('active')
    }
  }

// creating rows for learning outcome
  function getOutcomeRow(lo,classStyle){
    let row = ''
    if(selected_geography === 'district'){
      row = '<tr class="'+classStyle+'"><td>'+lo.subject_code+'</td><td>'+(lo.question === '0' ? 'N/A' : lo.question)+'</td><td>'+parserInt(lo.avg)+'</td><td>'+parseInt(lo.state_avg)+'</td><td>'+parseInt(lo.national_avg)+'</td></tr>'
    }
    else if(selected_geography === 'state'){
      row = '<tr class="'+classStyle+'"><td>'+lo.subject_code+'</td><td>'+(lo.question === '0' ? 'N/A' : lo.question)+'</td><td>'+parseInt(lo.state_avg)+'</td><td>'+parseInt(lo.national_avg)+'</td></tr>'
    }else{
      row = '<tr class="'+classStyle+'"><td>'+lo.subject_code+'</td><td>'+(lo.question === '0' ? 'N/A' : lo.question)+'</td><td>'+parseInt(lo.national_avg)+'</td></tr>'
    }
    return row
  }

//  creating preformance screen charts
  function createPerformanceScreen(data,empty){
    const current_demography = ( selected_geography === 'district'  ? '' : selected_geography )
    try {
      const all_data = data 

      // removing district table for state geography
      let state_table =[]
      if(!empty){
        data = JSON.parse(all_data.data)
        if(current_demography === 'state'){
          state_table = data.statedistrictlevelperformance
          delete data.statedistrictlevelperformance
        }
      }

      let graphs = []

      // sections for performance screen
      const sections = ['Location','Gender','SocialGroup','Management']
      
      // getting subjects for classes
      if(classType === 'all'){
        graphs = class_subjects['class_'+ all_data.grade]
      }else{
        graphs = class_subjects['class_'+classType]
      }

      // scales for section column charts
      const scales= {
        gender: ['boys','girls'],
        management:['govt','govt_aided','private','central_govt'],
        socialgroup:['sc','obc','st','general'],
        location:['rural','urban'],
      }
      
      // setting required demography
      let demographics = []
      if(current_demography === ''){
        demographics = ['district','state','national']
      }
      if(current_demography === 'state'){
        demographics = ['state','national']
      }
      if(current_demography === 'national'){
        demographics = ['national']
      }

      // table , pie chart criteria
      const table_criteria = ['below_basic','basic','proficient','advanced']

      let doghnut = {}
      let encounterd = []
      let encounterd_subject = []

      // creating column charts ,cards , table
      sections.forEach(section => {

        graphs.forEach(sub=>{

          let where = ''
          const color =  colorCode[subjects_short_codes[sub.toLowerCase()]]

          if(classType !== 'all'){
            where = section + sub +current_demography+'BarGraph_class' +classType  
          }else{
            where = section + sub + all_data.grade + current_demography  +'BarGraph_class'+classType
          }
          const scale = scales[section.toLowerCase()]
          let chart = []

          // district bottom table
          if(!empty){
            if(current_demography === ''){
              table_criteria.forEach((criteria)=>{
                const table_tupple =  parserInt(data[subjects_short_codes[sub.toLowerCase()]]['performance_level']['district'][criteria])
                const table_where = "peformance_"+ sub +"_"+criteria+"_table_class"+ classType 
                $('#'+table_where).html(table_tupple)
              })
            }
          }

          //  state average chart and district/national average cards except class all
          let state_chart_data = []
          demographics.forEach((demo,index) => {
            if(current_demography === '' || current_demography === 'national'){
              if(classType !== 'all'){
                const card_where = screenType + current_demography + '_' + subjects_short_codes[sub.toLowerCase()] + '_' + demo + '_class' + classType
                let cardData = 0
                if(!empty){
                  cardData = parserInt(data[subjects_short_codes[sub.toLowerCase()]]['cards'][demo])
                }
                updateCards(card_where,cardData)
              }
            }
            if(current_demography === 'state'){
              if(classType !== 'all'){
                const item = {
                  color: color[index+2],
                  y: !empty ? parserInt(data[subjects_short_codes[sub.toLowerCase()]]['cards'][demo]) : 0,
                  name: entities[demo + '_average'] 
                }
                state_chart_data.push(item)
              }
            }
          });

          // state doghnuts, table and card charts
          if(current_demography === 'state'){
            if(!encounterd_subject.includes(subjects_short_codes[sub.toLowerCase()])){
              table_criteria.forEach(criteria=>{
                  if(!encounterd.includes(criteria)){
                    doghnut[criteria] = (!empty ? [data[subjects_short_codes[sub.toLowerCase()]]['performance_level']['state'][criteria]] : [0])
                    encounterd.push(criteria)
                  }
                  else{
                    doghnut[criteria].push((!empty ? data[subjects_short_codes[sub.toLowerCase()]]['performance_level']['state'][criteria] : 0))
                  }
                
              })
              if(classType !== 'all'){
                const card_chart_where = screenType + current_demography + '_' + subjects_short_codes[sub.toLowerCase()] + '_class' + classType
                const final_state_chart_data = [{
                  data:state_chart_data
                }]
                createColumnChart(card_chart_where,final_state_chart_data,'single')
              }
              encounterd_subject.push(subjects_short_codes[sub.toLowerCase()])
            }
          }

          // creating main column chart for district and state only for evety class
          if(current_demography !== 'national'){
              scale.forEach((element,index) => {
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
            }


        })
        
      });

      //  creating pie chart and table for state
      if(current_demography === 'state'){
        createDognutDataAndChart(doghnut,encounterd_subject,all_data.grade)
        let row = '<tr>'
        state_table.forEach((tupple,index)=>{
          if((index+1) % 3 !== 0 && index !== state_table.length)
          row += '<td><div class="tbody-content">'+tupple.district_name+'<span class="percentage-no light-purple">'+tupple.percentage+'</span></div></td>'
          else{
            if(index < state_table.length){
              row += '</tr><tr>'
            }else{
              row += '</tr>'
            }
          }
        })
        if(classType !== 'all'){
          $('#state_district_table_class'+classType).html(row)
        }else{
          $('#state_district_table'+all_data.grade+'_class'+classType).html(row)
        }

      }
    }catch(e){
      console.log(e)
    }finally{
    }


  }

  function updateCards(cardPosition,data){
    $('#'+cardPosition).html(data)
  }

  async function createInformationScreen(data){
    // const dataToShow = data.pop()'
    let dataToShow = {}
    if(activeState === '' && activeDistrict === ''){
      dataToShow = data.pop()
      // console.log(dataToShow)
    }else{
      if(selected_geography === 'district'){
        dataToShow = activeDistrict
      }
      if(selected_geography === 'state'){
        dataToShow = activeState
      }
    }

    let state_name = ''
    if(activeState.state_name === 'Delhi'){
      state_name = 'nct of delhi'
    }else{
      state_name = dataToShow.state_name
    }

    let prefix = ''
    if(selected_geography === 'state'){
      prefix = 'information_state_'
    }
    if(selected_geography === 'district'){
      prefix = 'information_district_'
    }
    if(selected_geography === 'national'){
      prefix = 'information_national_'
    }
    const where = prefix + 'map'
    
    if(selected_geography === 'district' || selected_geography === 'state'){
      const selectedMapData = DISTRICT_MAPS.find(data=> data.name === state_name.toUpperCase())
      createChart(where,selectedMapData,dataToShow.district_id)
    }else{
      let states = JSON.parse(sessionStorage.getItem('states'))
      const state_data = states.map((state,index) =>{
        if(state.state_name === 'Delhi'){
         return ['nct of delhi',state.state_id]
        }else{
          return [ state.state_name.toLowerCase(),state.state_id]
        }
      })
      generateNationalMap(where,state_data)
    }

    if(selected_geography !== 'national'){
      $('.information_state_name').html(format_string(state_name))
    }
    $('#'+prefix +'area_class3').html(parserInt(dataToShow.total_district_area))
    $('#'+prefix +'population_class3').html(parserInt(dataToShow.total_population))
    $('#'+prefix + 'density_class3').html(parserInt(dataToShow.density_of_population))
    $('#'+prefix +'sex_ratio_class3').html(parserInt(dataToShow.child_sex_ratio))
    $('#'+prefix +'literacy_class3').html(parserInt(dataToShow.literacy_rate))

    if(selected_geography === 'district'){
      $('.'+prefix+'name').html(format_string(dataToShow.district_name))
      $('#'+prefix+'rural_class3').html(parserInt(dataToShow.rural_population))
      $('#'+prefix+'urban_class3').html(parserInt(dataToShow.urban_population))
      $('#'+prefix +'total_school_class3').html(parserInt(dataToShow.no_of_schools))
      $('#'+prefix + 'state_school_class3').html(parserInt(dataToShow.state_govt_schools))
      $('#'+prefix +'govt_aided_school_class3').html(parserInt(dataToShow.govt_aided_schools))
      $('#'+prefix + 'govt_school_class3').html(parserInt(dataToShow.state_govt_schools))
      $('#'+prefix+'private_school_class3').html(parserInt(dataToShow.private_unaided_reco_schools))
      $('#'+prefix +'state_teacher_class3').html(parserInt(dataToShow.teacher_state_govt_schools))
      $('#'+prefix + 'govt_teacher_class3').html(parserInt(dataToShow.teacher_state_govt_schools))
      $('#'+prefix + 'govt_aided_teacher_class3').html(parserInt(dataToShow.teacher_govt_aided_schools))
      $('#'+prefix + 'private_teacher_class3').html(parserInt(dataToShow.teacher_private_unaided_reco_schools))
      $('#'+prefix +'description_class3').html(dataToShow.description)
    }



  }

  async function createChart(where,data,district_id){
    data.data[0].data.forEach((item)=>{
      if(item.id==district_id){
        item.color="#f7941c";
        item.borderColor="#6e6f70";
        item.states.hover.color="#f7941c";
      }else{
        item.color="#9ec2e4";
        item.borderColor="#6e6f70";
        item.states.hover.color="#f7941c";
      }
    })
  await Highcharts.mapChart(where,{
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


  async function generateNationalMap(where,data){
    await Highcharts.mapChart(where, {
        chart: {
            map: 'countries/in/custom/in-all-disputed'
        },

        title: {
            text: ''
        },

        subtitle: {
            text: ''
        },
        legend: {
          enabled: false
        },
      tooltip: { enabled: false },
        navigation: {
            buttonOptions: {
                enabled: false
            }
        },
        credits: {
          enabled: false
        },
      
        series: [{
            data: data,
            name: 'Random data',
            allowPointSelect: true,
            cursor: 'pointer',
            color: "#9ec2e4",
            borderColor: "#6e6f70",
            states: {
                hover: {
                    color:'#f7941c'
                },
                select: {
                  color: '#9ec2e4'
                }
            },
            dataLabels: {
                enabled: false,
                format: '{point.name}'
            }
        }]
    });
  }

  function showAdditionalTab(){
    $('#result-glimpses-tab').hide()
    $('#achievementstate-tab').hide()
    $('#learningoutcome-tab').hide()

    if(selected_geography === 'national'){
      $('#result-glimpses-tab').show()
    }else if(selected_geography === 'state'){
      $('#achievementstate-tab').show()
      $('#learningoutcome-tab').show()

    }
    else{
      $('#result-glimpses-tab').hide()
      $('#achievementstate-tab').hide()
      $('#learningoutcome-tab').show()

    }
  }


 function createDognutDataAndChart(data,subjects,grade){
  let color_code = {
    mil:'#EB6C69',
    eng:'#C574BF',
    math:'#E9769F',
    sci:'#3CACAE',
    sst:'#72B562',
    language:'#75a9d9',
    evs:'#cac55f'
  }

  const titles = {
    below_basic: 'Below 30%',
    basic: '30% - 50%',
    proficient: '51% - 75%',
    advanced:'Above 75%'
  }

  Object.keys(data).forEach((key,index) => {
    let series_data = []
    let where = ''
    if(classType === 'all'){
      where = 'doghnut_'+ key + grade +selected_geography+ '_class'+ classType 

    }else{
      where = 'doghnut_'+ key + selected_geography+ '_class'+ classType 

    }
    data[key].forEach((tupple,i)=>{
      const series_obj = {
        name: subjects_full_names[subjects[i]],
        y: parserInt(tupple),
        z: 100,
        color: color_code[subjects[i]]
      }
      series_data.push(series_obj)
    })
    const final_doghnut = [{
      minPointSize: 10,
      innerSize: '50%',
      zMin: 0,
      name: 'Range',
      data:series_data
    }]
    createDoghnutChart(where,series_data,titles[key])
  });
 }

 function createGlimpsesScreen(data){

  let graphs = []

  // sections for performance screen
  const sections = ['Cards','Location','Gender','Management']


  const data_b = data[0]

  // getting subjects for classes
  if(classType === 'all'){
  graphs = class_subjects['class_'+data_b.grade]
  }else{
  graphs = class_subjects['class_'+classType]
  }
  const category_data = JSON.parse(data_b.data)

  const colorCode = {
  language: ['#BAD4EC','#9EC2E4','#83B1DD','#6997C3'],
  evs: ['#E5E2AF','#DAD68F','#CFCB6F','#B6B156'],
  math: ['#F4BBCF','#F09FBB','#EB84A8','#D26A8E'],
  social:['#C7E1C0','#ABD3A1','#8FC481','#68A358'],
  science:['#B1DEDF','#8ACDCE','#63BDBE','#369B9D'],
  mil:['#F7C4C3','#F3A6A5','#EF8987','#D4605F'],
  english:['#E8C7E6','#DCACD9','#D190CD','#B168AD'],
  }

  const section_legends = {
  cards:["Substantially above national average", "Not substantially different from the national average" , "Substantially below national average"],
  gender:["No significant difference between Boys and Girls","Boys peform significantly better than Girls","Girls peform significantly better than Boys"],
  location:["No significant difference between Rural and Urban","Rural peform significantly better than Urban","Urban peform significantly better than Rural"],
  management:["No significant difference between Govt. and Govt. Aided","Govt. peform significantly better than Govt. Aided","Govt. Aided peform significantly better than Govt"],
  socialgroup:["No significant difference between Govt. and Govt. Aided","Govt. peform significantly better than Govt. Aided","Govt. Aided peform significantly better than Govt"],

  }
  sections.forEach(section=>{
  let where = ''
  graphs.forEach(sub=>{
      if(classType !== 'all'){
      where = section+'National' + sub +'BarGraph_class' +classType  
      }else{
      if(section === 'Cards'){
          where = section+'National' + sub   +'BarGraph_class'+classType
      }else{
          where = section+'National' + data[0].grade + sub   +'BarGraph_class'+classType
      }
      }
      const section_data = category_data[subjects_short_codes[sub.toLowerCase()]][section.toLowerCase()]
      const required_colors = colorCode[sub.toLowerCase()]
      generateGlimpsesMap(where,required_colors,section_data,section_legends[section.toLowerCase()])

  })
  })
}

// creating glimpses chart
    async function generateGlimpsesMap(where,req_colors,section_data,legends){
        let states = await JSON.parse(sessionStorage.getItem('states'))
        let category1 = []
        let category2 = []
        let category3 = []
        await states.map((state,index) =>{
        const type_of_state = getColourOfState(req_colors,state.state_id,section_data)
        let required_data = []
        if(state.state_name === 'Delhi'){
        required_data = ['nct of delhi',state.state_id]
        }else{
        required_data = [ state.state_name.toLowerCase(),state.state_id]
        }
        if(type_of_state.category === 0){
        category1.push(required_data)
        }
        if(type_of_state.category === 1){
        category2.push(required_data)
        }
        if(type_of_state.category === 2){
        category3.push(required_data)
        }
        return required_data
        })

        try{
            const states_chart = await Highcharts.mapChart(where, {
                chart: {
                    map: 'countries/in/custom/in-all-disputed',
                    backgroundColor: 'transparent',
                },
                title: {
                    text: ''
                },

                subtitle: {
                    text: ''
                },
                legend: {
                enabled: true
                },
                tooltip: { enabled: true },
                navigation: {
                    buttonOptions: {
                        enabled: false
                    }
                },
                credits: {
                enabled: false
                },
                plotOptions: {
                  series: {
                      events: {
                          click: function (e) {
                            const index = states.map(state_data=>{
                                return state_data.state_id
                            }).indexOf(e.point.value)
                            sessionStorage.setItem('activeState',JSON.stringify(states[index]))
                            removeItem('activeDistrict')
                            location.href = base_url + 'report-card/nas-2021'
                          }
            
                      }
                  }
                },
                series: [
                {
                    name: legends[0],
                    data: category1,
                    allAreas: false,
                    allowPointSelect: true,
                    cursor: 'pointer',
                    color:req_colors[0],
                    borderColor: "#6e6f70",
                    states: {
                        hover: {
                            color:'#f7941c'
                        },
                        select: {
                        color: '#9ec2e4'
                        }
                    },
                    dataLabels: {
                        enabled: false,
                        format: '{point.name}'
                    },
                },
                {
                    data: category2,
                    name: legends[1],
                    color:req_colors[1],
                    allowPointSelect: true,
                    allAreas: false,
                    cursor: 'pointer',
                    borderColor: "#6e6f70",
                    states: {
                        hover: {
                            color:'#f7941c'
                        },
                        select: {
                        color: '#9ec2e4'
                        }
                    },
                    dataLabels: {
                        enabled: false,
                        format: '{point.name}'
                    },
                },
                {
                    data: category3,
                    name: legends[2],
                    color:req_colors[2],

                    allowPointSelect: true,
                    allAreas: false,
                    cursor: 'pointer',
                    borderColor: "#6e6f70",
                    states: {
                        hover: {
                            color:'#f7941c'
                        },
                        select: {
                        color: '#9ec2e4'
                        }
                    },
                    dataLabels: {
                        enabled: false,
                        format: '{point.name}'
                    },
                },
                ]
            });
            if(Object.keys(states_chart).length !== 0){
                states_chart.series.forEach(series=>{
                series.data.forEach(el => {
                const info = getColourOfState(req_colors,el['value'],section_data)
                el.color = info.color
                return el
                })
                })


                states_chart.update({
                series: [{
                data: states_chart.series[0].data
                },
                {
                data: states_chart.series[1].data
                },
                {
                data: states_chart.series[2].data
                }]
                })
            }
        }catch(e){
            console.log(e)
        }


    }

 function getColourOfState(req_colors,state_id,section_data){
   let color = ''
   let category = ''
   section_data.forEach(state=>{
     if(state_id === state.state_id){
       color = req_colors[state.category]
       category = state.category
     }
   })
   return {color:color,category: parserInt(category)}
 }


 function createCumulativeCardsForPerformance(data){
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

    const divisor = {
      evs: 2,
      language: 3,
      math:4,
      mil:1,
      sci:2,
      sst:2,
      eng:1

    }
    let demographics = []
    if(selected_geography === 'district'){
      demographics = ['district','state','national']
    }
    if(selected_geography === 'state'){
      demographics = ['state','national']
    }
    if(selected_geography === 'national'){
      demographics = ['national']
    }


    data.forEach(performance=>{
     const json_data =  JSON.parse(performance.data)
     if(selected_geography === 'state'){
      delete json_data['statedistrictlevelperformance']
     }
      Object.keys(json_data).forEach(subject=>{

        const cards = json_data[subject]['cards']
        Object.keys(cards).forEach(geog=>{
          cumulative_subject_count[subject][geog] += parserInt(cards[geog])
        })
      })
    })

    Object.keys(cumulative_subject_count).forEach(key => {
      let state_chart_data = []
      let subject  = key
        demographics.forEach((demo,index) => {
          if(selected_geography !== 'state'){
            let where = ''
            let val = 0
            if(selected_geography === 'district'){
              where = screenType + '_' + subject + '_' + demo + '_class' + classType
              val = parserInt(cumulative_subject_count[subject][demo]/divisor[subject])
            }
            if(selected_geography === 'national'){
              val = parserInt(cumulative_subject_count[subject][demo])
              where = screenType + selected_geography + '_' + subject + '_' + demo + '_class' + classType
            }
            updateCards(where,val)

          }else{
            const color = colorCode[key]
            const item = {
              color: color[index+2],
              y: parserInt(cumulative_subject_count[subject][demo]/divisor[subject]),
              name: entities[demo + '_average'] 
            }
            
            state_chart_data.push(item)
          }
        })
        if(selected_geography === 'state'){
          const card_chart_where = screenType + selected_geography + '_' + key + '_class' + classType
          const final_state_chart_data = [{
            data:state_chart_data
          }]
          createColumnChart(card_chart_where,final_state_chart_data,'single')
        }

    })
 }