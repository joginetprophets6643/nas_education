import React, { useEffect, useState } from 'react';
import MapDropdown from './MapDropdown';
import Highcharts from "highcharts";
import HighchartsReact from "highcharts-react-official";
import highchartsMap from "highcharts/modules/map";

const mapDataIE = require("@highcharts/map-collection/countries/in/custom/in-all-disputed.geo.json");

highchartsMap(Highcharts);


const Map = (props: any) => {
  const { data, subOption } = props
  const [options, setOptions] = useState<any>()
  const [mapOptions, setmapOptions] = useState<any>({
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
      enabled: true
    },
    mapNavigation: {
      enabled: false,
    },

    series: [
      {
        name: 'State',
        allowPointSelect: true,
        cursor: 'pointer',
        borderColor: "#6E6E6E",
        color: '#FFB142',
        type: "map",
        states: {
          hover: {
            color: "#006bb6"
          }
        },
        dataLabels: {
          enabled: false,
          format: "{point.name}"
        },
        allAreas: false,
        data: category[0]
      },
      {
        name: 'State',
        allowPointSelect: true,
        cursor: 'pointer',
        borderColor: "#6E6E6E",
        color: '#000000',
        type: "map",
        states: {
          hover: {
            color: "#006bb6"
          }
        },
        dataLabels: {
          enabled: false,
          format: "{point.name}"
        },
        allAreas: false,
        data: [
          ['madhya pradesh', 1]
        ]
      }
    ]
  })

  let category: Array<any[]> = [[], [], [], []]

  useEffect(() => {
    console.log(data)
    mapDataIE.features.forEach((state: any) => {
      state.properties.color = 'black'
    })
    if (data !== undefined) {
      makeSeries(data);
    }
  }, [data])
  let custom_data: any = []



  // useEffect(() => {
  //   let temp_option = {
  //     title: {
  //       text: "Widget click by location",
  //       style: {
  //         color: "black"
  //       }
  //     },
  //     chart: {
  //       backgroundColor: "transparent",
  //       type: "map",
  //       map: mapDataIE
  //     },
  //     mapNavigation: {
  //       enabled: true,
  //       enableButtons: false
  //     },
  //     credits: {
  //       enabled: false
  //     },
  //     colorAxis: {
  //       dataClasses: [
  //         {
  //           from: 1,
  //           color: "#C40401",
  //           name: "widget name one"
  //         },
  //         {
  //           from: 2,
  //           color: "#0200D0",
  //           name: "widget name two"
  //         }
  //       ]
  //     },
  //     plotOptions: {
  //       series: {
  //         events: {
  //           click: function (e: any) {
  //             alert(e)
  //           },
  //         },
  //       },
  //     },
  //     // tooltip: {
  //     //   pointFormatter: function () {
  //     //     return this.name;
  //     //   }
  //     // },
  //     // legend: {
  //     //   align: "right",
  //     //   verticalAlign: "top",
  //     //   x: -100,
  //     //   y: 70,
  //     //   floating: true,
  //     //   layout: "vertical",
  //     //   valueDecimals: 0,
  //     //   backgroundColor:
  //     //     // theme
  //     //     (Highcharts.defaultOptions &&
  //     //       Highcharts.defaultOptions.legend &&
  //     //       Highcharts.defaultOptions.legend.backgroundColor) ||
  //     //     "rgba(255, 255, 255, 0.85)"
  //     // },
  //     series: [
  //       {
  //         // name: "world map",
  //         color: 'black',
  //         dataLabels: {
  //           enabled: true,
  //           color: "#fcba03",
  //           // format: "{point.postal-code}",
  //           style: {
  //             textTransform: "uppercase"
  //           }
  //         },
  //         states: {
  //           hover: {
  //             color: '#f7941c'
  //           },
  //           select: {
  //             color: '#9ec2e4'
  //           }
  //         },

  //         tooltip: {
  //           ySuffix: " %"
  //         },
  //         cursor: "pointer",
  //         joinBy: ["hc-key", "hc-key"],
  //         data: [],
  //       }
  //     ]
  //   } as any
  //   // temp_option.series[0].mapData = mapDataIE
  //   mapDataIE['features'].forEach((state: any, i: number) => {
  //     if (state.id && state.geometry === undefined) {
  //       let name = state["properties"]["name"];
  //       let value = (i % 2) + 1;
  //       let postalCode = state["id"];

  //       let type = value === 1 ? "widget name one" : "widget name two";
  //       let row = i;

  //       temp_option?.series[0].data.push({
  //         value: value,
  //         name: name,
  //         code: postalCode,
  //         type: type
  //       })
  //       // temp_option?.series[0].mapData.push(state)

  //     }
  //   })
  //   // temp_option.chart.map = mapDataIE
  //   setOptions({ ...temp_option })
  // }, [])


  // useEffect(() => {
  //   // console.log(options)
  // }, [options])

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
        if (data[item] >= range['min'] && data[item] <= range['max'] && item.toLowerCase() !== 'ladakh') {
          category[index].push([item.toLowerCase(), data[item]])
        }
      })
      // if (item.toLowerCase() != 'ladakh') {
      //   custom_data.push({ 'hc-key': item.toLowerCase(), 'value': data[item], 'color': 'black' })
      // }
    })
    console.log(category)
  }

  let mapOptions = {
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
      enabled: true
    },
    mapNavigation: {
      enabled: false,
    },

    series: [
      {
        name: 'State',
        allowPointSelect: true,
        cursor: 'pointer',
        borderColor: "#6E6E6E",
        color: '#FFB142',
        type: "map",
        states: {
          hover: {
            color: "#006bb6"
          }
        },
        dataLabels: {
          enabled: false,
          format: "{point.name}"
        },
        allAreas: false,
        data: category[0]
      },
      {
        name: 'State',
        allowPointSelect: true,
        cursor: 'pointer',
        borderColor: "#6E6E6E",
        color: '#000000',
        type: "map",
        states: {
          hover: {
            color: "#006bb6"
          }
        },
        dataLabels: {
          enabled: false,
          format: "{point.name}"
        },
        allAreas: false,
        data: [
          ['madhya pradesh', 1]
        ]
      }
    ]
  };

  return (
    <div className="apcard-graph-wrap">
      <div className="map-content">
        {/* 
        {options ?
          <>
            <HighchartsReact
              highcharts={Highcharts}
              constructorType={"mapChart"}
              options={options}
              allowChartUpdate={true}
              immutable={true}
              callback={(data: any) => {
                // console.log(data)
              }}
            />
          </>

          :

          null} */}
        <HighchartsReact
          constructorType={'mapChart'}
          highcharts={Highcharts}
          options={mapOptions}
          allowChartUpdate={true}
          immutable={true}
          updateArgs={[true]}
          callback={(data: any) => {
            console.log(data, "Hii")
          }}
        />

      </div>
    </div>
  )
}

export default Map