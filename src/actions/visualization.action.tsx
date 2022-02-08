import { GRADE_FETCH_FULFILLED, STATE_FETCH , STATE_FETCH_PENDING} from "@/constants/types";
import { GRADE_FETCH , GRADE_FETCH_PENDING} from "@/constants/types";

import http from '@/services/utility'

export const getStateList = () => ({
    type: STATE_FETCH,
    payload: http.get('state_masters')
})

export const setClass = (grade: number)=>({
    type: GRADE_FETCH_FULFILLED,
    payload: grade
})