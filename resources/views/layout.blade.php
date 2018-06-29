<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ffdf00">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="theme-color" content="#ffffff">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <title>@yield('title') - СЭС-life</title>




    </head>
    <body>

        <div class="navbar fixed-top navbar-dark bg-dark box-shadow">
            <div class="container d-sm-flex justify-content-between">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <img src="/img/logo.png" class="img-responsive main-logo" />
                </a>

                <div class="d-flex align-items-center">
                    <div class="tel-block">
                        {{--<i class="fas fa-mobile-alt text-white mr-3 animated tada infinite" style="animation-duration: 2.5s;"></i>--}}

                        <a class="tel mr-5" href="tel:{{$contacts['phone']}}">
                            @svg('mobile-alt', 'svg-15 text-white mr-3 animated tada infinite', ['style' => 'animation-duration: 2.5s'])
                            {{$contacts['phoneFormatted']}}
                        </a>
                    </div>

                    <a href="#" data-noscroll data-toggle="modal" data-target="#callModal" data-type="Верхнее меню"
                       class="btn btn-primary btn-pulse text-white text-uppercase font-weight-semibold mr-5 d-none d-lg-block">
                        <span class="text-dark">Заказать звонок</span></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse w-100 bg-transparent" id="navbarHeader">
                <div class="container">
                    <div class="row d-flex justify-content-end">

                        <div class="col-xs-12 col-sm-6 col-lg-3 py-2 order-sm-2">
                            <nav class="nav main flex-column text-center">
                                <a class="nav-link" href="/services/dezinsection">@svg('insect', 'mr-2') Дезинсекция</a>
                                <a class="nav-link" href="/services/deratization">@svg('rat', 'mr-2') Дератизация</a>
                                <a class="nav-link" href="/services/dezinfection">@svg('bacteria', 'mr-2') Дезинфекция</a>
                                <a class="nav-link" href="/services/dezodoration">@svg('smell', 'mr-2') Дезодорация</a>
                            </nav>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 py-2">
                            <nav class="nav flex-column  text-center">

                                <a class="nav-link" href="/">Главная</a>
                                <a class="nav-link" href="/services">Услуги</a>
                                <a class="nav-link" href="/about">О компании</a>
                                <a class="nav-link" href="/advice">Полезные советы</a>
                                <a class="nav-link" href="/contacts">Контакты</a>
                            </nav>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        @include('call-modal')

        <footer class="mt-5 pt-5">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-lg-4 py-2">
                        <nav class="nav flex-column  text-center">

                            <a class="nav-link" href="/">Главная</a>
                            <a class="nav-link" href="/services">Услуги</a>
                            <a class="nav-link" href="/about">О компании</a>
                            <a class="nav-link" href="/advice">Полезные советы</a>
                            <a class="nav-link" href="/contacts">Контакты</a>
                        </nav>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-lg-4 py-2 order-lg-3">
                        <nav class="nav main flex-column text-center">
                            <a class="nav-link" href="/services/dezinsection">@svg('insect', 'mr-2') Дезинсекция</a>
                            <a class="nav-link" href="/services/deratization">@svg('rat', 'mr-2') Дератизация</a>
                            <a class="nav-link" href="/services/dezinfection">@svg('bacteria', 'mr-2') Дезинфекция</a>
                            <a class="nav-link" href="/services/dezodoration">@svg('smell', 'mr-2') Дезодорация</a>
                        </nav>
                    </div>
                    <div class="col-12 col-lg-4 d-flex order-lg-2">

                        <div class="align-self-end px-5">
                            <img src="/img/logo2.png" class="img-fluid d-block mx-auto" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
            <section class="bg-dark p-3 mt-4">
                <div class="container">
                    <p class="mb-0 text-primary">&copy;@php echo date('Y'); @endphp Компания «СЭС-life» <a href="maito:{{$contacts['email']}}">{{$contacts['email']}}</a></p>
                </div>
            </section>
        </footer>



        <!-- Scripts -->

        <script src="{{ mix('/js/app.js') }}"></script>

        @yield('scripts')
        @include('counters')

    </body>
</html>
