@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                {{ __('lang.Gallery') }}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Gallery') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-main-wrap bg-grey ptb-60">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <div class="card-white">
                    <div class="photogallery-content">
                        @if(session('success'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                    <div class="justify-content-between d-flex align-items-center mb-4">  
                    <h2 class="heading-blue">
                        {{ __('lang.Photo Gallery') }}
                    </h2>
                    <div class="gallery-wrap">
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder="Search Here" name="state" id="state">
                            <button type="submit" class="searchButton">
                                <img src="{{asset('assets/front/images/icons8-search.svg')}}" alt="icon" />
                            </button>
                        </div>
                        <!-- <label id="search">Search:</label> -->
                        <!-- <input type="text" name="state" id="state"> -->
                    </div>
                    </div> 
                    <div class="row photos">
                        
                    </div>
                    <span id="i_found"></span>
                    </div>
                    <div class="videogallery-content">
                    <h2 class="heading-blue mb-4">
                        {{__('lang.Video Gallery')}}
                    </h2>
                        <div class="row videos">                       
                        
                        </div>
                        <span id="v_found"></span>
                        
                        
                        
                    </div>
                    </div>
                </div>
        </div>
        </div>
    </div>
</section>

@include('front.includes.footer')

<script>
    var img_data={}
    var temp_img_data={}
    var ved_data={}
    var temp_ved_data={}
    let count=1

    $(document).ready(async function() {
        await $.ajax({
            type: "GET",
            url: api_url + "events?limit=-1",
            headers: {
            "Authorization": "Bearer " + token
            }
        }).done(response => {
            const i_events=response.data
             i_events.forEach((item)=>{
                if(Object.keys(img_data)!=item.state){
                    img_data[item.state]={
                        id:item.state,
                        count:count
                    }
                }
                else{
                    img_data[item.state].count=img_data[item.state].count+1
                }     
            })

            Object.keys(img_data).forEach(key=>{
                getStateImages(key, img_data[key].count,'photos')
            })
        })

        await $.ajax({
            type: "GET",
            url: api_url + "video_events?limit=-1",
            headers: {
            "Authorization": "Bearer " + token
            }
        }).done(response => {
            const v_events=response.data
             v_events.forEach((item)=>{
                if(Object.keys(ved_data)!=item.state){
                    ved_data[item.state]={
                        id:item.state,
                        count:count,
                        name:'',
                        thumbnail:''
                    }
                }
                else{
                    ved_data[item.state].count=ved_data[item.state].count+1
                }     
            })

            Object.keys(ved_data).forEach(key=>{
                getStateImages(key, ved_data[key].count,'videos')
            })
        })
    })

    const getStateImages = (id,count,type)=>{
        const filters={
                        "state_id":{
                            "_eq": id
                        }
                    }
         $.ajax({
                type: "GET",
                url: api_url + "state_masters?filter="+ JSON.stringify(filters),
                headers: {
                "Authorization": "Bearer " + token
                }
            }).done(response=>{
                const data=response.data

                if(type=='videos'){
                    ved_data[id].name=data[0].state_name
                    ved_data[id].thumbnail=data[0].thumbnail
                }
                if(type=='photos'){
                    img_data[id].name=data[0].state_name
                    img_data[id].thumbnail=data[0].thumbnail
                }
                
 

                createTiles(id,data[0].thumbnail?data[0].thumbnail:'broken-1.png',data[0].state_name,count,type)
            })
    }

    
    const createTiles = (id,image,name,count,type)=>{
        id=btoa(id)
        if(type=='photos'){
            
            var url = '{{ route("image-gallery", ":id") }}';
            url = url.replace(':id', id);
            $('.photos').append('<div class="col-md-3"><a href="'+url+'"><div class="gallery-card"><div class="gallery-img-wrap"><img src="assets/uploads/state-thumbnail/'+image +'" alt="img" class="img-fluid"></div><div class="gallery-content"><div class="d-flex justify-content-between align-items-center"><span class="total-img"><img src="{{asset('assets/front/images/gallery.svg')}}" alt="img" class="img-fluid" /> '+count+'</span><p class="gallery-title">'+name+'</p></div></div></div></a></div>')
        }

        if(type=='videos'){
            var url = '{{ route("video-gallery", ":id") }}';
            url = url.replace(':id', id);
            $('.videos').append('<div class="col-md-3"><a href="'+url+'"><div class="gallery-card"><div class="gallery-img-wrap"><img src="assets/uploads/state-thumbnail/'+image +'" alt="img" class="img-fluid"></div><div class="gallery-content"><div class="d-flex justify-content-between align-items-center"><span class="total-img"><img src="{{asset('assets/front/images/gallery.svg')}}" alt="img" class="img-fluid" /> '+count+'</span><p class="gallery-title">'+name+'</p></div></div></div></a></div>')
        }

    }
    
    $('#state').keyup(()=>{
        var state=$('#state').val()
        
        temp_ved_data={}
        temp_img_data={}
        Object.keys(ved_data).forEach(key=>{          
            if(ved_data[key].name.toLowerCase().includes(state.toLowerCase())){
            temp_ved_data[key]= ved_data[key]
            }
        })

        if(Object.keys(temp_ved_data).length===0){
            $('#v_found').html('No Such State Found!')
        }
        else{
            $('#v_found').html('')
        }


        Object.keys(img_data).forEach(key=>{          
            if(img_data[key].name.toLowerCase().includes(state.toLowerCase())){
            temp_img_data[key]= img_data[key]
            }
        })

        if(Object.keys(temp_img_data).length===0){
            $('#i_found').html('No Such State Found!')
        }
        else{
            $('#i_found').html('')
        }

        $('.photos').empty()
        $('.videos').empty()
        
        Object.keys(temp_ved_data).forEach(key=>{
            // console.log('here')
            createTiles(key,temp_ved_data[key].thumbnail?temp_ved_data[key].thumbnail:'broken-1.png',temp_ved_data[key].name, temp_ved_data[key].count,'videos')
        })

        Object.keys(temp_img_data).forEach(key=>{
            // console.log('there')
            createTiles(key,temp_img_data[key].thumbnail?temp_img_data[key].thumbnail:'broken-1.png',temp_img_data[key].name, temp_img_data[key].count,'photos')
        })
        

    })
    
</script>