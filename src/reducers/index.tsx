import { visualizationReducer } from './visualization.reducer';
import { combineReducers } from 'redux';

const reducers =  combineReducers({
    visualization: visualizationReducer
})
export default reducers