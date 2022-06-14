import React, { useEffect, useState } from 'react';
import ScatterGraph from '@/components/Visualization/Graph/ScatterGraph';
import GraphPlayBtn from '@/components/Visualization/GraphPlayBtn/GraphPlayBtn';
import ScatterPlotTabDropdown from '@/components/Visualization/ScaterPlotTabDropdown/ScaterPlotTapDropdown';
import { useDispatch, useSelector } from 'react-redux';
import { IntialStateModel, StoreModel } from '@/models/visualization';
import { getLinkedGraphs, getScatterLinkedGraphs } from '@/actions/visualization.action';
import Loader from '../Loader/Loader';


const ScatterPlotTab = () => {
    const scatter_linked_charts = useSelector<StoreModel>(store => store.scatter_linked_charts) as IntialStateModel
    const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
    const current_id = useSelector<StoreModel>(store => store.current_id.data) as number
    const [data, setData] = useState<any>([])
    const [XData, setXData] = useState<any>({})
    const [YData, setYData] = useState<any>({})
    const [dataLoaded, setDataLoaded] = useState<boolean>(false)
    const [isGraphData, setIsGraphData] = useState<boolean>(false)
    const [temp_state_id, setState] = useState<number>(1)
    const dispatch = useDispatch()
    useEffect(() => {
        setDataLoaded(false)
        if (scatter_linked_charts.loaded && !scatter_linked_charts.loading) {
            setDataLoaded(true)
            setData(scatter_linked_charts.data.data)
            console.log(scatter_linked_charts.data.data)
        }
    }, [scatter_linked_charts])

    useEffect(() => {
        setDataLoaded(false)

        let temp_reusable_filters = {
            type: { _eq: current_geography },
        } as any

        if (current_geography === 'state') {
            temp_reusable_filters = { ...temp_reusable_filters, state_id: { _eq: current_id } }
            setState(current_id)
        }
        if (current_geography === 'district') {
            temp_reusable_filters = { ...temp_reusable_filters, type: { _eq: 'state' }, state_id: { _eq: temp_state_id } }
        }
        dispatch(getScatterLinkedGraphs(JSON.stringify(temp_reusable_filters)))
    }, [current_geography, current_id])

    const getOption = (option: string) => {
        const data_keys = option.split('_')
        setIsGraphData(false)
        if (data_keys[4] == 'X') {
            data.forEach((grade: any) => {
                if (grade.grade == data_keys[0]) {
                    const temp_data = JSON.parse(grade.data)
                    setXData(temp_data[data_keys[1]][data_keys[2]][data_keys[3]])
                    return
                }
            })
        }
        else {
            data.forEach((grade: any) => {
                if (grade.grade == data_keys[0]) {
                    const temp_data = JSON.parse(grade.data)
                    setYData(temp_data[data_keys[1]][data_keys[2]][data_keys[3]])
                    return
                }
            })
        }
    }

    useEffect(() => {
        if (Object.keys(XData).length && Object.keys(YData).length) {
            setTimeout(() => {
                setIsGraphData(true)
            }, 500)
        }
    }, [XData, YData])

    return (
        <div className="scatterplot-wrap">
            <div className="apcard-white">
                <div className="apcard-header justify-content-center">
                    <h3 className="apcard-heading">Average Performance</h3>
                </div>
                <div className="apcard-content">
                    <div className="row">
                        <div className="col-md-6">
                            <div className="scatterplot-select-wrap mb-30">
                                {dataLoaded && <ScatterPlotTabDropdown label="Y-Axis:" onChangeOption={getOption} data={data} />}
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="scatterplot-select-wrap">
                                {dataLoaded && <ScatterPlotTabDropdown label="X-Axis:" onChangeOption={getOption} data={data} />}
                            </div>
                        </div>
                        <div className="col-md-12">
                            <div className="apcard-graph-wrap">
                                {isGraphData ? <><ScatterGraph xData={XData} yData={YData} /></> : <Loader />}
                                {/* {isGraphData ? <><ScatterGraph xData={XData} yData={YData} /> <GraphPlayBtn /> </> : <Loader />} */}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default ScatterPlotTab