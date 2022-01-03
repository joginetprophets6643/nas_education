@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                    {{ __('lang.Photo Gallery') }}
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('lang.Home') }}</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/image-gallery')}}">{{ __('lang.Gallery') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.Photo Gallery') }}</li>
                        </ol>
                        </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-wrap bg-grey ptb-60">
    <div class="container">
        <div class="card-white">
            <div class="row">

            @foreach($events as $event)
                <div class="col-md-4">
                    <div class="gallery-card">
                        <div class="gallery-img-wrap">
                            <img src="{{asset('assets/uploads/'.$image[$event->id])}}" alt="img" class="img-fluid" style="width:100%;height:200px">
                            <a class="gallery-zoom-icon" >
                                <span class="material-icons-round">
                                zoom_in
                                </span>
                            </a>

                        </div>
                        <div class="gallery-content">
                            <div class="d-flex justify-content-between align-items-center pb-15">
                                <span class="total-img">
                                    <img src="{{asset('assets/front/images/gallery.svg')}}" alt="img" class="img-fluid" />  {{$count[$event->id]}}
                                </span>
                                <?php $id=encode5t($event->event_id)?>
                                <a href="{{url('image-gallery/'.$id)}}" class="org-link">View All</a>
                            </div>
                            
                            <p class="gallery-title">
                                {{$event->name}}
                            </p>  
                        </div>

                    </div>
                </div>


                @endforeach




                
            </div>
        </div>
    </div>
</section>

@include('front.includes.footer')
</div>
