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
                            <li class="breadcrumb-item active" aria-current="page">{{$data->name}}</li>
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

            @foreach($images as $image)
                <div class="col-md-4">
                    <div class="gallery-card">
                        <div class="gallery-img-wrap">
                            
                            <a href="{{asset('assets/uploads/'.$image)}}" title="sweet nickyyy" class="icon-magnifying-glass lightbox" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{asset('assets/uploads/'.$image)}}">
                                <img src="{{asset('assets/uploads/'.$image)}}" alt="img" class="img-fluid" style="width:100%;height:200px">
                                <button class="gallery-zoom-icon" style="width:100%">
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
<script>
    $('#ZoomIn').on('show.bs.modal', function(e) {
    let link     = $(e.relatedTarget),
        modal    = $(this),
        image = link.data("image");

    modal.find("#modal_image").attr('src',image);
});
</script>
