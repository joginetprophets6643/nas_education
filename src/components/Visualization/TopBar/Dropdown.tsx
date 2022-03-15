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
    const [searchedDistrictList , setSearchedDistrictList] = useState<Array<District>>([])

    const getStateDistricts = (state: States)=>{
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

    const setNational =()=>{
        dispatch(changeDemography('national'))
        dispatch(changeId(0))
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
        if(searched_district !== '' && searched_district.length >= 3){
            const filter = {
                district_name : {_contains: searched_district}
            }
            http.get('district_masters?filter='+ JSON.stringify(filter)).then(response=>{
                setSearchedDistrictList(response.data.data)
            }) as any
        }else{
            setSearchedDistrictList([])
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
    },[current_geography,currentDistrict,currentState])



    return(
        <div className="col-md-5 col-lg-4">
        <div className="dropdown-select-wrap">
            <h3 className="select-label">
            You can select any state/UT, District or block from here
            </h3>
            <div className="dropdown">
                <a className="menu-level-main dropdown-toggle" href="" data-bs-toggle="dropdown" data-bs-auto-close="outside">{current_text}</a>
                <div className="dropdown-menu menu-level-1">
                    <div className="inputSearch">
                        <input type="text" className="form-control" onChange={(e)=>{searchDistrict(e)}} />
                    </div>
                    <div className="dropdown-list search-list">
                        <ul className="search-menu scrollbar-y-lightblue">
                            {searchedDistrictList.length !== 0 ? searchedDistrictList.map((result,index)=>(
                                <li key={index} onClick={()=>{ChangeDistrict(result)}}> {result.district_name}</li>
                            ))
                            : ""}
                        </ul>
                        {searchedDistrictList.length === 0 ? 
                        <a href="#" onClick={(e)=>{e.preventDefault()}} className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">India</a>
                        :""}
                        <ul className="dropdown-menu menu-level-2 scrollbar-y-lightblue">
                            {states.map((state,index)=>(
                                <li className="dropdown-list" key={state.state_id}>
                                    <a className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" onClick={(e)=>{
                                        e.preventDefault()
                                        getStateDistricts(state)}}>{state.state_name}</a>
                                    <ul className="dropdown-menu menu-level-3 scrollbar-y-darkblue" key={index}>
                                        {districts.map(((district,index)=>(
                                            <li className="dropdown-list" key={index}><a className="dropdown-item" href="#" onClick={(e)=>{
                                                e.preventDefault()
                                                ChangeDistrict(district)}}>{district.district_name}</a></li>
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