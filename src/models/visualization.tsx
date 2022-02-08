export interface States{
    state_name: string;
    state_id: number;
}

export interface WhiteCardProps{
    title: string;
    count: string;
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