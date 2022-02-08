import React from 'react';
import AveragePerormance from '@/components/Visualization/AveragePerformance/AveragePerormance';
import SubjectCard from '@/components/Visualization/SubjectCard/SubjectCard';
import WhiteCard from '@/components/Visualization/WhiteCard/WhiteCard';


const TabContent = () => {
  return (
    <div className="visual-tabcontent-wrap dark-grey-bg">
        <div className="row">
            <div className="col-md-4">
                <WhiteCard />
            </div>
        </div>
        <div className="row">
            <div className="col-md-4">
                <SubjectCard />
            </div>
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
