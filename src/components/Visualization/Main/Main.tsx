import React from 'react';
import TopBar from '@/components/Visualization/TopBar/TopBar';
import Tabs from '@/components/Visualization/Tabs/Tabs';
import TabContent from '@/components/Visualization/TabContent/TabContent';
import MapTab from '../MapTab/MapTab';
import ScatterPlotTab from '../ScatterPlotTab/ScatterPlotTab';

const Main = () => {
  return (
    <section className="visualization-wrap bg-light-blue">
      <TopBar />
      <div className="visual-tabwrap">
        <Tabs />
        <div className="tab-content" id="visualtabContent">
          <div className="tab-pane fade show active" id="class3" role="tabpanel" aria-labelledby="class3-tab">
            <TabContent />
          </div>
          <div className="tab-pane fade" id="maps">
            <MapTab />
          </div>
          <div className="tab-pane fade" id="plot">
            <ScatterPlotTab />
          </div>
        </div>

      </div>
    </section>
  );
};

export default Main;
