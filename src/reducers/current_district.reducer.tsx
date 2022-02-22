import { CURRENT_DISTRICT_FETCH_FULFILLED, CURRENT_DISTRICT_FETCH_PENDING, CURRENT_DISTRICT_FETCH_REJECTED } from "@/constants/types";
import { IntialStateModel } from "@/models/visualization";

const initialStateList = {
    loading: false,
    loaded: false,
    error: false,
    data: {}
} as IntialStateModel


export const currentDistrictReducer = function (state = initialStateList,action: any) {
    const { type, payload } = action;
    switch (type) {
        case CURRENT_DISTRICT_FETCH_PENDING: {
            return { ...state, loading: true };
        }
        case CURRENT_DISTRICT_FETCH_FULFILLED: {
            return {
                ...state,
                loading: false,
                loaded: true,
                data: payload
            };
        }
        case CURRENT_DISTRICT_FETCH_REJECTED: {
            return { ...state, loading: false, loaded: false, error: true };
        }
        default:
            return state;
    }
};
