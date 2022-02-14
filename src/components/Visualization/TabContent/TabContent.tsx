import React, { useRef, useState } from 'react';
import AveragePerormance from '@/components/Visualization/AveragePerformance/AveragePerormance'
import SubjectCard from '@/components/Visualization/SubjectCard/SubjectCard'
import WhiteCard from '@/components/Visualization/WhiteCard/WhiteCard'
import Building from '@/assets/images/building.svg'
import Professor from '@/assets/images/professor.svg'
import Student from '@/assets/images/brainstorming.svg'
import { useDispatch, useSelector } from 'react-redux';
import { useEffect } from 'react';
import Globe from "@/assets/images/globe-icon.svg";
import { getCardsData } from '@/actions/visualization.action';
import { IntialStateModel, ParticipationCards } from '@/models/visualization';
import { StoreModel } from '@/models/visualization';
import { ClassSubjects } from '@/models/visualization';
import { SubjectIcons } from '@/models/visualization';
import { getSubjectCards } from '@/actions/visualization.action';

const TabContent = () => {


  // const current_geography = "national"
  const dispatch = useDispatch()
  const grade =  useSelector<StoreModel>(store=> store.grade.data)
  const [student_count, setStudentCount] = useState<number>(0)
  const [teachers_count, setTeachersCount] = useState<number>(0)
  const [school_count, setScohoolCount] = useState<number>(0)
  const [subject_count, setSubjectCount] = useState<any>({})
  const [participation_cards,setParticipationCards] = useState<ParticipationCards>({} as ParticipationCards)
  const cards_data = useSelector<StoreModel>(store=> store.cards) as IntialStateModel
  const subject_cards_data = useSelector<StoreModel>(store=> store.subject_cards) as IntialStateModel
  const marker = useRef<Element>()
  const current_geography =  useSelector<StoreModel>(store => store.current_geography.data) as string
  const current_id = useSelector<StoreModel>(store=> store.current_id.data) as number

  useEffect(()=>{
    let fields = ''
    let reusable_filters = {
      type:{_eq:current_geography},
      grade:{_eq:grade}
    } as any
    let participation_filter = {}
    let performance_filter = {}

    if(current_geography === 'national'){
      fields= 'national_schools_count,national_teachers_count,national_students_count'
      performance_filter = {...reusable_filters}
      participation_filter = {...reusable_filters}

    }
    if(current_geography === 'state'){
      participation_filter = {...reusable_filters , state_id: {_eq:current_id}}
      performance_filter ={...reusable_filters , state_id: {_eq: current_id}}
      fields= 'state_teachers_count,state_students_count,state_schools_count'
    }
    if(current_geography === 'district'){
      participation_filter = {...reusable_filters , district_id: {_eq: current_id}}
      performance_filter ={...reusable_filters , district_id: {_eq: current_id}}
      fields= 'district_schools_count,district_teachers_count,district_students_count'
    }
    dispatch(getCardsData(JSON.stringify(participation_filter),fields))
    dispatch(getSubjectCards(JSON.stringify(performance_filter)))


  },[grade,current_geography,current_id])

  useEffect(()=>{
    setParticipationCards(cards_data.data[0])
  },[cards_data])

  useEffect(()=>{
    if(subject_cards_data.loaded){
      console.log(subject_cards_data)
      setSubjectCount(subject_cards_data.data.length !== 0 ? subject_cards_data.data[0] : {})
    }
  },[subject_cards_data])

  useEffect(()=>{
    if(cards_data.loaded){
      if(current_geography === 'national'){
        setStudentCount(typeof(participation_cards) !=='undefined' && Object(participation_cards).length !== 0 ? participation_cards.national_students_count: 0)
        setScohoolCount(typeof(participation_cards) !=='undefined' && Object(participation_cards).length !== 0 ? participation_cards.national_schools_count: 0)
        setTeachersCount(typeof(participation_cards) !=='undefined' && Object(participation_cards).length !== 0 ? participation_cards.national_teachers_count: 0)
      }if(current_geography === 'state'){
        setStudentCount(typeof(participation_cards) !=='undefined' && Object(participation_cards).length !== 0 ?  participation_cards.state_students_count: 0)
        setScohoolCount(typeof(participation_cards) !=='undefined' && Object(participation_cards).length !== 0 ? participation_cards.state_schools_count: 0)
        setTeachersCount(typeof(participation_cards) !=='undefined' && Object(participation_cards).length !== 0 ? participation_cards.state_teachers_count: 0)
      }if(current_geography === 'district'){
        setStudentCount(typeof(participation_cards) !=='undefined' && Object(participation_cards).length !== 0 ?  participation_cards.district_students_count: 0)
        setScohoolCount(typeof(participation_cards) !=='undefined' && Object(participation_cards).length !== 0 ?  participation_cards.district_schools_count: 0)
        setTeachersCount(typeof(participation_cards) !=='undefined' && Object(participation_cards).length !== 0 ?  participation_cards.district_teachers_count: 0)
      }
    }
  },[participation_cards])

  useEffect(()=>{
    contentObserver()
  },[])
  
  const class_subjects = {
    class_3:['Language','Evs','Math'],
    class_5:['Language','Evs','Math'],
    class_8:['Language','Science','Math','Social Science'],
    class_10:['Mil','Social Science','English','Science','Math'],
  } as ClassSubjects
  
  const subject_styles = {
    language: 'blue',
    evs:'yellow',
    math:'pink',
    socialscience:'green',
    science:'sagegreen',
    english:'purple',
    mil:'red',
  } as SubjectIcons

  const subject_icons = {
    language: Globe,
    evs:Globe,
    math:Globe,
    socialscience:Globe,
    science:Globe,
    english:Globe,
    mil:Globe,
  } as SubjectIcons

  const current_subjects = class_subjects['class_'+grade] as Array<string>
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: [0, 1.0]
  }

  const observerChange = (changes: Array<IntersectionObserverEntry>) =>{
    console.log(changes[0].isIntersecting)
    if (changes[0].isIntersecting) {
    }
  }

  const contentObserver =()=> {
    const options = {
      root: null,
      rootMargin: '0px',
      threshold: [0, 1.0]
    }
    if (marker) {
      const observer = new IntersectionObserver(observerChange, options)

      observer.observe(marker.current as Element)
    }
  }


  return (
    <div className="visual-tabcontent-wrap dark-grey-bg">
        <div className="row">
            <div className="col-md-4">
                <WhiteCard title="Number of Schools Sampled" count={school_count} image={Building}/>
            </div>
            <div className="col-md-4">
                <WhiteCard  title="Number of Teachers Sampled" count={teachers_count} image={Professor}/>
            </div>
            <div className="col-md-4">
                <WhiteCard title="Number of Students Sampled" count={student_count} image={Student} />
            </div>
        </div>
        <div className="row">
        {current_subjects.map((subject,index)=>(
            <div className="col-md-4" key={index}>
              <SubjectCard name={subject} class_style={subject_styles[(subject.replace(/\s+/g, '')).toLowerCase()]} 
              count={Object.keys(subject_count).length !== 0 && typeof(subject_count) !== 'undefined'? subject_count[((subject.replace(/\s+/g, '_')).toLowerCase() +'_'+current_geography)]: 0}
               image={subject_icons[(subject.replace(/\s+/g, '')).toLowerCase()]}/>
            </div>
        ))}
        </div>
        
        <div className="row" ref={marker as any}>
            <div className="col-md-12">
              <AveragePerormance />
            </div>
        </div>
    </div>
  );
};

export default TabContent;
