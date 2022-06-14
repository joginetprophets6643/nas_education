import React, { useEffect, useState } from 'react';
import Highcharts from "highcharts";
import HighchartsReact from "highcharts-react-official";
import highchartsMap from "highcharts/modules/map";
import { DISTRICT_MAPS } from './district_map';
import { useSelector } from 'react-redux';
import { StoreModel } from '@/models/visualization';
import { india } from '@/assets/all-india';
import Loader from '../Loader/Loader';

// const mapDataIE = require("@highcharts/map-collection/countries/in/custom/in-all-disputed.geo.json");
const mapDataIE = india
highchartsMap(Highcharts);

const Map = (props: any) => {
  const { data, subOption, subject } = props
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
  const [category, setCategory] = useState<any>([])
  const [ranges, setRanges] = useState<any>([])
  const [isGenerate, setIsGenerate] = useState<boolean>(false)
  const [stateData, setStateData] = useState<any>({})
  const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
  const current_state = useSelector<StoreModel>(store => store.current_state.data) as any
  const current_district = useSelector<StoreModel>(store => store.current_district.data) as any



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
  }, [data, subOption, subject, current_geography])

  const makeSeries = (data: any) => {
    console.log(data)
    const values: any = Object.values(data)
    let min = Math.min(...values)
    let max = Math.max(...values)
    let temp_ranges: any = []
    let temp_category: Array<any[]> = [[], [], [], []]
    const logic = Math.round((max - min) / 4)
    max = min + logic
    for (let i = 0; i < 4; i++) {
      temp_ranges[i] = { 'min': min, 'max': max }
      min = max + 1
      max += logic + 1
    }
    Object.keys(data).forEach((item: string) => {
      temp_ranges.forEach((range: any, index: any) => {
        if (data[item] >= range['min'] && data[item] <= range['max']) {
          if (item.includes('Dadra')) {
            // item = item.replace('&', 'and')
            // item = item.replace(' Islands', '')
            item = item.replace(' Dadra', 'dadara')
            temp_category[index].push([item.toLowerCase(), parseInt(data[item])])
          } else if (item == 'Delhi') {
            temp_category[index].push(['nct of delhi', parseInt(data[item])])
          } else {
            temp_category[index].push([item.toLowerCase(), parseInt(data[item])])
          }
        }
      })
    })
    setRanges(temp_ranges)
    // console.log(category)
    setCategory(temp_category)
  }

  useEffect(() => {
    if (category.length) {
      if (current_geography != 'national') {
        let temp_state_name = ''
        if (current_geography == 'state') {
          temp_state_name = current_state.state_name.toUpperCase()
        }
        else {
          temp_state_name = current_district.state_name.toUpperCase()
        }
        if (temp_state_name == 'DELHI') {
          temp_state_name = 'NCT OF DELHI'
        }
        const selectedMapData: any = DISTRICT_MAPS.find(data => data.name === temp_state_name)
        selectedMapData.data[0].mapData.forEach((item: any) => {
          selectedMapData.data[0].data.forEach((district: any) => {
            if (district.id == item.id) {
              district.color = '#cccccc'
              district.borderColor = "#fff";
              district.states.hover.color = "#cccccc";
              district.states.select = { color: "#cccccc" };
              district.y = 0
            }
          })
          category[0].forEach((cat0: any) => {
            if (cat0[0]?.includes(item.name.toLowerCase())) {
              selectedMapData.data[0].data.forEach((district: any) => {
                if (district.id == item.id) {
                  district.color = colorCode[subject][0]
                  district.borderColor = "#fff";
                  district.states.hover.color = "#006bb6";
                  district.states.select = { color: colorCode[subject][0] };
                  district.y = cat0[1]
                }
              })
            }
          })
          category[1].forEach((cat1: any) => {
            if (cat1[0]?.includes(item.name.toLowerCase())) {
              selectedMapData.data[0].data.forEach((district: any) => {
                if (district.id == item.id) {
                  district.color = colorCode[subject][1]
                  district.borderColor = "#fff";
                  district.states.hover.color = "#006bb6";
                  district.states.select = { color: colorCode[subject][1] };
                  district.y = cat1[1]
                }
              })
            }
          })
          category[2].forEach((cat0: any) => {
            if (cat0[0]?.includes(item.name.toLowerCase())) {
              selectedMapData.data[0].data.forEach((district: any) => {
                if (district.id == item.id) {
                  district.color = colorCode[subject][2]
                  district.borderColor = "#fff";
                  district.states.hover.color = "#006bb6";
                  district.states.select = { color: colorCode[subject][2] };
                  district.y = cat0[1]
                }
              })
            }
          })
          category[3].forEach((cat0: any) => {
            if (cat0[0]?.includes(item.name.toLowerCase())) {
              selectedMapData.data[0].data.forEach((district: any) => {
                if (district.id == item.id) {
                  district.color = colorCode[subject][3]
                  district.borderColor = "#fff";
                  district.states.hover.color = "#006bb6";
                  district.states.select = { color: colorCode[subject][3] };
                  district.y = cat0[1]
                }
              })
              selectedMapData.data[0].mapData.forEach((district: any) => {
                if (district.id == item.id) {
                  district.type = ranges[3]['min'] + '-' + ranges[3]['max']
                }
              })
            }
          })
        })

        if (current_geography == 'district') {
          selectedMapData.data[0].data.forEach((district: any) => {
            if (district.id == current_district.district_id) {
              district.color = '#006bb6'
            }
          })
        }

        setStateData(selectedMapData.data)

      }
      else {
        if (category.length > 0 && ranges.length > 0) {
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
                },
                select: {
                  color: colorCode[subject][0],
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
                },
                select: {
                  color: colorCode[subject][1],
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
                },
                select: {
                  color: colorCode[subject][2],
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
                },
                select: {
                  color: colorCode[subject][4],
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
          setIsGenerate(false)
          setmapOptions({ ...mapOptions, chart: { map: mapDataIE, height: "600", }, series: series })
        }
      }
    }


  }, [category, ranges, subject, subOption])

  useEffect(() => {
    // console.log(stateData)
    if (Object.keys(stateData).length > 0) {
      if (category.length > 0 && ranges.length > 0) {
        setIsGenerate(false)
        setmapOptions({
          ...mapOptions,
          series: stateData,
          legend: { enabled: true },
          plotOptions: {
            series: {
              name: 'District',
              allowPointSelect: true,
            }
          },
          tooltip: {
            enabled: true,
            pointFormat: '{point.name}: {point.y}'
          },
          colorAxis: {
            dataClasses: [
              {
                from: ranges[0]['min'],
                to: ranges[0]['max'],
                color: colorCode[subject][0],
                name: ranges[0]['min'] + '-' + ranges[0]['max']
              },
              {
                from: ranges[1]['min'],
                to: ranges[1]['max'],
                color: colorCode[subject][1],
                name: ranges[1]['min'] + '-' + ranges[1]['max']
              },
              {
                from: ranges[2]['min'],
                to: ranges[2]['max'],
                color: colorCode[subject][2],
                name: ranges[2]['min'] + '-' + ranges[2]['max']
              },
              {
                from: ranges[3]['min'],
                to: ranges[3]['max'],
                color: colorCode[subject][3],
                name: ranges[3]['min'] + '-' + ranges[3]['max']
              }
            ]
          },
        })
      }

    }
  }, [stateData, ranges, current_district, subject, subOption])

  useEffect(() => {
    setTimeout(() => {
      setIsGenerate(true)
    }, 500)
  }, [mapOptions])

  return (
    <div className="apcard-graph-wrap">
      <div className="map-content">
        {isGenerate ? <HighchartsReact
          constructorType={'mapChart'}
          highcharts={Highcharts}
          options={mapOptions}
          allowChartUpdate={true}
          immutable={true}


        />
          :
          <Loader />}

      </div>
    </div>
  )
}

export default Map