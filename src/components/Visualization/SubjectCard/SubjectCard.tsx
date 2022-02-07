import React from 'react';
import Globe from "../../../assets/images/globe-icon.svg";

const SubjectCard = () => {
  return (
        <div className="visual-per-card per-card card-blue">
            <h2>
                <img src={Globe} alt="img" className="img-fluid" width="30" /> Language
            </h2>
            <div className="per-card-content dark-blue">
                <div className="per-card-desc">
                    <span className="total-no">67</span>
                    <p className="title">Percent</p>
                </div>
                <div className="per-card-desc">
                    <p className="title text-start">Average Performance <br />
                    of Students</p>
                </div>
            </div>
        </div>
  );
};

export default SubjectCard;
