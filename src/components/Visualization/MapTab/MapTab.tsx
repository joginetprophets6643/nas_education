import React from 'react';
import DropdownSelect from '@/components/Visualization/TopBar/DropdownSelect';
import GlobeIcon from '@/assets/images/globe-icon.svg';
import Map from '@/components/Visualization/Map/Map';
import MapTabDropdown from '../MapTabDropdown/MapTabDropdown';

const MapTab = () => {
  return (
    <div className="maptab-wrap">
        <div className="average-performance-wrap card-blue mb-60">
            <div className="d-flex">
                <div className="col-md-3">
                    <div className="maptab-select-wrap">
                        <MapTabDropdown />
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="maptab-select-wrap">
                        <MapTabDropdown />
                    </div>
                </div>
                <div className="col-md-3">
                    <div className="maptab-select-wrap">
                        <MapTabDropdown />
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