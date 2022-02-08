import { visualizationReducer } from '@/reducers/visualization.reducer';
import { gradeReducer } from '@/reducers/grade.reducer';

import { combineReducers } from 'redux';

const reducers =  combineReducers({
    visualization: visualizationReducer,
    grade: gradeReducer
})
export default reducers