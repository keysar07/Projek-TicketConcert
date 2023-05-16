<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a href="{{ route('home') }}" aria-expanded="false"><i class="icon icon-single-04"></i><span
            class="nav-text {{ Request::is('dashboard') ? "active" : '' }}">Dashboard</span></a></li>
            <li><a href="{{ route('ticket') }}" aria-expanded="false"><i class="icon icon-single-04"></i><span
            class="nav-text {{ Request::is('Ticket') ? "active" : '' }}">Daftar Tiket</span></a></li>
            <li><a href="#" aria-expanded="false"><i class="icon icon-single-04"></i><span
            class="nav-text {{ Request::is('dashboard') ? "active" : '' }}">Buat Pesanan</span></a></li>
            <li><a href="#" aria-expanded="false"><i class="icon icon-single-04"></i><span
            class="nav-text {{ Request::is('dashboard') ? "active" : '' }}">Riwayat</span></a></li>
            @hasrole('Admin')
            <li><a href="{{ route('user') }}" aria-expanded="false"><i class="icon icon-single-04"></i><span
            class="nav-text {{ Request::is('User') ? "active" : '' }}">Users</span></a></li>
            @endhasrole
            <li><a href="#" aria-expanded="false"><i class="icon icon-single-04"></i><span
            class="nav-text {{ Request::is('dashboard') ? "active" : '' }}">Metode Pembayaran</span></a></li>
        </ul>
    </div>


</div>