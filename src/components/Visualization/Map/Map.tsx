import React, { useEffect, useState } from 'react';
import MapDropdown from './MapDropdown';
import Highcharts from "highcharts";
import HighchartsReact from "highcharts-react-official";
import highchartsMap from "highcharts/modules/map";
const mapDataIE = require("@highcharts/map-collection/countries/in/custom/in-all-disputed.geo.json");
highchartsMap(Highcharts);



const Map = (props: any) => {
  const { data, subOption } = props
  const mapOptions = {
    chart: {
      map: 'countries/in/custom/in-all-disputed'
    },

    title: {
      text: ''
    },

    subtitle: {
      text: ''
    },
    legend: {
      enabled: false
    },
    tooltip: { enabled: true },
    navigation: {
      buttonOptions: {
        enabled: false
      }
    },
    credits: {
      enabled: false
    },
    series: [{
      mapData: mapDataIE,
      name: 'State',
      allowPointSelect: true,
      cursor: 'pointer',
      color: "#9ec2e4",
      borderColor: "#6e6f70",
      states: {
        hover: {
          color: '#f7941c'
        },
        select: {
          color: '#9ec2e4'
        }
      },
      dataLabels: {
        enabled: false,
        format: subOption
      },

    }]
  }
  return (
    <div className="apcard-graph-wrap">
      <div className="map-content">
        <HighchartsReact
          constructorType={'mapChart'}
          highcharts={Highcharts}
          options={mapOptions}
          allowChartUpdate={false}

        />
      </div>
    </div>
  )
}

export default Map