import React, { useEffect } from 'react';
import equalizer from "@/assets/images/equalizer.svg";
import speed from "@/assets/images/speed.svg";
import file from "@/assets/images/file.svg";

const GraphCardTab = (props: any) => {
  const { subject } = props
  return (
    <ul className="nav nav-tabs" id="graphcardtab" role="tablist">
      <li className="nav-item" role="presentation">
        <button className="nav-link active" id={subject + "state-tab"} data-bs-toggle="tab" data-bs-target={"#" + subject + "state"} type="button" role="tab" aria-controls="state" aria-selected="true">
          <img src={equalizer} alt="img" className="img-fluid" /> By State
        </button>
      </li>
      <li className="nav-item" role="presentation">
        <button className="nav-link" id={subject + "indicator-tab"} data-bs-toggle="tab" data-bs-target={"#" + subject + "indicator"} type="button" role="tab" aria-controls="indicator" aria-selected="false">
          <img src={speed} alt="img" className="img-fluid" /> By Indicator
        </button>
      </li>
      <li className="nav-item" role="presentation">
        <button className="nav-link" id={subject + "subgroup-tab"} data-bs-toggle="tab" data-bs-target={"#" + subject + "subgroup"} type="button" role="tab" aria-controls="subgroup" aria-selected="false">
          <img src={file} alt="img" className="img-fluid" /> By Subgroup
        </button>
      </li>
    </ul>
  )
}

export default GraphCardTab;