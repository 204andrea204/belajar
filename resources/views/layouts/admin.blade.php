<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link href="{{ asset('fontawesome-free-5.5.0-web/css/all.css') }}" rel="stylesheet">
     <link href="{{ asset('fontawesome-free-5.5.0-web/css/all.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar">
            <div class="container" >
                <a class="navbar-brand" href="{{ url('/') }}">
                {{Auth::user()->name}}
                </a>
                  <li> <a class="nav-link" href="{{ url('admin/tni') }}">{{ __('TNI') }}</a></li>
                  <li> <a class="nav-link" href="{{ url('admin/syarat') }}">{{ __('Syarat') }}</a></li>
                  <li> <a class="nav-link" href="{{ url('admin/berita') }}">{{ __('Pengumuman') }}</a></li>
                  <li> <a class="nav-link" href="{{ url('admin/galeri') }}">{{ __('Geleri TNI') }}</a></li>
                  <li> <a class="nav-link" href="{{ url('admin/webcame') }}">{{ __('Webcame') }}</a></li>
                  <li> <a class="nav-link" href="{{ url('admin/pemasukan') }}">{{ __('pemasukan') }}</a></li>
                  <li> <a class="nav-link" href="{{ url('admin/pengeluaran') }}">{{ __('pengeluaran') }}</a></li>
                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->   
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        @else

                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>


</body>
</html>
