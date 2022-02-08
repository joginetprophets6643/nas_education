import React, { useState, useEffect } from "react";
import { useSelector, useDispatch } from 'react-redux';
import { getStateList } from "@/actions/visualization.action";
import { States } from '@/models/visualization'
import '@/styles/_style.scss'
import Main from "@/components/Visualization/Main/Main";

const App = () => {
    return (
        <>
            <Main />
        </>
    );
};

export default App;