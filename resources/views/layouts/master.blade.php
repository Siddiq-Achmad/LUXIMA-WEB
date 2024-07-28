<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'LUXIMA.ID') | Listing & Directory | LUXIMA.ID </title>

    @vite(['resources/css/custom.less', 'resources/js/app.js'])
    @yield('styles')
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
</head>
<body>
    <!-- Your UIkit based template HTML goes here -->
    <div id="spinner" class="uk-container " >
        <div uk-spinner>
        </div>
        <progress id="js-progressbar" class="uk-progress" value="1" max="100"></progress>
    </div>

    <div id="app" class="page_wrapper">
<<<<<<< HEAD
=======
        
>>>>>>> 61caef9f927f59ea11278a5a1b1d6326a87daa7e
        @include('partials.header')

        <!-- Page Outer -->
        <div class="page-outer">

            <!--Page Inner -->
            <div id="page-inner" class="page-inner">
                <main id="page-content" class="lxm_grid">
                    

                    <!-- CONTENT -->

                    <!--section page -->
                    <section  id="main-section-page" class="row full-width uk-light">
                        <div class="elemen_container">
                            <div  class="elemen_row">
                                <div class="banner-page">

                                    @include('partials.banner')

                                </div>
                            </div>
                        </div>
                    </section>
                    <!--/section page -->
                    @yield('content')

                </main>
            </div>
            <!--Page Inner -->  

            @yield('modals')
            @include('components.backtop')

        </div>
        <!-- Page Outer -->
            @yield('footer')
    </div>


    

    

    @yield('scripts')
</body>
</html>
