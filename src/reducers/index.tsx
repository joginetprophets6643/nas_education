import { visualizationReducer } from '@/reducers/visualization.reducer';
import { gradeReducer } from '@/reducers/grade.reducer';
import { cardsReducers } from '@/reducers/cards.reducer';
import { combineReducers } from 'redux';
import { districtReducer } from '@/reducers/district.reducer';
import { geographyReducer } from '@/reducers/geography.reducer';
import { identityReducer } from '@/reducers/identity.resolver';
import { currentStateReducer } from '@/reducers/current_state.reducer';
import { currentDistrictReducer } from '@/reducers/current_district.reducer';
import { subjectCards } from '@/reducers/subjectcards.reducer';
import { chartReducer } from '@/reducers/chart.reducer';

const reducers =  combineReducers({
    states: visualizationReducer,
    grade: gradeReducer,
    cards: cardsReducers,
    districts: districtReducer,
    current_geography:geographyReducer,
    current_id:identityReducer,
    current_state:currentStateReducer,
    current_district: currentDistrictReducer,
    subject_cards: subjectCards,
    charts: chartReducer,
})
export default reducers