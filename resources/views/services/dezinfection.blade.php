@extends('layout')

@section('title', 'Дезинфекция - Уничтожение микробов, плесени')

@section('content')
<div class="content">

    <section class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item"><a href="/services">Услуги</a></li>
                <li class="breadcrumb-item active" aria-current="page">Дезинфекция</li>
            </ol>
        </nav>

        <div class="d-flex flex-column py-5">
            <h1 class="header align-self-center" data-aos="flip-left" >Дезинфекция</h1>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 py-lg-5" data-aos="zoom-in-right">
                <picture>
                    <img srcset="/img/content/dezinfect.jpg" class="d-block img-fluid mx-auto">
                </picture>
            </div>
            <div class="col-12 col-lg-8 p-5 d-flex flex-column justify-content-center" data-aos="zoom-in-left">
                <p></p>
            </div>
            <div class="col-12">

                <h2 class="subheader w-100 text-center" data-aos="flip-left" ></h2>

                <div class="text-center w-100">
                    <a class="btn btn-primary btn-pulse text-uppercase my-3" href="#"  data-toggle="modal" data-target="#callModal" data-type="Услуги - Дезинфекция" >Заказать дезинфекцию</a>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('scripts')

@endsection