@extends('layout')

@section('title', 'О компании')

@section('content')
<div class="content">

    <section class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">О компании</li>
            </ol>
        </nav>

        <div class="d-flex flex-column py-5">
            <h1 class="header align-self-center" data-aos="flip-left" >О компании</h1>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4 py-lg-5" data-aos="zoom-in-right">
                <picture>
                    <img srcset="/img/content/about.png" class="d-block img-fluid mx-auto">
                </picture>
            </div>
            <div class="col-12 col-lg-8 p-5" data-aos="zoom-in-left">
                <p>Профессиональное обеспечение санитарных норм, забота
                    о сохранности имущества и здоровье наших клиентов.</p>

                <p>Индивидуальное изучение особенностей объекта для комплексного решения
                    санитарно-эпидемиологических проблем; постоянное изучение и привлечение
                    опыта передовых зарубежных и отечественных компаний в сфере дезуслуг;
                    привлечение квалифицированных специалистов с постоянным повышением их
                    профессионализма путем освоения новых технологий.</p>

                <p>Высокое качество работ, гарантийное обслуживание, гибкая ценовая политика
                    привели к успешному многолетнему сотрудничеству со многими предприятиями
                    общественного питания, пищевой промышленности, а так же, агропромышленного
                    комплекса и др.</p>
            </div>

        </div>
    </section>
</div>

@endsection

@section('scripts')

@endsection