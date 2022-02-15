import React from 'react';
import Globe from '@/assets/images/globe-icon.svg';
import GraphCard from '@/components/Visualization/GraphCard/GraphCard';

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
                    <GraphCard  type="column" title="By Gender"/>
                </div>
                <div className="col-md-6">
                    <GraphCard type="column" title="By Location"/>
                </div>
            </div>
            <div className="row">
                <div className="col-md-6">
                    <GraphCard  type="column" title="By Management"/>
                </div>
                <div className="col-md-6">
                    <GraphCard type="column" title="By Social Group"/>
                </div>
            </div>
            <div className="row">
                <div className="col-md-6">
                    <GraphCard  type="pie" title="Range of Performance"/>
                </div>
                <div className="col-md-6">
                    <GraphCard type="map" title="By Learning Outcome"/>
                </div>
            </div>
        </div>
    </div>
  );
};

export default AveragePerormance;
