
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets/front/scss/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- Material Icons -->
    <link rel="stylesheet" href="{{asset('assets/front/scss/material-icons.css')}}">
    <!-- AOS CSS -->

    
    <link rel="icon" type="image/svg+xml" href="{{asset('assets/admin/vendors/images/NAS_Icon.svg')}}">
    
    
    <link href="{{asset('assets/front/scss/aos.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/front/scss/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/scss/owl.theme.default.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/front/scss/updated.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/front/scss/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/scss/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/scss/lightbox.min.css')}}">
    <style>
      #loading {
        position: fixed;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        text-align: center;
        opacity: 0.7;
        background-color: #fff;
        z-index: 99;
      }

      #loading-image {
        position: absolute;
        top: 100px;
        left: 240px;
        z-index: 100;
      }
    </style>
    <link rel="stylesheet" href="{{asset('assets/front/scss/select2.min.css')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualization</title>
    
    <link rel="stylesheet" href="{{asset('css/_globalstyle.css')}}">
  </head>
<body class="p-0">
  <div id="app"></div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
@include('front.includes.footer')
