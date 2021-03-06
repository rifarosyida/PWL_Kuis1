<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{asset('asset/images/logo-judul.png')}}">
    <title>{{ $title }}</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/lightbox.css')}}">
   
    </head>
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    @include('masterview.header')
    <!-- ***** Header Area End ***** -->

    <div>
        @yield('content')
    </div>
    
    <!-- ***** Footer Start ***** -->
    @include('masterview.footer')

    <!-- jQuery -->
    <script src="{{asset('asset/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('asset/js/popper.js')}}"></script>
    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('asset/js/owl-carousel.js')}}"></script>
    <script src="{{asset('asset/js/accordions.js')}}"></script>
    <script src="{{asset('asset/js/datepicker.js')}}"></script>
    <script src="{{asset('asset/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('asset/js/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('asset/js/imgfix.min.js')}}"></script> 
    <script src="{{asset('asset/js/slick.js')}}"></script> 
    <script src="{{asset('asset/js/lightbox.js')}}"></script> 
    <script src="{{asset('asset/js/isotope.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{asset('asset/js/custom.js')}}"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>