import React from 'react';
import './WhiteCard.scss';
import Building from '../../../assets/images/building.svg';

const WhiteCard = () => {
  return (
    <div className="visual-card-white text-center">
        <h2 className="total-no">
            41,059
        </h2>
        <p className="title-grey">
            Number of Schools Sampled   
        </p>
        <div className="visual-imgwrap">
            <img src={Building} alt="img" className="img-fluid" />
        </div>
    </div>
  );
};

export default WhiteCard;
