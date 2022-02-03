import { STATE_FETCH , STATE_FETCH_PENDING} from "../constants/types";

import axios from 'axios'


export const getStateList = () => ({
    type: STATE_FETCH,
    payload: axios.get('http://localhost:8055/items/state_masters')
})