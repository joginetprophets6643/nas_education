import React, { useEffect, useState } from 'react';
import HighchartsReact from "highcharts-react-official";

const ScatterGraph = (props: any) => {
    const { xData, yData } = props
    const [data, setData] = useState<any>([])
    const [dataLoaded, setDataLoaded] = useState<boolean>(false)
    const [mapOptions, setMapOptions] = useState<any>({
        chart: {
            type: 'scatter',
            zoomType: 'x'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            title: {
                text: ''
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
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
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: 'X-Axis: {point.x} <br> Y-Axis: {point.y}'
                }
            }
        },
        // series: [{
        //     name: 'Female',
        //     color: 'rgba(223, 83, 83, .5)',
        //     data: [
        //         [167.6, 64.5], [167.6, 72.3], [167.6, 61.4], [154.9, 58.2], [162.6, 81.8],
        //         [175.3, 63.6], [171.4, 53.4], [157.5, 54.5], [165.1, 53.6], [160.0, 60.0],
        //         [174.0, 73.6], [162.6, 61.4], [174.0, 55.5], [162.6, 63.6], [161.3, 60.9],
        //         [156.2, 60.0], [149.9, 46.8], [169.5, 57.3], [160.0, 64.1], [175.3, 63.6],
        //         [169.5, 67.3], [160.0, 75.5], [172.7, 68.2], [162.6, 61.4], [157.5, 76.8],
        //         [176.5, 71.8], [164.4, 55.5], [160.7, 48.6], [174.0, 66.4], [163.8, 67.3]]

        // }]
    })

    useEffect(() => {
        setDataLoaded(false)
        let temp_data = [] as any
        Object.keys(xData).forEach((state) => {
            temp_data.push({
                name: state, color: 'rgba(223, 83, 83, .5)', data: [[xData[state], yData[state]]], marker: {
                    symbol: 'circle'
                }
            })
        })
        setData(temp_data)
    }, [])

    useEffect(() => {
        if (data.length) {
            setMapOptions({
                ...mapOptions, series: data
            })
        }
    }, [data])

    useEffect(() => {
        setDataLoaded(true)
    }, [mapOptions])
    const options = {
        chart: {
            type: 'scatter',
            zoomType: 'x'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            title: {
                text: ''
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
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
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x} cm, {point.y} kg'
                }
            }
        },
        series: [{
            name: 'Female',
            color: 'rgba(223, 83, 83, .5)',
            data: [
                [167.6, 64.5], [167.6, 72.3], [167.6, 61.4], [154.9, 58.2], [162.6, 81.8],
                [175.3, 63.6], [171.4, 53.4], [157.5, 54.5], [165.1, 53.6], [160.0, 60.0],
                [174.0, 73.6], [162.6, 61.4], [174.0, 55.5], [162.6, 63.6], [161.3, 60.9],
                [156.2, 60.0], [149.9, 46.8], [169.5, 57.3], [160.0, 64.1], [175.3, 63.6],
                [169.5, 67.3], [160.0, 75.5], [172.7, 68.2], [162.6, 61.4], [157.5, 76.8],
                [176.5, 71.8], [164.4, 55.5], [160.7, 48.6], [174.0, 66.4], [163.8, 67.3]]

        }]
    }

    return (
        <>
            {dataLoaded && <HighchartsReact
                options={mapOptions}
            />}

        </>
    )
}

export default ScatterGraph