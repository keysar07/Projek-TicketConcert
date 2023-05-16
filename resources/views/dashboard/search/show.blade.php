<x-dashboard-layout>
    <img src="{{ asset('dashboard2/images/pesan tiket.png') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    
    <div class="card">
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Tiket Ditemukan!
            </div>
                <div class="card">
                    <div class="card-body">
                        @if($pesan)
                            <h2>{{ $pesan->ticket->title }}</h2>
                            <p>ID: {{ $pesan->id }}</p>
                            <!-- Tambahkan atribut lainnya yang ingin ditampilkan -->
                        @else
                            <p>Produk tidak ditemukan.</p>
                        @endif
                    </div>
                </div>
      </div>
</x-dashboard-layout>