import React from 'react'; 

const Tabs = () => {
  return (
    <ul className="nav nav-tabs" id="visualtab" role="tablist">
        <li className="nav-item" role="presentation">
            <button className="nav-link active" id="class3-tab" data-bs-toggle="tab" data-bs-target="#class3" type="button" role="tab" aria-controls="class3" aria-selected="true">class 3</button>
        </li>
        <li className="nav-item" role="presentation">
            <button className="nav-link" id="class5-tab" data-bs-toggle="tab" data-bs-target="#class5" type="button" role="tab" aria-controls="class5" aria-selected="false">class 5</button>
        </li>
        <li className="nav-item" role="presentation">
            <button className="nav-link" id="class8-tab" data-bs-toggle="tab" data-bs-target="#class8" type="button" role="tab" aria-controls="class8" aria-selected="false">class 8</button>
        </li>
        <li className="nav-item" role="presentation">
            <button className="nav-link" id="class10-tab" data-bs-toggle="tab" data-bs-target="#class10" type="button" role="tab" aria-controls="class10" aria-selected="false">class 10</button>
        </li>
        <li className="nav-item" role="presentation">
            <button className="nav-link" id="maps-tab" data-bs-toggle="tab" data-bs-target="#maps" type="button" role="tab" aria-controls="maps" aria-selected="false">MAPS</button>
        </li>
        <li className="nav-item" role="presentation">
            <button className="nav-link" id="plot-tab" data-bs-toggle="tab" data-bs-target="#plot" type="button" role="tab" aria-controls="plot" aria-selected="false">SCATTER PLOT</button>
        </li>
    </ul>
  );
};

export default Tabs;
