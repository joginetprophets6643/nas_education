import { DISTRICT_FETCH_FULFILLED, DISTRICT_FETCH_PENDING, DISTRICT_FETCH_REJECTED } from "@/constants/types";
import { IntialStateModel } from "@/models/visualization";

const initialStateList = {
    loading: false,
    loaded: false,
    error: false,
    data: []
} as IntialStateModel


export const districtReducer = function (state = initialStateList,action: any) {
    const { type, payload } = action;
    switch (type) {
        case DISTRICT_FETCH_PENDING: {
            return { ...state, loading: true };
        }
        case DISTRICT_FETCH_FULFILLED: {
            return {
                ...state,
                loading: false,
                loaded: true,
                data: payload.data.data
            };
        }
        case DISTRICT_FETCH_REJECTED: {
            return { ...state, loading: false, loaded: false, error: true };
        }
        default:
            return state;
    }
};
