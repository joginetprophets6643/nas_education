import React, { useEffect, useState } from 'react';
import Map from '@/components/Visualization/Map/Map';
import MapDropdown from '@/components/Visualization/Map/MapDropdown';
import StateGraph from '@/components/Visualization/Graph/StateGraph';
import SubgroupGraph from '@/components/Visualization/Graph/SubgroupGraph';

const GraphCardTabContent = (props: any) => {
  const { charts_data, option, check, subOption } = props
  const [data, setData] = useState<any>({})
  useEffect(() => {
    if (option !== undefined && option !== '') {
      console.log(charts_data[option], option)
      setData(charts_data[option][subOption])
    }
    else {
      setData(charts_data['avs']['total'])
    }
  }, [option, check, subOption])
  useEffect(() => {
    // console.log(charts_data, 'changed')
  }, [charts_data])
  return (
    <>
      <div className="tab-pane fade show active" id="state" role="tabpanel" aria-labelledby="state-tab">
        <div className="gctabcontent-wrap">
          <div className="row">
            <div className="col-md-12">

              <div className="gctabcontent-graph-wrap">
                {/* {JSON.stringify(charts_data)} */}
                <StateGraph data={data} subOption={subOption} />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="tab-pane fade" id="indicator" role="tabpanel" aria-labelledby="indicator-tab">
        <div className="gctabcontent-wrap">
          <div className="row">
            <div className="col-md-12">

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