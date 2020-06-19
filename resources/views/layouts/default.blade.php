<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')                
    </head>	

    <body data-ma-theme="red" style="background:#efefef">
        <main class="main">

            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            @include('includes.header')

            <section class="content">
                
                @yield('content')

                @include('includes.footer')                
                
            </section>

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{asset('vendors/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendors/popper.js/popper.min.js')}}"></script>
        <script src="{{asset('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('vendors/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('vendors/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>

        <script src="{{asset('vendors/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('vendors/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('vendors/flot.curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('vendors/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('vendors/jqvmap/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('vendors/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('vendors/salvattore/salvattore.min.js')}}"></script>
        <script src="{{asset('vendors/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('vendors/moment/moment.min.js')}}"></script>
        <script src="{{asset('vendors/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('vendors/jqTree/tree.jquery.js')}}"></script>
        
        <!-- Charts and maps-->
        <script src="{{asset('demo/js/flot-charts/curved-line.js')}}"></script>
        <script src="{{asset('demo/js/flot-charts/dynamic.js')}}"></script>
        <script src="{{asset('demo/js/flot-charts/line.js')}}"></script>
        <script src="{{asset('demo/js/flot-charts/chart-tooltips.js')}}"></script>
        <script src="{{asset('demo/js/other-charts.js')}}"></script>
        <script src="{{asset('demo/js/jqvmap.js')}}"></script>

        <!-- Light Gallery -->
        <script src="{{asset('vendors/lightgallery/js/lightgallery-all.min.js')}}"></script>

        <!-- App functions and actions -->
        <script src="{{asset('js/app.min.js')}}"></script>
        <script>
            $('#referralLinkModal').on('show.bs.modal', function (event) {
                console.log("modal code called");
                 var button = $(event.relatedTarget) 
                 var id = button.data('id') ;
           
                 console.log(id);
                 //second part
                 var modal = $(this);
                 console.log(modal.find('.modal-body #id'));
                 modal.find('.modal-body #id').val(id);
           }) 
                
           </script>
    </body>
</html>