import React from 'react';
import Map from '@/components/Visualization/Map/Map';
import MapTabDropdown from '../MapTabDropdown/MapTabDropdown';

const MapTab = () => {
    return (
        <div className="maptab-wrap mt-3">
            <div className="average-performance-wrap card-blue mb-60">
                <div className="d-flex">
                    <div className="col-md-3">
                        <div className="maptab-select-wrap m-0">
                            <MapTabDropdown label="Sector:" />
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="maptab-select-wrap m-0">
                            <MapTabDropdown label="Indicator:" />
                        </div>
                    </div>
                    <div className="col-md-3">
                        <div className="maptab-select-wrap m-0">
                            <MapTabDropdown label="Subgroup:" />
                        </div>
                    </div>
                </div>
                <div className="averag-performance-content light-blue">
                    <div className="row">
                        <div className="col-md-12">
                            <div className="apcard-white">
                                <div className="apcard-content p-0">
                                    <div className="apcard-header justify-content-center">
                                        <h3 className="apcard-heading">
                                            Average Performance of Students in EVS in Class 3, Percent
                                        </h3>
                                    </div>
                                    <Map />
                                </div>
                                <div className="apcard-content p-0">
                                    <div className="apcard-header justify-content-center">
                                        <h3 className="apcard-heading">
                                            Average Performance of Students in EVS in Class 3, Percent
                                        </h3>
                                    </div>
                                    <Map />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default MapTab