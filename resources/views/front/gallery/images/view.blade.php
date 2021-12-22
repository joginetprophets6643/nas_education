@include('front.includes.header')
@include('front.includes.nav')

<section class="banner-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading-yellow">
                    Image Gallery
                </h2>
                <div class="breadcrum-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/image-gallery">Gallery</a></li>
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
                            <img src="{{asset('assets/uploads/'.$image)}}" alt="img" class="img-fluid" style="width:100%;height:200px">
                            <a class="gallery-zoom-icon">
                                <span class="material-icons-round">
                                zoom_in
                                </span>
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

