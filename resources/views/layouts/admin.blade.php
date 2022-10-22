<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <!-- Preloader -->

    <div class="wrapper">
      @include('layouts.inc.sidebar')

      <div class="main-panel">
          @include('layouts.inc.adminnav')
          <div class="content-wrapper">
              @yield('content')
          </div>
          @include('layouts.inc.adminfooter')
      </div>
    </div>

    @if(session('status'))
        <script>
            function ready() {
                swal({
                    title: "{{ session('status') }}",
                    icon: "{{ session('type') }}",
                    // text: "{{ session('text') }}",
                    // buttons: true,
                    // dangerMode: true,
                })
                //     .then((willDelete) => {
                //     if (willDelete) {
                //         swal("Poof! Your imaginary file has been deleted!", {
                //         icon: "success",
                //         });
                //     } else {
                //         swal("Your imaginary file is safe!");
                //     }
                // });
            }
            document.addEventListener("DOMContentLoaded", ready);
        </script>
    @endif
  </body>
</html>
