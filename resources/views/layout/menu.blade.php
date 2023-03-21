<li class="nav-item">
    <a href="{{ url('home') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
            Home
        </p>
    </a>
</li>

@if ($user->level == 1)
<li class="nav-item">
    <a href="{{ url('tenant') }}" class="nav-link">
        <i class="nav-icon fas fa-light fa-house-user"></i>
        <p>
            Tenant
        </p>
    </a>
</li >
<li class="nav-item">
    <a href="{{ url('meja') }}" class="nav-link">
        <i class="nav-icon fas fa-solid fa-qrcode"></i>
        <p>
            Meja
        </p>
    </a>
</li >
<li class="nav-item">
    <a href="{{ url('penjualan') }}" class="nav-link">
        <i class="nav-icon fas fa-solid fa-shopping-cart"></i>
        <p>
            Transaksi
        </p>
    </a>
</li >
@else ($user->level == 2)
<li class="nav-item">
    <a href="{{ url('menu') }}" class="nav-link">
        <i class="nav-icon fas fa-solid fa-square-list"></i>
        <p>
            Menu
        </p>
    </a>
</li >
<li class="nav-item">
    <a href="{{ url('transaksi') }}" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>
            Transaksi
        </p>
    </a>
</li >
@endif
