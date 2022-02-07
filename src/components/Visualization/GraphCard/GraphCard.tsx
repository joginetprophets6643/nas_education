import React from 'react';
import './GraphCard.scss';
import People from '../../../assets/images/ap-people.svg';

const GraphCard = () => {
  return (
    <div className="apcard-white">
        <div className="apcard-header">
            <h3 className="apcard-heading apcard-heading-red">
                <img src={People} alt="img" className="img-fluid" /> By Gender
            </h3>
            <div className="toggle-btn">
                <button className="btn">
                    <span className="material-icons">
                        menu
                    </span>
                </button>
            </div>
        </div> 
        <div className="apcard-content">
            <div className="apcard-graph-wrap">
                <figure className="highcharts-figure">
                    <div id="c3-gender-langgraph"></div>
                </figure>
            </div>  
        </div>    
    </div>
  );
};

export default GraphCard;
