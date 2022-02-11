import React from 'react';
import { WhiteCardProps } from '@/models/visualization';

const WhiteCard = (props:WhiteCardProps) => {
  const {title, count, image} = props
  return (
    <div className="visual-card-white text-center">
        <h2 className="total-no">
          {count}
        </h2>
        <p className="title-grey">
          {title}
        </p>
        <div className="visual-imgwrap">
            <img src={image} alt="img" className="img-fluid" />
        </div>
    </div>
  );
};

export default WhiteCard;
