import React, { useState, useEffect } from "react";
import '@/styles/_style.scss'
import Main from "@/components/Visualization/Main/Main";

const App = () => {

    useEffect(() => {
        window.scrollTo(0, 0);
    }, [])
    return (
        <>
            <Main />
        </>
    );
};

export default App;