@extends('templates.doctypeHtml')


@section('title')Кабинет пользователя@endsection

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">Форма Подтверждения пароля</h2>

        <form class="container-fluid text-center mt-5 " action="{{route('verification.send')}}" method="post">

            @csrf
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
            @endif
            <button type="submit" class="btn btn-secondary btn-block mb-4">Отправить письмо повторно</button>
        </form>
    </div>
@endsection






