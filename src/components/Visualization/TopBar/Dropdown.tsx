import { getStateList ,getDistricts, changeId, changeDemography, setState, setDistrict} from "@/actions/visualization.action"
import { IntialStateModel, States, StoreModel,District } from "@/models/visualization"
import React, { useEffect, useState } from "react"
import { useDispatch, useSelector } from "react-redux"
import http from '@/services/utility'

const Dropdown = () =>{
    const dispatch = useDispatch()
    const [states, setStateList] = useState<Array<States>>([])
    const [districts, setDistrictList] = useState<Array<District>>([])
    const state_list = useSelector<StoreModel>(store=> store.states) as IntialStateModel
    const district_list = useSelector<StoreModel>(store=> store.districts) as IntialStateModel
    const [searched_district, setSearchedDistrict] = useState<string>('')
    const [state_id,setStateId] = useState<number>(0)
    const currentState = useSelector<StoreModel>(store=> store.current_state) as IntialStateModel
    const currentDistrict = useSelector<StoreModel>(store=> store.current_district) as IntialStateModel
    const current_geography =  useSelector<StoreModel>(store => store.current_geography.data) as string
    const [current_text,setCurrentText] = useState<string>('')

    const getStateDistricts = (state: States)=>{
        console.log(state)
        setStateId(state.udise_state_code)
        dispatch(setState(state))
        dispatch(changeDemography('state'))
        dispatch(changeId(state.udise_state_code))
    }

    const searchDistrict = (e: any)=>{
        setSearchedDistrict(e.target.value)
    }

    const ChangeDistrict = (district: District) => {
        dispatch(changeDemography('district'))
        dispatch(changeId(district.udise_district_code))
        dispatch(setDistrict(district))
    }

    useEffect(()=>{
        dispatch(getStateList())
    },[])

    useEffect(()=>{
        if(state_list.loaded){
            setStateList(state_list.data)
        }
    },[state_list])

    useEffect(()=>{
        setDistrictList(district_list.data)
    },[district_list])


    useEffect(()=>{
        if(searched_district !== ''){
            const filter = {
                district_name : {_contains: searched_district}
            }
            const data = http.get('district_masters?filter='+ JSON.stringify(filter))
        }
    },[searched_district])


    useEffect(()=>{
        const filter ={
            udise_state_code: {_eq: state_id}
        }
        dispatch(getDistricts(JSON.stringify(filter)))
    },[state_id])


    useEffect(()=>{
        if(current_geography === 'national'){
            setCurrentText('India')
        }
        if(current_geography === 'district'){
            setCurrentText(currentDistrict.data.district_name)
        }
        if(current_geography === 'state'){
            setCurrentText(currentState.data.state_name)
        }
    },[current_geography])



    return(
        <div className="col-md-4">
        <div className="dropdown-select-wrap">
            <h3 className="select-label">
            You can select any state/UT, District or block from here
            </h3>
            <div className="dropdown">
                <a className="menu-level-main dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">{current_text}</a>
                <div className="dropdown-menu menu-level-1">
                    <div className="inputSearch">
                        <input type="text" className="form-control" onChange={(e)=>{searchDistrict(e)}} />
                    </div>
                    <div className="dropdown-list">
                        <a href="#" className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">India</a>
                        <ul className="dropdown-menu menu-level-2">
                            {states.map((state,index)=>(
                                <li className="dropdown-list" key={state.state_id}>
                                    <a className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" onClick={()=>{getStateDistricts(state)}}>{state.state_name}</a>
                                    <ul className="dropdown-menu menu-level-3" key={index}>
                                        {districts.map(((district,index)=>(
                                            <li className="dropdown-list" key={index}><a className="dropdown-item" href="#" onClick={()=>{ChangeDistrict(district)}}>{district.district_name}</a></li>
                                        )))}
                                    </ul>
                                </li>
                            ))}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    )
}

export default Dropdown