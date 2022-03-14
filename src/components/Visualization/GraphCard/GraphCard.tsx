import React, { useEffect, useState, useRef } from 'react';
import People from '@/assets/images/ap-people.svg';
import Highcharts from 'highcharts';
import HighchartsReact from 'highcharts-react-official';
import { useSelector } from 'react-redux';
import { IntialStateModel, States, StoreModel } from '@/models/visualization';
import HC_exporting from 'highcharts/modules/exporting'
import ChartType from '@/components/Visualization/ChartType/ChartType';
import Map from '@/components/Visualization/Map/Map';
HC_exporting(Highcharts)



const GraphCard = (props: any) => {
    console.log(props)
  return (
    <div className="apcard-white">
        <div className="apcard-header">
            <h3 className="apcard-heading apcard-heading-red">
                <img src={People} alt="img" className="img-fluid" /> {props.title}
            </h3>
            {/* <div className="toggle-btn">
                <button className="btn">
                    <span className="material-icons">
                        menu
                    </span>
                </button>
            </div> */}
        </div> 
        <div className="apcard-content">
            <div className="apcard-graph-wrap">
            {Object.keys(props.series).length > 0 && !props.chartType ?
            <HighchartsReact
                highcharts={Highcharts}
                options={props.series}
                
            />
            : <ChartType />}
            </div>  
        </div>    
    </div>
  );
};

export default GraphCard;
