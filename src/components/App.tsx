import React, { useState, useEffect } from "react";
import { useSelector, useDispatch } from 'react-redux';
import { getStateList } from "../actions/visualization.action";
import { States } from '../models/visualization'


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
        <div>
            <h1>State list</h1>
            <ul>
                {states.map((state: States) => {
                    return (
                        <li key={state.state_id}>
                            state is {state.state_name}
                        </li>
                    );
                })}
            </ul>
        </div>
    );
};

export default App;