<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}assets/images/favicon.png">
    {{-- <title>{{Helpers::schoolInfo()->name}} Merina Soft Office | {{$pageTitle}} </title> --}}
    <!-- Custom CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="{{ asset('/') }}css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mdb/mdb.css') }}">
    <link rel="stylesheet" href="{{ asset('mdb/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mdb/addons/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    {{-- //editer  --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    @stack('css')
</head>

<body>
    {{-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> --}}
    <div id="main-wrapper">
        @include('layouts.parts.navbar')
        @include('layouts.parts.sidebar')
        </ul>
        </li>

        </ul>
        </nav>
    </div>
    </aside>
    <div class="page-wrapper">
        <div class="container-fluid">
            @include('layouts.elements.alert')
            @yield('content')
        </div>
        <footer class="footer text-center">
        </footer>
    </div>
    </div>
    <script src="{{ asset('/') }}js/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    <script src="{{ asset('/') }}js/bootstrap.min.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('/') }}js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('/') }}js/perfect-scrollbar.jquery.min.js"></script>
    @stack('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script src="{{ asset('js') }}/script.js"></script>
    <script src="{{ asset('/') }}js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @include('layouts.parts.alert')
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <!--Google Map APi Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCykRLEzpOdEoBqafqgeaJwgjxd3cT1bM8"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

    </script>

    <script src="{{ asset('/') }}js/custom.js"></script>
    <script>
        feather.replace()

    </script>
</body>

</html>
