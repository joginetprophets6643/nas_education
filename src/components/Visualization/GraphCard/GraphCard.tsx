import React, { useEffect, useState } from 'react';
import People from '@/assets/images/ap-people.svg';
import Highcharts from 'highcharts';
import HighchartsReact from 'highcharts-react-official';
import { useSelector } from 'react-redux';
import { IntialStateModel, States, StoreModel } from '@/models/visualization';


const GraphCard = (props: any) => {
  return (
    <div className="apcard-white">
        <div className="apcard-header">
            <h3 className="apcard-heading apcard-heading-red">
                <img src={People} alt="img" className="img-fluid" /> {props.title}
            </h3>
            <div className="toggle-btn">
                <button className="btn">
                    <span className="material-icons">
                        menu
                    </span>
                </button>
            </div>
        </div> 
        <div className="apcard-content">
            <div className="apcard-graph-wrap">
            {Object.keys(props.series).length > 0 ?
            <HighchartsReact
                highcharts={Highcharts}
                options={props.series}
            />
            :""}
            </div>  
        </div>    
    </div>
  );
};

export default GraphCard;
