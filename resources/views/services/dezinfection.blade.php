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
                <p>Дезинфекция позволяет снизить концентрацию патогенных микроорганизмов и вирусов до безопасных
                    значений. Большое содержание вирусов и микроорганизмов делает заражение почти неизбежным.
                    Обработка инвентаря и помещений должна проводиться регулярно в процессе деятельности организации.
                </p>
                    Периодичность и содержание мероприятий по обеззараживанию определяются спецификой организации
                    и внешней обстановкой. Так, во многих случаях бывает достаточно регулярной уборки с применением
                    чистящих средств, а также соблюдения норм гигиены.</p>
            </div>
            <div class="col-12">

                <h2 class="subheader w-100 text-center" data-aos="flip-left" >Дезинфекция предприятий</h2>

                <p>Дезинфекция предприятий часто является необходимым условием деятельности организации.
                    Различные службы проводят регулярные проверки. Если по их результатам выявляются вирусы или
                    патогенные микроорганизмы, компания штрафуется. В самых серьезных случаях деятельность
                    предприятия приостанавливается.</p>

                <p>Мероприятия по обеззараживанию регламентируются рядом нормативных документов.
                    Для профилактической обработки закупается подходящее оборудование и препараты, нанимается
                    персонал соответствующей квалификации. Внеплановая обработка требует значительных ресурсов,
                    поэтому ее целесообразно поручать сторонним организациям. Компания «СЭС-life» имеет все необходимое
                    оснащение для проведения качественной дезинфекции любых помещений и территорий.</p>

                <h2 class="subheader w-100 text-center" data-aos="flip-left" >Методы обеззараживания</h2>

                <p>Для обеззараживания оборудования, помещений и территории санитарно-эпидемиологическая служба «СЭС-life»
                    применяет следующие методы:</p>
                <p>
                <ul>
                    <li>механические. Удаляются объекты, содержащие вирусы и опасные микроорганизмы.
                        Такими объектами могут быть трупы животных, грунт, некоторые предметы обстановки и пр.;</li>
                    <li>физические. Вирусы и микроорганизмы уничтожаются высокой температурой, озоном,
                        ультрафиолетовым излучением;</li>
                    <li>химические. Для обработки применяются антисептики и другие вещества.
                        Препараты разбрызгиваются (распыляются) по всем поверхностям в помещении;</li>
                    <li>комбинированные. Они представляют собой сочетание нескольких или всех методов обработки.
                        Ни один способ по отдельности не лишен недостатков, поэтому не может считаться универсальным.
                        Последовательное сочетание нескольких методов позволяет довести эффективность обеззараживания до максимальных значений.</li>
                </ul>
                </p>
                <h2 class="subheader w-100 text-center" data-aos="flip-left" >Дезинфекция в Новороссийске, Геленджике, Анапе</h2>

                <p><a href="/" class="text">Дезинфекция в Новороссийске, Геленджике, Анапе</a> от компании «СЭС-life» проводится с использованием
                    современных эффективных препаратов и оборудования.</p>

                <p>Цена дезинфекции определяется площадью и способом обработки. Окончательная цена может быть
                    определена только после осмотра территории нашим сотрудником.</p>

                <p>Мы стараемся решать задачу комплексно. В процессе обеззараживания наши специалисты стремятся
                    ликвидировать первопричину проблемы. Поэтому в отдельных случаях могут потребоваться
                    дополнительные виды обработки, например, услуги <a href="/services/deratization" class="text">дератизации</a>
                    или <a href="/services/dezinsection" class="text">дезинсекции</a>.</p>

                <p>Наши сотрудники прошли специальную подготовку и имеют большой профессиональный опыт.
                    Профессиональное решение проблемы дезинфекции — просто с компанией «СЭС-life». Звоните <a class="tel tel-black text-nowrap" href="tel:{{$contacts['phone']}}">{{$contacts['phoneFormatted']}}</a>!</p>

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