import React from 'react';
import { useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { setClass } from '@/actions/visualization.action'
import { getLinkedGraphs, getScatterLinkedGraphs } from '@/actions/visualization.action';
import { StoreModel } from '@/models/visualization';

const Tabs = (props: any) => {
    const dispatch = useDispatch()
    const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
    const [grade, setGrade] = useState<number>(0)
    const current_district = useSelector<StoreModel>(store => store.current_district.data) as any
    const current_id = useSelector<StoreModel>(store => store.current_id.data) as number

    const changeGrade = (grade: number) => {
        dispatch(setClass(grade))
        props.onchangeScreen('grade')
    }

    const changeScreen = (screen: string) => {

        props.onchangeScreen(screen)

        let temp_reusable_filters = {}
        if (screen == 'map') {
            temp_reusable_filters = {
                type: { _eq: current_geography },
                grade: { _eq: 3 }
            } as any
        } else {
            temp_reusable_filters = {
                type: { _eq: current_geography },
            } as any
        }

        if (current_geography === 'state') {
            temp_reusable_filters = { ...temp_reusable_filters, state_id: { _eq: current_id } }
        }
        if (current_geography === 'district') {
            temp_reusable_filters = { ...temp_reusable_filters, type: 'state', state_id: { _eq: current_district.udise_state_code } }
        }
        if (screen == 'map') {
            dispatch(getLinkedGraphs(JSON.stringify(temp_reusable_filters)))
        } else {
            dispatch(getScatterLinkedGraphs(JSON.stringify(temp_reusable_filters)))
        }

    }

    return (
        <ul className="nav nav-tabs" id="visualtab" role="tablist">
            <li className="nav-item" role="presentation">
                <button className="nav-link active" id="class3-tab" data-bs-toggle="tab" data-bs-target="#class3" type="button" role="tab" aria-controls="class3" aria-selected="true" onClick={(e) => { changeGrade(3) }}>class 3</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="class5-tab" data-bs-toggle="tab" data-bs-target="#class3" type="button" role="tab" aria-controls="class5" aria-selected="false" onClick={(e) => { changeGrade(5) }}>class 5</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="class8-tab" data-bs-toggle="tab" data-bs-target="#class3" type="button" role="tab" aria-controls="class8" aria-selected="false" onClick={(e) => { changeGrade(8) }}>class 8</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="class10-tab" data-bs-toggle="tab" data-bs-target="#class3" type="button" role="tab" aria-controls="class10" aria-selected="false" onClick={(e) => { changeGrade(10) }}>class 10</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="maps-tab" data-bs-toggle="tab" data-bs-target="#maps" type="button" role="tab" aria-controls="maps" aria-selected="false" onClick={(e) => { changeScreen('map') }}>MAPS</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="plot-tab" data-bs-toggle="tab" data-bs-target="#plot" type="button" role="tab" aria-controls="plot" aria-selected="false" onClick={(e) => { changeScreen('scatter') }}>SCATTER PLOT</button>
            </li>
        </ul>
    );
};

export default Tabs;
