<aside class="sidebar">
    <div class="sidebar-brand p-3">
        <strong>AXELiT</strong>
    </div>

    <ul class="nav flex-column">

        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('kelas.index') }}">
                Master Kelas
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('siswa.index') }}">
                Master Siswa
            </a>
        </li>

    </ul>
</aside>
