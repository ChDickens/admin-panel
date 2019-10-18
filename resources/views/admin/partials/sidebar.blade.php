<div class="accordion" id="accordionExample">
    <div class="menu-item">
        <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Страницы
                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('page.index') }}">Все страницы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('page.create') }}">Создать страницу</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu-item">
        <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Посты
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.index') }}">Все посты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('post.create') }}">Создать пост</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu-item">
        <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    Навигация
                </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu.index') }}">Пункты меню</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('menu.create') }}">Создать пункт</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu-item">
        <div class="card-header" id="headingFour">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    Клиенты
                </button>
            </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index') }}">Все клиенты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.create') }}">Создать клиента</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu-item">
        <div class="card-header" id="headingFive">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    Категории
                </button>
            </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index') }}">Все категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.create') }}">Создать категорию</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="menu-item">
        <div class="card-header" id="headingSix">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    Email
                </button>
            </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index') }}">Все emails</a>
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="{{ route('customer.create') }}">Создать категорию</a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
    <div class="menu-item">
        <div class="card-header" id="headingSeven">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    Настройки
                </button>
            </h2>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.index') }}">Все настройки</a>
                </li>
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('customer.create') }}">Создать категорию</a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </div>
</div>