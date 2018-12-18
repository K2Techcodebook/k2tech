<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/blazeloginstyle.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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

                            <li class="nav-item">
                                <a class="nav-link"  href="#" data-toggle="modal" data-target="#create_">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link"   href="#"  data-toggle="modal" data-target="#createTopic_">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

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

              <div class="modal" id="createTopic_" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content cta-wrapper cta-primary">
                    <div class="modal-header">
             <h4>Welcome to Our Website Please Are You ??????????????</h4>
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

                           </div>
                    <div class="modal-body">
                     
                      
                         <hr/>
                    
      <a class="btn-e btn-gray"   href="{{route('business_signup')}}" >{{ __('Register As Business') }}</a> or  <a class="btn-e btn-gray" href="{{route('affiliate_signup') }}">{{ __('Register As Affiliate') }}</a>

                                            </div>                                            
                                             
                                        </div>
                                </div>
                            </div>  <!--- end modal -->


   <div class="modal" id="create_" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content cta-wrapper cta-primary">
                    <div class="modal-header">
             <h4>Welcome to Our Website Please Are You ??????????????</h4>
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

                           </div>
                    <div class="modal-body">
                     
                      
                         <hr/>
                    
      <a class="btn-e btn-gray"   href="{{route('business_sign')}}" >{{ __('Login As Business') }}</a> or  <a class="btn-e btn-gray" href="{{route('affiliate_sign') }}">{{ __('Login As Affiliate') }}</a>

                                            </div>                                            
                                             
                                        </div>
                                </div>
                            </div>  <!--- end modal -->

        </main>
    </div>
</body>
</html>
