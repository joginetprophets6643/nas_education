import React, { useEffect, useState } from 'react';
import Select from 'react-select';
import { useSelector } from 'react-redux';
import 'react-select-2/dist/css/react-select-2.css';
import 'react-select-2/dist/js/react-select-2.js';
import { StoreModel } from '@/models/visualization';


// const options = [
//     { value: 'CLASS 3', label: 'CLASS 3' },
//     { value: 'CLASS 5', label: 'CLASS 5' },
//     { value: 'CLASS 8', label: 'CLASS 8' },
//     { value: 'CLASS 10', label: 'CLASS 10' } 
//   ];

const MapTabDropdown = (props: any) => {
  const grade = useSelector<StoreModel>(store => store.grade.data) as number
  const { label, subject, option, keyOptions } = props
  const [options, setOptions] = useState<any>([])
  const [defaultOption, setdefaultOption] = useState<any>({})
  const [check, setCheck] = useState<boolean>(false)
  let subOpt = {
    "avs": [
      { value: '', label: '' },
    ],
    "lo": [
      { value: '', label: '' }
    ],
    "range": [
      { value: '', label: '' }
    ]
  } as any
  const [optCount, setOptCount] = useState<number>(0)
  const [count, setCount] = useState<number>(0)
  let newOpt: Object[] = [];

  useEffect(() => {
    if (keyOptions !== undefined) {
      const allSubOtp = Object.keys(keyOptions)
      allSubOtp.forEach((item) => {
        newOpt.push({
          label: item,
          value: item
        })
      })
      subOpt[option] = newOpt
      setdefaultOption((previousState: any) => {
        return subOpt[option][0]
      })
    }
  }, [keyOptions])

  useEffect(() => {
    if (label == 'Indicator') {
      setOptions([
        { value: 'avs', label: 'Average Performance of Students in ' + subject + ' in Class ' + grade + ', Percent' },
        { value: 'lo', label: 'Average Performance of Students by learning outcome in ' + subject + ' in Class ' + grade + ', Percent' },
        { value: 'range', label: 'Range of Performance of Students who Answered Correctly in ' + subject + ' in Class ' + grade + ', Percent' },
      ])
      setdefaultOption((previousState: any) => {
        return { value: 'avs', label: 'Average Performance of Students in ' + subject + ' in Class ' + grade + ', Percent' }
      })
      setOptCount(1)
    }
    else {
      setOptions(subOpt['avs'])
      setdefaultOption((previousState: any) => {
        return subOpt['avs'][0]
      })
      setCount(1)
    }
  }, [label, subject])

  const changeOption = (event: any) => {
    if (label == "Indicator") {
      props.onChangeOption(event.value)
      setdefaultOption((previousState: any) => {
        return event.value
      })
    } else {
      props.onChangeSubOption(event.value)
      setdefaultOption((previousState: any) => {
        return event
      })
    }
  }

  useEffect(() => {
    if (Object.keys(defaultOption).length !== 0) {
      setCheck(true)
    }
    else {
      setCheck(false)
    }
  }, [defaultOption])

  useEffect(() => {
    if (optCount == 0 && label == "Indicator") {
      props.onChangeOption('avs')
    }
  }, [optCount])

  useEffect(() => {
    if (count == 0 && label == "SubGroup") {
      props.onChangeSubOption('total')
    }
  }, [count])

  useEffect(() => {
    if (option !== undefined && option !== '') {
      setOptions((previousState: any) => {
        return subOpt[option]
      })
      setdefaultOption((previousState: any) => {
        return subOpt[option][0]
      })
      props.onChangeSubOption(subOpt[option][0].value)
    }
    // console.log(option)
  }, [option])

  return (
    <>
      {
        check ?
          <div className="maptabdropdown-wrap">
            <label className="maptabdropdown-label">{label}</label>
            {label == "Indicator" && <Select options={options} defaultValue={defaultOption} onChange={changeOption} className="react-select" classNamePrefix="react-select" />}
            {label == "Indicator:" && <Select options={options} defaultValue={defaultOption} className="react-select" classNamePrefix="react-select" />}
            {label == "Subgroup:" && <Select options={options} defaultValue={defaultOption} className="react-select" classNamePrefix="react-select" />}
            {label == "Sector:" && <Select options={options} defaultValue={defaultOption} className="react-select" classNamePrefix="react-select" />}
            {label == "Subgroup" && <Select options={options} value={defaultOption} onChange={changeOption} className="react-select" classNamePrefix="react-select" />}
          </div>
          :
          ''
      }
    </>

  )
}

export default MapTabDropdown