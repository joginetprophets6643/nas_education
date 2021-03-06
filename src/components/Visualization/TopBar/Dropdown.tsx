import { getStateList, getDistricts, changeId, changeDemography, setState, setDistrict } from "@/actions/visualization.action"
import { IntialStateModel, States, StoreModel, District } from "@/models/visualization"
import React, { useEffect, useState } from "react"
import { useDispatch, useSelector } from "react-redux"
import http from '@/services/utility'

const Dropdown = () => {
    const dispatch = useDispatch()
    const [states, setStateList] = useState<Array<States>>([])
    const [allDistrict, setAllDistrict] = useState<Array<States>>([])
    const [districts, setDistrictList] = useState<Array<District>>([])
    const state_list = useSelector<StoreModel>(store => store.states) as IntialStateModel
    const district_list = useSelector<StoreModel>(store => store.districts) as IntialStateModel
    const [searched_in_india, setSearchedInIndia] = useState<string>('')
    const [state_id, setStateId] = useState<number>(0)
    const currentState = useSelector<StoreModel>(store => store.current_state) as IntialStateModel
    const currentDistrict = useSelector<StoreModel>(store => store.current_district) as IntialStateModel
    const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
    const [current_text, setCurrentText] = useState<string>('')
    const [searchedDistrictList, setSearchedDistrictList] = useState<Array<District>>([])

    const getStateDistricts = (state: States) => {
        setStateId(state.udise_state_code)
        dispatch(setState(state))
        dispatch(changeDemography('state'))
        dispatch(changeId(state.udise_state_code))
    }

    const searchInIndia = (e: any) => {
        setSearchedInIndia(e.target.value)
    }

    const ChangeDistrict = (district: District) => {
        dispatch(changeDemography('district'))
        dispatch(changeId(district.udise_district_code))
        dispatch(setDistrict(district))
    }

    const setNational = () => {
        dispatch(changeDemography('national'))
        dispatch(changeId(0))
    }

    const ChangeGeography=(geography:any)=>{
        if(geography?.district_name){
            dispatch(changeDemography('district'))
            dispatch(changeId(geography.udise_district_code))
            dispatch(setDistrict(geography))
        }
        else{
            setStateId(geography.udise_state_code)
            dispatch(setState(geography))
            dispatch(changeDemography('state'))
            dispatch(changeId(geography.udise_state_code))
        }
    }

    useEffect(() => {
        dispatch(getStateList())
    }, [])

    useEffect(() => {
        if (state_list.loaded) {
            setStateList(state_list.data)
        }
    }, [state_list])

    useEffect(() => {
        if(district_list.loaded){
            setDistrictList(district_list.data)
        }
    }, [district_list])


    useEffect(() => {
        if (searched_in_india !== '') {
            // const filter = {
            //     state_name: { _contains: searched_state }
            // }
            http.get('district_masters?limit=-1').then(response => {
                setAllDistrict(response.data.data)
            }) as any
            // const searched_state_list=state_list.data.filter((state:any)=>{
            //     if(state.state_name.toLowerCase().includes(searched_state.toLowerCase())){
            //         return state
            //     }
            // })
            
            // console.log(districts)
            // const searched_district_list=district_list.data.filter((district:any)=>{
            //     console.log(district)
            //     if(district.district_name.toLowerCase().includes(searched_state.toLowerCase())){
            //         return district
            //     }
            // })
            // console.log(searched_district_list)
            // setSearchedDistrictList(searched_state_list.concat(searched_district_list))
        } else {
            setSearchedDistrictList([])
        }
    }, [searched_in_india])

    useEffect(()=>{
        if(allDistrict.length>0 && searched_in_india!==''){
            const searched_state_list=state_list.data.filter((state:any)=>{
                if(state.state_name.toLowerCase().includes(searched_in_india.toLowerCase())){
                    return state
                }
            })
            
            const searched_district_list=allDistrict.filter((district:any)=>{
                if(district.district_name.toLowerCase().includes(searched_in_india.toLowerCase())){
                    return district
                }
            })
            setSearchedDistrictList(searched_state_list.concat(searched_district_list))
        }
    },[allDistrict])


    useEffect(() => {
        const filter = {
            udise_state_code: { _eq: state_id }
        }
        dispatch(getDistricts(JSON.stringify(filter)))
    }, [state_id])


    useEffect(() => {
        if (current_geography === 'national') {
            setCurrentText('India')
        }
        if (current_geography === 'district') {
            setCurrentText(currentDistrict.data.district_name)
        }
        if (current_geography === 'state') {
            setCurrentText(currentState.data.state_name)
        }
    }, [current_geography, currentDistrict, currentState])



    return (
        <div className="col-md-5 col-lg-4">
            <div className="dropdown-select-wrap">
                <h3 className="select-label">
                    You can select any state/UT, District or block from here
                </h3>
                <div className="dropdown">
                    <a className="menu-level-main dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">{current_text}</a>
                    <div className="dropdown-menu menu-level-1">
                        <div className="inputSearch">
                            <input type="text" className="form-control" onChange={(e) => { searchInIndia(e) }} />
                        </div>
                        <div className="dropdown-list search-list">
                            <ul className="search-menu scrollbar-y-lightblue">
                                {searchedDistrictList.length !== 0 ? searchedDistrictList.map((result, index) => (
                                    <li key={index} onClick={() => { ChangeGeography(result) }}> {result.district_name ? result.district_name : result.state_name}</li>
                                    // <li key={index} onClick={() => { ChangeDistrict(result) }}> {result.district_name ? result.state_name+' -> '+result.district_name : result.state_name}</li>
                                ))
                                    : ""}
                            </ul>
                            {searchedDistrictList.length === 0 ?
                                <a href="#" onClick={setNational} className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">India</a>
                            : ""}
                            <ul className="dropdown-menu menu-level-2 scrollbar-y-lightblue">
                                {states.map((state, index) => (
                                    <li className="dropdown-list" key={state.state_id}>
                                        <a className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#" onClick={(e) => {
                                            e.preventDefault()
                                            getStateDistricts(state)
                                        }}>{state.state_name}</a>
                                        <ul className="dropdown-menu menu-level-3 scrollbar-y-darkblue" key={index}>
                                            {districts.map(((district, index) => (
                                                <li className="dropdown-list" key={index}><a className="dropdown-item" href="#" onClick={(e) => {
                                                    e.preventDefault()
                                                    ChangeDistrict(district)
                                                }}>{district.district_name}</a></li>
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