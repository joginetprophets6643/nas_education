import React, { useEffect, useState } from 'react';
import HighchartsReact from "highcharts-react-official";

const StateGraph = (props: any) => {
    const { data, subOption } = props
    const [final_data, setData] = useState<any>({})
    const makeSeries = (data: any) => {

        let series = {
            name: 'name',
            colorByPoint: true,
            data: []
        } as any
        if (Object.keys(data).length != 0) {
            Object.keys(data).forEach((legend, index) => {
                series.data.push({
                    name: legend.toUpperCase(),
                    color: "#FD7272",
                    y: Number(data[legend])
                })
            });
        }

        console.log(series.data)
        return series.data
    }
    useEffect(() => {
        if (data !== undefined) {
            setData(makeSeries(data))
        }
        else {
            setData(makeSeries({}))
        }
    }, [data])

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
            labels: {
                rotation: -90
            },
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
                    enabled: false,
                    format: '{point.y}'
                }
            }
        },

        tooltip: {
            headerFormat: '',
            pointFormat: '<span style="color:{point.color}">{point.name}</span> <br /> <b>' + subOption + ': {point.y}</b><br/>'
        },

        series: [
            {
                // name: "Browsers",
                colorByPoint: true,
                data: final_data
                // data: [
                //     {
                //         name: "Andhra Pradesh",
                //         y: 90,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Arunachal Pradesh",
                //         y: 60,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Assam",
                //         y: 20,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Bihar",
                //         y: 60,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Chhattisgarh",
                //         y: 40,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Goa",
                //         y: 30,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Gujarat",
                //         y: 70,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Haryana",
                //         y: 70,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Himachal Pradesh",
                //         y: 90,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Jharkhand",
                //         y: 40,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Karnataka",
                //         y: 70,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Kerala",
                //         y: 60,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Madhya Pradesh",
                //         y: 10,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Manipur",
                //         y: 60,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Meghalaya",
                //         y: 40,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Mizoram",
                //         y: 30,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Nagaland",
                //         y: 70,
                //         color: "#FD7272"
                //     },
                //     {
                //         name: "Odisha",
                //         y: 90,
                //         color: "#FD7272"
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

export default StateGraph