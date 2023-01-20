@extends('templates.doctypeHtml')


@section('title')Кабинет пользователя@endsection

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">Форма для сброса пароля</h2>

        <form class="container mt-5" action="{{route('forgotPass')}}" method="post">
            @csrf

            <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control" placeholder="Введите вашу почту">
            </div>
            @error('email')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-secondary btn-block mb-4">Отправить</button>
        </form>
    </div>
@endsection






