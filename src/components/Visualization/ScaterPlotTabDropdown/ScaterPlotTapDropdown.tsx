import React, { useEffect, useState } from 'react';
import Select from 'react-select';
import { useSelector } from 'react-redux';
import 'react-select-2/dist/css/react-select-2.css';
import 'react-select-2/dist/js/react-select-2.js';
import { StoreModel } from '@/models/visualization';


const options = [
    { value: 'CLASS 3', label: 'CLASS 3' },
    { value: 'CLASS 5', label: 'CLASS 5' },
    { value: 'CLASS 8', label: 'CLASS 8' },
    { value: 'CLASS 10', label: 'CLASS 10' }
];

const ScatterPlotTabDropdown = (props: any) => {
    const { label } = props
    return (
        <div className="maptabdropdown-wrap">
            <label className="maptabdropdown-label">{label}</label>
            <Select options={options} className="react-select" classNamePrefix="react-select" />
        </div>
    )
}

export default ScatterPlotTabDropdown