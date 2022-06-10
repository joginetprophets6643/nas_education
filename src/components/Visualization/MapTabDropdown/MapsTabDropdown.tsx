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

const subjects_short_codes = {
    math: 'math',
    evs: 'evs',
    'social science': 'sst',
    language: 'language',
    mil: 'mil',
    science: 'sci',
    english: 'eng',
} as any

const indicatorOptions = [] as any
const subGroupOptions = [] as any

const MapsTabDropdown = (props: any) => {

    // const [grade, setGrade] = useState<string>('3')
    const { grade, label, subOption } = props
    const [options, setOptions] = useState<any>([])
    const [indOptions, setIndOptions] = useState<any>([])
    const [subOptions, setSubOptions] = useState<any>([])


    const makeIndicatorOptions = () => {
        indicatorOptions.splice(0, indicatorOptions.length)
        Object.keys(gradeSubjects).forEach((grd) => {
            if (grd == grade) {
                gradeSubjects[grd].forEach((subject: string) => {
                    indicatorOptions.push({
                        value: subjects_short_codes[subject] + '_avs', label: 'Average Performance of Students in ' + subject + ' in Class ' + grade + ', Percent'
                    })
                    indicatorOptions.push({
                        value: subjects_short_codes[subject] + '_lo', label: 'Average Performance of Students by learning outcome in ' + subject + ' in Class ' + grade + ', Percent'
                    })
                    indicatorOptions.push({ value: subjects_short_codes[subject] + '_range', label: 'Range of Performance of Students who Answered Correctly in ' + subject + ' in Class ' + grade + ', Percent' })
                })
            }
        })
        setIndOptions(indicatorOptions)

    }

    useEffect(() => {
        if (indOptions.length) {
            props.onChangeInd(indOptions[0].value)
        }
    }, [indOptions])

    useEffect(() => {
        if (label == 'Indicator:') {
            makeIndicatorOptions()
        }
        else if (label == 'Subgroup:') {
            subGroupOptions.splice(0, subGroupOptions.length)
            subOption.forEach((item: string) => {
                subGroupOptions.push({ value: item, label: item })
            })
            setSubOptions(subGroupOptions)
        }
        else {
            setOptions(sectorOptions)
        }

    }, [grade, subOption])

    useEffect(() => {

    }, [subOptions])

    const changeOptions = (event: any) => {
        if (label == 'Sector:') {
            props.onchange(event.value)
        }
        else if (label == 'Indicator:') {
            props.onChangeInd(event.value)
        } else {
            props.onChangeSubOpt(event.value)
        }
    }


    return (
        <div className="maptabdropdown-wrap">
            <label className="maptabdropdown-label">{label}</label>
            {label == "Indicator:" && indOptions.length ? <Select options={indOptions} defaultValue={indOptions[0]} onChange={changeOptions} className="react-select" classNamePrefix="react-select" /> : ''}
            {label == "Subgroup:" && subOptions.length ? <Select options={subOptions} defaultValue={subOptions[0]} onChange={changeOptions} className="react-select" classNamePrefix="react-select" /> : ''}
            {label == "Sector:" && <Select options={options} defaultValue={sectorOptions[0]} onChange={changeOptions} className="react-select" classNamePrefix="react-select" />}
        </div>
    )
}

export default MapsTabDropdown