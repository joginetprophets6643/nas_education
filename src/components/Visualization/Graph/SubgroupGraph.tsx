import React from 'react';
import HighchartsReact from "highcharts-react-official";

const SubgroupGraph = () => {
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
            pointFormat: '<span style="color:{point.color}">{point.name}</span> <br /> <b>Total: {point.y}</b><br/>'
        },
    
        series: [
            {
                name: "India",
                colorByPoint: true,
                data: [
                    {
                        name: "India",
                        y: 80,
                        color: "#BDC581"
                    }
                ]
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