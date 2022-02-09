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
import { useInView } from 'react-intersection-observer'

const TabContent = () => {

  const [ref, inView] = useInView({
    threshold: 0,
  })

  const current_geography = "national"
  const dispatch = useDispatch()
  const grade =  useSelector<StoreModel>(store=> store.grade.data)
  const [student_count, setStudentCount] = useState<number>(0)
  const [teachers_count, setTeachersCount] = useState<number>(0)
  const [school_count, setScohoolCount] = useState<number>(0)
  const [participation_cards,setParticipationCards] = useState<ParticipationCards>({} as ParticipationCards)
  const cards_data = useSelector<StoreModel>(store=> store.cards) as IntialStateModel
  const marker = useRef<Element>()

  
  useEffect(()=>{
    let fields = ''
    const filters = {
      type:{_eq:current_geography},grade:{_eq:grade}
    }
    if(current_geography === 'national'){
      fields= 'national_schools_count,national_teachers_count,national_students_count'
    }
    dispatch(getCardsData(JSON.stringify(filters),fields))

  },[grade])

  useEffect(()=>{
    setParticipationCards(cards_data.data[0])
  },[cards_data])

  useEffect(()=>{
    if(cards_data.loaded){
      if(current_geography === 'national'){
        setStudentCount(participation_cards.national_students_count)
        setScohoolCount(participation_cards.national_schools_count)
        setTeachersCount(participation_cards.national_teachers_count)
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
              <SubjectCard name={subject} class_style={subject_styles[(subject.replace(/\s+/g, '')).toLowerCase()]} count={'10'} image={subject_icons[(subject.replace(/\s+/g, '')).toLowerCase()]}/>
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
