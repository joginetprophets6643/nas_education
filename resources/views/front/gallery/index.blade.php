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
                        @foreach($count as $key=>$value)
                        <div class="col-md-3 item">
                            <div class="gallery-card">
                            <div class="gallery-img-wrap">
                            <?php $id=encode5t($key)?>
                            <a class="gallery-anchor" href="{{url('/gallery/image-gallery/state/'.$id)}}">
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


        let encounter_check=[]
        let required_data = []
    $(document).ready( function() {

         $.ajax({
                type: "GET",
                url: api_url + "events?limit=-1",
            }).done(response => {

            const events=response.data
            events.forEach(async (item)=>{
                if(encounter_check.indexOf(item.state) < 0){
                    encounter_check.push(item.state)
                    const filters={
                        "state_id":{
                            "_eq": item.state
                        }
                    }
                    await getEvents(filters)
                }
                else{                    
                    console.log('NO DATA')
                }
            })
        })
        const getEvents = async (filters)=>{
                await $.ajax({
                        type: "GET",
                        url: api_url + "state_masters?filter="+ JSON.stringify(filters),
                    }).done(response=>{
                        data=response.data.pop()
                        required_data.push(data)
                }) 
        }
        console.log(required_data.length)
        required_data.forEach(i=>{
            console.log(i)
        })
    })
    

    
</script>