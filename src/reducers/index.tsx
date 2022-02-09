import { visualizationReducer } from '@/reducers/visualization.reducer';
import { gradeReducer } from '@/reducers/grade.reducer';
import { cardsReducers } from './cards.reducer';
import { combineReducers } from 'redux';

const reducers =  combineReducers({
    visualization: visualizationReducer,
    grade: gradeReducer,
    cards: cardsReducers
})
export default reducers