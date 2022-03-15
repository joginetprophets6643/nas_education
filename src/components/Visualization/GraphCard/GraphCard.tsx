import React, { useEffect, useState, useRef } from 'react';
import People from '@/assets/images/ap-people.svg';
import Highcharts from 'highcharts';
import HighchartsReact from 'highcharts-react-official';
import MapDropdown from '@/components/Visualization/Map/MapDropdown';
import HC_exporting from 'highcharts/modules/exporting'
import ChartType from '@/components/Visualization/ChartType/ChartType';
import Map from '@/components/Visualization/Map/Map';
import Nodata from "@/assets/images/no-data-icon.svg";
HC_exporting(Highcharts)



const GraphCard = (props: any) => {
    // console.log(props.series)
    useEffect(()=>{
        console.log(props.series.series)
    },[props])
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
                {Object.keys(props.series).length > 0 ?
                props.type !== 'map' ?
                (
                 !props.chartType ?
                    <>
                    { props.useDropdown?
                    <MapDropdown />

                    :""}
                    <HighchartsReact
                    highcharts={Highcharts}
                    options={props.series}
                    allowChartUpdate = {true}
                    
                />
                    </>
                    :
                <ChartType menuToggler={props.chartMenu} />
                )
                    : 
                (!props.chartType ?
                    <>
                    { props.useDropdown?
                        <MapDropdown />

                    :""}
                        <Map/>

                    </>
                : <ChartType menuToggler={props.chartMenu} />
                ) : 
                <div className='row  align-items-center no-data'>
                    <div className='col-md-12 text-center'>
                        <img src={Nodata} />
                    </div>
                </div>
                }
            </div>  
        </div>    
    </div>
  );
};

export default GraphCard;
