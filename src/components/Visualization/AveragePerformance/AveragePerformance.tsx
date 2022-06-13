import React, { useEffect, useState, useRef } from 'react';
import GraphCard from '@/components/Visualization/GraphCard/GraphCard';
import { useSelector } from 'react-redux';
import { AveragePerformanceProps, IntialStateModel, StoreModel } from '@/models/visualization';
import GraphCardTab from '@/components/Visualization/GraphCardTab/GraphCardTab';
import GraphCardTabContent from '@/components/Visualization/GraphCardTabContent/GraphCardTabContent';
import MapTabDropdown from '../MapTabDropdown/MapTabDropdown';


const AveragePerformance = (props: AveragePerformanceProps) => {
    const charts = useSelector<StoreModel>(store => store.charts) as IntialStateModel
    const linked_charts = useSelector<StoreModel>(store => store.linked_charts) as IntialStateModel
    const [graphs, setGraphs] = useState<any>({})
    const [linkedGraphs, setLinkedGraphs] = useState<any>({})
    const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
    const [gender_data, setGenderData] = useState<any>({})
    const [management_data, setManagementData] = useState<any>({})
    const [location_data, setLocationData] = useState<any>({})
    const [socialgroup_data, setSocialGroupData] = useState<any>({})
    const [learningoutcome_data, setLearningOutcomeData] = useState<any>({})
    const [performanceColumn_data, setPerformanceColumnData] = useState<any>({})
    const [performanceColumn_data2, setPerformanceColumnData2] = useState<any>({})
    const [option, setOption] = useState<string>('')
    const [subOption, setSubOption] = useState<string>('')
    const [check, setCond] = useState<boolean>(false)
    const [subCheck, setSubCond] = useState<boolean>(false)

    const [performance_level_data, setPerformanceLevelData] = useState<any>({})
    const [currentSection, setCurrentSection] = useState<string>('')
    const [changedType, setChangedType] = useState<string>('')

    let subjectShortCodes = {
        "Language": 'language',
        "Mil": 'mil',
        'English': 'eng',
        'Math': 'math',
        'Social Science': 'sst',
        'Science': 'sci',
        'Evs': 'evs'
    } as any


    useEffect(() => {
        if (charts.loaded) {
            setGraphs(charts.data)
            setCurrentSection('')
        }
    }, [charts])

    useEffect(() => {
        if (linked_charts.loaded) {
            setLinkedGraphs(linked_charts.data)
        }
    }, [linked_charts])

    const coloumnChartColor = {
        gender: ["#F2744A", "#F2744A"],
        location: ['#16A085', '#16A085'],
        management: ['#9262E6', '#9262E6', '#9262E6', '#9262E6'],
        socialgroup: ['#2196F3', '#2196F3', '#2196F3', '#2196F3'],
        learning: ['#D13CEB'],
        avgperformancecolumn: ['#D13CEB'],
        avgperformancecolumn2: ['#D13CEB'],
        performance: ['#F6A5B5', '#F2849A', '#EC4A6A', '#BD3B55']
    } as any

    const toggleChartMenu = (value: string) => {
        if (value!=='') {
            setChangedType(value)
        }
        if(value=='false'){
            setCurrentSection('')
        }
    }

    useEffect(()=>{
        if(changedType!=='' && changedType!=='false'){
            console.log(currentSection,changedType)
            if(currentSection === 'management'){
                setManagementData(makeSeries(management_data.series[0].data,currentSection,changedType,true))
            }
            if(currentSection === 'gender'){
            setGenderData(makeSeries(gender_data.series[0].data,currentSection,changedType,true))
            }
            if(currentSection === 'socialgroup'){
            setSocialGroupData(makeSeries(socialgroup_data.series[0].data,currentSection,changedType,true))
            }
            if(currentSection === 'location'){
            setLocationData(makeSeries(location_data.series[0].data,currentSection,changedType,true))
            }
            if(currentSection === 'performance'){
            setPerformanceLevelData(makeSeries(performance_level_data.series[0].data,currentSection,changedType,true))
            }
            if(currentSection === 'learning'){
            setLearningOutcomeData(makeSeries(learningoutcome_data.series[0].data,currentSection,changedType,true))
            }
        }
    },[changedType])

    const chartClickEvent = (data: any, name: string) => {
        setCurrentSection(name)
    }
    const makeSeries = (data: any, name: string, type: string,change=false) => {
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
                        text: "Change Chart Type",
                        onclick: () => {
                            chartClickEvent(data, name)
                        },
                    },

                },
                buttons: {
                    contextButton: {
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
        if(change==false){
            name = name.replace(/\s+/g, '').toLowerCase()
            if (data !== undefined) {
                Object.keys(data).forEach((legend, index) => {
                    series.data.push({
                        name: legend.toUpperCase(),
                        color: ((name === 'learning' || name === 'avgperformancecolumn' || name === 'avgperformancecolumn2') ? coloumnChartColor[name][0] : coloumnChartColor[name][index]),
                        y: Number(data[legend])
                    })
                });
            }
        }
        else{
            series.data=data
        }


        chart_details = { ...chart_details, chart: { type: type }, series: [series] }
        return chart_details
    }

    const getOption = (option: string) => {
        setOption((prev: string) => {
            return option
        })
        // console.log(suboption, option, "Hii")
    }
    const getSubOption = (option: string) => {
        setSubOption((prev: string) => {
            return option
        })
        // console.log(suboption, option, "Hii")
    }

    useEffect(() => {
        if (option !== '') {
            setCond(true)
        }
        else {
            setCond(false)
        }
    }, [option])

    useEffect(() => {
        if (subOption !== '') {
            setSubCond(true)
        }
        else {
            setSubCond(false)
        }
    }, [subOption])

    useEffect(() => {
        if (Object.keys(graphs).length !== 0 && graphs[subjectShortCodes[props.name]] !== undefined) {
            setGenderData(makeSeries(graphs[subjectShortCodes[props.name]]['gender'][current_geography], 'Gender', 'column'))
            setManagementData(makeSeries(graphs[subjectShortCodes[props.name]]['management'][current_geography], 'Management', 'column'))
            setSocialGroupData(makeSeries(graphs[subjectShortCodes[props.name]]['socialgroup'][current_geography], 'Social Group', 'column'))
            setLocationData(makeSeries(graphs[subjectShortCodes[props.name]]['location'][current_geography], 'Location', 'column'))
            setLearningOutcomeData(makeSeries(graphs[subjectShortCodes[props.name]]['lo'][current_geography], 'Learning', "column"))
            setPerformanceLevelData(makeSeries(graphs[subjectShortCodes[props.name]]['performance_level'][current_geography], 'Performance', 'pie'))
            // setPerformanceColumnData(makeSeries(graphs[subjectShortCodes[props.name]]['learning_outcome'], 'avgPerformanceColumn', "column"))
            // setPerformanceColumnData2(makeSeries(graphs[subjectShortCodes[props.name]]['learning_outcome'], 'avgPerformanceColumn2', "column"))

        } else {
            setGenderData({})
            setManagementData({})
            setSocialGroupData({})
            setLocationData({})
            setLearningOutcomeData({})
            setPerformanceLevelData({})
            setPerformanceColumnData({})
            setPerformanceColumnData2({})

        }
    }, [graphs])


    return (
        <div className={`average-performance-wrap card-${props.class_style} mb-60`}>
            <h2 className="ap-top-heading">
                <img src={props.image} alt="img" className="img-fluid" width="30" />
                {props.name} Average Performance of Students
            </h2>
            <div className={`averag-performance-content light-${props.class_style}`}>
                <div className="row">
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard chartMenu={toggleChartMenu} useDropdown={false} type="column" title="By Gender" chartType={currentSection === 'gender' ? true : false} series={gender_data} class_style={props.class_style} />
                            :
                            ""}
                    </div>
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard chartMenu={toggleChartMenu} useDropdown={false} type="column" title="By Location" chartType={currentSection === 'location' ? true : false} series={location_data} class_style={props.class_style} />
                            :
                            ""}
                    </div>
                </div>
                <div className="row">
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard chartMenu={toggleChartMenu} useDropdown={false} type="column" title="By Management" chartType={currentSection === 'management' ? true : false} series={management_data} class_style={props.class_style} />
                            :
                            ""}
                    </div>
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard chartMenu={toggleChartMenu} useDropdown={false} type="column" title="By Social Group" chartType={currentSection === 'socialgroup' ? true : false} series={socialgroup_data} class_style={props.class_style} />
                            :
                            ""}
                    </div>
                </div>
                <div className="row">
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard type="pie" chartMenu={toggleChartMenu} useDropdown={false} title="Range of Performance" chartType={currentSection === 'performance' ? true : false} series={performance_level_data} class_style={props.class_style} />
                            :
                            ""}
                    </div>
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard type="column" chartMenu={toggleChartMenu} useDropdown={false} title="By Learning Outcome" chartType={currentSection === 'learning' ? true : false} series={learningoutcome_data} class_style={props.class_style} />
                            :
                            ""}
                    </div>
                </div>
                {/* <div className="row">
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard type="map" chartMenu={toggleChartMenu} useDropdown={true} title={`Average Performance of Students In ${props.name} In class ${props.grade}`} series={socialgroup_data} />
                            :
                            ""}
                    </div>
                    <div className="col-md-6">
                        {props.load_charts ?
                            <>
                                <GraphCard chartMenu={toggleChartMenu} useDropdown={true} type="column" title={`Average Performance of Students In ${props.name} In class ${props.grade}`} chartType={currentSection === 'avgperformancecolumn' ? true : false} series={performanceColumn_data} />
                            </>


                            : ""}
                    </div>
                </div>
                <div className="row">
                    <div className="col-md-12">
                        {props.load_charts ?
                            <GraphCard chartMenu={toggleChartMenu} type="column" title={`Average Performance of Students In ${props.name} In class ${props.grade}`} chartType={currentSection === 'avgperformancecolumn2' ? true : false} series={performanceColumn_data2} />
                            :
                            ""}
                    </div>
                </div> */}
                {props.load_charts ?
                    <div className="row">
                        <div className="col-md-6">
                            <MapTabDropdown label="Indicator" subject={[subjectShortCodes[props.name]]} onChangeOption={getOption} />
                        </div>
                        <div className="col-md-6">
                            {check && <MapTabDropdown label="Subgroup" option={option} keyOptions={linkedGraphs[subjectShortCodes[props.name]][option]} onChangeSubOption={getSubOption} />}
                        </div>
                        <div className="col-md-12">
                            <div className="apcard-white">
                                <div className="graphcardtab-wrap">
                                    <GraphCardTab subject={[subjectShortCodes[props.name]]} geography={current_geography} />
                                    <div className="tab-content" id="graphcardtabContent">
                                        <GraphCardTabContent subgroup={graphs[subjectShortCodes[props.name]]} charts_data={linkedGraphs[subjectShortCodes[props.name]]} option={option} check={subCheck} subOption={subOption} subject={[subjectShortCodes[props.name]]} geography={current_geography} />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    : ""}
                {/* <div className="row">
                    <div className="col-md-6">
                        <MapTabDropdown label="Indicator" />
                    </div>
                    <div className="col-md-6">
                        <MapTabDropdown label="Subgroup" />
                    </div>
                    <div className="col-md-12">
                        <div className="apcard-white">
                            <div className="graphcardtab-wrap">
                                <GraphCardTab />
                                <div className="tab-content" id="graphcardtabContent">
                                    <GraphCardTabContent />
                                </div>
                            </div>
                        </div>
                    </div>
                </div> */}
            </div>
        </div>
    );
};

export default AveragePerformance;
