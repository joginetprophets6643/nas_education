import React from 'react';
import Select from 'react-select';
import 'react-select-2/dist/css/react-select-2.css';
import 'react-select-2/dist/js/react-select-2.js';


const options = [
    { value: 'CLASS 3', label: 'CLASS 3' },
    { value: 'CLASS 5', label: 'CLASS 5' },
    { value: 'CLASS 8', label: 'CLASS 8' },
    { value: 'CLASS 10', label: 'CLASS 10' } 
  ];

const MapTabDropdown = (props:any) => {
  return (
    <div className="maptabdropdown-wrap">
      <label className="maptabdropdown-label">{props.label}</label>
      <Select options = {options} className="react-select" classNamePrefix="react-select" />
    </div>
  )
}

export default MapTabDropdown