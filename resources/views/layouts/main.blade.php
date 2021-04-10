<!DOCTYPE html>
<html lang="en-US">

    @include('components.head')
    
    <body>
        
        @include('components.header')
        
        @include('components.nav')
        
        @yield('content')

        @include('components.footer')
        
        
        
        <!--Jquery js-->
        <script src="{{asset ('gauto/assets/js/jquery.min.js')}}"></script>
        <!-- Popper JS -->
        <script src="{{asset ('gauto/assets/js/popper.min.js')}}"></script>
        <!--Bootstrap js-->
        <script src="{{asset ('gauto/assets/js/bootstrap.min.js')}}"></script>
        <!--Owl-Carousel js-->
        <script src="{{asset ('gauto/assets/js/owl.carousel.min.js')}}"></script>
        <!--Lightgallery js-->
        <script src="{{asset ('gauto/assets/js/lightgallery-all.js')}}"></script>
        <script src="{{asset ('gauto/assets/js/custom_lightgallery.js')}}"></script>
        <!--Slicknav js-->
        <script src="{{asset ('gauto/assets/js/jquery.slicknav.min.js')}}"></script>
        <!--Magnific js-->
        <script src="{{asset ('gauto/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!--Nice Select js-->
        <script src="{{asset ('gauto/assets/js/jquery.nice-select.min.js')}}"></script>
        <!-- Datepicker JS -->
        <script src="{{asset ('gauto/assets/js/jquery.datepicker.min.js')}}"></script>
        <!--ClockPicker JS-->
        <script src="{{asset ('gauto/assets/js/jquery-clockpicker.min.js')}}"></script>
        <!--Main js-->
        <script src="{{asset ('gauto/assets/js/main.js')}}"></script>
    </body>
</html>

