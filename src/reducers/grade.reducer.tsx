import { GRADE_FETCH_FULFILLED, GRADE_FETCH_PENDING, GRADE_FETCH_REJECTED } from "@/constants/types";

const initialGradeList = {
    loading: false,
    loaded: false,
    error: false,
    data: 3
} as any


export const gradeReducer = function (state = initialGradeList,action: any) {
    const { type, payload } = action;
    switch (type) {
        case GRADE_FETCH_PENDING: {
            return { ...state, loading: true };
        }
        case GRADE_FETCH_FULFILLED: {
            return {
                ...state,
                loading: false,
                loaded: true,
                data: payload
            };
        }
        case GRADE_FETCH_REJECTED: {
            return { ...state, loading: false, loaded: false, error: true };
        }
        default:
            return state;
    }
};
