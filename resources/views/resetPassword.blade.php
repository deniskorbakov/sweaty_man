@extends('templates.doctypeHtml')


@section('title')Кабинет пользователя@endsection

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">Форма для сброса пароля</h2>

        <form class="container mt-5" action="{{route('resetPass')}}" method="post">
            @csrf

            <input type="hidden" name="token" value="{{$request->token}}">

            <div class="form-outline mb-4">
                <input type="email" name="email" class="form-control" value="{{old('email', $request->email )}}" placeholder="Введите почту">
                @error('email')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" placeholder="Введите Пароль">
                @error('password')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-secondary btn-block mb-4">Отправить</button>
        </form>
    </div>
@endsection






