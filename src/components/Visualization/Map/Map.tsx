import React, { useEffect, useState } from 'react';
import Highcharts from "highcharts";
import HighchartsReact from "highcharts-react-official";
import highchartsMap from "highcharts/modules/map";

const mapDataIE = require("@highcharts/map-collection/countries/in/custom/in-all-disputed.geo.json");

highchartsMap(Highcharts);


const Map = (props: any) => {
  const { data, subOption,subject } = props
  let category: Array<any[]> = [[], [], [], []]
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

    series:[]
  })

  const colorCode = {
    language: ['#BAD4EC', '#9EC2E4', '#83B1DD', '#6997C3'],
    evs: ['#E5E2AF', '#DAD68F', '#CFCB6F', '#B6B156'],
    math: ['#F4BBCF', '#F09FBB', '#EB84A8', '#D26A8E'],
    social: ['#C7E1C0', '#ABD3A1', '#8FC481', '#68A358'],
    science: ['#B1DEDF', '#8ACDCE', '#63BDBE', '#369B9D'],
    mil: ['#F7C4C3', '#F3A6A5', '#EF8987', '#D4605F'],
    english: ['#E8C7E6', '#DCACD9', '#D190CD', '#B168AD'],
  } as any


  useEffect(() => {
    console.log(data)
    if (data !== undefined) {
      makeSeries(data);
    }
  }, [data])

  const makeSeries = (data: Object) => {

    const values = Object.values(data)
    let min = Math.min(...values)
    let max = Math.max(...values)
    const logic = Math.round((max - min) / 4)
    let ranges: any = []
    max = min + logic
    for (let i = 0; i < 4; i++) {
      ranges[i] = { 'min': min, 'max': max }
      min = max + 1
      max += logic + 1
    }
    Object.keys(data).forEach((item: string) => {
      ranges.forEach((range:any, index:any) => {
        if (data[item] >= range['min'] && data[item] <= range['max'] && item.toLowerCase() !== 'ladakh') {
          category[index].push([item.toLowerCase(), data[item]])
        }
      })
      // if (item.toLowerCase() != 'ladakh') {
      //   custom_data.push({ 'hc-key': item.toLowerCase(), 'value': data[item], 'color': 'black' })
      // }
    })
    console.log(category)
    let series= [
      {
        name: ranges[0]['min']+'-'+ranges[0]['max'],
        allowPointSelect: true,
        cursor: 'pointer',
        borderColor: "#6E6E6E",
        color: colorCode[subject][0],
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
        name: ranges[1]['min']+'-'+ranges[1]['max'],
        allowPointSelect: true,
        cursor: 'pointer',
        borderColor: "#6E6E6E",
        color: colorCode[subject][1],
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
        data: category[1]
      },
      {
        name: ranges[2]['min']+'-'+ranges[2]['max'],
        allowPointSelect: true,
        cursor: 'pointer',
        borderColor: "#6E6E6E",
        color: colorCode[subject][2],
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
        data:category[2]
      }
      {
        name: ranges[3]['min']+'-'+ranges[3]['max'],
        allowPointSelect: true,
        cursor: 'pointer',
        borderColor: "#6E6E6E",
        color: colorCode[subject][3],
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
        data: category[3]
      }
    ]

    console.log(series)
    setmapOptions({...mapOptions,series:series})
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
          updateArgs={[true]}
        />

      </div>
    </div>
  )
}

export default Map