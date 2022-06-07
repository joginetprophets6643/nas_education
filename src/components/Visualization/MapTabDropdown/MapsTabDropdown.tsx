import React, { useEffect, useState } from 'react';
import Select from 'react-select';
import 'react-select-2/dist/css/react-select-2.css';
import 'react-select-2/dist/js/react-select-2.js';
import { useSelector } from 'react-redux';
import { StoreModel } from '@/models/visualization';
import { IntialStateModel } from '@/models/visualization';


const sectorOptions = [
    { value: '3', label: 'Grade 3' },
    { value: '5', label: 'Grade 5' },
    { value: '8', label: 'Grade 8' },
    { value: '10', label: 'Grade 10' }
] as any

const gradeSubjects = {
    3: ['language', 'math', 'evs'],
    5: ['language', 'math', 'evs'],
    8: ['language', 'math', 'science', 'social science'],
    10: ['mil', 'math', 'science', 'social science', 'english']
} as any

const indicatorOptions = [] as any

const MapsTabDropdown = (props: any) => {

    const [grade, setGrade] = useState<string>('3')
    const linked_charts = useSelector<StoreModel>(store => store.linked_charts) as IntialStateModel
    const { label } = props
    const [options, setOptions] = useState<any>([])

    useEffect(() => {
        if (linked_charts.loaded && !linked_charts.loading) {
            // console.log(linked_charts, "Hii")
        }
    }, [linked_charts])

    useEffect(() => {

        if (label == 'Indicator:') {
            Object.keys(gradeSubjects).forEach((grd) => {
                if (grd == grade) {
                    gradeSubjects[grd].forEach((subject: string) => {
                        indicatorOptions.push({
                            value: subject + 'avs', label: 'Average Performance of Students in ' + subject + ' in Class ' + grade + ', Percent'
                        })
                        indicatorOptions.push({
                            value: subject + 'lo', label: 'Average Performance of Students by learning outcome in ' + subject + ' in Class ' + grade + ', Percent'
                        })
                        indicatorOptions.push({ value: subject + 'range', label: 'Range of Performance of Students who Answered Correctly in ' + subject + ' in Class ' + grade + ', Percent' })
                    })
                }
            })

            setOptions(indicatorOptions)

        }
        else if (label == 'Subgroup:') {

            indicatorOptions.push({ value: '', label: '' })
        }
        else {
            setOptions(sectorOptions)
        }

    }, [])


    return (
        <div className="maptabdropdown-wrap">
            <label className="maptabdropdown-label">{label}</label>
            {label == "Indicator:" && <Select options={options} value={indicatorOptions[0]} className="react-select" classNamePrefix="react-select" />}
            {label == "Subgroup:" && <Select options={options} className="react-select" classNamePrefix="react-select" />}
            {label == "Sector:" && <Select options={options} defaultValue={sectorOptions[0]} className="react-select" classNamePrefix="react-select" />}
        </div>
    )
}

export default MapsTabDropdown