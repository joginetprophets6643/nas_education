import { STATE_FETCH_FULFILLED, STATE_FETCH_PENDING, STATE_FETCH_REJECTED } from "../constants/types";

const initialStateList = {
    loading: false,
    loaded: false,
    error: false,
    data: []
} as any


export const visualizationReducer = function (state = initialStateList,action: any) {
    const { type, payload } = action;
    switch (type) {
        case STATE_FETCH_PENDING: {
            return { ...state, loading: true };
        }
        case STATE_FETCH_FULFILLED: {
            return {
                ...state,
                loading: false,
                loaded: true,
                data: payload.data.data
            };
        }
        case STATE_FETCH_REJECTED: {
            return { ...state, loading: false, loaded: false, error: true };
        }
        default:
            return state;
    }
};
