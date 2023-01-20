@extends('templates.doctypeHtml')


@section('title')Авторизация@endsection

@section('link')<link rel="stylesheet" href="/css/aut.css">@endsection

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
                            <form action="{{route('register-store')}}" method="post">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input name="loginReg" type="text"  class="form-control"  value="{{old('loginReg')}}" placeholder="Введите логин">
                                    @error('loginReg')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input name="emailReg" type="email" class="form-control" value="{{old('emailReg')}}" placeholder="Введите почту">
                                    @error('emailReg')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror

                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input name="passwordReg" type="password" class="form-control" value="{{old('passwordReg')}}" placeholder="Введите пароль">
                                    @error('passwordReg')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
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
                                <form action="{{route('login-store')}}" method="post">
                                    @csrf
                                    @if(session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('status')}}
                                        </div>
                                    @endif
                                    <div class="form-outline mb-4">
                                        <input name="email" type="email" class="form-control" value="{{old('email')}}" placeholder="Введите почту">
                                        @error('email')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input name="password" type="password" class="form-control" value="{{old('password')}}" placeholder="Введите пароль">
                                        @error('password')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="true" name="checkbox" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Запомнить данные
                                        </label>
                                    </div>

                                    <div class="modal-footer">
                                        <a class="btn btn-danger" href="{{route('forgotPassword')}}">Сброс пароля</a>
                                        <button type="submit" class="btn btn-secondary">Войти</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>




@endsection

