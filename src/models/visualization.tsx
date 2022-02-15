export interface States{
    state_name: string;
    state_id: number;
    udise_state_code: number;
}

export interface District{
    district_name: string;
    district_id: number;
    udise_district_code:number;
    udise_state_id:number;
}

export interface WhiteCardProps{
    title: string;
    count: number;
    image: string;
}

export interface StoreItem{
    data: any;
    error: boolean;
    loaded: boolean;
    loading: boolean;
}

export interface SubjectCardProp{
    name: string;
    class_style: string;
    count: string;
    image:string;
}

export interface StoreModel{
    grade:IntialStateModel;
    cards:IntialStateModel;
    states:IntialStateModel;
    districts:IntialStateModel;
    current_geography:IntialStateModel;
    current_id:IntialStateModel;
    current_state:IntialStateModel;
    current_district:IntialStateModel;
    subject_cards:IntialStateModel;
}
export interface ParticipationCards{
    id: number;	
    type: string;
    district_id: number;	
    state_id:number;
    grade:number;	
    district_schools_count:number;	
    district_students_count:number;	
    district_teachers_count:number;	
    state_schools_count:number;	
    state_teachers_count:number;	
    state_students_count:number;	
    national_schools_count:number;	
    national_teachers_count:number;
    national_students_count:number;
}

export interface IntialStateModel{
    loading: boolean;
    loaded: boolean;
    error: boolean;
    data: any;
}

export interface ClassSubjects{
    [key: string]: Array<string>;
    class_3: Array<string>;
    class_5: Array<string>;
    class_8: Array<string>;
    class_10: Array<string>;

}

export interface SubjectIcons{
    [key: string]: string;
    language: string;
    evs:string;
    math:string;
    socialscience:string;
    science:string;
    english:string;
    mil:string;
}