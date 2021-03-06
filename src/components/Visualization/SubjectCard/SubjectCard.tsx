import React, { useEffect, useState } from 'react';
import Globe from "@/assets/images/globe-icon.svg";
import { SubjectCardProp } from '@/models/visualization';

const SubjectCard = (props: SubjectCardProp) => {
    const { name, class_style, count, image, geography } = props
    const [title, setTitle] = useState<string>('')
    const [subtitle, setSubTitle] = useState<string>('')

    useEffect(() => {
        if (geography == "national") {
            setSubTitle('out of 500')
        }
        else {
            setSubTitle('Percent')
        }

    }, [geography])

    return (
        <div className={`visual-per-card per-card card-${class_style}`}>
            <h2>
                <img src={image} alt="img" className="img-fluid" width="30" /> {name}
            </h2>
            <div className={`per-card-content dark-${class_style}`}>
                <div className="per-card-desc">
                    <span className="total-no">{count}</span>
                    <p className="title">{subtitle}</p>
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
