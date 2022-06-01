import React from 'react';
import { useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { setClass } from '@/actions/visualization.action'
import { useEffect } from 'react';

const Tabs = () => {
    const dispatch = useDispatch()
    const [grade, setGrade] = useState<number>(0)
    const current_grade = useSelector<any>(store => store.grade.data)

    const changeGrade = (grade: number) => {
        dispatch(setClass(grade))
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
                <button className="nav-link" id="maps-tab" data-bs-toggle="tab" data-bs-target="#maps" type="button" role="tab" aria-controls="maps" aria-selected="false">MAPS</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="plot-tab" data-bs-toggle="tab" data-bs-target="#plot" type="button" role="tab" aria-controls="plot" aria-selected="false">SCATTER PLOT</button>
            </li>
        </ul>
    );
};

export default Tabs;
