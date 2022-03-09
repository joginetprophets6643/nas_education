import React from 'react';
import line from '@/assets/images/line.png';
import spline from '@/assets/images/spline.png';
import polarline from '@/assets/images/polarline.png';
import spiderweb from '@/assets/images/spiderweb.png';

const ChartType = () => {
  return (
    <div className="charttype-wrap">
       <ul className="nav nav-tabs" id="chatytypeTab" role="tablist">
            <li className="nav-item" role="presentation">
                <button className="nav-link active" id="line-tab" data-bs-toggle="tab" data-bs-target="#line" type="button" role="tab" aria-controls="line" aria-selected="true">Line</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="area-tab" data-bs-toggle="tab" data-bs-target="#area" type="button" role="tab" aria-controls="area" aria-selected="false">Area</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="bar-tab" data-bs-toggle="tab" data-bs-target="#bar" type="button" role="tab" aria-controls="bar" aria-selected="false">Col/Bar</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="pyramid-tab" data-bs-toggle="tab" data-bs-target="#pyramid" type="button" role="tab" aria-controls="pyramid" aria-selected="false">Pyramid</button>
            </li>
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="scatter-tab" data-bs-toggle="tab" data-bs-target="#scatter" type="button" role="tab" aria-controls="scatter" aria-selected="false">Scatter</button>
            </li> 
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="pie-tab" data-bs-toggle="tab" data-bs-target="#pie" type="button" role="tab" aria-controls="pie" aria-selected="false">Pie</button>
            </li>  
            <li className="nav-item" role="presentation">
                <button className="nav-link" id="percentage-tab" data-bs-toggle="tab" data-bs-target="#percentage" type="button" role="tab" aria-controls="percentage" aria-selected="false">Percentage</button>
            </li>    
        </ul>
        <div className="tab-content" id="chatytypeContent">
            <div className="tab-pane fade show active" id="line" role="tabpanel" aria-labelledby="line-tab">
                <div className="charttype-content-list">
                    <ul>
                       <li>
                            <a href="#" className="charttype-img">
                               <img src={line} alt="img" className="img-fluid" /> 
                               {/* <p className="charttype-title">
                                   Line Chart
                               </p> */}
                            </a>    
                       </li>
                       <li>
                            <a href="#" className="charttype-img">
                               <img src={spline} alt="img" className="img-fluid" /> 
                            </a>    
                       </li> 
                       <li>
                            <a href="#" className="charttype-img">
                               <img src={polarline} alt="img" className="img-fluid" /> 
                            </a>    
                       </li> 
                       <li>
                            <a href="#" className="charttype-img">
                               <img src={spiderweb} alt="img" className="img-fluid" /> 
                            </a>    
                       </li>     
                    </ul>   
                </div>
            </div>
            <div className="tab-pane fade" id="area" role="tabpanel" aria-labelledby="area-tab">...</div>
            <div className="tab-pane fade" id="bar" role="tabpanel" aria-labelledby="bar-tab">...</div>
            <div className="tab-pane fade" id="pyramid" role="tabpanel" aria-labelledby="pyramid-tab">...</div>
            <div className="tab-pane fade" id="scatter" role="tabpanel" aria-labelledby="scatter-tab">...</div>
            <div className="tab-pane fade" id="pie" role="tabpanel" aria-labelledby="pie-tab">...</div>
            <div className="tab-pane fade" id="Percentage" role="tabpanel" aria-labelledby="Percentage-tab">...</div>
        </div>
    </div>
  )
}

export default ChartType