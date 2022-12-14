<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <link rel="icon" type="image/*" sizes="192x192"  href="{{asset('images/1.jpeg')}}"


    <!-- Site Metas -->
    <title>Food system</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="{{asset('css/colors/orange.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">

    <!-- Modernizer -->
    <script src="{{asset('js/modernizer.js')}}"></script>

<style type="text/css">
         h2 {
    font-family: 'nautilus_pompiliusregular';
    letter-spacing: 2.7px;
    position: relative;
    font-size: 37px;
    line-height: 100px;
    padding-bottom: 1px;
    color: #e75b1e;
}
.btn-bg{

  background-color: #e75b1e;
  color: white;
}
</style>
</head>

<body>
    <x-app-navbar />
    {{$slot}}
    @yield('banner')
    @yield('about')
    @yield('special_menu')
    <x-app-footer />
    <a href="#" class="scrollup" style="display: none;">Scroll</a>


    <!-- ALL JS FILES -->
    <script src="{{asset('js/all.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>