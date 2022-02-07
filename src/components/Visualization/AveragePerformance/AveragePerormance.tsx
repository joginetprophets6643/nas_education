import React from 'react';
import './AveragePerformance.scss';
import Globe from '../../../assets/images/globe-icon.svg';
import GraphCard from '../GraphCard/GraphCard';

const AveragePerormance = () => {
  return (
    <div className="average-performance-wrap card-blue mb-60">
        <h2 className="ap-top-heading">
            <img src={Globe} alt="img" className="img-fluid" width="30" /> 
            Language Average Performance of Students
        </h2>
        <div className="averag-performance-content light-blue">
            <div className="row">
                <div className="col-md-6">
                    <GraphCard />
                </div>
                <div className="col-md-6">
                    <GraphCard />
                </div>
            </div>
        </div>
    </div>
  );
};

export default AveragePerormance;
