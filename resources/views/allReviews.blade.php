@extends('templates.doctypeHtml')

@section('title')Посмотреть все отзывы@endsection

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Все отзывы</h1>
        <div class="container mt-5">
            @foreach($data as $value)
                <div class="alert alert-secondary mt-5">
                    <h4>Автор: {{$value->userName}}</h4>
                    <p><small>дата публикации: {{$value->created_at}}</small></p>
                    <a href="{{route('reviews-show', $value->id)}}" class="btn btn-secondary">Перейти</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

