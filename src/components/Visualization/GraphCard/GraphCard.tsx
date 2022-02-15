import React, { useEffect, useState } from 'react';
import People from '@/assets/images/ap-people.svg';
import Highcharts from 'highcharts';
import HighchartsReact from 'highcharts-react-official';
import { useSelector } from 'react-redux';
import { IntialStateModel, States, StoreModel } from '@/models/visualization';


const GraphCard = (props: any) => {
    const states = useSelector<StoreModel>(store => store.states) as IntialStateModel
    const [options, setOptions] = useState<any>({})

    useEffect(()=>{
        let options = {
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
    
          } as any
        if(props.type === 'map'){
            if(states.loaded){
                const state_for_map =  states.data[0].map((state: States) => {
                 if(state.state_name === 'Delhi'){
                     return ['nct of delhi',state.state_id]
                    }else{
                      return [ state.state_name.toLowerCase(),state.state_id]
                    }
                 });
                 console.log(state_for_map)
                 options = {
                    chart: {
                        map: 'countries/in/custom/in-all-disputed'
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
                  tooltip: { enabled: false },
                    navigation: {
                        buttonOptions: {
                            enabled: false
                        }
                    },
                    credits: {
                      enabled: false
                    },
                  
                    series: [{
                        data: state_for_map,
                        name: 'Random data',
                        allowPointSelect: true,
                        cursor: 'pointer',
                        color: "#9ec2e4",
                        borderColor: "#6e6f70",
                        states: {
                            hover: {
                                color:'#f7941c'
                            },
                            select: {
                              color: '#9ec2e4'
                            }
                        },
                        dataLabels: {
                            enabled: false,
                            format: '{point.name}'
                        }
                    }]
                 }
                 setOptions(options)
             }
        }else{
            
            options = {...options , chart: {type: props.type,height: '350' }, 
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
            setOptions(options)

        }

    },[])
    

  return (
    <div className="apcard-white">
        <div className="apcard-header">
            <h3 className="apcard-heading apcard-heading-red">
                <img src={People} alt="img" className="img-fluid" /> {props.title}
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
