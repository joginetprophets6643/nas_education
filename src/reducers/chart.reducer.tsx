import { CHART_FETCH_FULFILLED, CHART_FETCH_PENDING, CHART_FETCH_REJECTED, CHART_FETCH_RESET } from "@/constants/types";
import { IntialStateModel } from "@/models/visualization";

const initialStateList = {
    loading: false,
    loaded: false,
    error: false,
    data: []
} as IntialStateModel


export const chartReducer = function (state = initialStateList, action: any) {
    const { type, payload } = action;
    switch (type) {
        case CHART_FETCH_PENDING: {
            return { ...state, loading: true };
        }
        case CHART_FETCH_FULFILLED: {
            return {
                ...state,
                loading: false,
                loaded: true,
                data: payload.data.data.length > 0 ? JSON.parse(payload.data.data[0].data) : {}
                // data: payload.data.data
            };
        }
        case CHART_FETCH_REJECTED: {
            return { ...state, loading: false, loaded: false, error: true };
        }
        case CHART_FETCH_RESET: {
            return { data: [], loading: false, loaded: false, error: false };
        }
        default:
            return state;
    }
};
