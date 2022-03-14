import React , { useEffect, useState }  from 'react';
import MapDropdown from './MapDropdown';
import Highcharts from "highcharts";
import HighchartsReact from "highcharts-react-official";
import highchartsMap from "highcharts/modules/map";
const mapDataIE= require("@highcharts/map-collection/countries/in/custom/in-all-disputed.geo.json");
highchartsMap(Highcharts);



const Map = () => {
  const [mapJson,setMapJson] = useState({})
  useEffect(()=>{

    const topology = fetch(
      'https://code.highcharts.com/mapdata/countries/in/custom/in-all-disputed.topo.json'
    ).then(response => response.json())
    setMapJson(topology)

  },[])

  
const mapOptions = {
    chart: {
      map: 'countries/in/custom/in-all-disputed'
    },
    title: {
      text: ''
    },
    credits: {
        enabled: false
    },
    mapNavigation: {
      enabled: false
    },
    tooltip: {
      headerFormat: '',
      pointFormat: '<b>{point.freq}</b><br><b>{point.keyword}</b><br>lat: {point.lat}, lon: {point.lon}'
    },
    series: [{
      // Use the gb-all map with no data as a basemap
      name: 'Basemap',
      mapData: mapDataIE,
      borderColor: '#A0A0A0',
      nullColor: '#FFC87B',
      showInLegend: false
    }, {
      // Specify points using lat/lon
      type: 'mapbubble',
      name: 'Cities',
      color: '#4169E1',
      data: [{ z: 10, keyword: "Galway", lat: 53.27, lon: -9.25 }, 
            { z: 4, keyword: "Dublin", lat: 53.27, lon: -6.25 }],
      cursor: 'pointer',
    }]
}
  return (
    <div className="apcard-graph-wrap">
        <MapDropdown />
        <div className="map-content">
        <HighchartsReact
          constructorType ={'mapChart'}
          highcharts={Highcharts}
          options={mapOptions}
        /> 
        </div>
    </div>
  )
}

export default Map