<x-dashboard-layout>
    <img src="{{ asset('dashboard2/images/cari id.gif') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    
    <div class="card">
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Tiket Ditemukan dan Valid!
            </div>
                <div class="card">
                    <div class="card-body">
                        @if($pesan)
                            <h2>{{ $pesan->ticket->title }}</h2>
                            <p>ID Tiket: {{ $pesan->id }}</p>
                            <p>Atas Nama: {{ $pesan->user->name }}</p>
                            <p>Alamat: {{ $pesan->alamat }}</p>
                            <p>No. Telepon: {{ $pesan->no_telp }}</p>
                            <!-- Tambahkan atribut lainnya yang ingin ditampilkan -->
                            @unless($pesan->checkin_status)
                                <a href="{{ route('checkin', ['id' => $pesan->id]) }}" class="btn btn-primary">Check-in</a>
                            @endunless
                        @else
                            <p>Produk tidak ditemukan.</p>
                        @endif
                    </div>
                </div>
      </div>
</x-dashboard-layout>