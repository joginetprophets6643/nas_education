import React from 'react';
import DropdownSelect from '@/components/Visualization/TopBar/DropdownSelect';
import GlobeIcon from '@/assets/images/globe-icon.svg';
import Map from '@/components/Visualization/Map/Map';

const ScatterPlot = () => {
  return (
    <div className="scatterplot-wrap">
        <div className="row align-items-center">
            <div className="col-md-6">
                <div className="scatterplot-select-wrap">
                    <DropdownSelect label="Y-Axis:" />
                </div>
            </div>
            <div className="col-md-6">
                <div className="scatterplot-select-wrap">
                    <DropdownSelect label="X-Axis:" />
                </div>
            </div>
            <div className="col-md-12">
            <div className="average-performance-wrap card-blue mb-60">
                    <h2 className="ap-top-heading">
                        <img src={GlobeIcon} alt="img" className="img-fluid" width="30" />
                        Average Performance of Students by learning outcome in Language in Class 3,Percent
                    </h2>
                    <div className="averag-performance-content light-blue">
                        <div className="row">
                            <div className="col-md-12">
                                <div className="apcard-white">
                                    <div className="apcard-content">
                                        <Map />
                                    </div>
                                </div>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  )
}

export default ScatterPlot