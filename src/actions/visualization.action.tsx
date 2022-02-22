import * as constants from '@/constants/types'
import { District, States } from '@/models/visualization'
import http from '@/services/utility'

export const getStateList = () => ({
    type: constants.STATE_FETCH,
    payload: http.get('state_masters')
})

export const setClass = (grade: number)=>({
    type: constants.GRADE_FETCH_FULFILLED,
    payload: grade
})

export const  getCardsData =  (fitlters:any,fields: string)=>({
    type: constants.CARDS_FETCH,
    payload: http.get('visualization_participation_tbl?filter='+fitlters+'&fields='+fields)
})

export const  getDistricts =  (fitlters:any)=>({
    type: constants.DISTRICT_FETCH,
    payload: http.get('district_masters?filter='+fitlters)
})

export const  changeDemography =  (geography:string)=>({
    type: constants.GEOGRAPHY_FETCH_FULFILLED,
    payload: geography
})

export const  changeId =  (id:number)=>({
    type: constants.IDENTITY_FETCH_FULFILLED,
    payload: id
})

export const setState =  (state: States)=>({
    type: constants.CURRENT_STATE_FETCH_FULFILLED,
    payload: state
})

export const setDistrict =  (district: District)=>({
    type: constants.CURRENT_DISTRICT_FETCH_FULFILLED,
    payload: district
})

export const  getSubjectCards =  (filters:any)=>({
    type: constants.SUBJECT_CARDS_FETCH,
    payload: http.get('visualization_performance_tbl?filter='+filters)
})

export const getGraphs = (filters:any) =>({
    type: constants.CHART_FETCH,
    payload: http.get('visualization_performance_graph_tbl?filter='+filters)
})
