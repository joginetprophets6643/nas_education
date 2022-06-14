import React, { createRef, useRef, useState } from 'react';
import AveragePerormance from '@/components/Visualization/AveragePerformance/AveragePerformance'
import SubjectCard from '@/components/Visualization/SubjectCard/SubjectCard'
import WhiteCard from '@/components/Visualization/WhiteCard/WhiteCard'
import Building from '@/assets/images/building.svg'
import Professor from '@/assets/images/professor.svg'
import Student from '@/assets/images/brainstorming.svg'
import { useDispatch, useSelector } from 'react-redux';
import { useEffect } from 'react';
import Globe from "@/assets/images/globe-icon.svg";
import Mil from "@/assets/images/mil-icon.svg";
import Math from "@/assets/images/math-icon.svg";
import Evs from "@/assets/images/evs-icon.svg";
import Eng from "@/assets/images/english-icon.svg";
import Sci from "@/assets/images/science.svg";
import Sst from "@/assets/images/social-sci.svg";
import { getCardsData, getGraphs, getSubjectCards, resetGraphs, getLinkedGraphs, setState } from '@/actions/visualization.action';
import { IntialStateModel, ParticipationCards } from '@/models/visualization';
import { StoreModel } from '@/models/visualization';
import { ClassSubjects } from '@/models/visualization';
import { SubjectIcons } from '@/models/visualization';

const TabContent = () => {


  // const current_geography = "national"
  const dispatch = useDispatch()
  const grade = useSelector<StoreModel>(store => store.grade.data) as number
  const [student_count, setStudentCount] = useState<number>(0)
  const [teachers_count, setTeachersCount] = useState<number>(0)
  const [school_count, setScohoolCount] = useState<number>(0)
  const [subject_count, setSubjectCount] = useState<any>({})
  const [participation_cards, setParticipationCards] = useState<ParticipationCards>({} as ParticipationCards)
  const cards_data = useSelector<StoreModel>(store => store.cards) as IntialStateModel
  const subject_cards_data = useSelector<StoreModel>(store => store.subject_cards) as IntialStateModel
  const current_geography = useSelector<StoreModel>(store => store.current_geography.data) as string
  const current_id = useSelector<StoreModel>(store => store.current_id.data) as number
  const [current_subject, setCurremtSubject] = useState<string>('')
  const [temp_state_id, setState] = useState<number>(1)
  const [encountered_subject, setEncounteredSubject] = useState<Array<String>>([])
  const class_subjects = {
    class_3: ['Language', 'Math', 'Evs',],
    class_5: ['Language', 'Math', 'Evs'],
    class_8: ['Language', 'Math', 'Science', 'Social Science'],
    class_10: ['Mil', 'Math', 'Science', 'Social Science', 'English'],
  } as ClassSubjects

  const current_subjects = class_subjects['class_' + grade] as Array<string>
  const marker = useRef<Array<Element>>([])
  marker.current = []


  const subject_styles = {
    language: 'blue',
    evs: 'yellow',
    math: 'pink',
    socialscience: 'green',
    science: 'sagegreen',
    english: 'purple',
    mil: 'red',
  } as SubjectIcons

  const subject_icons = {
    language: Globe,
    evs: Evs,
    math: Math,
    socialscience: Sst,
    science: Sci,
    english: Eng,
    mil: Mil,
  } as SubjectIcons


  useEffect(() => {
    marker.current = []
    let fields = ''

    let reusable_filters = {
      type: { _eq: current_geography },
      grade: { _eq: grade }
    } as any

    let temp_reusable_filters = {
      type: { _eq: current_geography },
      grade: { _eq: grade }
    } as any

    if (current_geography == 'district') {
      temp_reusable_filters = {
        type: { _eq: 'state' },
        grade: { _eq: grade }
      } as any
    }

    let participation_filter = {}
    let performance_filter = {}
    // let temp_state_id = 1

    if (current_geography === 'national') {
      fields = 'national_schools_count,national_teachers_count,national_students_count'
      // performance_filter = {...reusable_filters}
      // participation_filter = {...reusable_filters}

    }
    if (current_geography === 'state') {
      reusable_filters = { ...reusable_filters, state_id: { _eq: current_id } }
      temp_reusable_filters = { ...temp_reusable_filters, state_id: { _eq: current_id } }
      // performance_filter ={...reusable_filters , state_id: {_eq: current_id}}
      setState(current_id)
      fields = 'state_teachers_count,state_students_count,state_schools_count'
    }
    if (current_geography === 'district') {
      reusable_filters = { ...reusable_filters, district_id: { _eq: current_id } }
      temp_reusable_filters = { ...temp_reusable_filters, state_id: { _eq: temp_state_id } }
      // performance_filter ={...reusable_filters , district_id: {_eq: current_id}}
      fields = 'district_schools_count,district_teachers_count,district_students_count'
    }
    dispatch(getCardsData(JSON.stringify(reusable_filters), fields))
    dispatch(getSubjectCards(JSON.stringify(reusable_filters)))
    dispatch(getLinkedGraphs(JSON.stringify(temp_reusable_filters)))
    dispatch(getGraphs(JSON.stringify(reusable_filters)))
    setEncounteredSubject([] as String[])
  }, [grade, current_geography, current_id])

  useEffect(() => {
    setParticipationCards(cards_data.data[0])
  }, [cards_data])

  useEffect(() => {
    if (subject_cards_data.loaded) {
      setSubjectCount(subject_cards_data.data.length !== 0 ? subject_cards_data.data[0] : {})
    }
  }, [subject_cards_data])

  useEffect(() => {
    if (cards_data.loaded) {
      if (current_geography === 'national') {
        setStudentCount(typeof (participation_cards) !== 'undefined' && Object(participation_cards).length !== 0 ? participation_cards.national_students_count : 0)
        setScohoolCount(typeof (participation_cards) !== 'undefined' && Object(participation_cards).length !== 0 ? participation_cards.national_schools_count : 0)
        setTeachersCount(typeof (participation_cards) !== 'undefined' && Object(participation_cards).length !== 0 ? participation_cards.national_teachers_count : 0)
      } if (current_geography === 'state') {
        setStudentCount(typeof (participation_cards) !== 'undefined' && Object(participation_cards).length !== 0 ? participation_cards.state_students_count : 0)
        setScohoolCount(typeof (participation_cards) !== 'undefined' && Object(participation_cards).length !== 0 ? participation_cards.state_schools_count : 0)
        setTeachersCount(typeof (participation_cards) !== 'undefined' && Object(participation_cards).length !== 0 ? participation_cards.state_teachers_count : 0)
      } if (current_geography === 'district') {
        setStudentCount(typeof (participation_cards) !== 'undefined' && Object(participation_cards).length !== 0 ? participation_cards.district_students_count : 0)
        setScohoolCount(typeof (participation_cards) !== 'undefined' && Object(participation_cards).length !== 0 ? participation_cards.district_schools_count : 0)
        setTeachersCount(typeof (participation_cards) !== 'undefined' && Object(participation_cards).length !== 0 ? participation_cards.district_teachers_count : 0)
      }
    }
  }, [participation_cards])


  const observerChange = (changes: Array<IntersectionObserverEntry>) => {
    changes.forEach(marks => {
      if (marks.isIntersecting) {
        if (marks.target.id !== '') {
          // console.log(marks.target)
          setCurremtSubject(marks.target.id)
        }
      }
    });

  }


  useEffect(() => {
    if (!encountered_subject.includes(current_subject) && current_subject !== '') {
      setEncounteredSubject(encountered_subject.concat(current_subject))
    }
  }, [current_subject])


  useEffect(() => {
    const { current } = marker;
    const observer = new IntersectionObserver(observerChange, {
      root: null,
      rootMargin: '0px',
      threshold: [1.0]
    })
    current.forEach(entry => {
      observer.observe(entry as any)
    })

    return () => {
      current.forEach(entry => {
        observer.unobserve(entry as any)
      })
    }
  }, [marker.current]);

  const createMarkers = (el: any) => {
    if (el && !marker.current.includes(el)) {
      marker.current.push(el)
    }
  }
  return (
    <div className="visual-tabcontent-wrap dark-grey-bg">
      <div className="row">
        <div className="col-md-4">
          <WhiteCard
            title="Number of Schools Sampled"
            count={school_count != undefined ? school_count.toLocaleString('en-IN') : ''}
            image={Building}
          />
        </div>
        <div className="col-md-4">
          <WhiteCard
            title="Number of Teachers Sampled"
            count={teachers_count != undefined ? teachers_count.toLocaleString('en-IN') : ''}
            image={Professor}
          />
        </div>
        <div className="col-md-4">
          <WhiteCard
            title="Number of Students Sampled"
            count={student_count != undefined ? student_count.toLocaleString('en-IN') : ''}
            image={Student}
          />
        </div>
      </div>
      <div className="row">
        {current_subjects.map((subject, index) => (
          <div className="col-md-4" key={index}>
            <SubjectCard
              name={subject}
              class_style={subject_styles[(subject.replace(/\s+/g, '')).toLowerCase()]}
              count={Object.keys(subject_count).length !== 0 && typeof (subject_count) !== 'undefined'
                ? subject_count[((subject.replace(/\s+/g, '_')).toLowerCase() + '_' + current_geography)] : 0}
              image={subject_icons[(subject.replace(/\s+/g, '')).toLowerCase()]}
              geography={current_geography}
            />
          </div>
        ))}
      </div>
      {current_subjects.map((subject, index) => (
        <div className="row" key={index} ref={createMarkers} id={subject} >
          <div className="col-md-12" >
            <AveragePerormance
              name={subject}
              class_style={subject_styles[(subject.replace(/\s+/g, '')).toLowerCase()]}
              image={subject_icons[(subject.replace(/\s+/g, '')).toLowerCase()]}
              eleme={marker.current[index]}
              grade={grade}
              load_charts={encountered_subject.includes(subject) ? true : false}
            />
          </div>
        </div>
      ))}
    </div>
  );
};

export default TabContent;
