import { StoreModel } from '@/models/visualization';
import React from 'react';
import { useSelector } from 'react-redux';
import Dropdown from './Dropdown';
import DropdownSelect from './DropdownSelect';

const TopBar = () => {

    const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
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
                                <li className="breadcrumb-item"><a href="/">Home</a></li>
                                <li className="breadcrumb-item"><a href="/visualization/nas-2021">Visualization</a></li>
                                <li className="breadcrumb-item active" aria-current="page">{current_geography.charAt(0).toUpperCase() + current_geography.slice(1)}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <Dropdown />
                {/* <div className="col-md-4">
                <DropdownSelect />
            </div> */}
            </div>
        </div>
    );
};

export default TopBar;
