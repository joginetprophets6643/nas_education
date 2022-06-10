import React, { useEffect, useState } from 'react';
import Map from '@/components/Visualization/Map/Map';
import StateGraph from '@/components/Visualization/Graph/StateGraph';
import SubgroupGraph from '@/components/Visualization/Graph/SubgroupGraph';

const GraphCardTabContent = (props: any) => {
  const { subgroup, charts_data, option, check, subOption, subject, geography } = props
  const [data, setData] = useState<any>({})
  const [subGroupData, setSubGroupData] = useState<any>({})
  let legends = {
    'total': 'cards',
    'boys': 'gender',
    'girls': 'gender',
    'rural': 'location',
    'urban': 'location',
    'government': 'management',
    'goverment aided': 'management',
    'private': 'management',
    'central government': 'management',
    'sc': 'socialgroup',
    'st': 'socialgroup',
    'general': 'socialgroup',
    'obc': 'socialgroup',
    'below basic': 'performance_level',
    'basic': 'performance_level',
    'proficient': 'performance_level',
    'advanced': 'performance_level',
  } as any
  useEffect(() => {
    if (option !== undefined && option !== '') {
      // console.log(charts_data[option], option)
      setData(charts_data[option][subOption])
    }
    else {
      setData(charts_data['avs']['total'])
    }
  }, [option, check, subOption])

  useEffect(() => {
    if (subOption !== undefined && subOption !== '') {
      if (legends[subOption.toLowerCase()] !== undefined) {
        setSubGroupData((prevState: any) => {
          return subgroup[legends[subOption.toLowerCase()]]
        })
        // console.log(subOption.toLowerCase(), subgroup[legends[subOption.toLowerCase()]])
      }
      else {
        setSubGroupData((prevState: any) => {
          return subgroup['lo']
        })
      }
    }

  }, [subgroup, subOption])

  return (
    <>
      {geography != 'district' ? <><div className="tab-pane fade show active" id={subject + "state"} role="tabpanel" aria-labelledby="state-tab">
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
      </div><div className="tab-pane fade" id={subject + "indicator"} role="tabpanel" aria-labelledby="indicator-tab">
          <div className="gctabcontent-wrap">
            <div className="row">
              <div className="col-md-12">

                <div className="gctabcontent-graph-wrap">
                  <Map data={data} subOption={subOption} subject={subject[0]} />
                </div>
              </div>
            </div>
          </div>
        </div></> : <div className="tab-pane fade show active" id={subject + "indicator"} role="tabpanel" aria-labelledby="indicator-tab">
        <div className="gctabcontent-wrap">
          <div className="row">
            <div className="col-md-12">

              <div className="gctabcontent-graph-wrap">
                <Map data={data} subOption={subOption} subject={subject[0]} />
              </div>
            </div>
          </div>
        </div>
      </div>}
      <div className="tab-pane fade" id={subject + "subgroup"} role="tabpanel" aria-labelledby="subgroup-tab">
        <div className="gctabcontent-wrap">
          <div className="row">
            <div className="col-md-12">

              <div className="gctabcontent-graph-wrap">
                <SubgroupGraph data={subGroupData} subOption={subOption} />
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}

export default GraphCardTabContent