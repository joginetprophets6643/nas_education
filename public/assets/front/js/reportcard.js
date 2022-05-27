let screenType;
let classType = "3";
let activeState = "";
let activeDistrict = "";
let grades = ["3", "5", "8", "10", "all"];
let already_active_state = null;
let already_active_district = null;
let class_subjects = {
  class_3: ["Language", "Evs", "Math"],
  class_5: ["Language", "Evs", "Math"],
  class_8: ["Language", "Science", "Math", "Social"],
  class_10: ["Mil", "Social", "English", "Science", "Math"],
  class_all: [
    "Mil",
    "Social",
    "English",
    "Science",
    "Math",
    "Language",
    "Evs",
  ],
};

let subjects_short_codes = {
  math: "math",
  evs: "evs",
  social: "sst",
  language: "language",
  mil: "mil",
  science: "sci",
  english: "eng",
};

let subjects_full_names = {
  math: "Mathematics",
  evs: "EVS",
  sst: "Social Science",
  language: "Language",
  mil: "Mil",
  sci: "Science",
  eng: "English",
};

const colorCode = {
  language: ["#BAD4EC", "#9EC2E4", "#83B1DD", "#6997C3"],
  evs: ["#E5E2AF", "#DAD68F", "#CFCB6F", "#B6B156"],
  math: ["#F4BBCF", "#F09FBB", "#EB84A8", "#D26A8E"],
  sst: ["#C7E1C0", "#ABD3A1", "#8FC481", "#68A358"],
  sci: ["#B1DEDF", "#8ACDCE", "#63BDBE", "#369B9D"],
  mil: ["#F7C4C3", "#F3A6A5", "#EF8987", "#D4605F"],
  eng: ["#E8C7E6", "#DCACD9", "#D190CD", "#B168AD"],
};
// legends for column charts
const entities = {
  boys: "Boys",
  girls: "Girls",
  govt: "State Govt.",
  govt_aided: "Govt. Aided",
  private: "Private Recognized",
  central_govt: "Central Govt.",
  sc: "SC",
  st: "ST",
  obc: "OBC",
  general: "General",
  urban: "Urban",
  rural: "Rural",
  state_average: "State Average",
  national_average: "National Average",
  trans_gender: "Trans Gender",
};

// geography wise screen
const geography_wise_screen = {
  district: [
    "information",
    "participation",
    "performance",
    "learning",
    "feedback",
  ],
  state: [
    "information",
    "participation",
    "performance",
    "learning",
    "feedback",
    "achievement",
  ],
  national: [
    "information",
    "participation",
    "performance",
    "glimpses",
    "feedback",
  ],
};
const category_filter_screen = ["participation", "performance", "glimpses"];

let screens = [
  "information",
  "participation",
  "performance",
  "learning",
  "feedback",
  "glimpses",
  "achievement",
  "notconducted",
];

let selected_geography = "";
let global_filters = {}; // added for new change
$(document).ready(() => {
  $.ajax({
    type: "GET",
    url: api_url + "state_masters?limit-1&sort[]=state_name",
    headers: {
      Authorization: "Bearer " + token,
    },
  }).done((response) => {
    createSidebarStates(response.data);
    sessionStorage.setItem("states", JSON.stringify(response.data));
  });
  setClass(classType);
  already_active_state = JSON.parse(sessionStorage.getItem("activeState"));
  already_active_district = JSON.parse(
    sessionStorage.getItem("activeDistrict")
  );

  $.ajax({
    type: "GET",
    url: api_url + 'state_participation_cards?limit-1&sort[]=state_name',
    headers: {
      "Authorization": "Bearer " + token
    }
  }).done((response) => {
    sessionStorage.setItem('state_participation_cards', JSON.stringify(response.data))
  })
});



// doghnut chart for performance only
async function createDoghnutChart(where, data, title) {
  await Highcharts.chart(where, {
    chart: {
      type: "variablepie",
    },
    title: {
      text: title,
      align: "center",
      verticalAlign: "middle",
      y: 0,
    },
    exporting: { enabled: false },
    tooltip: {
      headerFormat: "",
      pointFormat:
        '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
        "{point.y}%",
    },

    plotOptions: {
      variablepie: {
        borderWidth: 0,
        allowPointSelect: true,
        cursor: "pointer",
        dataLabels: {
          enabled: true,
          format: "{point.percentage,.0f}",
          distance: -50,
          filter: {
            property: "percentage",
            operator: ">",
            value: 4,
          },
        },
        showInLegend: true,
      },
    },
    series: [
      {
        minPointSize: 10,
        innerSize: "50%",
        zMin: 0,
        name: "Range",
        data: data,
      },
    ],
  });
}

// column chart for performance only
function createColumnChart(where, data, type = "") {
  let config = {};
  if (type === "") {
    let categories = [];
    if (selected_geography === "district") {
      categories = ["District", "State", "National"];
    }

    if (selected_geography === "state") {
      categories = ["State", "National"];
    }
    config["xAxis"] = {
      categories: categories,
      crosshair: true,
    };
    config["plotOptions"] = {
      column: {
        pointPadding: 0.1,
        borderWidth: 0,
      },
      series: {
        borderWidth: 0,
        dataLabels: {
          enabled: true,
          formatter: function () {
            return this.y != 0 ? this.y : "";
          },
        },
      },
    };
  } else {
    config["xAxis"] = {
      type: "category",
    };
    config["legend"] = { enabled: false };
    config["plotOptions"] = {
      column: {
        pointWidth: 25,
      },
      series: {
        borderWidth: 0,
        dataLabels: {
          enabled: true,
          formatter: function () {
            return this.y != 0 ? this.y : "";
          },
        },
      },
    };
  }

  config = {
    ...config,
    chart: {
      backgroundColor: "transparent",
      height: 300,
      type: "column",
    },
    title: {
      text: "",
    },
    yAxis: {
      max: 100,
      title: false,
    },
    exporting: { enabled: false },
    tooltip: {
      headerFormat:
        '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat:
        '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y}%</b></td></tr>',
      footerFormat: "</table>",
      shared: true,
      useHTML: true,
    },
    series: data,
  };
  Highcharts.chart(where, config);
}

function setClass(value) {
  if (classType === "") {
    $("#current_class").html("All Classes");
  } else {
    $("#current_class").html(classType);
  }
}

// create bar graph with data for participation only
function createSocialBarGraph(bar, colors) {
  // const value = Object.values(bar)
  // const max = Math.max(...value)
  Highcharts.chart("socialBarGraph_class" + classType, {
    chart: {
      type: "column",
    },
    title: {
      text: "",
    },
    exporting: { enabled: false },
    accessibility: {
      announceNewData: {
        enabled: true,
      },
    },
    xAxis: {
      type: "category",
    },
    yAxis: {
      max: 100,
      title: {
        text: "",
      },
    },
    legend: {
      enabled: false,
    },
    plotOptions: {
      series: {
        borderWidth: 0,
        dataLabels: {
          enabled: true,
          format: "{point.y:.1f}%",
        },
      },
    },

    tooltip: {
      headerFormat:
        '<span style="font-size:11px">{series.name}</span><br>',
      pointFormat:
        '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>',
    },

    series: [
      {
        name: "Groups",
        colorByPoint: true,
        data: [
          {
            name: "SC",
            y: bar.sc,
            color: colors.sc,
          },
          {
            name: "ST",
            y: bar.st,
            color: colors.st,
          },
          {
            name: "OBC",
            y: bar.obc,
            color: colors.obc,
          },
          {
            name: "General",
            y: bar.gen,
            color: colors.gen,
          },
        ],
      },
    ],
  });
}

// create donought chart with data for participation only
function createManagementPieChart(chart, colors) {
  Highcharts.chart("managementPieGraph_class" + classType, {
    chart: {
      type: "variablepie",
    },
    title: {
      text: "",
    },
    exporting: { enabled: false },
    tooltip: {
      headerFormat: "",
      pointFormat:
        '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
        "{point.y}%",
    },

    plotOptions: {
      variablepie: {
        allowPointSelect: true,
        cursor: "pointer",
        dataLabels: {
          enabled: true,
          format: "{point.y}%",
          distance: 5,
          filter: {
            property: "percentage",
            operator: ">",
            value: 0,
          },
        },
        showInLegend: true,
      },
    },
    series: [
      {
        minPointSize: 10,
        innerSize: "40%",
        zMin: 0,
        name: "Management",
        data: [
          {
            name: "State Govt.",
            y: chart.gov,
            z: 100,
            color: colors.gov,
          },
          {
            name: "Govt. Aided",
            y: chart.gov_aided,
            z: 100,
            color: colors.gov_aided,
          },
          {
            name: "Private Recognized",
            y: chart.private,
            z: 100,
            color: colors.private,
          },
          {
            name: "Central Govt.",
            y: chart.cent_gov,
            z: 100,
            color: colors.cent_gov,
          },
        ],
      },
    ],
  });
}

// sidebar states for report card
async function createSidebarStates(data) {
  let state_list =
    "<div class='mb-3' style='margin-right:20px;'><input type='text' class='form-control' id='input_state_filter' onkeyup='filterList(0,state)' onkeypress='preventSymbols(event)' placeholder='Search for State'></div><ul id='state_list_national'>";
  let district_data = [];

  await $.ajax({
    type: "GET",
    url: api_url + "district_masters?limit=-1",
    headers: {
      Authorization: "Bearer " + token,
    },
  }).done((response) => {
    district_data = response.data;
    district_data.sort((a, b) =>
      a.district_name.localeCompare(b.district_name)
    );
    sessionStorage.setItem("districts", JSON.stringify(district_data));
  });

  await data.map((state) => {
    state_list +=
      '<li class="national_states" id="state_no' +
      state.udise_state_code +
      '"><a href="javascript:void(0)" class="national_state_list" onClick ="toggleDistrictList(' +
      state.udise_state_code +
      ",true," +
      state.udise_state_code +
      ')" id="showDistrict' +
      state.udise_state_code +
      '" ><span class="material-icons-round radio_checked"> radio_button_checked </span><span class="material-icons-round radio_unchecked"> radio_button_unchecked </span>' +
      state.state_name +
      "</a>";
    const filteredDistrict = district_data.filter((district) => {
      if (district.udise_state_code === state.udise_state_code)
        return district;
    });
    // console.log(filteredDistrict)

    state_list +=
      '<div class="district-list" id="state_' +
      state.udise_state_code +
      '"><div class="d-flex align-items-center justify-content-between pb-15"><h2>' +
      state.state_name +
      '</h2><button class="close-btn" id="close_btn" onClick="toggleDistrictList(' +
      state.udise_state_code +
      ',false)"><span class="material-icons-round">keyboard_backspace</span ></button></div><ul id="district_' +
      state.udise_state_code +
      '_list">';
    state_list += createDistrictForStates(
      filteredDistrict,
      state.state_name,
      state.udise_state_code
    );
    state_list += "</ul></div>";
    state_list += "</li>";
  });
  state_list += "</ul>";
  document.getElementById("all-state-list").innerHTML = state_list;
  if (already_active_district !== null) {
    chageDataWithFilter("global_filter", "district");
    toggleDistrictList(already_active_state.udise_state_code, true);
    toggleActiveDistrict(already_active_district.udise_district_code, true);
  } else if (already_active_state !== null) {
    chageDataWithFilter("global_filter", "state");
    toggleDistrictList(already_active_state.udise_state_code, true);
  } else {
    chageDataWithFilter("global_filter", "national");
  }
}

// sidebar districts for report card
function createDistrictForStates(data, state_name, state_id) {
  let district_list =
    "<div class='mb-3' style='margin-right:20px;'><input type='text' class='form-control' id='input_state_" +
    state_id +
    "' onkeyup='filterList(" +
    state_id +
    ",district)' onkeypress='preventSymbols(event)' placeholder='Search for District' title='Type in a name'></div>";
  data.map((district) => {
    district_list +=
      '<li class="state_' +
      state_id +
      '_districts"><a href="javascript:void(0)" class="districts" id="district_' +
      district.udise_district_code +
      '" onClick="setActiveStateDistrict(' +
      district.udise_state_code +
      "," +
      district.udise_district_code +
      ')">' +
      district.district_name +
      "</a></li>";
  });
  return district_list;
}

//  toggling district lists
function toggleDistrictList(state_id, value, from_where = "") {
  if (value) {
    makeStateActive(state_id);
    if (from_where !== "") {
      toggleActiveDistrict(activeDistrict.udise_district_code, false);
      removeItem("activeDistrict");
      activeDistrict = "";
    }
    if (
      activeDistrict !== null &&
      typeof activeDistrict !== "undefined" &&
      activeDistrict !== ""
    ) {
      setBreadCrumb("district", false);
      $("#sidebar_active_district").html(activeDistrict.district_name);
      setInformation();
    } else {
      activeDistrict = "";
      if (from_where === "") {
        setBreadCrumb("state", false);
        setInformation();
      } else {
        setBreadCrumb("state", true);
      }
      $("#sidebar_active_state").html(
        format_string(activeState.state_name)
      );
      $("#navbar-highlighter").html(
        "(" + format_string(activeState.state_name) + ")"
      );
    }
    $("#state_" + state_id + "").addClass("active");
    $(".national_state_list").removeClass("active");
    $("#showDistrict" + state_id).addClass("active");
  } else {
    if (from_where !== "") {
      $(".national_state_list").removeClass("active");
    }
    $("#state_" + state_id + "").removeClass("active");
  }
}

function changePageDataViaSideFilter(value) {
  $(".side_filter").removeClass("active");
  $("#" + value + "").addClass("active");
  chageDataWithFilter("sidebar_filter", value);
}

//  setting screens for geographies
async function setScreen(screen_type = "information", load_data = true) {
  // not conducted check


  const active_district = JSON.parse(
    sessionStorage.getItem("activeDistrict")
  );
  const active_state = JSON.parse(
    sessionStorage.getItem("activeState")
  );
  if (active_district !== null) {
    if (active_district.is_active === 2) {
      screen_type = "notconducted";
      $('#report-link').addClass('otp-dis')
      $('#report-mobile-link').addClass('otp-dis')
    }
    else {
      $('#report-link').removeClass('otp-dis')
      $('#report-mobile-link').removeClass('otp-dis')
    }
    // $('#report-link').addClass('otp-dis')
    // $('#report-mobile-link').addClass('otp-dis')
  }
  // else if (active_state !== null) {
  //   $('#report-link').addClass('otp-dis')
  //   $('#report-mobile-link').addClass('otp-dis')
  // }
  else {
    $('#report-link').removeClass('otp-dis')
    $('#report-mobile-link').removeClass('otp-dis')
  }

  window.scrollTo(0, 0);
  const exceptions = ["participation", "learning", "notconducted"];
  const current_demography =
    selected_geography === "district" || exceptions.includes(screen_type)
      ? ""
      : selected_geography;
  const demographics = ["", "state", "national"];

  // if(category_filter_screen.includes(screen_type)){
  // }else{
  // }
  grades.forEach((grade) => {
    demographics.forEach((demo) => {
      screens.forEach((sc) => {
        $("#" + sc + demo + "_class" + grade + "").removeClass(
          "show active"
        );
        $("#" + sc + "-tab").removeClass("active");
      });
    });
  });
  screenType = screen_type;
  // removed for new change
  // if(load_data){
  setFilters();
  await getData();
  // }
  grades.forEach((grade) => {
    if (grade === classType) {
      $(
        "#" + screen_type + current_demography + "_class" + grade + ""
      ).addClass("show active");
    } else {
      if (
        screen_type === "feedback" ||
        screen_type === "information" ||
        screen_type === "achievement" ||
        screen_type === "notconducted"
      ) {
        $("#" + screen_type + current_demography + "_class3").addClass(
          "show active"
        );
      } else {
        $(
          "#" +
          screen_type +
          current_demography +
          "_class" +
          grade +
          ""
        ).removeClass("show active");
      }
    }
  });

  $("#" + screen_type + "-tab").addClass("active");
  $(
    "#" + screen_type + current_demography + "_class" + classType + ""
  ).addClass("show active");

  changePageDataViaSideFilter("all");
  if (screenType === "learning" || screenType === "feedback") {
    $(".side_list_action").prop("disabled", true);
    $(".side_filter").prop("disabled", true);
  }
}

// data change via any action
function chageDataWithFilter(filter_type, value) {
  const lastActiveState = JSON.parse(sessionStorage.getItem("activeState"));
  const lastActiveDistrict = JSON.parse(
    sessionStorage.getItem("activeDistrict")
  );

  if (filter_type === "sidebar_filter") {
    manipulateView(value);
  }
  if (filter_type === "data_filter") {
    classType = value;
    setClass();
    setScreen(screenType, false);
    setInformation();
    changePageDataViaSideFilter("all");
  }
  if (filter_type === "global_filter") {
    // setBreadCrumb(value)
    if (value === "state") {
      // activeDistrict = ''
      // if(typeof lastActiveState === 'undefined' || lastActiveState === null ){
      //   alert('you do not have any active state')
      //   return
      // }
      // else{
      activeState = lastActiveState;
      activeDistrict = "";
      $("#active_state").html(activeState.state_name);
      $("#sidebar_active_state").html(
        format_string(activeState.state_name)
      );
      $("#navbar-highlighter").html(
        "(" + format_string(activeState.state_name) + ")"
      );
      toggleActiveDistrict(activeDistrict.udise_district_code, false);
      removeItem("activeDistrict");
      // }
    }
    if (value === "national") {
      $("#navbar-highlighter").html("");

      toggleDistrictList(
        activeState.udise_state_code,
        false,
        "global_filter"
      );
      removeItem("activeState");
      removeItem("activeDistrict");
      activeState = "";
      activeDistrict = "";
    }
    if (value === "district") {
      if (lastActiveDistrict === null || lastActiveState === null) {
        alert("you do not have any active state");
        return;
      } else {
        activeState = lastActiveState;
        activeDistrict = lastActiveDistrict;
        $("#active_state").html(activeState.state_name);
        $("#active_district").html(
          activeDistrict.district_name
        );
        $("#navbar-highlighter").html(
          "(" +
          format_string(activeState.state_name) +
          " > " +
          activeDistrict.district_name +
          ")"
        );
        toggleDistrictList(activeDistrict.udise_state_code, true);
        toggleActiveDistrict(activeDistrict.udise_district_code, true);
      }
    }
    setBreadCrumb(value);

    // setInformation()
  }
}

// sidebar filters action
function manipulateView(value) {
  if (value === "all") {
    toggleSection("all");
  }
  if (value === "gender") {
    toggleSection("gender");
  }
  if (value === "location") {
    toggleSection("location");
  }
  if (value === "management") {
    toggleSection("management");
  }
  if (value === "social_group") {
    toggleSection("social");
  }
}

//  manipulaing via sidebar filter actions
function toggleSection(value) {
  const exceptions = ["participation", "learning"];
  const current_demography =
    selected_geography === "district" || exceptions.includes(screenType)
      ? ""
      : selected_geography;
  let section = "";
  let availableSections = ["gender", "location", "management", "social"];
  if (value !== "all") {
    section +=
      value +
      current_demography +
      "_section_" +
      screenType +
      "_class" +
      classType;
  } else {
    section = "";
  }
  if (section === "") {
    availableSections.forEach((sec) => {
      $(
        "#" +
        sec +
        current_demography +
        "_section_" +
        screenType +
        "_class" +
        classType
      ).removeAttr("style");
      $(
        "#" +
        sec +
        current_demography +
        "_section_" +
        screenType +
        "_class" +
        classType
      ).removeClass("no-border");
    });
  } else {
    const filteredSections = availableSections.filter((sec) => {
      const temp_name =
        sec +
        current_demography +
        "_section_" +
        screenType +
        "_class" +
        classType;
      if (section !== temp_name) {
        return sec;
      }
    });

    $("#" + section + "").removeAttr("style");
    // $('#'+section +'').removeClass('col-md-6')
    $("#" + section + "").addClass("no-border");
    filteredSections.forEach((sec) => {
      $(
        "#" +
        sec +
        current_demography +
        "_section_" +
        screenType +
        "_class" +
        classType
      ).attr("style", "display:none;");
    });
  }
}

// added for new change
function setFilters() {
  global_filters = {};
  const state = JSON.parse(sessionStorage.getItem("activeState"));
  const district = JSON.parse(sessionStorage.getItem("activeDistrict"));
  if (state === null && district === null && classType === "all") {
    if (screenType === "participation") {
      global_filters = { ...global_filters, grade: { _eq: "11" } };
    }
    if (screenType === "feedback") {
      global_filters = { ...global_filters, grade: { _eq: "3" } };
    }
  } else {
    if (state !== "" && state !== null) {
      global_filters = {
        ...global_filters,
        state_id: { _eq: state.udise_state_code },
      };
    }
    if (district !== "" && district !== null) {
      global_filters = {
        ...global_filters,
        district_id: { _eq: district.udise_district_code },
      };
    }
    if (classType !== "") {
      if (classType !== "all") {
        if (screenType !== "information") {
          global_filters = {
            ...global_filters,
            grade: { _eq: classType },
          };
        }
        if (screenType !== "feedback") {
          if (selected_geography === "state") {
            global_filters = {
              ...global_filters,
              grade: { _eq: classType },
            };
          }
        }
      } else {
        if (screenType === "feedback") {
          global_filters = {
            ...global_filters,
            grade: { _eq: "11" },
          };
        } else {
          delete global_filters["grade"];
        }
      }
    }
  }
}

// added for new change
async function setInformation() {
  try {
    if (screenType === "participation") {
      data = await JSON.parse(
        sessionStorage.getItem("participation_data")
      );
    }
    if (screenType === "performance") {
      data = await JSON.parse(sessionStorage.getItem("performance_data"));
    }
    if (screenType === "learning") {
      data = await JSON.parse(sessionStorage.getItem("learning_data"));
    }
    if (screenType === "feedback") {
      data = await JSON.parse(sessionStorage.getItem("feedback_data"));
    }
    if (screenType === "information") {
      data = await JSON.parse(sessionStorage.getItem("information_data"));
    }
    if (screenType === "glimpses") {
      data = await JSON.parse(sessionStorage.getItem("glimpses_data"));
    }
    if (screenType === "achievement") {
      data = await JSON.parse(sessionStorage.getItem("achievement_data"));
    }
    await updateData(data);
  } catch (exceptions) {
    console.log(exceptions);
  } finally {
  }
}

// changing the screen with the data
// removed for new change

// async function setInformation_backup(){
//   try{
//     let filters = {};
//     let data = []
//     if(activeState !== ''){
//       filters = {...filters , state: activeState.udise_state_code}
//     }
//     if(activeDistrict !== ''){
//       filters = {...filters ,district: activeDistrict.udise_district_code}
//     }
//     if(classType !== ''){
//       if(classType !== 'all'){
//         if(screenType !== 'information'){
//           filters = {... filters,class: classType}
//         }
//         if(screenType !== 'feedback'){
//           if(selected_geography === 'state'){
//             filters = {...filters , class: classType}
//           }
//         }
//       }else{
//         if(screenType === 'feedback'){
//           filters = {...filters , class: "11"}
//         }
//       }
//     }

//     console.log(filters)
//     if(screenType === 'participation'){
//       data = await JSON.parse(sessionStorage.getItem('participation_data'))
//     }
//     if(screenType === 'performance'){
//       data = await JSON.parse(sessionStorage.getItem('performance_data'))
//     }
//     if(screenType === 'learning'){
//       data = await JSON.parse(sessionStorage.getItem('learning_data'))
//     }
//     if(screenType === 'feedback'){
//       data = await JSON.parse(sessionStorage.getItem('feedback_data'))
//     }
//     if(screenType === 'information'){
//       data = await JSON.parse(sessionStorage.getItem('information_data'))
//     }
//     if(screenType === 'glimpses'){
//       data = await JSON.parse(sessionStorage.getItem('glimpses_data'))
//     }
//     const filteredData = await data.filter(par =>{
//       let count = 0
//       if (Object.keys(filters).length === 0) {
//         return true
//       }else{
//         for (const [key, val] of Object.entries(filters)) {
//           if(key === 'class'){
//             if(par.grade === val){
//               count +=1
//             }
//           }
//           if(key === 'state'){
//             if(screenType !== 'information'){
//               if(parseInt(par.state_id) === val){
//                 count +=1
//               }
//             }else{
//               if(parseInt(par.udise_state_code) === val){
//                 count +=1
//               }
//             }
//           }
//           if(key === 'district'){
//             if(screenType !== 'information'){
//               if(parseInt(par.district_id) === val){
//                 count +=1
//               }
//             }else{
//               if(parseInt(par.udise_district_code) === val){
//                 count +=1
//               }
//             }
//           }
//         }
//       }
//       if (count === Object.keys(filters).length) {
//         return true
//       }
//     })
//     await updateData(filteredData)

//   }catch(exceptions){
//     console.log(exceptions)
//   }finally{
//   }

// }

async function getData() {
  let limit = -1;
  const screen_wise_table = {
    information: {
      state: "state_masters",
      national: "national_statistic",
      district: "district_masters",
    },
    performance: {
      state: "state_grade_level_performance",
      national: "national_grade_level_performance",
      district: "performance_master",
    },
    learning: {
      state: "state_grade_level_learningoutcome",
      national: "national_grade_level_learningoutcome",
      district: "district_grade_level_learningoutcome",
    },
    feedback: {
      state: "pq_state_level_feedback",
      national: "pq_national_level_feedback",
      district: "pq_district_level_feedback",
    },
    participation: {
      state: "all_grade_state_participation_tbl",
      national: "all_grade_national_participation_tbl",
      district: "all_grade_participation_tbl",
    },
    glimpses: {
      national: "national_result_glimpses",
    },
    achievement: {
      state: "achievement_src",
      national: "all_grade_participation_tbl",
      district: "all_grade_participation_tbl",
    },
  };

  if (screenType !== "notconducted") {
    let table = "";
    if (typeof screenType === "undefined") {
      table = screen_wise_table["information"][selected_geography];
    } else {
      table = screen_wise_table[screenType][selected_geography];
      if (
        screenType === "performance" &&
        selected_geography === "national"
      ) {
        //console.log(global_filters.grade._eq)
        if (global_filters.grade) {
          limit = 1;
        } else {
          limit = 4;
        }
      }
    }
    if (screenType === "information") {
      global_filters = {};
    }

    await $.ajax({
      type: "GET",
      url:
        api_url +
        table +
        "?limit=" +
        limit +
        "&filter=" +
        JSON.stringify(global_filters),
      headers: {
        Authorization: "Bearer " + token,
      },
      beforeSend: () => {
        $("#screen-loader").show();
        $("tab-pane fade").hide();
      },
    }).done((res) => {
      if (screenType === "participation") {
        sessionStorage.setItem(
          "participation_data",
          JSON.stringify(res.data)
        );
      }
      if (screenType === "performance") {
        sessionStorage.setItem(
          "performance_data",
          JSON.stringify(res.data)
        );
      }
      if (screenType === "learning") {
        sessionStorage.setItem(
          "learning_data",
          JSON.stringify(res.data)
        );
      }
      if (screenType === "feedback") {
        sessionStorage.setItem(
          "feedback_data",
          JSON.stringify(res.data)
        );
      }
      if (screenType === "information") {
        sessionStorage.setItem(
          "information_data",
          JSON.stringify(res.data)
        );
      }
      if (screenType === "glimpses") {
        sessionStorage.setItem(
          "glimpses_data",
          JSON.stringify(res.data)
        );
      }
      if (screenType === "achievement") {
        sessionStorage.setItem(
          "achievement_data",
          JSON.stringify(res.data)
        );
      }
      setInformation();
      $("#screen-loader").hide();
      $("tab-pane fade").show();
    });
    updateReportCardLink();
  } else {
    $("#screen-loader").hide();
    $("tab-pane fade").show();
  }
}

// removed for new change
// getting data for screens
// async function getData_backup(){
//   const screen_wise_table = {

//     information :{
//       state: 'state_masters',
//       national: 'national_statistic',
//       district: 'district_masters',
//     },
//     performance :{
//       state: 'state_grade_level_performance',
//       national: 'performance_master',
//       district: 'performance_master',
//     },
//     learning :{
//       state: 'state_grade_level_learningoutcome',
//       national: 'district_grade_level_learningoutcome',
//       district: 'district_grade_level_learningoutcome',
//     },
//     feedback :{
//       state: 'pq_state_level_feedback',
//       national: 'pq_national_level_feedback',
//       district: 'pq_district_level_feedback',
//     },
//     participation :{
//       state: 'all_grade_participation_tbl',
//       national: 'all_grade_participation_tbl',
//       district: 'all_grade_participation_tbl',
//     },
//     glimpses :{
//       national: 'national_result_glimpses',
//     },
//     achievement :{
//       state: 'all_grade_participation_tbl',
//       national: 'all_grade_participation_tbl',
//       district: 'all_grade_participation_tbl',
//     }
//   }
//   let table = ''
//   if(typeof screenType === 'undefined'){
//      table = screen_wise_table['information'][selected_geography]

//   }else{
//     table = screen_wise_table[screenType][selected_geography]
//   }
//   await $.ajax({
//     type: "GET",
//     url: api_url + table + '?limit=-1',
//     headers: {
//       "Authorization": "Bearer " + token
//     }
//     }).done(res=>{
//     if(screenType === 'participation'){
//       sessionStorage.setItem('participation_data',JSON.stringify(res.data))
//     }
//     if(screenType === 'performance'){
//       sessionStorage.setItem('performance_data',JSON.stringify(res.data))
//     }
//     if(screenType === 'learning'){
//       sessionStorage.setItem('learning_data',JSON.stringify(res.data))
//     }
//     if(screenType === 'feedback'){
//       sessionStorage.setItem('feedback_data',JSON.stringify(res.data))
//     }
//     if(screenType === 'information'){
//       sessionStorage.setItem('information_data',JSON.stringify(res.data))
//     }
//     if(screenType === 'glimpses'){
//       sessionStorage.setItem('glimpses_data',JSON.stringify(res.data))
//     }
//     setInformation()
//   });
// }

// setting state and district
function setActiveStateDistrict(state_id, district_id) {
  makeStateActive(state_id);
  makeDistrictActive(district_id);
  setBreadCrumb("district", true);
  $("#active_state").html(activeState.state_name);
  $("#active_district").html(activeDistrict.district_name);
  $("#navbar-highlighter").html(
    "(" + format_string(activeState.state_name) + ")"
  );
  $("#navbar-highlighter").html(
    "(" +
    format_string(activeState.state_name) +
    " > " +
    activeDistrict.district_name +
    ")"
  );

  toggleActiveDistrict(activeDistrict.udise_district_code, true);
  // setInformation()
}

// updating view screenwise
function updateData(data) {
  if (typeof data !== "undefined") {
    if (screenType === "information") {
      createInformationScreen(data);
    }
    if (screenType === "participation") {
      let total_school = 0;
      let total_student = 0;
      let total_teacher = 0;
      let total_male = 0;
      let total_female = 0;
      let total_trans = 0;
      let total_urban = 0;
      let total_rural = 0;
      let gen_group = 0;
      let sc_group = 0;
      let st_group = 0;
      let obc_group = 0;
      let cent_gov = 0;
      let gov_aided = 0;
      let priv = 0;
      let gov = 0;

      data.map((pari_inf) => {
        total_school += parseFloat(pari_inf.total_school);
        total_teacher += parseFloat(pari_inf.total_teacher);
        total_student += parseFloat(pari_inf.total_student);
        total_male += parseFloat(pari_inf.male_gender);
        total_female += parseFloat(pari_inf.female_gender);
        total_trans += parseFloat(pari_inf.trans_gender);
        total_urban += parseFloat(pari_inf.urban_location);
        total_rural += parseFloat(pari_inf.rural_location);
        gen_group += parseFloat(pari_inf.general_social_group);
        sc_group += parseFloat(pari_inf.sc_social_group);
        st_group += parseFloat(pari_inf.st_social_group);
        obc_group += parseFloat(pari_inf.obc_social_group);
        cent_gov += parseFloat(pari_inf.central_govt_school);
        gov_aided += parseFloat(pari_inf.govt_aided_school);
        priv += parseFloat(pari_inf.private_school);
        gov += parseFloat(pari_inf.govt_school);
      });

      total_female =
        total_female > 0 ? total_female / Object.keys(data).length : 0;
      total_trans =
        total_trans > 0 ? total_trans / Object.keys(data).length : 0;
      total_male =
        total_male > 0 ? total_male / Object.keys(data).length : 0;
      total_urban =
        total_urban > 0 ? total_urban / Object.keys(data).length : 0;
      total_rural =
        total_rural > 0 ? total_rural / Object.keys(data).length : 0;
      gen_group =
        gen_group > 0 ? gen_group / Object.keys(data).length : 0;
      sc_group = sc_group > 0 ? sc_group / Object.keys(data).length : 0;
      st_group = st_group > 0 ? st_group / Object.keys(data).length : 0;
      obc_group =
        obc_group > 0 ? obc_group / Object.keys(data).length : 0;
      cent_gov = cent_gov > 0 ? cent_gov / Object.keys(data).length : 0;
      gov_aided =
        gov_aided > 0 ? gov_aided / Object.keys(data).length : 0;
      priv = priv > 0 ? priv / Object.keys(data).length : 0;
      gov = gov > 0 ? gov / Object.keys(data).length : 0;

      if (data[0].district_id == undefined && data[0].state_id != undefined && data.length > 1) {
        temp_data = JSON.parse(sessionStorage.getItem('state_participation_cards'));
        temp_data = temp_data.filter((item) => {
          return item.state_code == data[0].state_id
        })
        console.log(temp_data)
        total_school = temp_data[0].school
        total_teacher = temp_data[0].teacher
        total_student = temp_data[0].student
      }

      $("#participation_school_class" + classType).html(
        Math.round(total_school).toLocaleString("en-IN")
      );
      $("#participation_teachers_class" + classType).html(
        Math.round(total_teacher).toLocaleString("en-IN")
      );
      $("#participation_students_class" + classType).html(
        Math.round(total_student).toLocaleString("en-IN")
      );
      $("#paricipation_gender_male_class" + classType).html(
        (Math.round(total_male * 10) / 10).toFixed(1) + "%"
      );
      $("#paricipation_gender_trans_class" + classType).html(
        (Math.round(total_trans * 10) / 10).toFixed(1) + "%"
      );
      $("#paricipation_gender_female_class" + classType).html(
        (Math.round(total_female * 10) / 10).toFixed(1) + "%"
      );
      $("#participation_rural_class" + classType).html(
        Math.round(total_rural) + "%"
      );
      $("#participation_urban_class" + classType).html(
        Math.round(total_urban) + "%"
      );

      const doughnutChart = {
        gov: Math.round(gov.toFixed(0)),
        private: Math.round(priv.toFixed(0)),
        gov_aided: Math.round(gov_aided.toFixed(0)),
        cent_gov: Math.round(cent_gov.toFixed(0)),
      };
      const barChart = {
        gen: parseFloat((Math.round(gen_group * 10) / 10).toFixed(1)),
        sc: parseFloat((Math.round(sc_group * 10) / 10).toFixed(1)),
        st: parseFloat((Math.round(st_group * 10) / 10).toFixed(1)),
        obc: parseFloat((Math.round(obc_group * 10) / 10).toFixed(1)),
      };

      const doughnutChartColors = {
        class_all: {
          gov: "#75A9D9",
          private: "#CAC55F",
          gov_aided: "#E9769F",
          cent_gov: "#3CACAE",
        },
        class_10: {
          gov: "#3CACAE",
          private: "#72B562",
          gov_aided: "#EB6C69",
          cent_gov: "#E9769F",
        },
        class_8: {
          gov: "#75A9D9",
          private: "#72B562",
          gov_aided: "#E9769F",
          cent_gov: "#3CACAE",
        },
        class_3: {
          gov: "#75A9D9",
          private: "#CAC55F",
          gov_aided: "#E9769F",
          cent_gov: "#4CAF50",
        },
        class_5: {
          gov: "#75A9D9",
          private: "#E9769F",
          gov_aided: "#CAC55F",
          cent_gov: "#4CAF50",
        },
      };

      const barChartColors = {
        class_3: {
          sc: "#75A9D9",
          obc: "#E9769F",
          st: "#CAC55F",
          gen: "#4CAF50",
        },
        class_5: {
          sc: "#75A9D9",
          obc: "#E9769F",
          st: "#CAC55F",
          gen: "#4CAF50",
        },
        class_8: {
          sc: "#72B562",
          obc: "#E9769F",
          st: "#3CACAE",
          gen: "#75A9D9",
        },
        class_10: {
          sc: "#3CACAE",
          obc: "#EB6C69",
          st: "#72B562",
          gen: "#E9769F",
        },
        class_all: {
          sc: "#3CACAE",
          obc: "#EB6C69",
          st: "#72B562",
          gen: "#E9769F",
        },
      };
      createManagementPieChart(
        doughnutChart,
        doughnutChartColors["class_" + classType]
      );
      createSocialBarGraph(
        barChart,
        barChartColors["class_" + classType]
      );
    }
    if (screenType === "performance") {
      try {
        let empty = false;
        if (data.length === 0) {
          empty = true;
        } else {
          empty = false;
        }
        if (!empty) {
          if (
            selected_geography === "national" &&
            classType != "all"
          ) {
            data = [data.pop()];
          }
          if (classType === "all") {
            createCumulativeCardsForPerformance(data);
          }
          data.forEach((performance) => {
            createPerformanceScreen(performance, empty);
          });
        } else {
          if (classType === "all") {
            grades.forEach((grade) => {
              const sample_data = { grade: grade };
              if (grade !== "all") {
                createPerformanceScreen(sample_data, empty);
              }
            });
            createCumulativeCardsForPerformance([]);
          } else {
            createPerformanceScreen({ grade: classType }, empty);
          }
        }
      } catch (e) {
        console.log(e);
      } finally {
      }
    }
    if (screenType === "learning") {
      const all_subjects = class_subjects["class_all"];
      all_subjects.forEach((subject) => {
        if (classType === "all") {
          grades.forEach((grade) => {
            if (grade !== "all") {
              $(
                "." +
                subject.toLowerCase() +
                "_lo" +
                grade +
                "_class" +
                classType
              ).empty();
            }
          });
        } else {
          $(
            "." + subject.toLowerCase() + "_lo_class" + classType
          ).empty();
        }
      });

      let count_object = {
        language: 0,
        evs: 0,
        sst: 0,
        sci: 0,
        math: 0,
        mil: 0,
        eng: 0,
      };

      $(".state-header").hide();
      $(".district-header").hide();
      $(".national-header").hide();

      if (selected_geography === "national") {
        $(".national-header").show();
      } else if (selected_geography === "state") {
        $(".national-header").show();
        $(".state-header").show();
      } else {
        $(".state-header").show();
        $(".district-header").show();
        $(".national-header").show();
      }
      data.forEach((lo) => {
        let classStyle = "";
        if (lo.language === "language") {
          count_object.language += 1;
          if (
            count_object.language > 0 &&
            count_object.language % 2 === 0
          ) {
            classStyle = "light-blue";
          } else {
            classStyle = "";
          }
          if (classType === "all") {
            $(
              ".language_lo" + lo.grade + "_class" + classType
            ).append(getOutcomeRow(lo, classStyle));
          } else {
            $(".language_lo_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          }
        }
        if (lo.language === "math") {
          count_object.math += 1;
          if (count_object.math > 0 && count_object.math % 2 === 0) {
            classStyle = "light-pink";
          } else {
            classStyle = "";
          }
          if (classType === "all") {
            $(".math_lo" + lo.grade + "_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          } else {
            $(".math_lo_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          }
        }
        if (lo.language === "evs") {
          count_object.evs += 1;
          if (count_object.evs > 0 && count_object.evs % 2 === 0) {
            classStyle = "light-yellow";
          } else {
            classStyle = "";
          }

          if (classType === "all") {
            $(".evs_lo" + lo.grade + "_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          } else {
            $(".evs_lo_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          }
        }
        if (lo.language === "sci") {
          count_object.sci += 1;

          if (count_object.sci > 0 && count_object.sci % 2 === 0) {
            classStyle = "light-sagegreen";
          } else {
            classStyle = "";
          }

          if (classType === "all") {
            $(
              ".science_lo" + lo.grade + "_class" + classType
            ).append(getOutcomeRow(lo, classStyle));
          } else {
            $(".science_lo_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          }
        }
        if (lo.language === "sst") {
          count_object.sst += 1;
          if (count_object.sst > 0 && count_object.sst % 2 == 0) {
            classStyle = "light-green";
          } else {
            classStyle = "";
          }
          if (classType === "all") {
            $(
              ".social_lo" + lo.grade + "_class" + classType
            ).append(getOutcomeRow(lo, classStyle));
          } else {
            $(".social_lo_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          }
        }
        if (lo.language === "eng") {
          count_object.eng += 1;
          if (count_object.eng > 0 && count_object.eng % 2 === 0) {
            classStyle = "light-purple";
          } else {
            classStyle = "";
          }
          if (classType === "all") {
            $(
              ".english_lo" + lo.grade + "_class" + classType
            ).append(getOutcomeRow(lo, classStyle));
          } else {
            $(".english_lo_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          }
        }

        if (lo.language === "mil") {
          count_object.mil += 1;
          if (count_object.mil > 0 && count_object.mil % 2 === 0) {
            classStyle = "light-red";
          } else {
            classStyle = "";
          }
          if (classType === "all") {
            $(".mil_lo" + lo.grade + "_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          } else {
            $(".mil_lo_class" + classType).append(
              getOutcomeRow(lo, classStyle)
            );
          }
        }
      });
    }
    if (screenType === "feedback") {
      const current_demography =
        selected_geography === "district" ? "" : selected_geography;

      $("#feedback" + current_demography + "_pq_class3").empty();
      $("#feedback" + current_demography + "_tq_class3").empty();
      $("#feedback" + current_demography + "_htq_class3").empty();
      $("#feedback" + current_demography + "_sq_class3").empty();
      $("#feedback" + current_demography + "_sqn1_class3").empty();
      $("#feedback" + current_demography + "_sqn2_class3").empty();
      $("#feedback" + current_demography + "_sq_class3").empty();
      $("#feedback" + current_demography + "_tqn_class3").empty();

      let countPq2 = 1;
      let countPq3 = 1;
      let countPq1 = 1;
      let pq2Average = 0;
      let pq3Average = 0;
      data.forEach((fb) => {
        const percentage = Math.round(fb.avg);
        if (fb.level === "pq") {
          let pqChart = "";
          if (current_demography === "national") {
            pqChart =
              '<div class="col-lg-3 mb-15"><div class="student-fbcard light-blue-bg"><div class="progressbar-circle-sm progressbar-blue"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              '%</div></div></div><p class="title">' +
              capitalizeFirstLetter(
                capitalizeFirstLetter(fb.question_desc)
              ) +
              "</p></div></div>";
          } else {
            pqChart =
              '<div class="col-lg-3 mb-15"><div class="student-fbcard light-blue-bg"><div class="progressbar-circle-sm progressbar-blue"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              '%</div></div></div><p class="title">' +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div></div>";
          }
          $("#feedback" + current_demography + "_pq_class3").append(
            pqChart
          );
        }
        if (fb.level === "tq") {
          let tqChart = "";
          if (current_demography === "national") {
            tqChart =
              '<div class="col-md-4 mb-15"><div class="teacher-fbcard light-green-bg"><div class="progressbar-line progressbar-green"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="' +
              percentage +
              '" aria-valuemin="0" aria-valuemax="100" style="max-width: ' +
              percentage +
              '%"><span class="title">' +
              percentage +
              '%</span></div></div><p class="title">' +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div></div></div>";
          } else {
            tqChart =
              '<div class="col-md-4 mb-15"><div class="teacher-fbcard light-green-bg"><div class="progressbar-line progressbar-green"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="' +
              percentage +
              '" aria-valuemin="0" aria-valuemax="100" style="max-width: ' +
              percentage +
              '%"><span class="title">' +
              percentage +
              '%</span></div></div><p class="title">' +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div></div></div>";
          }
          $("#feedback" + current_demography + "_tq_class3").append(
            tqChart
          );
        }
        if (fb.level === "sq") {
          let htqChart = "";
          if (current_demography === "national") {
            htqChart =
              '<div class="col-md-3 mb-15"><div class="headteacher-fbcard"><div class="progressbar-circle-lg progressbar-pink"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              "%<p>" +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div></div></div></div></div>";
            $(
              "#feedback" + current_demography + "_sq_class3"
            ).append(htqChart);
          } else {
            htqChart =
              '<div class="col-md-3 mb-15"><div class="headteacher-fbcard"><div class="progressbar-circle-lg progressbar-pink"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              "%<p>" +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div></div></div></div></div>";
            $(
              "#feedback" + current_demography + "_htq_class3"
            ).append(htqChart);
          }
        }
        if (fb.level === "sqn1") {
          let sqn1 = "";
          if (current_demography === "national") {
            sqn1 =
              '<div class="col-md-4 mb-15"><div class="teacher-fbcard light-pink-bg"><div class="progressbar-line progressbar-pink"><div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="' +
              percentage +
              '" aria-valuemin="0" aria-valuemax="100" style="max-width: ' +
              percentage +
              '%"><span class="title">' +
              percentage +
              "%</span></div></div><p>" +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div></div></div>";
            $(
              "#feedback" + current_demography + "_sqn1_class3"
            ).append(sqn1);
          }
        }
        if (fb.level === "sqn2") {
          let sqn2 = "";
          if (current_demography === "national") {
            sqn2 =
              '<div class="col-lg-3 mb-15"><div class="student-fbcard light-pink-bg"><div class="progressbar-circle-sm progressbar-pink"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              '%</div></div></div><p class="title">' +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div></div>";
            $(
              "#feedback" + current_demography + "_sqn2_class3"
            ).append(sqn2);
          }
        }
        if (fb.level === "pq1") {
          let pq1 = "";
          if (current_demography === "national") {
          } else {
            pqh1 = capitalizeFirstLetter(fb.question_desc);
            pq1 =
              '<div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              "%</div></div>";
          }
          $("#feedback" + current_demography + "_pqh1_class3").html(
            pqh1
          );
          $("#feedback" + current_demography + "_pq1_class3").html(
            pq1
          );
        }
        if (fb.level === "pq2") {
          let pq2 = "";
          if (
            current_demography === "" ||
            current_demography === "state"
          ) {
            pq2 =
              '<div class="pendamic-progrssbar-content ptb-15"><div class="progressbar-circle-sm progressbar-pink"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              '%</div></div></div><p class="title">' +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div>";
            pq2Average += percentage;
          } else {
            pq2 =
              '<div class="pendamic-progrssbar-content ptb-15"><div class="progressbar-circle-sm progressbar-blue"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              '%</div></div></div><p class="title">' +
              capitalizeFirstLetter(fb.question_desc) +
              "</div>";
          }
          $(
            "#feedback" +
            current_demography +
            "_pq2_" +
            countPq2 +
            "_class3"
          ).html(pq2);
          countPq2 += 1;
        }
        if (fb.level === "pq3") {
          let pq3 = "";
          if (
            current_demography === "" ||
            current_demography === "state"
          ) {
            pq3 =
              '<div class="pendamic-progrssbar-content ptb-15"><div class="progressbar-circle-sm progressbar-green"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              '%</div></div></div><p class="title">' +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div>";
            $(
              "#feedback" +
              current_demography +
              "_pq3_" +
              countPq3 +
              "_class3"
            ).html(pq3);
            pq3Average += percentage;
          } else {
            pq3 =
              '<div class="pendamic-progrssbar-content ptb-15"><div class="progressbar-circle-sm progressbar-pink"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              '%</div></div></div><p class="title">' +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div>";
            $(
              "#feedback" +
              current_demography +
              "_pq3_" +
              countPq3 +
              "_class3"
            ).html(pq3);
          }
          countPq3 += 1;
        }

        if (fb.level === "pq2h") {
          pq2h =
            '<span id="feedbackstate_pq2_average_class3">' +
            Math.round(percentage) +
            "%</span>" +
            capitalizeFirstLetter(fb.question_desc) +
            "";
          $("." + current_demography + "pq2hquestion").html(pq2h);
        }
        if (fb.level === "pq3h") {
          pq3h =
            '<span id="feedbackstate_pq3_average_class3">' +
            Math.round(percentage) +
            "%</span>" +
            capitalizeFirstLetter(fb.question_desc) +
            "";
          $("." + current_demography + "pq3hquestion").html(pq3h);
        }
        if (fb.level === "tqn") {
          let tqn = "";
          if (current_demography === "national") {
            tqn =
              '<div class="col-md-3 mb-15"><div class="headteacher-fbcard"><div class="progressbar-circle-lg progressbar-green"><div class="progress" data-percentage="' +
              percentage +
              '"><span class="progress-left"><span class="progress-bar"></span></span><span class="progress-right"><span class="progress-bar"></span></span><div class="progress-value">' +
              percentage +
              "%<p>" +
              capitalizeFirstLetter(fb.question_desc) +
              "</p></div></div></div></div></div>";
            $(
              "#feedback" + current_demography + "_tqn_class3"
            ).append(tqn);
          }
        }
      });
    }

    if (screenType === "glimpses") {
      if (classType === "all") {
        data.forEach((glimpse) => {
          createGlimpsesScreen([glimpse]);
        });
      } else {
        createGlimpsesScreen(data);
      }
    }
    if (screenType === "achievement") {
      const current_demography =
        selected_geography === "district" ? "" : selected_geography;
      //console.log(data)
      achievement_data = "";
      current_grade = "";
      direction_gender_header = `<div class="card ach-card">
      <div class="ach-table table-responsive"><table class="table">
                              <thead>
                                <tr>
                                  <th>Factors</th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">A</span></th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">B</span></th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">C</span></th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">D</span></th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">E</span></th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">F</span></th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">G</span></th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">H</span></th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">I</span></th>
                                  <th class="bg-dark text-white text-center"><span class="category-item">J</span></th>
                                </tr>
                              </thead>
                              <tbody id="add_achievementstate">`;
      data.forEach((ach, index) => {
        if (index % 6 === 0) {
          if (classType == "all") {
            achievement_data +=
              '</tbody></table></div></div><br><h5 style="text-align: center;"><b>Grade' +
              ach.grade +
              "</b></h5>" +
              direction_gender_header;
          } else {
            achievement_data +=
              "</tbody></table></div></div><br>" +
              direction_gender_header;
          }
        } else {
          if (index === 0) {
            achievement_data += direction_gender_header;
          }
        }

        if (current_demography === "state") {
          if (ach.direction_gender == 0) {
            direction_gender =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_gender == 1) {
            direction_gender =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_gender == -1) {
            direction_gender =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_gender == 2) {
            direction_gender =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_location == 0) {
            direction_location =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_location == 1) {
            direction_location =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_location == -1) {
            direction_location =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_location == 2) {
            direction_location =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_sch_mgmt_gov == 0) {
            direction_sch_mgmt_gov =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_sch_mgmt_gov == 1) {
            direction_sch_mgmt_gov =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_sch_mgmt_gov == -1) {
            direction_sch_mgmt_gov =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_sch_mgmt_gov == 2) {
            direction_sch_mgmt_gov =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_sch_mgmt_govaid == 0) {
            direction_sch_mgmt_govaid =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_sch_mgmt_govaid == 1) {
            direction_sch_mgmt_govaid =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_sch_mgmt_govaid == -1) {
            direction_sch_mgmt_govaid =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_sch_mgmt_govaid == 2) {
            direction_sch_mgmt_govaid =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_sch_mgmt_priv == 0) {
            direction_sch_mgmt_priv =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_sch_mgmt_priv == 1) {
            direction_sch_mgmt_priv =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_sch_mgmt_priv == -1) {
            direction_sch_mgmt_priv =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_sch_mgmt_priv == 2) {
            direction_sch_mgmt_priv =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_sch_mgmt_centgov == 0) {
            direction_sch_mgmt_centgov =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_sch_mgmt_centgov == 1) {
            direction_sch_mgmt_centgov =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_sch_mgmt_centgov == -1) {
            direction_sch_mgmt_centgov =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_sch_mgmt_centgov == 2) {
            direction_sch_mgmt_centgov =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_sc == 0) {
            direction_category_sc =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_sc == 1) {
            direction_category_sc =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_sc == -1) {
            direction_category_sc =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_sc == 2) {
            direction_category_sc =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_st == 0) {
            direction_category_st =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_st == 1) {
            direction_category_st =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_st == -1) {
            direction_category_st =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_st == 2) {
            direction_category_st =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_obc == 0) {
            direction_category_obc =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_obc == 1) {
            direction_category_obc =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_obc == -1) {
            direction_category_obc =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_obc == 2) {
            direction_category_obc =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_gen == 0) {
            direction_category_gen =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_gen == 1) {
            direction_category_gen =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_gen == -1) {
            direction_category_gen =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_gen == 2) {
            direction_category_gen =
              '<td class="card-status card-none"></td>';
          }

          if (ach.direction_category_ews == 0) {
            direction_category_ews =
              '<td class="card-status card-zero"></td>';
          }
          if (ach.direction_category_ews == 1) {
            direction_category_ews =
              '<td class="card-status card-positive"></td>';
          }
          if (ach.direction_category_ews == -1) {
            direction_category_ews =
              '<td class="card-status card-negative"></td>';
          }
          if (ach.direction_category_ews == 2) {
            direction_category_ews =
              '<td class="card-status card-none"></td>';
          }

          // if(classType == 'all'){
          //   if(index % 6 === 0){
          // achievement_data += '<h5 style="text-align: center;"><b>Grade' +ach.grade+'</b></h5>'

          //   }
          // }

          achievement_data +=
            "<tr><td>" +
            ach.factor +
            "</td>" +
            direction_gender +
            direction_location +
            direction_sch_mgmt_gov +
            direction_sch_mgmt_govaid +
            direction_sch_mgmt_priv +
            direction_sch_mgmt_centgov +
            direction_category_sc +
            direction_category_st +
            direction_category_obc +
            direction_category_gen +
            "</tr>";
        } else {
          achievement_data = "<tr><td>No Data Available</td></tr>";
        }

        $("#add_achievement" + current_demography).html(
          achievement_data
        );
      });
    }
  } else {
    console.log("no data ");
  }
}

function setBreadCrumb(active, load = true) {
  selected_geography = active;
  let items = ["state", "national", "district"];
  items.map((item) => {
    if (item === active) {
      $("#" + item + "-tab").addClass("active");
      $("#" + item + "_geography").removeAttr("style");
      $("#breadcrumb").html(format_string(item));
    } else {
      $("#" + item + "-tab").removeClass("active");
      $("#" + item + "_geography").attr("style", "display:none");
    }
  });
  if (active === "state") {
    $("#district-tab").prop("disabled", true);
  }
  if (active === "national") {
    $("#state-tab").prop("disabled", true);
    $("#district-tab").prop("disabled", true);
  }
  if (active === "district") {
    items.map((item) => {
      $("#" + item + "-tab").prop("disabled", false);
    });
  }
  showAdditionalTab();
  if (geography_wise_screen[selected_geography].includes(screenType)) {
    setScreen(screenType, load);
  } else {
    setScreen("information", true);
  }
}

// formatting string
function format_string(str) {
  const formatted_string = str
    .split(" ")
    .map((word, index) => {
      return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
    })
    .join(" ");
  return formatted_string;
}

// highlighting districts
function toggleActiveDistrict(district_id, value) {
  if (value) {
    $(".districts").removeClass("active");
    $("#district_" + district_id).addClass("active");
  } else {
    $(".districts").removeClass("active");
    $("#district_" + district_id).removeClass("active");
  }
}

// creating rows for learning outcome
function getOutcomeRow(lo, classStyle) {
  let row = "";
  if (selected_geography === "district") {
    $('.learning-los-head').html('Performance of the district in achieving learning Outcomes (Los)')
    row =
      '<tr class="' +
      classStyle +
      '"><td>' +
      lo.subject_code +
      "</td><td>" +
      (lo.question === "0" ? "N/A" : lo.question) +
      "</td><td>" +
      Math.round(lo.avg) +
      "</td><td>" +
      Math.round(lo.state_avg) +
      "</td><td>" +
      Math.round(lo.national_avg) +
      "</td></tr>";
  } else if (selected_geography === "state") {
    $('.learning-los-head').html('Performance of the State/UT in achieving learning Outcomes (LOs)')
    row =
      '<tr class="' +
      classStyle +
      '"><td>' +
      lo.subject_code +
      "</td><td>" +
      (lo.question === "0" ? "N/A" : lo.question) +
      "</td><td>" +
      Math.round(lo.state_avg) +
      "</td><td>" +
      Math.round(lo.national_avg) +
      "</td></tr>";
  } else {
    row =
      '<tr class="' +
      classStyle +
      '"><td>' +
      lo.subject_code +
      "</td><td>" +
      (lo.question === "0" ? "N/A" : lo.question) +
      "</td><td>" +
      Math.round(lo.national_avg) +
      "</td></tr>";
  }
  return row;
}

//  creating preformance screen charts
function createPerformanceScreen(data, empty) {
  const current_demography =
    selected_geography === "district" ? "" : selected_geography;
  try {
    const all_data = data;

    // removing district table for state geography
    let state_table = [];
    if (!empty) {
      data = JSON.parse(all_data.data);
      if (current_demography === "state") {
        state_table = data.statedistrictlevelperformance;
        delete data.statedistrictlevelperformance;
      }
    }

    let graphs = [];

    // sections for performance screen
    const sections = ["Location", "Gender", "SocialGroup", "Management"];

    // getting subjects for classes
    if (classType === "all") {
      graphs = class_subjects["class_" + all_data.grade];
    } else {
      graphs = class_subjects["class_" + classType];
    }

    // scales for section column charts
    const scales = {
      gender: ["boys", "girls", "trans_gender"],
      management: ["govt", "govt_aided", "private", "central_govt"],
      socialgroup: ["sc", "st", "obc", "general"],
      location: ["rural", "urban"],
    };

    // setting required demography
    let demographics = [];
    if (current_demography === "") {
      demographics = ["district", "state", "national"];
    }
    if (current_demography === "state") {
      demographics = ["state", "national"];
    }
    if (current_demography === "national") {
      demographics = ["national"];
    }

    // table , pie chart criteria
    const table_criteria = [
      "below_basic",
      "basic",
      "proficient",
      "advanced",
    ];

    let doghnut = {};
    let encounterd = [];
    let encounterd_subject = [];

    // creating column charts ,cards , table
    sections.forEach((section) => {
      graphs.forEach((sub) => {
        let where = "";
        const color =
          colorCode[subjects_short_codes[sub.toLowerCase()]];

        if (classType !== "all") {
          where =
            section +
            sub +
            current_demography +
            "BarGraph_class" +
            classType;
        } else {
          where =
            section +
            sub +
            all_data.grade +
            current_demography +
            "BarGraph_class" +
            classType;
        }
        const scale = scales[section.toLowerCase()];
        let chart = [];

        // district bottom table
        if (!empty) {
          if (current_demography === "") {
            table_criteria.forEach((criteria) => {
              const table_tupple = Math.round(
                data[subjects_short_codes[sub.toLowerCase()]][
                "performance_level"
                ]["district"][criteria]
              );
              const table_where =
                "peformance_" +
                sub +
                "_" +
                criteria +
                "_table_class" +
                classType;
              $("#" + table_where).html(table_tupple);
            });
          }
        }

        //  state average chart and district/national average cards except class all
        let state_chart_data = [];
        demographics.forEach((demo, index) => {
          if (
            current_demography === "" ||
            current_demography === "national"
          ) {
            if (classType !== "all") {
              const card_where =
                screenType +
                current_demography +
                "_" +
                subjects_short_codes[sub.toLowerCase()] +
                "_" +
                demo +
                "_class" +
                classType;
              let cardData = 0;
              if (!empty) {
                cardData = Math.round(
                  data[
                  subjects_short_codes[sub.toLowerCase()]
                  ]["cards"][demo]
                );
              }
              updateCards(card_where, cardData);
            }
          }
          if (current_demography === "state") {
            if (classType !== "all") {
              const item = {
                color: color[index + 2],
                y: !empty
                  ? Math.round(
                    data[
                    subjects_short_codes[
                    sub.toLowerCase()
                    ]
                    ]["cards"][demo]
                  )
                  : 0,
                name: entities[demo + "_average"],
              };
              state_chart_data.push(item);
            }
          }
        });

        // state doghnuts, table and card charts
        if (current_demography === "state") {
          if (
            !encounterd_subject.includes(
              subjects_short_codes[sub.toLowerCase()]
            )
          ) {
            table_criteria.forEach((criteria) => {
              if (!encounterd.includes(criteria)) {
                doghnut[criteria] = !empty
                  ? [
                    data[
                    subjects_short_codes[
                    sub.toLowerCase()
                    ]
                    ]["performance_level"]["state"][
                    criteria
                    ],
                  ]
                  : [0];
                encounterd.push(criteria);
              } else {
                doghnut[criteria].push(
                  !empty
                    ? data[
                    subjects_short_codes[
                    sub.toLowerCase()
                    ]
                    ]["performance_level"]["state"][
                    criteria
                    ]
                    : 0
                );
              }
            });
            if (classType !== "all") {
              const card_chart_where =
                screenType +
                current_demography +
                "_" +
                subjects_short_codes[sub.toLowerCase()] +
                "_class" +
                classType;
              const final_state_chart_data = [
                {
                  data: state_chart_data,
                },
              ];
              createColumnChart(
                card_chart_where,
                final_state_chart_data,
                "single"
              );
            }
            encounterd_subject.push(
              subjects_short_codes[sub.toLowerCase()]
            );
          }
        }

        // creating main column chart for district and state only for evety class
        if (current_demography !== "national") {
          scale.forEach((element, index) => {
            let chart_data = [];
            demographics.forEach((demo) => {
              let dataToShow = 0;
              if (empty) {
                dataToShow = 0;
              } else {
                dataToShow = Math.round(
                  data[
                  subjects_short_codes[sub.toLowerCase()]
                  ][section.toLowerCase()][demo][element]
                );
              }
              chart_data.push(dataToShow);
            });
            const item = {
              color: color[index],
              data: chart_data,
              name: entities[element],
            };
            chart.push(item);
          });

          createColumnChart(where, chart);
        }
      });
    });

    //  creating pie chart and table for state
    if (current_demography === "state") {
      createDognutDataAndChart(
        doghnut,
        encounterd_subject,
        all_data.grade
      );
      let row = "<tr>";
      state_table.forEach((tupple, index) => {
        if ((index + 1) % 3 !== 0 && index !== state_table.length)
          row +=
            '<td><div class="tbody-content">' +
            tupple.district_name +
            '<span class="percentage-no light-purple">' +
            tupple.percentage +
            "</span></div></td>";
        else {
          if (index < state_table.length) {
            row += "</tr><tr>";
          } else {
            row += "</tr>";
          }
        }
      });
      if (classType !== "all") {
        $("#state_district_table_class" + classType).html(row);
      } else {
        $(
          "#state_district_table" +
          all_data.grade +
          "_class" +
          classType
        ).html(row);
      }
    }
  } catch (e) {
    console.log(e);
  } finally {
  }
}

function updateCards(cardPosition, data) {
  $("#" + cardPosition).html(data);
}

async function createInformationScreen(data) {
  // const dataToShow = data.pop()'
  let dataToShow = {};
  if (activeState === "" && activeDistrict === "") {
    dataToShow = data.pop();
    // console.log(dataToShow)
  } else {
    if (selected_geography === "district") {
      dataToShow = activeDistrict;
    }
    if (selected_geography === "state") {
      dataToShow = activeState;
    }
  }

  let state_name = "";
  if (activeState.state_name === "Delhi") {
    state_name = "nct of delhi";
  } else {
    state_name = dataToShow.state_name;
  }

  let prefix = "";
  if (selected_geography === "state") {
    prefix = "information_state_";
  }
  if (selected_geography === "district") {
    prefix = "information_district_";
  }
  if (selected_geography === "national") {
    prefix = "information_national_";
  }
  const where = prefix + "map";

  if (selected_geography === "district" || selected_geography === "state") {
    const selectedMapData = DISTRICT_MAPS.find(
      (data) => data.name === state_name.toUpperCase()
    );
    createChart(where, selectedMapData, dataToShow.district_id);
  } else {
    let states = JSON.parse(sessionStorage.getItem("states"));
    const state_data = states.map((state, index) => {
      if (state.state_name === "Delhi") {
        return ["nct of delhi", state.state_id];
      } else {
        return [state.state_name.toLowerCase(), state.state_id];
      }
    });
    generateNationalMap(where, state_data);
  }

  if (selected_geography !== "national") {
    $(".information_state_name").html(format_string(state_name));
  }
  // if (selected_geography === 'district' && dataToShow.total_district_area == 0) {
  //   $('#report_demographics_details').addClass('otp-dis');
  // }
  // else {
  //   if ($('#report_demographics_details').hasClass('otp-dis')) {
  //     $('#report_demographics_details').removeClass('otp-dis');
  //   }
  // }

  if (selected_geography === "national") {
    $("#" + prefix + "area_class3").html(
      dataToShow.total_district_area
        ? dataToShow.total_district_area + " million sq. km."
        : "-"
    );
    $("#" + prefix + "population_class3").html(
      dataToShow.total_population
        ? dataToShow.total_population + " million"
        : "-"
    );
  } else {
    $("#" + prefix + "area_class3").html(
      parseInt(dataToShow.total_district_area)
        ? parseInt(dataToShow.total_district_area).toLocaleString(
          "en-IN"
        ) + " sq. km."
        : "-"
    );
    $("#" + prefix + "population_class3").html(
      parseInt(dataToShow.total_population)
        ? parseInt(dataToShow.total_population).toLocaleString("en-IN")
        : "-"
    );
  }

  $("#" + prefix + "density_class3").html(
    parseInt(dataToShow.density_of_population)
      ? parseFloat(dataToShow.density_of_population).toLocaleString(
        "en-IN"
      ) + " per sq. km"
      : "-"
  );
  $("#" + prefix + "sex_ratio_class3").html(
    parseFloat(dataToShow.child_sex_ratio)
      ? parseFloat(dataToShow.child_sex_ratio).toLocaleString("en-IN")
      : "-"
  );
  $("#" + prefix + "literacy_class3").html(
    parseFloat(dataToShow.literacy_rate)
      ? parseFloat(dataToShow.literacy_rate).toLocaleString("en-IN") + "%"
      : "-"
  );

  if (selected_geography === "district") {
    $("." + prefix + "name").html(dataToShow.district_name);
    $("#" + prefix + "rural_class3").html(
      parseInt(dataToShow.rural_population)
        ? parseInt(dataToShow.rural_population).toLocaleString("en-IN")
        : "-"
    );
    $("#" + prefix + "urban_class3").html(
      parseInt(dataToShow.urban_population)
        ? parseInt(dataToShow.urban_population).toLocaleString("en-IN")
        : "-"
    );
    $("#" + prefix + "total_school_class3").html(
      Math.round(dataToShow.no_of_schools).toLocaleString("en-IN")
    );
    $("#" + prefix + "state_school_class3").html(
      Math.round(dataToShow.state_govt_schools).toLocaleString("en-IN")
    );
    $("#" + prefix + "govt_aided_school_class3").html(
      Math.round(dataToShow.govt_aided_schools).toLocaleString("en-IN")
    );
    $("#" + prefix + "govt_school_class3").html(
      Math.round(dataToShow.central_govt_schools).toLocaleString("en-IN")
    );
    $("#" + prefix + "private_school_class3").html(
      Math.round(dataToShow.private_unaided_reco_schools).toLocaleString(
        "en-IN"
      )
    );
    $("#" + prefix + "total_teacher_class3").html(
      (
        Math.round(dataToShow.teacher_state_govt_schools) +
        Math.round(dataToShow.teacher_central_govt_schools) +
        Math.round(dataToShow.teacher_govt_aided_schools) +
        Math.round(dataToShow.teacher_private_unaided_reco_schools)
      ).toLocaleString("en-IN")
    );
    $("#" + prefix + "state_teacher_class3").html(
      Math.round(dataToShow.teacher_state_govt_schools).toLocaleString(
        "en-IN"
      )
    );
    $("#" + prefix + "govt_teacher_class3").html(
      Math.round(dataToShow.teacher_central_govt_schools).toLocaleString(
        "en-IN"
      )
    );
    $("#" + prefix + "govt_aided_teacher_class3").html(
      Math.round(dataToShow.teacher_govt_aided_schools).toLocaleString(
        "en-IN"
      )
    );
    $("#" + prefix + "private_teacher_class3").html(
      Math.round(
        dataToShow.teacher_private_unaided_reco_schools
      ).toLocaleString("en-IN")
    );
    $("#" + prefix + "description_class3").html(dataToShow.description);
  }
}

async function createChart(where, data, district_id) {
  let districts = await JSON.parse(sessionStorage.getItem("districts"));
  console.log(data);
  data.data[0].data.forEach((item) => {
    if (item.id == district_id) {
      item.color = "#f7941c";
      item.borderColor = "#6e6f70";
      item.states.hover.color = "#f7941c";
    } else {
      item.color = "#9ec2e4";
      item.borderColor = "#6e6f70";
      item.states.hover.color = "#f7941c";
    }
  });
  await Highcharts.mapChart(where, {
    chart: {
      backgroundColor: "transparent",
    },
    title: {
      text: "",
    },
    legend: {
      enabled: false,
    },
    credits: {
      enabled: false,
    },
    series: data.data,
    tooltip: {
      enabled: true,
      pointFormat: "{point.name}",
    },
    navigation: {
      buttonOptions: {
        enabled: false,
      },
    },
    plotOptions: {
      series: {
        name: "District",
        events: {
          click: function (e) {
            console.log(e);
            const index = districts
              .map((district_data) => {
                return district_data.district_id;
              })
              .indexOf(parseInt(e.point.id));
            sessionStorage.setItem(
              "activeDistrict",
              JSON.stringify(districts[index])
            );
            location.href = base_url + "report-card/nas-2021";
          },
        },
      },
    },
  });
}

function filterList(state_id, type) {
  let ul = [];
  let li = [];
  let filter = "";

  if (type === district) {
    filter = $("#input_state_" + state_id)
      .val()
      .toLowerCase();
    ul = document.getElementById("district_" + state_id + "_list");
    li = ul.getElementsByClassName("state_" + state_id + "_districts");
  } else {
    filter = $("#input_state_filter").val().toLowerCase();
    ul = document.getElementById("state_list_national");
    li = ul.getElementsByClassName("national_states");
  }
  for (i = 0; i < li.length; i++) {
    let txtValue = "";
    if (type === district) {
      const a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
    } else {
      const a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      txtValue = txtValue.replace("radio_button_checked", "");
      txtValue = txtValue.replace("radio_button_unchecked", "");
    }
    if (txtValue.toLowerCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

function makeStateActive(state_id) {
  const all_states = JSON.parse(sessionStorage.getItem("states"));

  activeState = all_states
    .filter((state) => {
      if (state.udise_state_code === parseInt(state_id)) return state;
    })
    .pop();

  sessionStorage.setItem("activeState", JSON.stringify(activeState));
}

function makeDistrictActive(district_id) {
  const all_districts = JSON.parse(sessionStorage.getItem("districts"));

  activeDistrict = all_districts
    .filter((district) => {
      if (district.udise_district_code === district_id) return district;
    })
    .pop();

  sessionStorage.setItem("activeDistrict", JSON.stringify(activeDistrict));
}

function removeItem(item) {
  sessionStorage.removeItem(item);
}

async function generateNationalMap(where, data) {
  let states = await JSON.parse(sessionStorage.getItem("states"));
  await Highcharts.mapChart(where, {
    chart: {
      map: "countries/in/custom/in-all-disputed",
    },

    title: {
      text: "",
    },

    subtitle: {
      text: "",
    },
    legend: {
      enabled: false,
    },
    tooltip: {
      enabled: true,
      pointFormat: "{point.name}",
    },
    navigation: {
      buttonOptions: {
        enabled: false,
      },
    },
    credits: {
      enabled: false,
    },
    plotOptions: {
      series: {
        events: {
          click: function (e) {
            const index = states
              .map((state_data) => {
                return state_data.state_id;
              })
              .indexOf(e.point.value);
            sessionStorage.setItem(
              "activeState",
              JSON.stringify(states[index])
            );
            removeItem("activeDistrict");
            location.href = base_url + "report-card/nas-2021";
          },
        },
      },
    },
    series: [
      {
        data: data,
        name: "State",
        allowPointSelect: true,
        cursor: "pointer",
        color: "#9ec2e4",
        borderColor: "#6e6f70",
        states: {
          hover: {
            color: "#f7941c",
          },
          select: {
            color: "#9ec2e4",
          },
        },
        dataLabels: {
          enabled: false,
          format: "{point.name}",
        },
      },
    ],
  });
}

function showAdditionalTab() {
  $("#result-glimpses-tab").hide();
  $("#achievementstate-tab").hide();
  $("#learningoutcome-tab").hide();

  if (selected_geography === "national") {
    $("#result-glimpses-tab").show();
  } else if (selected_geography === "state") {
    $("#achievementstate-tab").show();
    $("#learningoutcome-tab").show();
  } else {
    $("#result-glimpses-tab").hide();
    $("#achievementstate-tab").hide();
    $("#learningoutcome-tab").show();
  }
}

function createDognutDataAndChart(data, subjects, grade) {
  let color_code = {
    mil: "#EB6C69",
    eng: "#C574BF",
    math: "#E9769F",
    sci: "#3CACAE",
    sst: "#72B562",
    language: "#75a9d9",
    evs: "#cac55f",
  };

  const titles = {
    below_basic: "Below 30%",
    basic: "30% - 50%",
    proficient: "51% - 75%",
    advanced: "Above 75%",
  };

  Object.keys(data).forEach((key, index) => {
    let series_data = [];
    let where = "";
    if (classType === "all") {
      where =
        "doghnut_" +
        key +
        grade +
        selected_geography +
        "_class" +
        classType;
    } else {
      where =
        "doghnut_" + key + selected_geography + "_class" + classType;
    }
    data[key].forEach((tupple, i) => {
      const series_obj = {
        name: subjects_full_names[subjects[i]],
        y: Math.round(tupple),
        z: 100,
        color: color_code[subjects[i]],
      };
      series_data.push(series_obj);
    });
    const final_doghnut = [
      {
        minPointSize: 10,
        innerSize: "50%",
        zMin: 0,
        name: "Range",
        data: series_data,
      },
    ];
    createDoghnutChart(where, series_data, titles[key]);
  });
}

function createGlimpsesScreen(data) {
  let graphs = [];

  // sections for performance screen
  const sections = ["Cards", "Location", "Gender", "Management", "Social"];
  const table_sections = ["Management", "Social"];

  const data_b = data[0];

  // getting subjects for classes
  if (classType === "all") {
    graphs = class_subjects["class_" + data_b.grade];
  } else {
    graphs = class_subjects["class_" + classType];
  }
  const category_data = JSON.parse(data_b.data);

  const colorCode = {
    language: ["#BAD4EC", "#9EC2E4", "#83B1DD", "#6997C3"],
    evs: ["#E5E2AF", "#DAD68F", "#CFCB6F", "#B6B156"],
    math: ["#F4BBCF", "#F09FBB", "#EB84A8", "#D26A8E"],
    social: ["#C7E1C0", "#ABD3A1", "#8FC481", "#68A358"],
    science: ["#B1DEDF", "#8ACDCE", "#63BDBE", "#369B9D"],
    mil: ["#F7C4C3", "#F3A6A5", "#EF8987", "#D4605F"],
    english: ["#E8C7E6", "#DCACD9", "#D190CD", "#B168AD"],
  };

  const section_legends = {
    cards: [
      "Substantially below National average",
      "Not substantially different from the National average",
      "Substantially above National average",
    ],
    gender: [
      "Boys perform significantly better than Girls",
      "No significant difference between Boys and Girls",
      "Girls perform significantly better than Boys",
    ],
    location: [
      "Urban perform significantly better than Rural",
      "No significant difference between Rural and Urban",
      "Rural perform significantly better than Urban",
    ],
    management: [
      "No significant difference between Govt. and Govt. Aided",
      "Govt. perform significantly better than Govt. Aided",
      "Govt. Aided perform significantly better than Govt.",
    ],
    socialgroup: [
      "No significant difference between Govt. and Govt. Aided",
      "Govt. perform significantly better than Govt. Aided",
      "Govt. Aided perform significantly better than Govt.",
    ],
  };
  sections.forEach((section) => {
    let where = "";
    graphs.forEach((sub) => {
      if (classType !== "all") {
        where =
          section + "National" + sub + "BarGraph_class" + classType;
      } else {
        if (section === "Cards") {
          where =
            section +
            "National" +
            data_b.grade +
            sub +
            "BarGraph_class" +
            classType;
        } else {
          where =
            section +
            "National" +
            data[0].grade +
            sub +
            "BarGraph_class" +
            classType;
        }
      }
      const section_data =
        category_data[subjects_short_codes[sub.toLowerCase()]][
        section.toLowerCase()
        ];
      const required_colors = colorCode[sub.toLowerCase()];
      if (table_sections.includes(section)) {
        if (classType !== "all") {
          getGlimpsesData(
            subjects_short_codes[sub.toLowerCase()],
            section.toLowerCase(),
            "type",
            where
          );
        } else {
          getGlimpsesData(
            subjects_short_codes[sub.toLowerCase()],
            section.toLowerCase(),
            data_b.grade,
            where
          );
        }
      } else {
        generateGlimpsesMap(
          where,
          required_colors,
          section_data,
          section_legends[section.toLowerCase()]
        );
      }
    });
  });
}

// creating glimpses chart
async function generateGlimpsesMap(where, req_colors, section_data, legends) {
  let states = await JSON.parse(sessionStorage.getItem("states"));
  let category1 = [];
  let category2 = [];
  let category3 = [];
  let category4 = [];
  await states.map((state, index) => {
    const type_of_state = getColourOfState(
      req_colors,
      state.udise_state_code,
      section_data
    );
    let required_data = [];
    if (state.state_name === "Delhi") {
      required_data = ["nct of delhi", state.udise_state_code];
    } else {
      required_data = [
        state.state_name.toLowerCase(),
        state.udise_state_code,
      ];
    }
    if (type_of_state.category === 0) {
      category1.push(required_data);
    } else if (type_of_state.category === 1) {
      category2.push(required_data);
    } else if (type_of_state.category === 2) {
      category3.push(required_data);
    } else {
      category4.push(required_data);
    }
    return required_data;
  });

  try {
    const states_chart = await Highcharts.mapChart(where, {
      chart: {
        map: "countries/in/custom/in-all-disputed",
        backgroundColor: "transparent",
      },
      title: {
        text: "",
      },

      subtitle: {
        text: "",
      },
      legend: {
        enabled: true,
      },
      tooltip: {
        enabled: true,
        pointFormat: "{point.name}",
      },
      navigation: {
        buttonOptions: {
          enabled: false,
        },
      },
      credits: {
        enabled: false,
      },
      plotOptions: {
        series: {
          events: {
            click: function (e) {
              const index = states
                .map((state_data) => {
                  return state_data.state_id;
                })
                .indexOf(e.point.value);
              sessionStorage.setItem(
                "activeState",
                JSON.stringify(states[index])
              );
              removeItem("activeDistrict");
              location.href = base_url + "report-card/nas-2021";
            },
          },
        },
      },
      series: [
        {
          name: legends[0],
          data: category1,
          allAreas: false,
          allowPointSelect: true,
          cursor: "pointer",
          color: req_colors[0],
          borderColor: "#6e6f70",
          states: {
            hover: {
              color: "#f7941c",
            },
            select: {
              color: "#9ec2e4",
            },
          },
          dataLabels: {
            enabled: false,
            format: "{point.name}",
          },
        },
        {
          data: category2,
          name: legends[1],
          color: req_colors[1],
          allowPointSelect: true,
          allAreas: false,
          cursor: "pointer",
          borderColor: "#6e6f70",
          states: {
            hover: {
              color: "#f7941c",
            },
            select: {
              color: "#9ec2e4",
            },
          },
          dataLabels: {
            enabled: false,
            format: "{point.name}",
          },
        },
        {
          data: category3,
          name: legends[2],
          color: req_colors[2],

          allowPointSelect: true,
          allAreas: false,
          cursor: "pointer",
          borderColor: "#6e6f70",
          states: {
            hover: {
              color: "#f7941c",
            },
            select: {
              color: "#9ec2e4",
            },
          },
          dataLabels: {
            enabled: false,
            format: "{point.name}",
          },
        },
        {
          data: category4,
          name: legends[3],
          color: req_colors[3],
          showInLegend: false,
          allowPointSelect: true,
          allAreas: false,
          cursor: "pointer",
          borderColor: "#6e6f70",
          states: {
            hover: {
              color: "#f7941c",
            },
            select: {
              color: "#9ec2e4",
            },
          },
          dataLabels: {
            enabled: false,
            format: "{point.name}",
          },
        },
      ],
    });
    if (Object.keys(states_chart).length !== 0) {
      states_chart.series.forEach((series) => {
        series.data.forEach((el) => {
          const info = getColourOfState(
            req_colors,
            el["value"],
            section_data
          );
          el.color = info.color;
          return el;
        });
      });

      states_chart.update({
        series: [
          {
            data: states_chart.series[0].data,
          },
          {
            data: states_chart.series[1].data,
          },
          {
            data: states_chart.series[2].data,
          },
          {
            data: states_chart.series[3].data,
          },
        ],
      });
    }
  } catch (e) {
    console.log(e);
  }
}

function getColourOfState(req_colors, state_id, section_data) {
  let color = "";
  let category = "";
  section_data.forEach((state) => {
    if (state_id === state.state_id) {
      color = req_colors[state.category];
      category = state.category;
    }
  });
  return { color: color, category: Math.round(category) };
}

function createCumulativeCardsForPerformance(data) {
  let cumulative_subject_count = {
    language: {
      district: 0,
      state: 0,
      national: 0,
    },
    evs: {
      district: 0,
      state: 0,
      national: 0,
    },
    math: {
      district: 0,
      state: 0,
      national: 0,
    },
    mil: {
      district: 0,
      state: 0,
      national: 0,
    },
    sci: {
      district: 0,
      state: 0,
      national: 0,
    },
    sst: {
      district: 0,
      state: 0,
      national: 0,
    },
    eng: {
      district: 0,
      state: 0,
      national: 0,
    },
  };

  const divisor = {
    evs: 2,
    language: 3,
    math: 4,
    mil: 1,
    sci: 2,
    sst: 2,
    eng: 1,
  };
  let demographics = [];
  if (selected_geography === "district") {
    demographics = ["district", "state", "national"];
  }
  if (selected_geography === "state") {
    demographics = ["state", "national"];
  }
  if (selected_geography === "national") {
    demographics = ["national"];
  }

  data.forEach((performance) => {
    const json_data = JSON.parse(performance.data);
    if (selected_geography === "state") {
      delete json_data["statedistrictlevelperformance"];
    }
    Object.keys(json_data).forEach((subject) => {
      const cards = json_data[subject]["cards"];
      Object.keys(cards).forEach((geog) => {
        cumulative_subject_count[subject][geog] += Math.round(
          cards[geog]
        );
      });
    });
  });

  Object.keys(cumulative_subject_count).forEach((key) => {
    let state_chart_data = [];
    let subject = key;
    demographics.forEach((demo, index) => {
      if (selected_geography !== "state") {
        let where = "";
        let val = 0;
        if (selected_geography === "district") {
          where =
            screenType +
            "_" +
            subject +
            "_" +
            demo +
            "_class" +
            classType;
          val = Math.round(
            cumulative_subject_count[subject][demo] /
            divisor[subject]
          );
        }
        if (selected_geography === "national") {
          val = Math.round(
            cumulative_subject_count[subject][demo] /
            divisor[subject]
          );
          where =
            screenType +
            selected_geography +
            "_" +
            subject +
            "_" +
            demo +
            "_class" +
            classType;
        }
        updateCards(where, val);
      } else {
        const color = colorCode[key];
        const item = {
          color: color[index + 2],
          y: Math.round(
            cumulative_subject_count[subject][demo] /
            divisor[subject]
          ),
          name: entities[demo + "_average"],
        };

        state_chart_data.push(item);
      }
    });
    if (selected_geography === "state") {
      const card_chart_where =
        screenType +
        selected_geography +
        "_" +
        key +
        "_class" +
        classType;
      const final_state_chart_data = [
        {
          data: state_chart_data,
        },
      ];
      createColumnChart(
        card_chart_where,
        final_state_chart_data,
        "single"
      );
    }
  });
}

function preventSymbols(e) {
  var key = e.keyCode;
  var regex = /^[A-Za-z]+$/;

  //Validate TextBox value against the Regex.
  var isValid = regex.test(String.fromCharCode(key));
  if (!isValid) {
    e.preventDefault();
  }
}

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

function setColorCode(sub) {
  const codes = {
    language: ["#75a9d9", "#e8f0f9"],
    math: ["#e9769f", "#fee5ee"],
    evs: ["#cac55f", "#f4f3df"],
    sci: ["#3cacae", "#d8eeef"],
    sst: ["#72b562", "#e3f0e0"],
    eng: ["#c574bf", "#f3e3f2"],
    mil: ["#eb6c69", "#fbe1e1"],
  };

  $(".glimpse-header").css("background-color", codes[sub][0]);
  $(".glimpse-body").css("background-color", codes[sub][1]);
  $(".glimpse-header").css("color", "#fff");
  $(".glimpse-table .table").css("color", "#5e5e5e");
}

function setModalHeader(data, sub, legend) {
  const subject = {
    language: "Language",
    math: "Mathematics",
    evs: "Evs",
    sci: "Science",
    sst: "Social Science",
    eng: "English",
    mil: "Mil",
  };
  if (data.grade == 3) {
    if (legend == "cards") {
      $("#data-header").html(
        "Performance of States/UTs in Class III : " +
        subject[sub].toUpperCase()
      );
    } else {
      $("#data-header").html(
        "Performance of States/UTs by " +
        capitalizeFirstLetter(legend) +
        " in Class III : " +
        subject[sub].toUpperCase()
      );
    }
  } else if (data.grade == 5) {
    if (legend == "cards") {
      $("#data-header").html(
        "Performance of States/UTs in Class V : " +
        subject[sub].toUpperCase()
      );
    } else {
      $("#data-header").html(
        "Performance of States/UTs by " +
        capitalizeFirstLetter(legend) +
        " in Class V : " +
        subject[sub].toUpperCase()
      );
    }
  } else if (data.grade == 8) {
    if (legend == "cards") {
      $("#data-header").html(
        "Performance of States/UTs in Class VIII : " +
        subject[sub].toUpperCase()
      );
    } else {
      $("#data-header").html(
        "Performance of States/UTs by " +
        capitalizeFirstLetter(legend) +
        " in Class VIII : " +
        subject[sub].toUpperCase()
      );
    }
  } else {
    if (legend == "cards") {
      $("#data-header").html(
        "Performance of States/UTs in Class X : " +
        subject[sub].toUpperCase()
      );
    } else {
      $("#data-header").html(
        "Performance of States/UTs by " +
        capitalizeFirstLetter(legend) +
        " in Class X : " +
        subject[sub].toUpperCase()
      );
    }
  }
}

function getGlimpsesData(subject, legend, clas = "type", where) {
  glimpses_data = JSON.parse(sessionStorage.getItem("glimpses_data"));
  if (clas != "type") {
    glimpses_data = glimpses_data.filter((data) => {
      return data.grade == clas;
    });
  }
  setModalHeader(glimpses_data[0], subject, legend);
  setColorCode(subject);
  getGlimpsesSubjectData(
    JSON.parse(glimpses_data[0].data),
    subject,
    legend,
    where
  );
}

function getGlimpsesSubjectData(data, subject, legend, where) {
  Object.keys(data).forEach((sub) => {
    if (sub == subject) {
      getGlimpsesLegendData(data[sub], legend, where);
    }
  });
}

function getGlimpsesLegendData(data, legend, where) {
  Object.keys(data).forEach((legends) => {
    if (legends == legend) {
      generateGlimpsesTable(data[legend], legend, where);
    }
  });
}

function generateGlimpsesTable(data, legend, where) {
  innerHtml = "";
  let states = JSON.parse(sessionStorage.getItem("states"));
  let current_state = "";
  let exceptions = ["management", "social"];
  innerHtml = setTableHead(legend);
  data.forEach((actual_data) => {
    current_state = states.filter((state) => {
      if (state.udise_state_code == actual_data.state_id) {
        return state.state_name;
      }
    });
    state_name =
      current_state.length != 0
        ? current_state[0].state_name
        : "National";
    if (legend == "cards") {
      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data["ss"] != 0
          ? Math.round(actual_data["ss"])
          : "-"
        }</td>
                  <td>${actual_data["se"] != 0
          ? (
            Math.round(
              parseFloat(actual_data["se"]) * 100
            ) / 100
          ).toFixed(1)
          : "-"
        }</td>`;
      innerHtml += generateIndictor(actual_data.category);
      innerHtml += "</tr>";
    } else if (legend == "gender") {
      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data["girls_ss"] != 0
          ? Math.round(actual_data["girls_ss"])
          : "-"
        }</td>
                  <td>${actual_data["boys_ss"] != 0
          ? Math.round(actual_data["boys_ss"])
          : "-"
        }</td>`;

      innerHtml += generateIndictor(actual_data.category);
      innerHtml += "</tr>";
    } else if (legend == "location") {
      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data["rural_ss"] != 0
          ? Math.round(actual_data["rural_ss"])
          : "-"
        }</td>
                  <td>${actual_data["urban_ss"] != 0
          ? Math.round(actual_data["urban_ss"])
          : "-"
        }</td>`;

      innerHtml += generateIndictor(actual_data.category);
      innerHtml += "</tr>";
    } else if (legend == "management") {
      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data["govt_ss"] != 0
          ? Math.round(actual_data["govt_ss"])
          : "-"
        }</td>
                  <td>${actual_data["govt_aided_ss"] != 0
          ? Math.round(actual_data["govt_aided_ss"])
          : "-"
        }</td>`;

      innerHtml += generateIndictor(actual_data.category);

      innerHtml += `<td>${actual_data["pvt_ss"] != 0
        ? Math.round(actual_data["pvt_ss"])
        : "-"
        }</td>`;

      innerHtml += generateIndictor(actual_data.pvt_category);

      innerHtml += `<td>${actual_data["central_govt_ss"] != 0
        ? Math.round(actual_data["central_govt_ss"])
        : "-"
        }</td>`;

      innerHtml += generateIndictor(actual_data.central_govt_category);
      innerHtml += "</tr>";
    } else {
      innerHtml += `<tr>
                  <td>${state_name}</td>
                  <td>${actual_data["gen_ss"] != 0
          ? Math.round(actual_data["gen_ss"])
          : "-"
        }</td>
                  <td>${actual_data["sc_ss"] != 0
          ? Math.round(actual_data["sc_ss"])
          : "-"
        }</td>`;

      innerHtml += generateIndictor(actual_data.gen_category);

      innerHtml += `<td>${actual_data["st_ss"] != 0
        ? Math.round(actual_data["st_ss"])
        : "-"
        }</td>`;

      innerHtml += generateIndictor(actual_data.st_category);

      innerHtml += `<td>${actual_data["obc_ss"] != 0
        ? Math.round(actual_data["obc_ss"])
        : "-"
        }</td>`;

      innerHtml += generateIndictor(actual_data.obc_category);
      innerHtml += "</tr>";
    }
  });

  innerHtml += `</tbody>`;
  if (exceptions.includes(legend)) {
    innerHtml += `</table>`;
    $("#" + where).html(innerHtml);
  } else {
    $("#display_data").html(innerHtml);
  }
}

function setTableHead(legend) {
  if (legend == "cards") {
    return `<thead>
              <tr>
                <th scope="col">State/UT</th>
                <th scope="col">Mean</th>
                <th scope="col">SE</th>
                <th scope="col">Significance</th>
              </tr>
            </thead>
            <tbody>`;
  } else if (legend == "gender") {
    return `<thead>
              <tr>
                <th scope="col">State/UT</th>
                <th scope="col">Girls</th>
                <th scope="col">Boys</th>
                <th scope="col">Significance</th>
              </tr>
            </thead>
            <tbody>`;
  } else if (legend == "location") {
    return `<thead>
              <tr>
                <th scope="col">State/UT</th>
                <th scope="col">Rural</th>
                <th scope="col">Urban</th>
                <th scope="col">Significance</th>
              </tr>
            </thead>
            <tbody>`;
  } else if (legend == "management") {
    return `<table class="ms_table table"><thead>
                  <tr>
                    <th scope="col">State/UT</th>
                    <th scope="col">State Govt.</th>
                    <th scope="col">Govt. Aided</th>
                    <th scope="col">Significance</th>
                    <th scope="col">Private Rec.</th>
                    <th scope="col">Significance</th>
                    <th scope="col">Central Govt.</th>
                    <th scope="col">Significance</th>
                  </tr>
                </thead>
                <tbody>`;
  } else {
    return `<table class="ms_table table"><thead>
                  <tr>
                    <th scope="col">State/UT</th>
                    <th scope="col">General</th>
                    <th scope="col">SC</th>
                    <th scope="col">Significance</th>
                    <th scope="col">ST</th>
                    <th scope="col">Significance</th>
                    <th scope="col">OBC</th>
                    <th scope="col">Significance</th>
                  </tr>
                </thead>
                <tbody>`;
  }
}

function generateIndictor(category) {
  innerHtml = "";
  if (category == 0) {
    innerHtml = `<td>
                  <div class="icon-status icon-color-red">
                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path class="heroicon-ui" d="M11 18.59V3a1 1 0 0 1 2 0v15.59l5.3-5.3a1 1 0 0 1 1.4 1.42l-7 7a1 1 0 0 1-1.4 0l-7-7a1 1 0 0 1 1.4-1.42l5.3 5.3z"/></svg>
                  </div>
                </td>`;
  } else if (category == 1) {
    innerHtml = `<td>
                  <div class="icon-status icon-color-blue">
                  <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 16" width="32" height="16">
                    <path id="Arrows_Left_x2F_Right" class="s0" d="m0.3 8.7c-0.4-0.4-0.4-1 0-1.4l6.9-7c0.4-0.4 1-0.4 1.4 0 0.4 0.4 0.4 1 0 1.4l-5.2 5.3h25.2l-5.2-5.3c-0.4-0.4-0.4-1 0-1.4 0.4-0.4 1-0.4 1.4 0l6.9 7c0.4 0.4 0.4 1 0 1.4l-6.9 7c-0.4 0.4-1 0.4-1.4 0-0.4-0.4-0.4-1 0-1.4l5.2-5.3h-25.2l5.2 5.3c0.4 0.4 0.4 1 0 1.4-0.4 0.4-1 0.4-1.4 0z"/>
                  </svg>
                  </div>
                </td>`;
  } else if (category == 2) {
    innerHtml = `<td>
                  <div class="icon-status icon-color-green">
                  <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path id="Layer" class="s0" d="m5.7 10.7q-0.3 0.3-0.7 0.2-0.4 0-0.7-0.3-0.2-0.2-0.2-0.6-0.1-0.4 0.2-0.7l7-7q0.1-0.1 0.3-0.2 0.2-0.1 0.4-0.1 0.2 0 0.4 0.1 0.2 0.1 0.3 0.2l7 7q0.3 0.3 0.2 0.7 0 0.4-0.2 0.6-0.3 0.3-0.7 0.3-0.4 0.1-0.7-0.2l-5.3-5.3v15.6q0 0.4-0.3 0.7-0.3 0.3-0.7 0.3-0.4 0-0.7-0.3-0.3-0.3-0.3-0.7v-15.6z"/>
                  </svg>
                  </div>
                </td>`;
  } else {
    innerHtml = `<td>
                  -
                </td>`;
  }

  return innerHtml;
}