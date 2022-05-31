import React, { useEffect, useState } from 'react';
import Select from 'react-select';
import 'react-select-2/dist/css/react-select-2.css';
import 'react-select-2/dist/js/react-select-2.js';


// const options = [
//     { value: 'CLASS 3', label: 'CLASS 3' },
//     { value: 'CLASS 5', label: 'CLASS 5' },
//     { value: 'CLASS 8', label: 'CLASS 8' },
//     { value: 'CLASS 10', label: 'CLASS 10' } 
//   ];

const MapTabDropdown = (props: any) => {
  const { label, subject, option, keyOptions } = props
  const [options, setOptions] = useState<any>([])
  const [defaultOption, setdefaultOption] = useState<any>({})
  const [check, setCheck] = useState<boolean>(false)
  let subOpt = {
    "avs": [
      { value: 'total', label: 'total' },
    ],
    "lo": [
      { value: 'total', label: 'total' }
    ],
    "range": [
      { value: 'total', label: 'total' }
    ]
  }
  const [optCount, setOptCount] = useState<integer>(0)
  const [count, setCount] = useState<integer>(0)

  useEffect(() => {
    if (keyOptions !== undefined) {
      const allSubOtp = Object.keys(keyOptions)
      let newOpt = [];
      console.log(allSubOtp)
      allSubOtp.forEach((item) => {
        newOpt.push({
          label: item,
          value: item
        })
      })
      subOpt[option] = newOpt
    }
  }, [keyOptions])

  useEffect(() => {
    if (label == 'Indicator') {
      setOptions([
        { value: 'avs', label: 'Average Performance of Students in ' + subject + ' in Class 3, Percent' },
        { value: 'lo', label: 'Average Performance of Students by learning outcome in ' + subject + ' in Class 3, Percent' },
        { value: 'range', label: 'Range of Performance of Students who Answered Correctly in ' + subject + ' in Class 3, Percent' },
      ])
      setdefaultOption((previousState: any) => {
        return { value: 'avs', label: 'Average Performance of Students in ' + subject + ' in Class 3, Percent' }
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
        return event.value
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
      setOptions(subOpt[option])
      setdefaultOption((previousState: any) => {
        return subOpt[option][0]
      })
      props.onChangeSubOption(subOpt[option][0].value)
    }
    // console.log(option, "Byee")
  }, [option])

  return (
    <>
      {
        check ?
          <div className="maptabdropdown-wrap">
            <label className="maptabdropdown-label">{label}</label>
            <Select options={options} defaultValue={defaultOption} onChange={changeOption} className="react-select" classNamePrefix="react-select" />
          </div>
          :
          ''
      }
    </>

  )
}

export default MapTabDropdown