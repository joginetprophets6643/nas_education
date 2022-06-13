import { SCATTER_LINKED_CHART_FETCH_FULFILLED, SCATTER_LINKED_CHART_FETCH_PENDING, SCATTER_LINKED_CHART_FETCH_REJECTED, SCATTER_LINKED_CHART_FETCH_RESET } from "@/constants/types";
import { IntialStateModel } from "@/models/visualization";

const initialStateList = {
    loading: false,
    loaded: false,
    error: false,
    data: []
} as IntialStateModel


export const scatterLinkedChartReducer = function (state = initialStateList, action: any) {
    const { type, payload, screen } = action;
    switch (type) {
        case SCATTER_LINKED_CHART_FETCH_PENDING: {
            return { ...state, loading: true };
        }
        case SCATTER_LINKED_CHART_FETCH_FULFILLED: {
            return {
                ...state,
                loading: false,
                loaded: true,
                data: payload.data.data.length > 0 ? payload.data : {}
                // data: payload.data.data
            };

        }
        case SCATTER_LINKED_CHART_FETCH_REJECTED: {
            return { ...state, loading: false, loaded: false, error: true };
        }
        case SCATTER_LINKED_CHART_FETCH_RESET: {
            return { data: [], loading: false, loaded: false, error: false };
        }
        default:
            return state;
    }
};
