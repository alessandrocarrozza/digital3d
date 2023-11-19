<div class="my-navbar p-3 h-100">
    <h1>Sidebar</h1>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">

        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}"
                class="nav-link @if (Route::currentRouteName() == 'admin.dashboard') active @endif" aria-current="page">
                Dashboard
            </a>
        </li>

        @if(isset($artist))
        <li class="nav-item">
            <a href="{{ route('admin.artists.show', $artist->slug)}}"
                class="nav-link @if (Route::currentRouteName() == 'admin.artists.show') active @endif" aria-current="page">
                Profilo Artista
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.works.index')}}"
                class="nav-link @if (Route::currentRouteName() == 'admin.works.index') active @endif" aria-current="page">
                Opere
            </a>
        </li>
        
        @endif

        <li class="nav-item">
            <a href="{{ route('admin.artists.create') }}"
                class="nav-link @if (Route::currentRouteName() == 'admin.artists.create') active @endif" aria-current="page">
                Crea
            </a>
        </li>

    </ul>
</div>
