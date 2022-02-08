import React from 'react';
import AveragePerormance from '@/components/Visualization/AveragePerformance/AveragePerormance'
import SubjectCard from '@/components/Visualization/SubjectCard/SubjectCard'
import WhiteCard from '@/components/Visualization/WhiteCard/WhiteCard'
import Building from '@/assets/images/building.svg'
import Professor from '@/assets/images/professor.svg'
import Student from '@/assets/images/brainstorming.svg'
import { useSelector } from 'react-redux';
import { useEffect } from 'react';
import Globe from "@/assets/images/globe-icon.svg";



const TabContent = () => {
  const grade =  useSelector<any>(store=> store.grade.data)
  const class_subjects = {
    class_3:['Language','Evs','Math'],
    class_5:['Language','Evs','Math'],
    class_8:['Language','Science','Math','Social Science'],
    class_10:['Mil','Social Science','English','Science','Math'],
  } as any
  
  const subject_styles = {
    language: 'blue',
    evs:'yellow',
    math:'pink',
    socialscience:'green',
    science:'sagegreen',
    english:'purple',
    mil:'red',
  } as any

  const subject_icons = {
    language: Globe,
    evs:Globe,
    math:Globe,
    socialscience:Globe,
    science:Globe,
    english:Globe,
    mil:Globe,
  } as any

  const current_subjects = class_subjects['class_'+grade] as Array<string>
  return (
    <div className="visual-tabcontent-wrap dark-grey-bg">
        <div className="row">
            <div className="col-md-4">
                <WhiteCard title="Number of Schools Sampled" count="1598" image={Building}/>
            </div>
            <div className="col-md-4">
                <WhiteCard  title="Number of Teachers Sampled" count="1234" image={Professor}/>
            </div>
            <div className="col-md-4">
                <WhiteCard title="Number of Students Sampled" count="2345" image={Student} />
            </div>
        </div>
        <div className="row">
        {current_subjects.map((subject,index)=>(
            <div className="col-md-4" key={index}>
              <SubjectCard name={subject} class_style={subject_styles[(subject.replace(/\s+/g, '')).toLowerCase()]} count={'10'} image={subject_icons[(subject.replace(/\s+/g, '')).toLowerCase()]}/>
            </div>
        ))}
        </div>
        <div className="row">
            <div className="col-md-12">
              <AveragePerormance />
            </div>
        </div>
    </div>
  );
};

export default TabContent;
