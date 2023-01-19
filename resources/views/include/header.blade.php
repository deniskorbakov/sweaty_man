<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
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
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('authorization')}}">Авторизоваться</a></li>
                    @endguest

                    @auth
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('userAccount')}}">Кабинет</a></li>
                        <form method="post" action="{{route('exit')}}">
                            @csrf
                            <li class="nav-item"><a class="nav-link active" onclick="event.preventDefault(); this.closest('form').submit();" aria-current="page" href="{{route('exit')}}">Выйти с аккаунта</a></li>
                        </form>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
