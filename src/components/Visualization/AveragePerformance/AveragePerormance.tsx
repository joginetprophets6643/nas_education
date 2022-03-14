import React, { useEffect, useState ,useRef} from 'react';
import Globe from '@/assets/images/globe-icon.svg';
import GraphCard from '@/components/Visualization/GraphCard/GraphCard';
import { useSelector } from 'react-redux';
import { AveragePerformanceProps, IntialStateModel, StoreModel } from '@/models/visualization';

const AveragePerormance = (props:AveragePerformanceProps) => {
  const charts = useSelector<StoreModel>(store=> store.charts) as IntialStateModel
  const [graphs, setGraphs] =  useState<any>({})
  const current_geography =  useSelector<StoreModel>(store => store.current_geography.data) as string
  const [gender_data, setGenderData] = useState<any>({})
  const [management_data, setManagementData] = useState<any>({})
  const [location_data, setLocationData] = useState<any>({})
  const [socialgroup_data, setSocialGroupData] = useState<any>({})
  const [learningoutcome_data, setLearningOutcomeData] = useState<any>({})
  const [performance_level_data, setPerformanceLevelData] = useState<any>({})
  const [chartType, setchartType] = useState<boolean>()

  let subjectShortCodes = {
      "Language": 'language',
      "Mil":'mil',
      'English':'eng',
      'Math':'math',
      'Social Science': 'sst',
      'Science':'sci',
      'Evs':'evs'
  } as any

//   useEffect(()=>{
//     console.log(props.eleme)
//   },[props.eleme])

  useEffect(()=>{
    if(charts.loaded){
        // console.log(charts.data)
        setGraphs(charts.data)
    }
  },[charts])

  const coloumnChartColor = {
      gender:["#F2744A","#F2744A"],
      location:[ '#16A085','#16A085'],
      management:['#9262E6','#9262E6','#9262E6','#9262E6'],
      socialgroup:['#2196F3','#2196F3','#2196F3','#2196F3'],
      learning:['#D13CEB'],
      performance:['#F6A5B5','#F2849A','#EC4A6A','#BD3B55']
  } as any


  const chartClickEvent = (data:any,name: string,type:string)=>{
      if(name === 'management'){
          setManagementData(makeSeries(data,name,type))
      }
      if(name === 'gender'){
        setGenderData(makeSeries(data,name,type))
      }
      if(name === 'socialgroup'){
        setSocialGroupData(makeSeries(data,name,type))
      }
      if(name === 'location'){
        setLocationData(makeSeries(data,name,type))
      }
      if(name === 'performance'){
        setPerformanceLevelData(makeSeries(data,name,type))
      }
      if(name === 'learning'){
        setLearningOutcomeData(makeSeries(data,name,type))
      }
  }
  const makeSeries = (data: any, name:string, type: string)=>{
    let chart_details = {
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
        exporting: {
            menuItemDefinitions: {
                // Custom definition
                changechart: {
                    text: 'Change Chart Type' ,
                    onclick : () => setchartType(true)
                },
                // pie:{
                //     onclick:  ()=> {
                //         chartClickEvent(data,name,'pie')
                //     },
                //     text: 'Pie Chart'
                // },
                // column:{
                //     onclick:  ()=> {
                //         chartClickEvent(data,name,'column')
                //     },
                //     text: 'Column Chart'
                // },
                // line:{
                //     onclick:  ()=> {
                //         chartClickEvent(data,name,'line')
                //     },
                //     text: 'Line Chart'
                // },

            },
            buttons: {
                contextButton: {
                    // menuItems: ['changechart','separator','pie','column','line']
                    menuItems: ['changechart']
                }
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b>'
        },

    } as any

   let series = {
        name: name, 
        colorByPoint: true,
        data: []
    } as any
    name = name.replace(/\s+/g, '').toLowerCase()
    Object.keys(data).forEach((legend,index) => {
        series.data.push({
            name: legend.toUpperCase(),
            color: (name === 'learning' ? coloumnChartColor[name][0]: coloumnChartColor[name][index] ),
            y: Number(data[legend])
        })
    });

    chart_details ={...chart_details ,chart:{type: type}, series: [series]}
    return chart_details
  }

  useEffect(()=>{
      if(Object.keys(graphs).length !== 0){
        setGenderData(makeSeries(graphs[subjectShortCodes[props.name]]['gender'][current_geography],'Gender','column'))
        setManagementData(makeSeries(graphs[subjectShortCodes[props.name]]['management'][current_geography],'Management','column'))
        setSocialGroupData(makeSeries(graphs[subjectShortCodes[props.name]]['socialgroup'][current_geography],'Social Group','column'))
        setLocationData(makeSeries(graphs[subjectShortCodes[props.name]]['location'][current_geography],'Location','column'))
        setLearningOutcomeData(makeSeries(graphs[subjectShortCodes[props.name]]['learning_outcome'],'Learning',"column"))
        setPerformanceLevelData(makeSeries(graphs[subjectShortCodes[props.name]]['performance_level'][current_geography],'Performance','pie'))

      }else{
        setGenderData({})
        setManagementData({})
        setSocialGroupData({})
        setLocationData({})
        setLearningOutcomeData({})
        setPerformanceLevelData({}) 
      }
  },[graphs])


  return (
    <div className={`average-performance-wrap card-${props.class_style} mb-60`}>
        <h2 className="ap-top-heading">
            <img src={props.image} alt="img" className="img-fluid" width="30" /> 
            {props.name} Average Performance of Students
        </h2>
        <div className={`averag-performance-content light-${props.class_style}`}>
            <div className="row">
                <div className="col-md-6">
                    { props.load_charts ? 
                    <GraphCard  type="column" title="By Gender" chartType={chartType}  series={gender_data}/>
                    :
                    ""}
                </div>
                <div className="col-md-6">
                { props.load_charts ? 
                    <GraphCard  type="column" title="By Location" series={location_data} />
                    :
                    ""}
                </div>
            </div>
            <div className="row">
                <div className="col-md-6">
                { props.load_charts ? 
                    <GraphCard  type="column" title="By Management" series={management_data} />
                    :
                    ""}
                </div>
                <div className="col-md-6">
                { props.load_charts ? 
                    <GraphCard  type="column" title="By Social Group" series={socialgroup_data}  />
                    :
                    ""}
                </div>
            </div>
            <div className="row">
                <div className="col-md-6">
                    { props.load_charts ? 
                    <GraphCard  type="pie" title="Range of Performance" series={performance_level_data} />
                    :
                    ""}
                </div>
                <div className="col-md-6">
                { props.load_charts ? 
                    <GraphCard type="column" title="By Learning Outcome" series={learningoutcome_data}/>
                    :
                    ""}
                </div>
            </div>
        </div>
    </div>
  );
};

export default AveragePerormance;
