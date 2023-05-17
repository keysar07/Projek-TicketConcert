<x-dashboard-layout>
    <div class="card card-user">
        <div class="card-header">
          <h5 class="card-title">Form Edit Pembayaran</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('pembayaran-service-update', $pembayaran) }}">
            @method('PUT')
            @csrf
            <div class="row">
              <div class="col-lg-6 pr-1">
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <select class="form-control" name="siswa_id" id="siswa_id">
                      @foreach ($siswa as $c)
                      @if(old('siswa_id', $pembayaran->siswa_id) == $c->id)
                        <option value="{{ $c->id }}"selected > {{ $c->nama }}</option>
                      @else 
                        <option value="{{ $c->id }}">{{ $c->nama }}</option>
                      @endif
                    @endforeach
                    </select>
                </div>
              </div>
                <div class="col-lg-6 pl-1">
                  <div class="form-group">
                      <label>SPP</label>
                      <select class="form-control" name="spp_id" id="spp_id">
                        @foreach ($spp as $c)
                        @if(old('spp_id', $pembayaran->spp_id) == $c->id)
                          <option value="{{ $c->id }}"selected > {{ $c->nama_spp }}</option>
                        @else 
                          <option value="{{ $c->id }}">{{ $c->nama_spp }}</option>
                        @endif
                      @endforeach
                      </select>
                  </div>
                </div>
                <div class="col-lg-6 pr-1">
                  <div class="form-group">
                      <label>Metode</label>
                      <select class="form-control" name="metode_id" id="metode_id">
                        @foreach ($metode as $c)
                        @if(old('metode_id', $pembayaran->metode_id) == $c->id)
                          <option value="{{ $c->id }}"selected > {{ $c->nama_metode }}</option>
                        @else 
                          <option value="{{ $c->id }}">{{ $c->nama_metode }}</option>
                        @endif
                      @endforeach
                      </select>
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label>Bulan</label>
                    <input type="text" class="form-control" name="spp_bulan" placeholder="Masukkan Bulan" value="{{ $pembayaran->spp_bulan }}">
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Jumlah Bayar</label>
                    <input type="text" class="form-control" name="jumlah_bayar" placeholder="Masukkan Jumlah Bayar" value="{{ $pembayaran->jumlah_bayar }}">
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-rounded btn-primary">Edit Pembayaran</button>
              </div>
            </div>
          </form>
        </div>
      </div>
</x-dashboard-layout>