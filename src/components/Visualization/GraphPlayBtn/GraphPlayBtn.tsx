import React from 'react'

const GraphPlayBtn = () => {
  return (
    <div className="graphplaybtn-wrap">
        <div className="row align-items-center">
            <div className="col-md-1">
                <button className="graphplaybtn">
                <span className="material-icons-outlined">
                    play_circle_filled
                </span>
                </button>
            </div>
            <div className="col-md-11">
                <div className="graphplaybtn-range">
                    <input type="range" className="form-range" max="0" disabled/>
                </div>
            </div>
        </div>
    </div>
  )
}

export default GraphPlayBtn