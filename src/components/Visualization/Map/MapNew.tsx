import React from 'react';
import Highcharts from "highcharts/highmaps";
import HighchartsReact from "highcharts-react-official";
import highchartsMap from "highcharts/modules/map";

let mapDataIE = require("@highcharts/map-collection/countries/in/custom/in-all-disputed.geo.json");
highchartsMap(Highcharts);

const MapNew = () => {
    let mapOptions = {
        chart: {
            map: mapDataIE
        },
        title: {
            text: ''
        },

        subtitle: {
            text: ''
        },
        legend: {
            enabled: true
        },
        mapNavigation: {
            enabled: false,
        },
        series: [
            {
            name: 'India',
            allowPointSelect: true,
            cursor: 'pointer',
            borderColor: "#6E6E6E",
            color: '#FFB142',
            type: "map",
            states: {
                hover: {
                color: "#006bb6"
                }
            },
            dataLabels: {
                enabled: false,
                format: "{point.name}"
            },
            allAreas: false,
            data: [
                ['madhya pradesh', 10], ['uttar pradesh',11], ['karnataka', 12],
                ['nagaland', 13], ['bihar', 14], ['lakshadweep', 15],
                ['andaman and nicobar', 16], ['assam', 17], ['west bengal', 18],
                ['puducherry', 19], ['daman and diu', 20], ['gujarat', 21],
                ['rajasthan', 22], ['dadara and nagar havelli', 23],
                ['chhattisgarh', 24], ['tamil nadu', 25], ['chandigarh', 26],
                ['punjab', 27], ['haryana', 28], ['andhra pradesh', 29],
                ['maharashtra', 30], ['himachal pradesh', 31], ['meghalaya', 32],
                ['kerala', 33], ['telangana', 34], ['mizoram', 35], ['tripura', 36],
                ['manipur', 37], ['arunanchal pradesh', 38], ['jharkhand', 39],
                ['goa', 40], ['nct of delhi', 41], ['odisha', 42],
                ['jammu and kashmir', 43], ['sikkim', 44], ['uttarakhand', 45]
            ]
            }
        ]
    };
    return (
        <div className="apcard-graph-wrap">
            <div className="map-content">
                <HighchartsReact
                constructorType={'mapChart'}
                highcharts={Highcharts}
                options={mapOptions}
                allowChartUpdate={true}
                immutable={true}
                />
            </div>
        </div>
    )
}

export default MapNew