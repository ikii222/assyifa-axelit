<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 shadow">

    <button class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                <span class="mr-2 text-gray-600 small">
                    {{ auth()->user()->name }}
                </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right shadow">
                <a class="dropdown-item" href="{{ route('logout') }}">
                    Logout
                </a>
            </div>
        </li>

    </ul>
</nav>
