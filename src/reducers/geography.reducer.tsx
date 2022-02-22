import { GEOGRAPHY_FETCH_FULFILLED, GEOGRAPHY_FETCH_PENDING, GEOGRAPHY_FETCH_REJECTED } from "@/constants/types";
import { IntialStateModel } from "@/models/visualization";

const initialStateList = {
    loading: false,
    loaded: false,
    error: false,
    data: 'national'
} as IntialStateModel


export const geographyReducer = function (state = initialStateList,action: any) {
    const { type, payload } = action;
    switch (type) {
        case GEOGRAPHY_FETCH_PENDING: {
            return { ...state, loading: true };
        }
        case GEOGRAPHY_FETCH_FULFILLED: {
            return {
                ...state,
                loading: false,
                loaded: true,
                data: payload
            };
        }
        case GEOGRAPHY_FETCH_REJECTED: {
            return { ...state, loading: false, loaded: false, error: true };
        }
        default:
            return state;
    }
};
