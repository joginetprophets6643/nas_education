import { visualizationReducer } from '@/reducers/visualization.reducer';
import { gradeReducer } from '@/reducers/grade.reducer';
import { cardsReducers } from '@/reducers/cards.reducer';
import { combineReducers } from 'redux';
import { districtReducer } from '@/reducers/district.reducer';
import { geographyReducer } from '@/reducers/geography.reducer';
import { identityReducer } from './identity.resolver';
import { currentStateReducer } from './current_state.reducer';
import { currentDistrictReducer } from './current_district.reducer';

const reducers =  combineReducers({
    states: visualizationReducer,
    grade: gradeReducer,
    cards: cardsReducers,
    districts: districtReducer,
    current_geography:geographyReducer,
    current_id:identityReducer,
    current_state:currentStateReducer,
    current_district: currentDistrictReducer
})
export default reducers