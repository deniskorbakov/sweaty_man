@extends('templates.doctypeHtml')

@section('title'){{$data->userName}}@endsection

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Все отзывы</h1>
        <div class="container mt-5">
                <div class="alert alert-secondary mt-5">
                    <h4>Автор: {{$data->userName}}</h4>
                    <p>{{$data->userText}}</p>
                    <p><small>дата публикации: {{$data->created_at}}</small></p>
                    <a href="{{route('reviews-show', $data->id)}}" class="btn btn-secondary">Перейти</a>
                </div>
        </div>
    </div>
@endsection

