<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/img/favicon.svg" alt="" width="30" height="24">
        </a>
        <a class="navbar-brand" href="#">SWEATY MAN FOR EVERYONE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Контактная форма</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('reviews')}}">Оставить отзыв</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('reviews-data')}}">Посмотреть отзывы</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
