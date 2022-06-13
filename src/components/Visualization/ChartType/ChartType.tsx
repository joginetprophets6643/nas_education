import React from 'react';
import line from '@/assets/images/line.png';
import spline from '@/assets/images/spline.png';
import polarline from '@/assets/images/polarline.png';
import spiderweb from '@/assets/images/spiderweb.png';   
import basic from '@/assets/images/basic.png';
import stacked from '@/assets/images/stacked.png';
import stackedpercent from '@/assets/images/stackedpercent.png';
import groupedcolumn from '@/assets/images/groupedcolumn.png';
import stackedX from '@/assets/images/stackedX.png';
import stackedpercentX from '@/assets/images/stackedpercentX.png';
import basicbar from '@/assets/images/basicbar.png';
import stackedbar from '@/assets/images/stackedbar.png';
import stackedpercentbar from '@/assets/images/stackedpercentbar.png';
import agepyramid from '@/assets/images/agepyramid.png';
import scatter from '@/assets/images/scatter.png';
import pie from '@/assets/images/pie.png';
import donut from '@/assets/images/donut.png';
import semidonut from '@/assets/images/semidonut.png';
import dotmatrix from '@/assets/images/dfaDotMatrix.png';
import percentage from '@/assets/images/100minus.png';


const ChartType = (props:any) => {

  const closeMenu = ()=>{
      props.menuToggler('false')
  }
  const changeType =( type: string)=>{
      console.log(type)
      props.menuToggler(type)
  }
  return (
    <div className="charttype-wrap">
        <ul className="nav nav-tabs" id="charttypeTab" role="tablist">
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
        <div className="tab-content" id="charttypeContent">
            
            <div className="close-charttype">
                <a href="#" onClick={(e)=>{ e.preventDefault()
                     closeMenu()}}>
                    <span className="material-icons-round">
                        close
                    </span>
                </a>
            </div>
            
            <div className="tab-pane fade show active" id="line" role="tabpanel" aria-labelledby="line-tab">
                <div className="charttype-content-list">
                    <ul className="scrollbar-y-lightblue">
                       <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('line')}}>
                               <img src={line} alt="img" className="img-fluid" /> 
                               <p className="charttype-title">
                                   Line Chart
                               </p>
                            </a>    
                       </li>
                       <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('spline')}}>
                               <img src={spline} alt="img" className="img-fluid" /> 
                               <p className="charttype-title">
                                   Spline Chart
                               </p>
                            </a>    
                       </li> 
                       <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('polarline')}}>
                               <img src={polarline} alt="img" className="img-fluid" />
                               <p className="charttype-title">
                                    Polarline Chart
                               </p> 
                            </a>    
                       </li> 
                       <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('spiderweb')}}>
                               <img src={spiderweb} alt="img" className="img-fluid" /> 
                               <p className="charttype-title">
                                    Spiderweb Chart
                               </p>
                            </a>    
                       </li>     
                    </ul>   
                </div>
            </div>
            <div className="tab-pane fade" id="area" role="tabpanel" aria-labelledby="area-tab">
                <div className="charttype-content-list">
                    <ul className="scrollbar-y-lightblue">
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('basic')}}>
                                <img src={basic} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Basic
                                </p>
                            </a>    
                        </li>
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault();
                                 changeType('stacked')}}>
                                <img src={stacked} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                        Stacked
                                </p>
                            </a>    
                        </li> 
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('stackedpercent')}}>
                                <img src={stackedpercent} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                        Stacked Percent
                                </p>
                            </a>    
                        </li>     
                    </ul>   
                </div>
            </div>
            <div className="tab-pane fade" id="bar" role="tabpanel" aria-labelledby="bar-tab">
                <div className="charttype-content-list">
                    <ul className="scrollbar-y-lightblue">
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('column')}}>
                                <img src={groupedcolumn} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Grouped column
                                </p>
                            </a>    
                        </li>
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('stacked')}}>
                                <img src={stackedX} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Stacked
                                </p>
                            </a>    
                        </li> 
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('stckedpercent')}}>
                                <img src={stackedpercentX} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Stacked percent
                                </p>
                            </a>    
                        </li> 
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('bar')}}>
                                <img src={basicbar} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Basic bar
                                </p>
                            </a>    
                        </li> 
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('stackedbar')}}>
                                <img src={stackedbar} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Stacked bar
                                </p>
                            </a>    
                        </li> 
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('stackedpercentbar')}}>
                                <img src={stackedpercentbar} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Stacked percent bar
                                </p>
                            </a>    
                        </li>     
                    </ul>   
                </div>
            </div>
            <div className="tab-pane fade" id="pyramid" role="tabpanel" aria-labelledby="pyramid-tab">
                <div className="charttype-content-list">
                    <ul className="scrollbar-y-lightblue">
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('pyramid')}}>
                                <img src={agepyramid} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Age Pyramid
                                </p>
                            </a>    
                        </li>     
                    </ul>   
                </div>
            </div>
            <div className="tab-pane fade" id="scatter" role="tabpanel" aria-labelledby="scatter-tab">
                <div className="charttype-content-list">
                    <ul className="scrollbar-y-lightblue">
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('scatter')}}>
                                <img src={scatter} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Scatter
                                </p>
                            </a>    
                        </li>     
                    </ul>   
                </div>    
            </div>
            <div className="tab-pane fade" id="pie" role="tabpanel" aria-labelledby="pie-tab">
                <div className="charttype-content-list">
                    <ul className="scrollbar-y-lightblue">
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('pie')}}>
                                <img src={pie} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Pie Chart
                                </p>
                            </a>    
                        </li>  
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('variablepie')}}>
                                <img src={donut} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Donut Chart
                                </p>
                            </a>    
                        </li>  
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('semidoghnut')}}>
                                <img src={semidonut} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Semidonut Chart
                                </p>
                            </a>    
                        </li>     
                    </ul>   
                </div>
            </div>
            <div className="tab-pane fade" id="percentage" role="tabpanel" aria-labelledby="percentage-tab">
                <div className="charttype-content-list">
                    <ul className="scrollbar-y-lightblue">
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('pie')}}>
                                <img src={dotmatrix} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    Pie Chart
                                </p>
                            </a>    
                        </li>  
                        <li>
                            <a href="#" className="charttype-img" onClick={(e)=>{ e.preventDefault()
                                 changeType('100minus')}}>
                                <img src={percentage} alt="img" className="img-fluid" /> 
                                <p className="charttype-title">
                                    100 Minus
                                </p>
                            </a>    
                        </li>       
                    </ul>   
                </div>
            </div>
        </div>
    </div>
  )
}

export default ChartType