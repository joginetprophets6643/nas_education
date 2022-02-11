import React from 'react';
import People from '@/assets/images/ap-people.svg';
import Highcharts from 'highcharts';
import HighchartsReact from 'highcharts-react-official';

const options = {
    chart: {
      type: 'column',
      height: '350'
    },
    title: {
        text: ''
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
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b>'
    },
    series: [
        {
            name: "Gender", 
            colorByPoint: true,
            data: [
                {
                    name: "Boys",
                    y: 70,
                    color: "#F2744A"
                },
                {
                    name: "Girls  ",
                    y: 90,
                    color: "#F2744A"
                }
            ]
        }
    ]
  }
const GraphCard = () => {
  return (
    <div className="apcard-white">
        <div className="apcard-header">
            <h3 className="apcard-heading apcard-heading-red">
                <img src={People} alt="img" className="img-fluid" /> By Gender
            </h3>
            <div className="toggle-btn">
                <button className="btn">
                    <span className="material-icons">
                        menu
                    </span>
                </button>
            </div>
        </div> 
        <div className="apcard-content">
            <div className="apcard-graph-wrap">
            <HighchartsReact
                highcharts={Highcharts}
                options={options}
            />
            </div>  
        </div>    
    </div>
  );
};

export default GraphCard;
