@extends('templates.doctypeHtml')


@section('title')Тренировки@endsection

@section('content')
    <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a
                class="nav-link active text-black"
                id="ex3-tab-1"
                data-toggle="tab"
                href="#ex3-tabs-1"
                role="tab"
                aria-controls="ex3-tabs-1"
                aria-selected="true"
            >Создать тренировку</a>
        </li>
        <li class="nav-item" role="presentation">
            <a
                class="nav-link text-black"
                id="ex3-tab-2"
                data-toggle="tab"
                href="#ex3-tabs-2"
                role="tab"
                aria-controls="ex3-tabs-2"
                aria-selected="false"
            >Ваши шаблоны тренировок</a>
        </li>
        <li class="nav-item" role="presentation">
            <a
                class="nav-link text-black"
                id="ex3-tab-3"
                data-toggle="tab"
                href="#ex3-tabs-3"
                role="tab"
                aria-controls="ex3-tabs-3"
                aria-selected="false"
            >История тренировок</a>
        </li>
    </ul>

    <div class="tab-content" id="ex2-content">
        <div
            class="tab-pane fade show active"
            id="ex3-tabs-1"
            role="tabpanel"
            aria-labelledby="ex3-tab-1"
        >

{{--            <div class="container-fluid mt-5">--}}
{{--                <form class="form-inline">--}}

{{--                        <label class="sr-only">Название тренировки</label>--}}
{{--                        <input name="text" class="form-control-sm">--}}

{{--                        <label class="sr-only ms-3">кол-во подходов</label>--}}
{{--                        <input class="form-control-sm" id="counter-label" value="0">--}}
{{--                        <button class="btn btn-outline-dark" type="button" onclick="incrementClick()">+</button>--}}
{{--                        <button class="btn btn-outline-dark" type="button" onclick="resetCounter()">-</button>--}}

{{--                        <label class="sr-only ms-3">кол-во повторений</label>--}}
{{--                        <input class="form-control-sm" id="counter-label" value="0">--}}

{{--                        <button class="btn btn-outline-dark" type="button" onclick="incrementClick()">+</button>--}}
{{--                        <button class="btn btn-outline-dark" type="button" onclick="resetCounter()">-</button>--}}

{{--                        <button class="btn btn-dark ms-3" type="submit">Добавить тренировку</button>--}}


{{--                </form>--}}
{{--            </div>--}}

            <div class="container">
            <div class="row">
                <div class="col mt-5">

                    <form>

                        <div class="container p-2">
                        <input name="text" class="form-control" placeholder="Название тренировки">
                        </div>

                        <div class="container mt-2">
                        <label class="sr-only">кол-во подходов</label>
                        </div>
                        <div class="container p-2">
                        <input class="form-control-sm" id="counter-label" value="0">
                        <button class="btn btn-outline-dark" type="button" onclick="incrementClick()">+</button>
                        <button class="btn btn-outline-dark" type="button" onclick="resetCounter()">-</button>
                        </div>

                        <div class="container mt-2">
                            <label class="sr-only ">кол-во повторений</label>
                        </div>
                        <div class="container p-2">
                            <input class="form-control-sm" id="counter-label2" value="0">
                            <button class="btn btn-outline-dark" type="button" onclick="incrementClick2()">+</button>
                            <button class="btn btn-outline-dark" type="button" onclick="resetCounter2()">-</button>
                        </div>

                        <div class="container p-2">
                            <button class="btn btn-dark" type="submit">Создать тренировку</button>
                        </div>
                    </form>

                </div>


                <div class="col">

                    <form class="form-inline">
                        <label class="sr-only">Название тренировки</label>
                        <input name="text" class="form-control-sm">

                        <label class="sr-only ms-3">кол-во подходов</label>
                        <input class="form-control-sm" id="counter-label" value="0">
                        <button class="btn btn-outline-dark" type="button" onclick="incrementClick()">+</button>
                        <button class="btn btn-outline-dark" type="button" onclick="resetCounter()">-</button>

                        <label class="sr-only ms-3">кол-во повторений</label>
                        <input class="form-control-sm" id="counter-label" value="0">

                        <button class="btn btn-outline-dark" type="button" onclick="incrementClick()">+</button>
                        <button class="btn btn-outline-dark" type="button" onclick="resetCounter()">-</button>

                        <button class="btn btn-dark ms-3" type="submit">Добавить тренировку</button>
                    </form>

                </div>
            </div>
            </div>

        </div>
        <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
            Tab 2 content Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, doloremque
            minima mollitia sapiente illo ut harum fugit explicabo error perspiciatis at cumque nisi eaque
            commodi culpa est sed ad amet.
        </div>
        <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
            Tab 3 content Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, doloremque
            minima mollitia sapiente illo ut harum fugit explicabo error perspiciatis at cumque nisi eaque
            commodi culpa est sed ad amet.
        </div>
    </div>
@endsection

<script src="js/tabe.js"></script>


