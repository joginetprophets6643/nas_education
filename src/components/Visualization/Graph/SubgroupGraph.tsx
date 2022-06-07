import React, { useEffect, useState } from 'react';
import HighchartsReact from "highcharts-react-official";
import { useSelector } from 'react-redux';
import { StoreModel } from '@/models/visualization';

const SubgroupGraph = (props: any) => {
    const { data, subOption } = props
    const [final_data, setData] = useState<Object>({})
    const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
    const current_state = useSelector<StoreModel>(store => store.current_state.data) as any
    const current_district = useSelector<StoreModel>(store => store.current_district.data) as any
    let legends = {
        'boys': 'boys',
        'girls': 'girls',
        'rural': 'rural',
        'urban': 'urban',
        'government': 'govt',
        'goverment aided': 'govt_aided',
        'private': 'private',
        'central government': 'central_govt',
        'sc': 'sc',
        'st': 'st',
        'general': 'general',
        'obc': 'obc',
        'basic': 'basic',
        'below basic': 'below_basic',
        'proficient': 'proficient',
        'advanced': 'advanced'
    } as any
    useEffect(() => {
        if (data !== undefined && subOption !== undefined && subOption !== '') {
            if (Object.keys(data).length !== 0) {
                if (current_geography == 'national') {
                    if (subOption !== 'Total') {
                        if (legends[subOption.toLowerCase()] !== undefined && data[current_geography] !== undefined) {
                            setData(makeSeries({ [subOption]: data[current_geography][legends[subOption.toLowerCase()]] }))
                        }
                        else {
                            setData(makeSeries({ [subOption]: data[current_geography][subOption] }))
                        }
                    }
                    else {
                        setData(makeSeries({ India: data[current_geography] }))
                    }
                }
                else if (current_geography == 'state') {
                    if (subOption !== 'Total') {
                        if (legends[subOption.toLowerCase()] !== undefined && data[current_geography] !== undefined) {
                            setData(makeSeries({ [current_state.state_name]: data[current_geography][legends[subOption.toLowerCase()]], India: data['national'][legends[subOption.toLowerCase()]] }))
                        }
                        else {
                            setData(makeSeries({ [current_state.state_name]: data[current_geography][subOption], India: data['national'][subOption] }))
                        }
                    }
                    else {
                        setData(makeSeries({ [current_state.state_name]: data[current_geography], India: data['national'] }))
                    }

                }
                else {
                    if (subOption !== 'Total') {
                        if (legends[subOption.toLowerCase()] !== undefined && data[current_geography] !== undefined) {
                            setData(makeSeries({ [current_district.district_name]: data[current_geography][legends[subOption.toLowerCase()]], [current_district.state_name]: data['state'][legends[subOption.toLowerCase()]] }))
                        }
                        else {
                            setData(makeSeries({ [current_district.district_name]: data[current_geography][subOption], [current_district.state_name]: data['state'][subOption] }))
                        }
                    }
                    else {
                        setData(makeSeries({ [current_district.district_name]: data[current_geography], [current_district.state_name]: data['state'] }))
                    }

                }
            }
        }
        else {
            setData(makeSeries({}))
        }
    }, [data, subOption])


    const makeSeries = (data: any) => {
        // console.log(data)
        let series = {
            name: '',
            colorByPoint: true,
            data: []
        } as any
        if (Object.keys(data).length != 0) {
            Object.keys(data).forEach((legend, index) => {
                series.data.push({
                    name: legend.toUpperCase(),
                    color: "#BDC581",
                    y: Number(data[legend])
                })
            });
        }

        // console.log(series.data)
        return series.data
    }

    const options = {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        subtitle: {
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
            column: {
                pointWidth: 25,
            },
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.y}'
                }
            }
        },

        tooltip: {
            headerFormat: '',
            // pointFormat: '<span style="color:{point.color}">{point.name}</span> <br /> <b>' + subOption + ': {point.y}</b><br/>'
            pointFormat: '<b>' + subOption + ': {point.y}</b><br/>'
        },

        series: [
            {
                name: "India",
                colorByPoint: true,
                data: final_data
                // data: [
                //     {
                //         name: "India",
                //         y: 80,
                //         color: "#BDC581"
                //     }
                // ]
            }
        ]
    };
    return (
        <>
            <HighchartsReact
                options={options}
            />
        </>
    )
}

export default SubgroupGraph