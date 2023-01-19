@extends('templates.doctypeHtml')


@section('title')О нас@endsection

@section('content')


    <div class="intro">
        <div class="video">
            <video class="video__media" src="/video/video3.mp4" muted="muted" autoplay="autoplay" loop></video>
        </div>

        <div class="intro__content">
            <div class="container">
                <h1 class="intro__title">Нам не нужно быть совершенными… нам просто нужно начать</h1>
            </div>
        </div>
    </div>

    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
        .background-radial-gradient {
            background-color: hsl(180, 1%, 22%);
            background-image: radial-gradient(650px circle at 0% 0%,
            hsl(210, 1%, 28%) 15%,
            hsl(240, 1%, 36%) 35%,
            hsl(240, 1%, 35%) 75%,
            hsl(240, 1%, 32%) 80%,
            transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(240, 1%, 33%) 15%,
                hsl(220, 2%, 33%) 35%,
                hsl(225, 2%, 40%) 75%,
                hsl(240, 1%, 28%) 80%,
                transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#3f3e3f, #b4b2b6);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#494949, #9f9da1);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Начни сейчас<br />
                        <span style="color: hsl(0,3%,11%)">завтра может быть уже поздно</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(0,33%,98%)">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Temporibus, expedita iusto veniam atque, magni tempora mollitia
                        dolorum consequatur nulla, neque debitis eos reprehenderit quasi
                        ab ipsum nisi dolorem modi. Quos?
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <ul>
                                @foreach($errors->all() as $message)
                                    <li>{{$message}}</li>
                                @endforeach
                            </ul>
                            <form action="{{route('register-store')}}" method="post">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input name="loginReg" type="text" class="form-control" placeholder="Введите логин">
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input name="emailReg" type="email" class="form-control" placeholder="Введите почту">

                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input name="passwordReg" type="password" class="form-control" placeholder="Введите пароль">
                                </div>

                                <div class="text-center">
                                   <button class="btn btn-outline-secondary" type="submit">Зарегистрироваться</button>
                                </div>

                                <hr class="hr" />
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Кнопка-триггер модального окна -->
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Войти
                </button>

                <!-- Модальное окно -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Войти в аккаунт</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-outline mb-4">
                                        <input name="loginAut" type="text" class="form-control" placeholder="Введите логин">
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input name="passwordAut" type="password" class="form-control" placeholder="Введите пароль">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Вернуться назад</a>
                                <button type="submit" class="btn btn-secondary">Войти</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>




@endsection

