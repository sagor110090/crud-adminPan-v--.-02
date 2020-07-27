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
    <link href="{{ asset('/') }}css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mdb/mdb.css') }}">
    <link rel="stylesheet" href="{{ asset('mdb/style.css') }}">
    <link rel="stylesheet" href="{{ asset('mdb/addons/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}css/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/buttons.dataTables.min.css">
    {{-- //editer  --}}
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script src="{{ asset('js/feather.min.js') }}"></script>

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
    <script src="{{ asset('/') }}js/popper.min.js"></script>

    <script src="{{ asset('/') }}js/bootstrap.min.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('/') }}js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('/') }}js/perfect-scrollbar.jquery.min.js"></script>
    @stack('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    <script src="{{ asset('js') }}/script.js"></script>
    <script src="{{ asset('/') }}js/select2.min.js"></script>
    <script src="{{ asset('js') }}/sweetalert.min.js"></script>
    @include('layouts.parts.alert')

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
