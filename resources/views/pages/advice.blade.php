@extends('layout')

@section('title', 'Полезные советы')

@section('content')
<div class="content">

    <section class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Полезные советы</li>
            </ol>
        </nav>

        <div class="d-flex flex-column py-5">
            <h1 class="header align-self-center" data-aos="flip-left" >Полезные советы</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-cockroach-list" data-toggle="list" href="#list-cockroach" role="tab" aria-controls="cockroach">Тараканы</a>
                    <a class="list-group-item list-group-item-action" id="list-bedbug-list" data-toggle="list" href="#list-bedbug" role="tab" aria-controls="bedbug">Клопы</a>
                    <a class="list-group-item list-group-item-action" id="list-ant-list" data-toggle="list" href="#list-ant" role="tab" aria-controls="ant">Муравьи</a>
                    <a class="list-group-item list-group-item-action" id="list-mouse-list" data-toggle="list" href="#list-mouse" role="tab" aria-controls="mouse">Мыши и крысы</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-cockroach" role="tabpanel" aria-labelledby="list-cockroach-list">
                        <p>Тараканы обладают достаточно сильной иммунной системой, а так же умеют очень быстро
                        приспосабливаться к изменениям окружающей среды, температурным колебаниям, химикатам,
                        ядам и любым другим средствам борьбы с ними. При желании самостоятельно избавить дом
                        от этой живности, в первую очередь, необходимо запастись терпением и свыкнуться с мыслью,
                        что периодически необходимо будет менять яд или химикат для профилактической борьбы
                        с этими жителями. Поскольку исчезнув на время, к вам могут прийти тараканы соседей
                        или случайно-залетные, тем самым эта борьба может длиться до бесконечности.
                        После продолжительных и изнурительных самостоятельных действий, многие
                        приходят к выводу что проще и дешевле обратиться компанию,
                        которая специализируется на уничтожении тараканов. Звоните нам по телефону
                            <a class="tel tel-black" href="tel:{{$contacts['phone']}}">{{$contacts['phoneFormatted']}}</a>
                        и наши специалисты навсегда избавят вас от проблем с тараканами
                        </p>
                        <p class="lead">На сегодняшний день существует несколько методов как избавиться от тараканов, вот некоторые из них:</p>
                        <p><strong>Специальные ловушки с липучками от тараканов</strong><br>
                            Данный метод позволяет безопасно для человека и домашних питомцев устанавливать
                            специальные ловушки с специфическим, привлекающим тараканов запахом и клейкой основой.
                            Данный метод малоэффективен при большой популяции тараканов. Его часто используют
                            в качестве профилактических мер и при незначительном наличии этих насекомых в доме.</p>
                        <p><strong>Аэрозольная обработка от тараканов</strong><br>
                            В данном случае используются препараты с высоким активным действием.
                            Перед тем, как приступить непосредственно к процессу обработки, помещение подготавливают
                            и обустраивают специальными установками, которые нагнетают препарат в пространство,
                            превращая его в пылеобразную массу. Такой подход позволяет препарату проникнуть в самые
                            труднодоступные места и сохраняться там, чтобы уничтожать тараканов длительное время.
                            Также к данному методу можно отнести специальные баллончики с сжатым воздухом и
                            сильнодействующим веществом, которые продаются в свободном доступе и рассчитаны на
                            бытовое применение.</p>
                        <p><strong>Гелиевая обработка от тараканов</strong><br>
                            Данный метод предусматривает применение препаратов на гелиевой основе,
                            которые намазываются в предположительных местах повышенной активности насекомых.
                            Тараканы съедают приманку и несут препарат в свои норки, где умирают сами и уничтожают
                            всю колонию своих сородичей. Для достижения быстрого и качественного эффекта,
                            при данном методе, необходимо обрабатывать все помещения где были замечены тараканы.
                            К тому же, стоит проследить что бы места обработки были недоступны для ваших домашних
                            питомцев. Такой метод позволяет избавиться от тараканов на длительный срок.</p>
                        <p class="lead">При уничтожении тараканов необходимо придерживаться нескольких простых правил:</p>
                        <ul>
                            <li>закрыть окна, отключить вытяжки и исключить сквозняк в помещении;</li>
                            <li>убрать все продукты питания с открытого доступа;</li>
                            <li>все предметы личной гигиены, а также посуду упаковать в герметичные полиэтиленовые пакеты;</li>
                            <li>оставить отрытыми всю внутреннюю мебель в помещении;</li>
                            <li>предупредить всех членов семьи про обработку помещения от тараканов.</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="list-bedbug" role="tabpanel" aria-labelledby="list-bedbug-list">Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa commodo veniam incididunt veniam ad.</div>
                    <div class="tab-pane fade" id="list-ant" role="tabpanel" aria-labelledby="list-ant-list">Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt. Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.</div>
                    <div class="tab-pane fade" id="list-mouse" role="tabpanel" aria-labelledby="list-mouse-list">Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.</div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('scripts')

@endsection