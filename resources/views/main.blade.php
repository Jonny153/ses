@extends('layout')

@section('title', 'Дезинсекция, дератизация, дезинфекция, дезодорация')

@section('content')
<div class="content">
    <section id="heading">
        <picture>
            <source srcset="/img/content/xl/main_top.jpg" media="(min-width: 1400px)">
            <source srcset="/img/content/lg/main_top.jpg" media="(min-width: 769px)">
            <source srcset="/img/content/md/main_top.jpg" media="(min-width: 577px)">
            <img srcset="/img/content/sm/main_top.jpg" alt="responsive image" class="d-block img-fluid">
        </picture>
        <div class="capture">
            <div class="container d-flex flex-column justify-content-center h-75">
                <h1 class="text-uppercase font-weight-bold ml-4" data-aos="zoom-in">Санитарно-<br>эпидемиологическая <br>служба</h1>
            </div>
            <div class="container-fluid top-stripe bg-primary">
                <div class="container">
                    <h2 class="ml-4 py-4" data-aos-delay="600" data-aos="fade-right">Уничтожение насекомых, грызунов,<br> неприятых запахов с гарантией</h2>
                </div>

            </div>
        </div>
        <div class="capture-top">
            <div class="container w-100 h-100 d-flex justify-content-end">
                <picture class="w-50 align-self-end" data-aos="fade-up">
                    <source srcset="/img/content/xl/face.png" media="(min-width: 1600px)">
                    <source srcset="/img/content/md/face.png" media="(min-width: 767px)">
                    <img srcset="/img/content/sm/face.png" alt="responsive image" class="d-block img-fluid">
                </picture>
            </div>

        </div>
    </section>

    <section id="services" class="mt-5">
        <div class="container">
            <div class="d-flex flex-column py-5">
                <h2 class="header align-self-center" data-aos="flip-left">Наши услуги</h2>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 p-4 mh-100">
                    <div class="row service-block h-100 d-flex">
                        <div class="col-12 col-lg-6 bg-light pl-3 pr-0">
                            <a href="/">
                            <picture class="float-right float-lg-none">
                                <img srcset="/img/content/dezinsect.jpg" alt="responsive image" data-aos="fade-up" class="d-block img-fluid">
                            </picture></a>
                        </div>
                        <div class="col-12 col-lg-6 p-3" data-aos="fade-left">
                            <h3 class="mb-4">Дезинсекция</h3>
                            <p class="lead">Уничтожение насекомых</p>
                            <p>тараканов, клопов, блох,
                                клещей, гусениц, тли,
                                пауков, мокриц, мух,
                                комаров, шерней, ос,
                                муравьев, всех бытовых
                                насекомых и вредителей
                                растительности</p>
                        </div>
                        <div class="col-12 bg-light mt-2 align-self-end" data-aos="flip-up" data-aos-delay="800">
                            <a class="btn btn-primary float-lg-right m-3">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-4 mh-100">
                    <div class="row service-block h-100 d-flex">
                        <div class="col-12 col-lg-6 bg-light pl-3 pr-0">
                            <a href="/">
                                <picture class="">
                                    <img srcset="/img/content/derat.jpg" alt="responsive image" data-aos="fade-up" class="d-block img-fluid">
                                </picture></a>
                        </div>
                        <div class="col-12 col-lg-6 p-3" data-aos="fade-left">
                            <h3 class="mb-4">Дератизация</h3>
                            <p class="lead">Уничтожение грызунов</p>
                            <p>мышей, крыс, кротов,
                                сусликов, полевок</p>
                        </div>
                        <div class="col-12 bg-light mt-2 align-self-end" data-aos="flip-up" data-aos-delay="800">
                            <a class="btn btn-primary float-lg-right m-3">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 p-4 mh-100">
                    <div class="row service-block h-100 d-flex">
                        <div class="col-12 col-lg-6 bg-light pl-3 pr-0">
                            <a href="/">
                                <picture class="float-right float-lg-none">
                                    <img srcset="/img/content/dezinfect.jpg" alt="responsive image" data-aos="fade-up" class="d-block img-fluid">
                                </picture></a>
                        </div>
                        <div class="col-12 col-lg-6 p-3" data-aos="fade-left">
                            <h3 class="mb-4">Дезинфекция</h3>
                            <p class="lead">Уничтожение микробов</p>
                            <p>уничтожение грибка,
                                плесени, вирусов,
                                инфекции</p>
                        </div>
                        <div class="col-12 bg-light mt-2 align-self-end" data-aos="flip-up" data-aos-delay="800">
                            <a class="btn btn-primary float-lg-right m-3">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 p-4 mh-100">
                    <div class="row service-block h-100 d-flex">
                        <div class="col-12 col-lg-6 bg-light pl-3 pr-0">
                            <a href="/">
                                <picture class="">
                                    <img srcset="/img/content/dezodor.jpg" alt="responsive image" data-aos="fade-up" class="d-block img-fluid">
                                </picture></a>
                        </div>
                        <div class="col-12 col-lg-6 p-3" data-aos="fade-left">
                            <h3 class="mb-4">Дезодорация</h3>
                            <p class="lead">Устранение  различных
                                неприятных запахов</p>
                            <p>сырости, гнили, мочи
                                животных, трупный запах,
                                въевшиеся запахи табака.
                                В квартирах, автомобилях,
                                подвальных, и подсобных
                                помещениях</p>
                        </div>
                        <div class="col-12 bg-light mt-2 align-self-end" data-aos="flip-up" data-aos-delay="800">
                            <a class="btn btn-primary float-lg-right m-3">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </section>

    <section id="advantages" class="mt-5">
        <picture>
            <source srcset="/img/content/xl/main_adv.jpg" media="(min-width: 1400px)">
            <source srcset="/img/content/lg/main_adv.jpg" media="(min-width: 992px)">
            <source srcset="/img/content/md/main_adv.jpg" media="(min-width: 560px)">
            <img srcset="/img/content/sm/main_adv.jpg" alt="responsive image" class="d-block img-fluid">
        </picture>
        <div class="capture d-flex flex-column justify-content-around">
            <div class="d-flex flex-column py-5">
                <h2 class="header header-inv align-self-center" data-aos="flip-left" >Наши преимущества</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3 p-2" data-aos="zoom-in-right">
                        <picture>
                            <img srcset="/img/icons/icon1.png" class="d-block img-fluid mx-auto adv-icon">
                        </picture>
                        <h4 class="text-uppercase text-center my-3">Мобильность</h4>
                        <p class="text-center">Выезд в любое удобное для вас время</p>
                    </div>
                    <div class="col-6 col-lg-3 p-2" data-aos="zoom-in-left">
                        <picture>
                            <img srcset="/img/icons/icon2.png" class="d-block img-fluid mx-auto adv-icon">
                        </picture>
                        <h4 class="text-uppercase text-center my-3">Скидки</h4>
                        <p class="text-center">Скидки для инвалидов и пенсионеров</p>
                    </div>
                    <div class="col-6 col-lg-3 p-2" data-aos="zoom-in-right">
                        <picture>
                            <img srcset="/img/icons/icon3.png" class="d-block img-fluid mx-auto adv-icon">
                        </picture>
                        <h4 class="text-uppercase text-center my-3">24 часа</h4>
                        <p class="text-center">Работаем круглосуточно</p>
                    </div>
                    <div class="col-6 col-lg-3 p-2" data-aos="zoom-in-left">
                        <picture>
                            <img srcset="/img/icons/icon4.png" class="d-block img-fluid mx-auto adv-icon">
                        </picture>
                        <h4 class="text-uppercase text-center my-3">Безопасность</h4>
                        <p class="text-center">Только качественные и безопасные препараты</p>
                    </div>
                </div>


            </div>
            <div class="text-center w-100">
                <a class="btn btn-dark text-uppercase my-3" href="#"  data-toggle="modal" data-target="#callModal" data-type="Главная - наши преимущества" >Заказать звонок</a>
            </div>
        </div>
    </section>

    <section id="about" class="container">

        <div class="d-flex flex-column py-5">
            <h2 class="header align-self-center" data-aos="flip-left" >О нас</h2>
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


    <section id="advice">
        <div class="container">

            <div class="d-flex flex-column py-3 py-lg-5">
                <h2 class="header align-self-center" data-aos="flip-left">Полезные советы</h2>
            </div>
            <div id="carousel" class="carousel slide my-4" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="h-100 d-flex flex-column justify-content-around px-5">
                            <h3 class="align-self-end">Тараканы на кухне?</h3>
                            <p class="lead">- Проверьте на наличие сетки вытяжек вашего помещения<br>
                                - Всегда протирайте поверхность от влаги и мусора<br>
                                - Соблюдайте чистоту по всей квартире, особенно на кухне и ванной</p>
                            <div class="text-center w-100">
                                <a class="btn btn-primary text-uppercase my-3" href="#"  data-toggle="modal" data-target="#callModal" data-type="Главная - полезные советы" >Заказать дезинсекцию</a>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="h-100 d-flex flex-column justify-content-around px-5">
                            <h3 class="align-self-end">Клопы в квартире?</h3>
                            <p class="lead">
                                - В летнее время всегда устанавливайте москитные сетки на окнах<br>
                                - Покупая мебель, осмотрите ее на наличие насекомых<br>
                                - Осматривайте ваших питомцев после прогулки на улице</p>
                            <div class="text-center w-100">
                                <a class="btn btn-primary text-uppercase my-3" href="#"  data-toggle="modal" data-target="#callModal" data-type="Главная - полезные советы" >Заказать дезинсекцию</a>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev justify-content-start" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next justify-content-end" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="contacts" class="container">
        <div class="d-flex flex-column py-5">
            <h2 class="header align-self-center" data-aos="flip-left">Контакты</h2>
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
                    <a class="tel tel-black mr-5" href="tel:+79637387434">+7-963-738-7434</a>
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
            <div class="col text-center">
                <a class="btn btn-dark text-uppercase my-3" href="#" data-toggle="modal" data-target="#callModal" data-type="Главная - контакты" >Заказать звонок</a>
            </div>
        </div>
    </section>
</div>

@endsection

@section('scripts')

@endsection