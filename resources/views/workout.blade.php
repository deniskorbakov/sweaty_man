@extends('templates.doctypeHtml')


@section('title')Тренировки@endsection

@section('content')
            <div class="container">
                <div class="row">
                    <div class="col mt-5">
                            <div class="container p-2">
                                <input type="text" name="name"  class="form-control i-1" placeholder="Название тренировки" id="name-workout">
                            </div>

                            <div class="container mt-2">
                                <label class="sr-only">кол-во подходов</label>
                            </div>
                            <div class="container p-2">
                                <input class="form-control-sm i-2" name="approach"  id="counter-label" value="0">
                                <button class="btn btn-outline-dark" type="button" onclick="incrementClick()">+</button>
                                <button class="btn btn-outline-dark" type="button" onclick="resetCounter()">-</button>
                            </div>

                            <div class="container mt-2">
                                <label class="sr-only ">кол-во повторений</label>
                            </div>
                            <div class="container p-2">
                                <input class="form-control-sm i-3" name="repetition"  id="counter-label2" value="0">
                                <button class="btn btn-outline-dark" type="button" onclick="incrementClick2()">+</button>
                                <button class="btn btn-outline-dark" type="button" onclick="resetCounter2()">-</button>
                            </div>

                            <div class="container mt-2">
                                <label class="sr-only ">Вес снаряда</label>
                            </div>
                            <div class="container p-2">
                                <input class="form-control-sm i-4" name="projectileWeight"  id="counter-label3" value="0">
                                <button class="btn btn-outline-dark" type="button" onclick="incrementClick3()">+</button>
                                <button class="btn btn-outline-dark" type="button" onclick="resetCounter3()">-</button>
                            </div>

                            <div class="container-fluid p-2">
                                <button class="btn btn-dark b-1" type="button" onclick="showWorkout()">Создать тренировку</button>
                            </div>
                    </div>


                    <div class="col mt-5">
                        <ul class="list-group mb-3" id="col-2">

                        </ul>
                    </div>
                </div>
            </div>
@endsection

<script src="js/tabe.js"></script>
<script src="js/SendBd.js"></script>


