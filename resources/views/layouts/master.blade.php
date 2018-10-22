<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Susamovtahan|Admin</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
</head>
<body>
<div class="container-fluid">
   <div class="row">
       <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
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
                           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                       </li>
                   @else
                       <li class="nav-item dropdown">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                       </li>
                   @endguest
               </ul>
           </div>
       </nav>
   </div>
<div class="row admin-container">
    <div class="nav-side-menu">
        <div class="brand">Welcome, <b>{{ Auth::user()->name }}</b></div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="{{ url('/admin') }}">
                         Начало
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/clientsOrders/') }}"><span> Заявки </span></a>
                </li>

                <li>
                    <a href="{{ url('/admin/order') }}"><span> Поръчай </span></a>
                </li>

                <li>
                    <a href="{{ url('/admin/technology') }}"><span> Технология </span></a>
                </li>

                <li>
                    <a href="{{ url('/admin/gallery/') }}"><span>Галерия </span></a>
                </li>
                <li>
                    <a href="{{ url('/admin/videos') }}"><span> Видео </span></a>
                </li>

                <li>
                    <a href="{{ url('/admin/about') }}">
                         За нас
                    </a>
                </li>

                <li>
                    <a href="{{ url('/admin/contacts') }}">
                         Контакти
                    </a>
                </li>
                <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"> Продукция</a>
                </li>
                <ul class="sub-menu collapse" id="new">
                    <li class="nav-link">
                        <a href="{{ url('/admin/products/tahan') }}">
                            Сусамов тахан
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ url('/admin/products/honey') }}">
                            Пчелен мед
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ url('/admin/products/sesame_oil') }}">
                            Сусамово масло
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="{{ url('/admin/products/limets') }}">
                            Брашно от Лимец
                        </a>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
    <div class="col-lg-9 offset-lg-3">
        @yield('content')
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></body>
</html>
