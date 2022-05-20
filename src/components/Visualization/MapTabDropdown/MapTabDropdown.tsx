import React from 'react';
import Select from 'react-select';
import 'react-select-2/dist/css/react-select-2.css';
import 'react-select-2/dist/js/react-select-2.js';


const options = [
    { value: 'blues', label: 'Blues' },
    { value: 'rock', label: 'Rock' },
    { value: 'jazz', label: 'Jazz' },
    { value: 'orchestra', label: 'Orchestra' } 
  ];

const MapTabDropdown = () => {
  return (
    <Select options = {options} />
  )
}

export default MapTabDropdown