import React, { useEffect, useState } from 'react';
import Highcharts from "highcharts";
import HighchartsReact from "highcharts-react-official";
import highchartsMap from "highcharts/modules/map";
import { DISTRICT_MAPS } from './district_map';
import { useSelector } from 'react-redux';
import { StoreModel } from '@/models/visualization';

const mapDataIE = require("@highcharts/map-collection/countries/in/custom/in-all-disputed.geo.json");

highchartsMap(Highcharts);


const Map = (props: any) => {
  const { data, subOption, subject } = props
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

    series: []
  })
  const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
  const current_id = useSelector<StoreModel>(store => store.current_id.data) as number
  const current_state = useSelector<StoreModel>(store => store.current_state.data) as any


  const colorCode = {
    language: ['#BAD4EC', '#9EC2E4', '#83B1DD', '#6997C3'],
    evs: ['#E5E2AF', '#DAD68F', '#CFCB6F', '#B6B156'],
    math: ['#F4BBCF', '#F09FBB', '#EB84A8', '#D26A8E'],
    sst: ['#C7E1C0', '#ABD3A1', '#8FC481', '#68A358'],
    sci: ['#B1DEDF', '#8ACDCE', '#63BDBE', '#369B9D'],
    mil: ['#F7C4C3', '#F3A6A5', '#EF8987', '#D4605F'],
    eng: ['#E8C7E6', '#DCACD9', '#D190CD', '#B168AD'],
  } as any

  useEffect(() => {
    if (data !== undefined && subOption !== '') {
      makeSeries(data);
    }
  }, [data, subOption, subject])

  const chunk = (arr: any, size: any) => arr.reduce((acc: any, e: any, i: any) => (i % size ? acc[acc.length - 1].push(e) : acc.push([e]), acc), []);

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
      ranges.forEach((range: any, index: any) => {
        if (data[item] >= range['min'] && data[item] <= range['max']) {
          if (item.includes('&') || item.includes('Islands') || item.includes('Dadra')) {
            item = item.replace('&', 'and')
            item = item.replace(' Islands', '')
            item = item.replace(' Dadra', 'dadara')
            category[index].push([item.toLowerCase(), data[item]])
          } else if (item == 'Delhi') {
            category[index].push(['nct of delhi', data[item]])
          } else {
            category[index].push([item.toLowerCase(), data[item]])
          }
        }
      })
    })

    let series = [
      {
        name: ranges[0]['min'] + '-' + ranges[0]['max'],
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
        name: ranges[1]['min'] + '-' + ranges[1]['max'],
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
        name: ranges[2]['min'] + '-' + ranges[2]['max'],
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
        data: category[2]
      },
      {
        name: ranges[3]['min'] + '-' + ranges[3]['max'],
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
    if (current_geography !== 'national') {
      const selectedMapData = DISTRICT_MAPS.find(data => data.name === current_state.state_name.toUpperCase())
      console.log(selectedMapData)
      // let series_data: Array<any> = [[{ 'type': 'map', 'joinBy': 'id', data: [], mapData: [] }], [{ 'type': 'map', 'joinBy': 'id', data: [], mapData: [] }], [{ 'type': 'map', 'joinBy': 'id', data: [], mapData: [] }], [{ 'type': 'map', 'joinBy': 'id', data: [], mapData: [] }]]
      const temp_data = selectedMapData !== undefined ? selectedMapData.data : ''
      temp_data[0].mapData.forEach((item: any) => {

        category[0].forEach((cat0) => {
          if (cat0[0].includes(item.name.toLowerCase())) {
            temp_data[0].data.forEach((district: any) => {
              if (district.id == item.id) {
                district.color = colorCode[subject][0]
                district.borderColor = "#fff";
                district.states.hover.color = "#006bb6";
              }
            })
          }
        })
        category[1].forEach((cat1) => {
          if (cat1[0].includes(item.name.toLowerCase())) {
            temp_data[0].data.forEach((district: any) => {
              if (district.id == item.id) {
                district.color = colorCode[subject][1]
                district.borderColor = "#fff";
                district.states.hover.color = "#006bb6";
              }
            })
          }
        })
        category[2].forEach((cat0) => {
          if (cat0[0].includes(item.name.toLowerCase())) {
            temp_data[0].data.forEach((district: any) => {
              if (district.id == item.id) {
                district.color = colorCode[subject][2]
                district.borderColor = "#fff";
                district.states.hover.color = "#006bb6";
              }
            })
          }
        })
        category[3].forEach((cat0) => {
          if (cat0[0].includes(item.name.toLowerCase())) {
            temp_data[0].data.forEach((district: any) => {
              if (district.id == item.id) {
                district.color = colorCode[subject][3]
                district.borderColor = "#fff";
                district.states.hover.color = "#006bb6";
              }
            })
          }
        })
      })

      console.log(category)
      setmapOptions({ ...mapOptions, series: temp_data })
    }
    else {
      setmapOptions({ ...mapOptions, chart: { map: mapDataIE } })
      setmapOptions({ ...mapOptions, series: series })
    }



    // console.log(series)

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
        // callback={(data: any) => {
        //   console.log(data)
        // }}

        />

      </div>
    </div>
  )
}

export default Map