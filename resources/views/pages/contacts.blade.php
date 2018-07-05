@extends('layout')

@section('title', 'Контакты')

@section('content')
<div class="content">

    <section class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
            </ol>
        </nav>

        <div class="d-flex flex-column py-5">
            <h1 class="header align-self-center" data-aos="flip-left" >Контакты</h1>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 py-lg-5 order-lg-2" data-aos="zoom-in-right">
                <picture>
                    <img srcset="/img/content/contacts.png" class="d-block img-fluid mx-auto">
                </picture>
            </div>
            <div class="col-12 col-lg-4 offset-lg-2 p-5 d-flex flex-column justify-content-center" data-aos="zoom-in-left">
                <p class="lead">
                    @svg('mobile-alt', 'svg-15 mr-3 animated tada infinite', ['style' => 'animation-duration: 2.5s'])
                    <a class="tel tel-black mr-5" href="tel:{{$contacts['phone']}}">{{$contacts['phoneFormatted']}}</a>
                </p>
                <p class="lead">
                    @svg('map-marker-alt', 'mr-3')
                    г. Новороссийск
                </p>
                <p class="lead">
                    @svg('map-marker-alt', 'mr-3')
                    г. Геленджик
                </p>
                <p class="lead">
                    @svg('map-marker-alt', 'mr-3')
                    г. Анапа
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                <div class="m-3">
                    <p class="lead text-center">Если у вас остались вопросы, заполните форму ниже и наш специалист свяжется с вами в ближайшее время</p>
                </div>

                <form class="outline-secondary border" data-aos="fade-up" id="callForm" action="" data-handler="/call" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="type" value="Страница контактов">

                    <div class="form-row p-2">
                        <div class="col-md-6 mb-2 form-group">
                            <input type="text" class="form-control" name="person" placeholder="Ваше имя">
                        </div>
                        <div class="col-md-6 mb-2 form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Телефон*">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="reset" class="btn btn-dark m-2">Очистить</button>
                        <button type="submit" class="btn btn-primary m-2">Отправить</button>
                    </div>
                </form>
            </div>
        </div>



    </section>
</div>

@endsection

@section('scripts')

@endsection