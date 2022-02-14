import React from 'react';
import Dropdown from './Dropdown';

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
                <button className="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sideBar" aria-controls="sideBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span className="navbar-toggler-icon"></span>
                    <span className="navbar-toggler-icon"></span>
                    <span className="navbar-toggler-icon"></span>
                </button>
            </div>
            <Dropdown/>
        </div>
    </div>
  );
};

export default TopBar;
