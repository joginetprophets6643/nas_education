import { IDENTITY_FETCH_FULFILLED, IDENTITY_FETCH_PENDING, IDENTITY_FETCH_REJECTED } from "@/constants/types";
import { IntialStateModel } from "@/models/visualization";

const initialStateList = {
    loading: false,
    loaded: false,
    error: false,
    data: 0
} as IntialStateModel


export const identityReducer = function (state = initialStateList,action: any) {
    const { type, payload } = action;
    switch (type) {
        case IDENTITY_FETCH_PENDING: {
            return { ...state, loading: true };
        }
        case IDENTITY_FETCH_FULFILLED: {
            return {
                ...state,
                loading: false,
                loaded: true,
                data: payload
            };
        }
        case IDENTITY_FETCH_REJECTED: {
            return { ...state, loading: false, loaded: false, error: true };
        }
        default:
            return state;
    }
};
