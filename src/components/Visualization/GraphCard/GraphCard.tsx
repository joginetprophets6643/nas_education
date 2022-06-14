import React, { useEffect, useState, useRef } from 'react';
import Highcharts from 'highcharts';
import HighchartsReact from 'highcharts-react-official';
import MapDropdown from '@/components/Visualization/Map/MapDropdown';
import HC_exporting from 'highcharts/modules/exporting'
import ChartType from '@/components/Visualization/ChartType/ChartType';
import Map from '@/components/Visualization/Map/Map';
import Nodata from "@/assets/images/no-data-icon.svg";
import Loader from '../Loader/Loader';
HC_exporting(Highcharts)



const GraphCard = (props: any) => {
    const [isLoading, setIsLoading] = useState<boolean>(true)
    const [series, setSeries] = useState<any>({})


    useEffect(() => {
        setSeries(props.series)
    }, [props.series])

    useEffect(() => {
        // setIsLoading(true)
        if (Object.keys(props.series).length > 0) {
            setTimeout(() => {
                setIsLoading(false)
            }, 500)
        }
    }, [series])
    return (
        <div className="apcard-white">
            <div className={`apcard-header card-${props.class_style}`}>
                <h3 className="apcard-heading apcard-heading-red">
                    <img src={props.image} alt="img" className="img-fluid" /> {props.title}
                </h3>
                {/* <div className="toggle-btn">
                <button className="btn">
                    <span className="material-icons">
                        menu
                    </span>
                </button>
            </div> */}
            </div>
            {isLoading ? <Loader /> : <div className="apcard-content">
                <div className="apcard-graph-wrap">
                    {Object.keys(props.series).length > 0 ?
                        props.type !== 'map' ?
                            (
                                !props.chartType ?
                                    <>
                                        {props.useDropdown ?
                                            <MapDropdown />

                                            : ""}

                                        <HighchartsReact
                                            highcharts={Highcharts}
                                            options={series}
                                            allowChartUpdate={true}
                                        />
                                    </>
                                    :
                                    <ChartType menuToggler={props.chartMenu} title={props.title} />
                            )
                            :
                            (!props.chartType ?
                                <>
                                    {props.useDropdown ?
                                        <MapDropdown />

                                        : ""}
                                    <Map />

                                </>
                                : <ChartType menuToggler={props.chartMenu} title={props.title} />
                            ) :
                        <div className='row  align-items-center no-data'>
                            <div className='col-md-12 text-center'>
                                <img src={Nodata} />
                            </div>
                        </div>
                    }
                </div>
            </div>}

        </div>
    );
};

export default GraphCard;
