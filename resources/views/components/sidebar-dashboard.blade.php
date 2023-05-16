<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li><a href="{{ route('home') }}" aria-expanded="false"><i class="bi bi-card-heading"></i><span
            class="nav-text {{ Request::is('dashboard') ? "active" : '' }}">Dashboard</span></a></li>
            <li><a href="{{ route('ticket') }}" aria-expanded="false"><i class="bi bi-ticket-perforated"></i><span
            class="nav-text {{ Request::is('Ticket') ? "active" : '' }}">Daftar Tiket</span></a></li>
            <li><a href="{{ route('pesan') }}" aria-expanded="false"><i class="bi bi-credit-card"></i><span
            class="nav-text {{ Request::is('Pesan') ? "active" : '' }}">Pesan Tiket</span></a></li>
            <li><a href="{{ route('riwayat') }}" aria-expanded="false"><i class="bi bi-journal"></i><span
            class="nav-text {{ Request::is('Riwayat') ? "active" : '' }}">Riwayat</span></a></li>
            @hasrole('Admin')
            <li><a href="{{ route('user') }}" aria-expanded="false"><i class="icon icon-single-04"></i><span
            class="nav-text {{ Request::is('User') ? "active" : '' }}">Users</span></a></li>
            @endhasrole
            <li><a href="{{ route('metode') }}" aria-expanded="false"><i class="bi bi-credit-card-2-front"></i><span
            class="nav-text {{ Request::is('Metode') ? "active" : '' }}">Metode Pembayaran</span></a></li>
        </ul>
    </div>


</div>