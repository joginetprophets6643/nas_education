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
                            <li class="breadcrumb-item"><a href="{{url('/gallery/image-gallery')}}">{{ __('lang.Gallery') }}</a></li>
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
            <div class="row photos">

            @foreach($images as $image)
                <div class="col-md-4 item">
                    <div class="gallery-card">
                        <div class="gallery-img-wrap gallery-level-three">
                        <a class="gallery-anchor" href="{{asset('assets/uploads/'.$image)}}" data-lightbox="photos">
                        <img src="{{asset('assets/uploads/'.$image)}}" alt="img" class="img-fluid">
                        <button class="gallery-zoom-icon">
                        <span class="material-icons-round">
                        zoom_in
                        </span>
                        </button>
                        </a>
                            
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


