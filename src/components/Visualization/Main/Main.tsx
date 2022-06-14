import React, { useEffect, useState } from 'react';
import TopBar from '@/components/Visualization/TopBar/TopBar';
import Tabs from '@/components/Visualization/Tabs/Tabs';
import TabContent from '@/components/Visualization/TabContent/TabContent';
import MapTab from '../MapTab/MapTab';
import ScatterPlotTab from '../ScatterPlotTab/ScatterPlotTab';
import Loader from '../Loader/Loader';
import { scrollToTop } from '@/services/utility';


const Main = () => {
  const [screenType, setScreenType] = useState<string>('grade')

  const changeScreen = (screen: string) => {
    setScreenType(screen)
  }

  useEffect(() => {

  }, [screenType])

  return (
    <section className="visualization-wrap bg-light-blue">
      <TopBar />
      <div className="visual-tabwrap">
        <Tabs onchangeScreen={changeScreen} />
        <div className="tab-content" id="visualtabContent">
          <div className="tab-pane fade show active" id="class3" role="tabpanel" aria-labelledby="class3-tab">
            {screenType == 'grade' && <TabContent />}
          </div>
          <div className="tab-pane fade" id="maps">
            {screenType == 'map' && <MapTab />}
          </div>
          <div className="tab-pane fade" id="plot">
            {screenType == 'scatter' && <ScatterPlotTab />}
          </div>
        </div>

      </div>
    </section>
  );
};

export default Main;
