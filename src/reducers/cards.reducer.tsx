import { CARDS_FETCH_FULFILLED, CARDS_FETCH_PENDING, CARDS_FETCH_REJECTED } from "@/constants/types";
import { IntialStateModel } from "@/models/visualization";
const initialCardData = {
    loading: false,
    loaded: false,
    error: false,
    data: []
} as IntialStateModel


export const cardsReducers = function (state = initialCardData,action: any) {
    const { type, payload } = action;
    switch (type) {
        case CARDS_FETCH_PENDING: {
            return { ...state, loading: true };
        }
        case CARDS_FETCH_FULFILLED: {
            return {
                ...state,
                loading: false,
                loaded: true,
                data: payload.data.data
            };
        }
        case CARDS_FETCH_REJECTED: {
            return { ...state, loading: false, loaded: false, error: true };
        }
        default:
            return state;
    }
};
