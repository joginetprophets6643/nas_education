import React from 'react';
import Dropdown from './Dropdown';
import DropdownSelect from './DropdownSelect';

const TopBar = () => {
  return (
    <div className="top-content">
        <div className="row justify-content-between">
            <div className="col-md-4">
                <h2 className="heading-black">
                    Visualization
                </h2>
                <div className="breadcrum-wrap breadcrum-grey">
                    <nav aria-label="breadcrumb">
                        <ol className="breadcrumb">
                            <li className="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li className="breadcrumb-item"><a href="visualization-landing.html">Visualization</a></li>
                            <li className="breadcrumb-item active" aria-current="page">National</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <Dropdown/>
            {/* <div className="col-md-4">
                <DropdownSelect />
            </div> */}
        </div>
    </div>
  );
};

export default TopBar;
