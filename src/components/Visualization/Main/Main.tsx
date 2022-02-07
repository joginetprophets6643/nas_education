import React from 'react';
import TopBar from '../TopBar/TopBar';
import Tabs from '../Tabs/Tabs';
import TabContent from '../TabContent/TabContent';

const Main = () => {
  return (
    <section className="visualization-wrap bg-light-blue pb-60">
    <TopBar />
    <div className="visual-tabwrap">
        <Tabs />
        <div className="tab-content" id="visualtabContent">
          <div className="tab-pane fade show active" id="class3" role="tabpanel" aria-labelledby="class3-tab">
              <TabContent />
          </div>
        </div>
    </div>
</section>
  );
};

export default Main;
