import React, { useEffect, useState, useRef } from 'react';
import GraphCard from '@/components/Visualization/GraphCard/GraphCard';
import { useSelector } from 'react-redux';
import { AveragePerformanceProps, IntialStateModel, StoreModel } from '@/models/visualization';
import GraphCardTab from '@/components/Visualization/GraphCardTab/GraphCardTab';
import GraphCardTabContent from '@/components/Visualization/GraphCardTabContent/GraphCardTabContent';
import MapTabDropdown from '../MapTabDropdown/MapTabDropdown';


const AveragePerformance = (props: AveragePerformanceProps) => {
    const charts = useSelector<StoreModel>(store => store.charts) as IntialStateModel
    const [graphs, setGraphs] = useState<any>({})
    const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
    const [gender_data, setGenderData] = useState<any>({})
    const [management_data, setManagementData] = useState<any>({})
    const [location_data, setLocationData] = useState<any>({})
    const [socialgroup_data, setSocialGroupData] = useState<any>({})
    const [learningoutcome_data, setLearningOutcomeData] = useState<any>({})
    const [performanceColumn_data, setPerformanceColumnData] = useState<any>({})
    const [performanceColumn_data2, setPerformanceColumnData2] = useState<any>({})

    const [performance_level_data, setPerformanceLevelData] = useState<any>({})
    const [currentSection, setCurrentSection] = useState<string>('')

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

    const toggleChartMenu = (value: boolean) => {
        if (!value) {
            setCurrentSection('')
        }
    }

    const chartClickEvent = (data: any, name: string, type: string) => {
        setCurrentSection(name)
        //   if(name === 'management'){
        //       setManagementData(makeSeries(data,name,type))
        //   }
        //   if(name === 'gender'){
        //     setGenderData(makeSeries(data,name,type))
        //   }
        //   if(name === 'socialgroup'){
        //     setSocialGroupData(makeSeries(data,name,type))
        //   }
        //   if(name === 'location'){
        //     setLocationData(makeSeries(data,name,type))
        //   }
        //   if(name === 'performance'){
        //     setPerformanceLevelData(makeSeries(data,name,type))
        //   }
        //   if(name === 'learning'){
        //     setLearningOutcomeData(makeSeries(data,name,type))
        //   }
    }
    const makeSeries = (data: any, name: string, type: string) => {
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
                            chartClickEvent(data, name, 'pie')
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
        name = name.replace(/\s+/g, '').toLowerCase()
        console.log(data, name);
        Object.keys(data).forEach((legend, index) => {
            series.data.push({
                name: legend.toUpperCase(),
                color: ((name === 'learning' || name === 'avgperformancecolumn' || name === 'avgperformancecolumn2') ? coloumnChartColor[name][0] : coloumnChartColor[name][index]),
                y: Number(data[legend])
            })
        });

        chart_details = { ...chart_details, chart: { type: type }, series: [series] }
        return chart_details
    }

    useEffect(() => {
        if (Object.keys(graphs).length !== 0 && current_geography !== 'national' && graphs[subjectShortCodes[props.name]] !== undefined) {
            setGenderData(makeSeries(graphs[subjectShortCodes[props.name]]['gender'][current_geography], 'Gender', 'column'))
            setManagementData(makeSeries(graphs[subjectShortCodes[props.name]]['management'][current_geography], 'Management', 'column'))
            setSocialGroupData(makeSeries(graphs[subjectShortCodes[props.name]]['socialgroup'][current_geography], 'Social Group', 'column'))
            setLocationData(makeSeries(graphs[subjectShortCodes[props.name]]['location'][current_geography], 'Location', 'column'))
            setLearningOutcomeData(makeSeries(graphs[subjectShortCodes[props.name]]['lo'], 'Learning', "column"))
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
                            <GraphCard chartMenu={toggleChartMenu} useDropdown={false} type="column" title="By Gender" chartType={currentSection === 'gender' ? true : false} series={gender_data} />
                            :
                            ""}
                    </div>
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard chartMenu={toggleChartMenu} useDropdown={false} type="column" title="By Location" chartType={currentSection === 'location' ? true : false} series={location_data} />
                            :
                            ""}
                    </div>
                </div>
                <div className="row">
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard chartMenu={toggleChartMenu} useDropdown={false} type="column" title="By Management" chartType={currentSection === 'management' ? true : false} series={management_data} />
                            :
                            ""}
                    </div>
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard chartMenu={toggleChartMenu} useDropdown={false} type="column" title="By Social Group" chartType={currentSection === 'socialgroup' ? true : false} series={socialgroup_data} />
                            :
                            ""}
                    </div>
                </div>
                <div className="row">
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard type="pie" chartMenu={toggleChartMenu} useDropdown={false} title="Range of Performance" chartType={currentSection === 'performance' ? true : false} series={performance_level_data} />
                            :
                            ""}
                    </div>
                    <div className="col-md-6">
                        {props.load_charts ?
                            <GraphCard type="column" chartMenu={toggleChartMenu} useDropdown={false} title="By Learning Outcome" chartType={currentSection === 'learning' ? true : false} series={learningoutcome_data} />
                            :
                            ""}
                    </div>
                </div>
                <div className="row">
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
                </div>
                <div className="row">
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
                </div>
            </div>
        </div>
    );
};

export default AveragePerformance;
