import React from 'react';

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
            <div className="col-md-4">
            <div className="dropdown-select-wrap">
                <h3 className="select-label">
                You can select any state/UT, District or block from here
                </h3>
                <div className="dropdown">
                    <a className="menu-level-main dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">India</a>
                    <div className="dropdown-menu menu-level-1">
                        <div className="inputSearch">
                            <input type="text" className="form-control" />
                        </div>
                        <div className="dropdown-list">
                            <a href="#" className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">India</a>
                            <ul className="dropdown-menu menu-level-2">
                                <li className="dropdown-list">
                                    <a className="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" href="#"> Andaman & Nicobar Islands</a>
                                    <ul className="dropdown-menu menu-level-3">
                                        <li className="dropdown-list"><a className="dropdown-item" href="#"> Nicobar Islands</a></li>
                                        <li className="dropdown-list"><a className="dropdown-item" href="#"> North and Middle Andaman</a></li>
                                        <li className="dropdown-list"><a className="dropdown-item" href="#"> South Andaman</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
  );
};

export default TopBar;
