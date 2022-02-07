@include('front.includes.header')
@include('front.includes.nav')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visualization</title>
  <link rel="stylesheet" href="{{asset('css/_style.css')}}">
</head>
<body>
  <div id="app"></div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
@include('front.includes.footer')
