import React, { useEffect } from 'react';
import Map from '@/components/Visualization/Map/Map';
import MapsTabDropdown from '../MapTabDropdown/MapsTabDropdown';
import { useDispatch, useSelector } from 'react-redux';
import { IntialStateModel, StoreModel } from '@/models/visualization';
import { useState } from 'react';
import { getLinkedGraphs } from '@/actions/visualization.action';

const MapTab = () => {
    const linked_charts = useSelector<StoreModel>(store => store.linked_charts) as IntialStateModel
    const [grade, setGrade] = useState<string>('3')
    const [subject, setSubject] = useState<string>('language')
    const [subOptions, setSubOptions] = useState<any>([])
    const [keys, setKeys] = useState<any>([])
    const [data, setData] = useState<any>({})
    const [subOption, getSubOption] = useState<string>('')
    const [legends, setLegends] = useState<any>(['language', 'avs'])
    const [InddataLoaded, setIndDataLoaded] = useState<boolean>(false)
    const [SubdataLoaded, setSubDataLoaded] = useState<boolean>(false)
    const dispatch = useDispatch()
    const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
    const current_id = useSelector<StoreModel>(store => store.current_id.data) as number
    const [temp_state_id, setState] = useState<number>(1)

    useEffect(() => {
        setIndDataLoaded(false)
        setSubDataLoaded(false)
        if (linked_charts.loaded && !linked_charts.loading) {
            setData(linked_charts.data)
            setIndDataLoaded(true)
            setSubDataLoaded(true)
            // changeInd()
        }
    }, [linked_charts])

    const changeGrade = (grade: string) => {
        setGrade(grade)
    }

    useEffect(() => {
        setIndDataLoaded(false)
        setSubDataLoaded(false)

        let temp_reusable_filters = {
            type: { _eq: current_geography },
            grade: { _eq: grade }
        } as any

        if (current_geography == 'district') {
            temp_reusable_filters = {
                type: { _eq: 'state' },
                grade: { _eq: grade }
            } as any
        }

        if (current_geography === 'state') {
            temp_reusable_filters = { ...temp_reusable_filters, state_id: { _eq: current_id } }
            setState(current_id)
        }
        if (current_geography === 'district') {
            temp_reusable_filters = { ...temp_reusable_filters, state_id: { _eq: temp_state_id } }
        }
        dispatch(getLinkedGraphs(JSON.stringify(temp_reusable_filters)))
    }, [grade, current_geography, current_id])

    const changeInd = (legend: string) => {
        if (linked_charts.loaded && !linked_charts.loading) {
            setSubDataLoaded(false)
            setLegends(legend.split('_'))
        }
    }

    useEffect(() => {
        if (legends.length && Object.keys(data).length) {
            setKeys((previousState: any) => {
                return Object.keys(data[legends[0]][legends[1]])
            })
            setSubject(legends[0])
        }
    }, [legends])

    useEffect(() => {
        if (keys.length) {
            setSubOptions(keys)
            changeSub(keys[0])
            setSubDataLoaded(true)
        }
    }, [keys])

    const changeSub = (subOpt: string) => {
        getSubOption(subOpt)
    }

    return (
        <div className="maptab-wrap mt-3">
            <div className="average-performance-wrap card-blue mb-60">
                <div className="d-flex">
                    <div className="col-md-3">
                        <div className="maptab-select-wrap m-0">
                            <MapsTabDropdown label="Sector:" onchange={changeGrade} />
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="maptab-select-wrap m-0">
                            {InddataLoaded && <MapsTabDropdown label="Indicator:" grade={grade} onChangeInd={changeInd} />}

                        </div>
                    </div>
                    <div className="col-md-3">
                        <div className="maptab-select-wrap m-0">
                            {SubdataLoaded && <MapsTabDropdown label="Subgroup:" subOption={subOptions} onChangeSubOpt={changeSub} />}
                        </div>
                    </div>
                </div>
                {subOption !== '' &&
                    <div className="averag-performance-content light-blue">
                        <div className="row">
                            <div className="col-md-12">
                                <div className="apcard-white">
                                    <div className="apcard-content p-0">
                                        <div className="apcard-header justify-content-center">
                                            <h3 className="apcard-heading">
                                                Average Performance of Students in EVS in Class 3, Percent
                                            </h3>
                                        </div>
                                        <Map data={data[legends[0]] != undefined && data[legends[0]][legends[1]][subOption]} subOption={subOption} subject={subject} />
                                    </div>
                                    {/* <div className="apcard-content p-0">
                                    <div className="apcard-header justify-content-center">
                                        <h3 className="apcard-heading">
                                            Average Performance of Students in EVS in Class 3, Percent
                                        </h3>
                                    </div>
                                    <Map />
                                </div> */}
                                </div>
                            </div>
                        </div>
                    </div>
                }
            </div>
        </div>
    )
}

export default MapTab