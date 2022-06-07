import React from 'react';
import ScatterGraph from '@/components/Visualization/Graph/ScatterGraph';
import GraphPlayBtn from '@/components/Visualization/GraphPlayBtn/GraphPlayBtn';
import ScatterPlotTabDropdown from '@/components/Visualization/ScaterPlotTabDropdown/ScaterPlotTapDropDown';

const ScatterPlotTab = () => {
    return (
        <div className="scatterplot-wrap">
            <div className="apcard-white">
                <div className="apcard-header justify-content-center">
                    <h3 className="apcard-heading">Average Performance</h3>
                </div>
                <div className="apcard-content">
                    <div className="row">
                        <div className="col-md-6">
                            <div className="scatterplot-select-wrap mb-30">
                                <ScatterPlotTabDropdown label="Y-Axis:" />
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="scatterplot-select-wrap">
                                <ScatterPlotTabDropdown label="X-Axis:" />
                            </div>
                        </div>
                        <div className="col-md-12">
                            <div className="apcard-graph-wrap">
                                <ScatterGraph />
                                <GraphPlayBtn />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default ScatterPlotTab