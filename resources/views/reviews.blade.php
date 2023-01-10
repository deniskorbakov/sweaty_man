@extends('templates.doctypeHtml')

@section('title')Оставить отзыв@endsection

@section('content')
    <div class="container">
        <h2 class="text-center mt-5">Форма для отправки отзыва</h2>
        @if($errors->any())
            <div class="container alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="container mt-5" action="{{route('reviews-submit')}}" method="post">
            <!-- secret key-->
        @csrf
        <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" name="userName" class="form-control" placeholder="Введите ваше имя">
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" name="userText" placeholder="Введите текст"></textarea>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-secondary btn-block mb-4">Отправить</button>
        </form>
    </div>
@endsection

