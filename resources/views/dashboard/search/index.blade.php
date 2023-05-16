<x-dashboard-layout>
    <img src="{{ asset('dashboard2/images/pesan tiket.png') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    
    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h4 class="card-title">Cari ID Tiket</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('search-id') }}" method="GET">
                <div class="form-group">
                    <input type="text" name="id" id="id" class="form-control" placeholder="Masukkan ID Tiket">
                </div>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
      </div>
</x-dashboard-layout>