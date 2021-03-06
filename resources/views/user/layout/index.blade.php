<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HappyPhone - Mua sắm là hạnh phúc</title>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/style.css')}}">
</head>
<body>
<div class="container">
    @include('user.layout.header')
    @yield('content')
</div>
@include('user.layout.footer')
<script src="{{asset('source/assets/dest/js/jquery.js')}}"></script>
<script src="{{asset('source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="{{asset('source/assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('source/assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('source/assets/dest/vendors/animo/Animo.js')}}"></script>
<script src="{{asset('source/assets/dest/vendors/dug/dug.js')}}"></script>
<script src="{{asset('source/assets/dest/js/scripts.min.js')}}"></script>
<script src="{{asset('source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('source/assets/dest/js/waypoints.min.js')}}"></script>
<script src="{{asset('source/assets/dest/js/wow.min.js')}}"></script>
<!--customjs-->
<script src="{{asset('source/assets/dest/js/custom2.js')}}"></script>
<script>
    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
                $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    })
</script>
</body>
</html>