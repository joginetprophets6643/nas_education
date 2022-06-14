import React, { useEffect, useState } from 'react';
import Select from 'react-select';
import { useSelector } from 'react-redux';
import 'react-select-2/dist/css/react-select-2.css';
import 'react-select-2/dist/js/react-select-2.js';
import { StoreModel } from '@/models/visualization';

const options_text = {
    'avs': '',
    'lo': 'by learning outcomes',
    'range': 'who Answered Correctly'
} as any

const full_subjects = {
    'language': 'Language',
    'math': 'Math',
    'evs': 'Evs',
    'sci': 'Science',
    'sst': 'Social Science',
    'mil': 'MIL',
    'eng': 'English'
} as any

const ScatterPlotTabDropdown = (props: any) => {
    const { label, data } = props
    const [options, setOptions] = useState<any>([])

    useEffect(() => {
        if (data.length > 0) {
            const temp_options = [] as any
            data.forEach((grade: any) => {
                let temp_data = JSON.parse(grade.data)
                Object.keys(temp_data).forEach((subject: string) => {
                    Object.keys(temp_data[subject]).forEach((legend: string) => {
                        let keys = Object.keys(temp_data[subject][legend])
                        keys.forEach((key: string) => {
                            temp_options.push({
                                value: grade.grade + '_' + subject + '_' + legend + '_' + key,
                                label: 'Average Performance of Students ' + options_text[legend] + ' in ' + full_subjects[subject] + ' in Class ' + grade.grade + ' Percent, ' + key,
                            })
                        })
                    })
                })
            })

            setOptions(temp_options)
            if (label == 'Y-Axis:') {
                props.onChangeOption('3_language_avs_Total_Y')
            }
            else {
                props.onChangeOption('3_language_avs_Total_X')
            }
        }
    }, [])

    const changeScatterOption = (event: any) => {
        if (label == 'Y-Axis:') {
            props.onChangeOption(event.value + '_Y')
        }
        else {
            props.onChangeOption(event.value + '_X')
        }

    }

    return (
        <div className="maptabdropdown-wrap">
            <label className="maptabdropdown-label">{label}</label>
            {options.length && <Select options={options} onChange={changeScatterOption} defaultValue={options[0]} className="react-select" classNamePrefix="react-select" />}
        </div>
    )
}

export default ScatterPlotTabDropdown