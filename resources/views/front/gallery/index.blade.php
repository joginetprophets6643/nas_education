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
                    <h2 class="heading-blue mb-4">
                        {{ __('lang.Photo Gallery') }}
                    </h2>
                    <div class="row photos">
                        
                    </div>
                    </div>
                    <div class="videogallery-content">
                    <h2 class="heading-blue mb-4">
                        {{__('lang.Video Gallery')}}
                    </h2>
                    @if(count($v_count)>0)
                        <div class="row">                       
                        @foreach($v_count as $key=>$value)
                        <div class="col-md-3 item">
                            <div class="gallery-card">
                            <div class="gallery-img-wrap">
                            <?php $id=encode5t($key)?>
                            <a class="gallery-anchor" href="{{url('/gallery/video-gallery/state/'.$id)}}">
                            <!-- <img src="" alt="img" class="img-fluid">                         -->
                            <!-- <button class="gallery-zoom-icon">
                            <span class="material-icons-round">
                            zoom_in
                            </span>
                            </button> -->
                            <img src="{{asset('assets/uploads/state-thumbnail/'.$value['image'])}}" alt="img" class="img-fluid">
                            <span id="state">{{$value['state']}}</span>
                            <span id="count">{{$value['count']}}</span>
                            
                            </a>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    @else
                    <p class="text-center">No Video Uploaded Yet!<p>
                    @endif
                        
                        
                        
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
    let count=1

    $(document).ready(async function() {
        await $.ajax({
            type: "GET",
            url: api_url + "events?limit=-1",
        }).done(response => {
            const events=response.data

            events.forEach((item)=>{

                if(Object.keys(img_data)!=item.state){

                    img_data[item.state]={
                        id:item.state,
                        count:count
                    }
                    const filters={
                        "state_id":{
                            "_eq": item.state
                        }
                    }
                    $.ajax({
                        type: "GET",
                        url: api_url + "state_masters?filter="+ JSON.stringify(filters),
                    }).done(response=>{
                        const data=response.data.pop()
                        
                        img_data[item.state].thumbnail=data.thumbnail
                        img_data[item.state].name=data.state_name


                    })
                
                }
                else{
                    img_data[item.state].count=img_data[item.state].count+1
                }  
                
            })
            Object.keys(img_data).forEach(function(key) {
                console.log(Object.keys(img_data[key]).length)
            });
        })
    })

    const createTiles = ()=>{
        $('.photos').append('<div class="col-md-3 item"><div class="gallery-card"><div class="gallery-img-wrap"><a class="gallery-anchor" href=""><span id="state">'+img_data[key]['name']+'</span><br><span id="count">'+img_data[key]['count']+'</span></a></div></div></div>')

    }
    

    
</script>