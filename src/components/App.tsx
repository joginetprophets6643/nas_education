import React, { useState, useEffect } from "react";
import { useSelector, useDispatch } from 'react-redux';
import { getStateList } from "../actions/visualization.action";
import { States } from '../models/visualization'
import '../styles/_style.scss'
import Main from "./Visualization/Main/Main";

const App = () => {

    const dispatch = useDispatch();
    const stateList:any = useSelector<any>(store =>store.visualization)
    const [states, setStates] = useState<States[]>([])

    useEffect(()=>{
        dispatch(getStateList());
    },[])


    useEffect(()=>{
        setStates(stateList.data)
    },[stateList])

    

    return (
        <>
            {/* <h1>State list</h1>
            <ul>
                {states.map((state: States) => {
                    return (
                        <li key={state.state_id}>
                            state is {state.state_name}
                        </li>
                    );
                })}
            </ul> */}
            <Main />
        </>
    );
};

export default App;