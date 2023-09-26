<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{helper::metaInformation()->title}}</title>

    <link rel="icon" type="image/png" href="{{asset(helper::getLatestsetting()->favicon ?? Null)}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/images/favicon.ico') }}">




    @stack('css')

</head>

<body >

    <div class="container-scroller">

        <div class="container-fluid page-body-wrapper">

            {{-- main content --}}
            @include('backend.partials._navbar')

            <div class="container-fluid page-body-wrapper">
                @include('backend.partials._sidebar')


                <div class="main-panel">

                    @yield('content')

                    @include('backend.partials._footer')
                </div>


            </div>

            {{-- footer include --}}

        </div>



    </div>






    @stack('js')





    <script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('backend/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('backend/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('backend/assets/js/misc.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('backend/assets/js/todolist.js') }}"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    {{-- <script>
        var allEditors = document.querySelectorAll('.editor');
        for (var i = 0; i < allEditors.length; ++i) {
          ClassicEditor.create(allEditors[i]).then( editor => {
        editor.ui.view.editable.element.style.height = '500px';
    };)}
    </script> --}}
    <script>
        var allEditors = document.querySelectorAll('.editor');
        for (var i = 0; i < allEditors.length; ++i) {
        ClassicEditor.create(allEditors[i] )
            .then( editor => {
                editor.ui.view.editable.element.style.height = '50vh';
            } )
            .catch( error => {
                console.error( error );
            } );}
    </script>



</body>

</html>
