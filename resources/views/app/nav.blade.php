<nav class="navbar navbar-expand-lg navbar-dark bg-black" aria-label="Navbar">
    <div class="container-xl">
        <a class="navbar-brand" href="{{ route('home') }}">@lang('app.appName')</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
                @foreach($transportTypes as $transportType)
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->routeIs('routes.index') and request()->has('transportType') and request()->transportType == $transportType->id) ? 'link-warning' : '' }}"
                           href="{{ route('routes.index', ['transportType' => $transportType->id]) }}">
                            {{ $transportType->getName() }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->getName() }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="{{ route('profile.edit') }}" class="dropdown-item">@lang('app.edit')</a></li>
                            <li><a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout').submit();">@lang('app.logout')</a></li>
                        </ul>
                        <form method="POST" action="{{ route('logout') }}" id="logout">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">@lang('app.login')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">@lang('app.register')</a>
                    </li>
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        @lang('app.language')
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a href="{{ route('locale', 'en') }}" class="dropdown-item {{ app()->getLocale() == 'en' ? 'fw-bold' : '' }}">English</a></li>
                        <li><a href="{{ route('locale', 'ru') }}" class="dropdown-item {{ app()->getLocale() == 'ru' ? 'fw-bold' : '' }}">Русский</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
