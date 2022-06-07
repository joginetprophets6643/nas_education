import React from 'react';
import Map from '@/components/Visualization/Map/Map';
import MapsTabDropdown from '../MapTabDropdown/MapsTabDropdown';
import { useSelector } from 'react-redux';
import { IntialStateModel, StoreModel } from '@/models/visualization';
import {useState} from 'react';

const MapTab = () => {
    const linked_charts = useSelector<StoreModel>(store => store.linked_charts) as IntialStateModel
    const [grade,setGrade] = useState<string>('3')
    // const [subject,setSubject] = useState<string>('language')
    const [subOptions,setSubOptions] = useState<any>([])
    // const [legend,setLegend] = useState<string>('avs')

    const changeGrade=(grade:string)=>{
        setGrade(grade)
    }

    const changeInd=(legend:string)=>{
        let legends=legend.split('_')
        let data=linked_charts.data[legends[0]][legends[1]]
        let keys=Object.keys(data)
        setSubOptions(keys)
    }

    return (
        <div className="maptab-wrap mt-3">
            <div className="average-performance-wrap card-blue mb-60">
                <div className="d-flex">
                    <div className="col-md-3">
                        <div className="maptab-select-wrap m-0">
                            <MapsTabDropdown label="Sector:" onchange={changeGrade}/>
                        </div>
                    </div>
                    <div className="col-md-6">
                        <div className="maptab-select-wrap m-0">
                            <MapsTabDropdown label="Indicator:" grade={grade} onChangeInd={changeInd}/>
                        </div>
                    </div>
                    <div className="col-md-3">
                        <div className="maptab-select-wrap m-0">
                            <MapsTabDropdown label="Subgroup:" subOption={subOptions}/>
                        </div>
                    </div>
                </div>
                <div className="averag-performance-content light-blue">
                    <div className="row">
                        <div className="col-md-12">
                            <div className="apcard-white">
                                <div className="apcard-content p-0">
                                    <div className="apcard-header justify-content-center">
                                        <h3 className="apcard-heading">
                                            Average Performance of Students in EVS in Class 3, Percent
                                        </h3>
                                    </div>
                                    <Map />
                                </div>
                                <div className="apcard-content p-0">
                                    <div className="apcard-header justify-content-center">
                                        <h3 className="apcard-heading">
                                            Average Performance of Students in EVS in Class 3, Percent
                                        </h3>
                                    </div>
                                    <Map />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default MapTab