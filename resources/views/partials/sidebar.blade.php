<div class="d-flex flex-column flex-shrink-0 p-3 bg-light w-100" style="width: 280px;">
    <h1>Sidebar</h1>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}"
                class="nav-link @if (Route::currentRouteName() == 'admin.dashboard') active @endif" aria-current="page">
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.artists.create') }}"
                class="nav-link @if (Route::currentRouteName() == 'admin.artists.create') active @endif" aria-current="page">
                Crea
            </a>
        </li>
    </ul>
</div>
