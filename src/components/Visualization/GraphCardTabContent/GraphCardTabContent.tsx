import React from 'react';
import Map from '@/components/Visualization/Map/Map';
import MapDropdown from '@/components/Visualization/Map/MapDropdown';
import StateGraph from '@/components/Visualization/Graph/StateGraph';
import SubgroupGraph from '@/components/Visualization/Graph/SubgroupGraph';

const GraphCardTabContent = () => {
  return (
    <>
      <div className="tab-pane fade show active" id="state" role="tabpanel" aria-labelledby="state-tab">
        <div className="gctabcontent-wrap">
            <div className="row">
              <div className="col-md-12">
                <div className="gctabcontent-select-wrap col-md-6 mb-30">
                  <MapDropdown />
                </div>
                <div className="gctabcontent-graph-wrap">
                  <StateGraph />
                </div>
              </div>
            </div>
        </div>
      </div>
      <div className="tab-pane fade" id="indicator" role="tabpanel" aria-labelledby="indicator-tab">
        <div className="gctabcontent-wrap">
          <div className="row">
            <div className="col-md-12">
              <div className="gctabcontent-select-wrap col-md-6 mb-30">
                <MapDropdown />
              </div>
              <div className="gctabcontent-graph-wrap">
                 <Map />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="tab-pane fade" id="subgroup" role="tabpanel" aria-labelledby="subgroup-tab">
        <div className="gctabcontent-wrap">
          <div className="row">
            <div className="col-md-12">
              <div className="gctabcontent-select-wrap col-md-6 mb-30">
                <MapDropdown />
              </div>
              <div className="gctabcontent-graph-wrap">
                <SubgroupGraph />
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}

export default GraphCardTabContent