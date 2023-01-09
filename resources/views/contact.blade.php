@extends('templates.doctypeHtml')

@section('title')Контактная страница@endsection

@section('content')
<div class="container">
    <h2 class="text-center mt-5">Контактное обращение</h2>
    @if($errors->any())
    <div class="container alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="container mt-5" action="{{route('contact-submit')}}" method="post">
        <!-- secret key-->
        @csrf
        <!-- Name input -->
        <div class="form-outline mb-4">
            <input type="text" name="userName" class="form-control" />
            <label class="form-label">Введите Имя</label>
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" name="userEmail" class="form-control" />
            <label class="form-label">Введите почту</label>
        </div>

        <!-- Message input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" name="userText" rows="4"></textarea>
            <label class="form-label">Введите сообщение</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-secondary btn-block mb-4">Отправить</button>
    </form>
</div>
@endsection

