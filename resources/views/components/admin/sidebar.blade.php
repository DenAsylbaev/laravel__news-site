<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('admin.index')) active @endif" aria-current="page" href="{{ route('admin.index') }}">
                    <span data-feather="home"></span>
                    Панель управления
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.categories.index')) active @endif" href="{{ route('admin.categories.index') }}">
                    <span data-feather="file"></span>
                    Категории
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.news.index')) active @endif" href="{{ route('admin.news.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Новости
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.users.index')) active @endif" href="{{ route('admin.users.index') }}">
                        <span data-feather="users"></span>
                        Пользователи
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.parser')) active @endif" href="{{ route('admin.parser') }}">
                        Парсер
                </a>
            </li>

            <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('admin.resources.index')) active @endif" href="{{ route('admin.resources.index') }}">
                        Ресурсы
                </a>
            </li>
        </ul>
    </div>
</nav>
