import * as constants from '@/constants/types'


import http from '@/services/utility'

export const getStateList = () => ({
    type: constants.STATE_FETCH,
    payload: http.get('state_masters')
})

export const setClass = (grade: number)=>({
    type: constants.GRADE_FETCH_FULFILLED,
    payload: grade
})

export const  getCardsData =  (fitlters:any,fields: any)=>({
    type: constants.CARDS_FETCH,
    payload: http.get('visualization_participation_tbl?filter='+fitlters+'&fields='+fields)
})