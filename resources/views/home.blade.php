@extends('templates.doctypeHtml')

@section('title')Главная страница@endsection


@section('content')
    <div class="container-fluid" id="background">
        <div class="container">
            <img class="img-thumbnail mt-4" src="img/6460371.jpg" width="970px" height="500px">
        </div>

        <div class="container mt-4 p-3 text-white">
            <h1>SWEATY MAN FOR EVERYONE</h1>
            <h4>Do you like watching me ?</h4>
        </div>
    </div>


    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4 text-white bg-dark border border-white text-center">Бицепс хорошо, а голова все равно надо.</div>
            <div class="col-md-4 text-white bg-dark border border-white text-center">Лучше гантеля в руке, чем штангой по ноге.</div>
            <div class="col-md-4 text-white bg-dark border border-white text-center">Кто раньше пришел, того и штанга.</div>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="text-center">Джонсон, Дуэйн</h1>
        <p class="lead text-center mt-5">
            Я понял, что во время депрессии очень важно помнить, что ты не один. Не ты первый, не ты последний, но зачастую это все же происходит.
            Ты чувствуешь себя так, словно ты один и кажется, что больше никого нет и ты сам по себе. И жаль, что в своё время у меня не было никого кто...
            кто отвел бы меня в сторонку и сказал: «Всё будет хорошо, всё будет хорошо». Жаль, что тогда я этого не знал.
            Просто не забывайте, не забывайте основопологающее понятие веры — не теряйте веру. И когда пройдет боль, произойдет что-то хорошее.
        </p>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <img src="img/content.jpg" class="img-thumbnail">
            </div>

            <div class="col-md-6">
                <figure class="text-senter mt-5">
                    <blockquote class="blockquote">
                        <p>
                            Когда я подтягиваюсь, то никогда не делаю это слишком быстро -
                            наоборот, про себя считаю так, чтобы 5 секунд у меня занимал путь вверх и 5 секунд путь вниз. От этого эффект куда сильнее.
                        </p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Дуэйн Джонсон Скала
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
@endsection

@section('background-js')
    <script src="js/three.min.js"></script>
    <script src="js/vanta.net.min.js"></script>
    <script src="js/app.js"></script>
@endsection


