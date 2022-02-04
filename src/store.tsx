import { createStore, applyMiddleware } from 'redux';
// import logger from "redux-logger";
import promise from "redux-promise-middleware";

import Reducers from './reducers';

// const store = createStore(Reducers, applyMiddleware(logger, promise));
const store = createStore(Reducers, applyMiddleware(promise));
export default store;
