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

<div class="row admin-container">
    <div class="col-sm-2 col-lg-1 nav-side-menu">
        <div class="brand">
            <p>Добре дошъл, <b>{{ Auth::user()->name }}</b></p>
            <a href="#"  data-toggle="collapse" data-target="#menu-content" class="d-inline d-sm-none"><img src="{{URL::asset('images/hamMenu.png')}}" alt="HamMenu Icon"></a>

        </div>

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
                @guest
                    <li class="d-block d-sm-none">
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @else
                    <li class="d-block d-sm-none">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Изход') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
    <div class="col-sm-10 col-lg-11">
        <div class="row d-none d-sm-block">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Изход') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>
        @yield('content')
        <app></app>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></body>
</html>
