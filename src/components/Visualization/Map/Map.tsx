import React, { useEffect, useState } from 'react';
import MapDropdown from './MapDropdown';
import Highcharts from "highcharts";
import HighchartsReact from "highcharts-react-official";
import highchartsMap from "highcharts/modules/map";

// const mapDataIE = require("@highcharts/map-collection/countries/in/custom/in-all-disputed.geo.json");
// const Highcharts = require("../../../../public/assets/front/js/highmaps.js");
const mapDataIE = require("../../../../public/assets/front/js/in-all-disputed.js");
highchartsMap(Highcharts);



const Map = (props: any) => {
  const { data, subOption } = props

  let category: Array<any[]> = [[], [], [], []]


  useEffect(() => {
    // console.log(data)
    if (data !== undefined) {
      makeSeries(data);
    }
  }, [data])

  const makeSeries = (data: Object) => {

    const values = Object.values(data)
    let min = Math.min(...values)
    let max = Math.max(...values)
    const logic = Math.round((max - min) / 4)
    let ranges: Array<Object> = []
    max = min + logic
    for (let i = 0; i < 4; i++) {
      ranges[i] = { 'min': min, 'max': max }
      min = max + 1
      max += logic + 1
    }
    Object.keys(data).forEach((item: string) => {
      ranges.forEach((range, index) => {
        if (data[item] >= range['min'] && data[item] <= range['max']) {
          category[index].push([item, data[item]])
        }
      })
    })
    console.log(category)
  }
  const mapOptions = {
    chart: {
      map: mapDataIE
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
    tooltip: { enabled: true },
    navigation: {
      buttonOptions: {
        enabled: false
      }
    },
    credits: {
      enabled: false
    },
    series: [{
      // mapData: mapDataIE,
      name: 'State',
      allowPointSelect: true,
      cursor: 'pointer',
      color: "#9ec2e4",
      borderColor: "#6e6f70",
      states: {
        hover: {
          color: '#f7941c'
        },
        select: {
          color: '#9ec2e4'
        }
      },
      dataLabels: {
        enabled: false,
        format: subOption
      },

    }]
    // series: [
    //   {
    //     name: 'legends',
    //     mapData: mapDataIE,
    //     data: category[0],
    //     allAreas: false,
    //     allowPointSelect: true,
    //     cursor: "pointer",
    //     // color: req_colors[0],
    //     borderColor: "#6e6f70",
    //     states: {
    //       hover: {
    //         color: "#f7941c",
    //       },
    //       select: {
    //         color: "#9ec2e4",
    //       },
    //     },
    //     dataLabels: {
    //       enabled: false,
    //       format: "{point.name}",
    //     },
    //   },
    //   {
    //     data: category[1],
    //     name: 'legends',
    //     // color: req_colors[1],
    //     allowPointSelect: true,
    //     allAreas: false,
    //     cursor: "pointer",
    //     borderColor: "#6e6f70",
    //     states: {
    //       hover: {
    //         color: "#f7941c",
    //       },
    //       select: {
    //         color: "#9ec2e4",
    //       },
    //     },
    //     dataLabels: {
    //       enabled: false,
    //       format: "{point.name}",
    //     },
    //   },
    //   {
    //     data: category[2],
    //     name: 'legends',
    //     // color: req_colors[2],

    //     allowPointSelect: true,
    //     allAreas: false,
    //     cursor: "pointer",
    //     borderColor: "#6e6f70",
    //     states: {
    //       hover: {
    //         color: "#f7941c",
    //       },
    //       select: {
    //         color: "#9ec2e4",
    //       },
    //     },
    //     dataLabels: {
    //       enabled: false,
    //       format: "{point.name}",
    //     },
    //   },
    //   {
    //     data: category[3],
    //     name: 'legends',
    //     // color: req_colors[3],
    //     showInLegend: false,
    //     allowPointSelect: true,
    //     allAreas: false,
    //     cursor: "pointer",
    //     borderColor: "#6e6f70",
    //     states: {
    //       hover: {
    //         color: "#f7941c",
    //       },
    //       select: {
    //         color: "#9ec2e4",
    //       },
    //     },
    //     dataLabels: {
    //       enabled: false,
    //       format: "{point.name}",
    //     },
    //   },
    // ],

  }
  return (
    <div className="apcard-graph-wrap">
      <div className="map-content">
        <HighchartsReact
          constructorType={'mapChart'}
          highcharts={Highcharts}
          options={mapOptions}
          allowChartUpdate={true}
          immutable={true}
        />
      </div>
    </div>
  )
}

export default Map