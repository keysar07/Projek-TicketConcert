<x-dashboard-layout>
  <img src="{{ asset('dashboard2/images/siswa.gif') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

    <div class="card card-user" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
          <h5 class="card-title">Form Edit Tiket</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('ticket-service-update', $ticket) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Nama Tiket</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Nama Tiket.." value="{{ $ticket->title }}">
                  </div>
                </div>
              <div class="col-md-6 pl-1">
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" class="form-control" name="description" placeholder="Masukkan" value="{{ $ticket->description }}">
                </div>
              </div>
              <div class="col-lg-6 pl-1">
                <div class="form-group">
                    <label>Kelas</label>
                    <select class="form-control" name="kelas_id" id="kelas_id">
                      @foreach ($kelas as $c)
                      @if(old('kelas_id', $siswa->kelas_id) == $c->id)
                        <option value="{{ $c->id }}"selected > {{ $c->nama_kelas }}</option>
                      @else 
                        <option value="{{ $c->id }}">{{ $c->nama_kelas }}</option>
                      @endif
                    @endforeach
                    </select>
                </div>
              </div>
              <div class="col-lg-6 pr-1">
                <div class="form-group">
                    <label>Kompetensi Keahlian</label>
                    <select class="form-control" name="keahlian_id" id="keahlian_id">
                      @foreach ($keahlian as $c)
                      @if(old('keahlian_id', $siswa->keahlian_id) == $c->id)
                        <option value="{{ $c->id }}"selected > {{ $c->nama_keahlian }}</option>
                      @else 
                        <option value="{{ $c->id }}">{{ $c->nama_keahlian }}</option>
                      @endif
                    @endforeach
                    </select>
                </div>
              </div>
              <div class="col-lg-6 pl-1">
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenkel" id="jenkel">
                      @if(old('jenkel', $siswa->jenkel) == 'laki-laki')
                          <option value="laki-laki"selected > Laki - Laki</option>
                          <option value="perempuan">Perempuan</option>
                      @elseif($siswa->jenkel == 'perempuan')
                          <option value="perempuan" selected>Perempuan</option>
                          <option value="laki-laki">Laki-Laki</option>
                      @endif
                    </select>
                </div>
              </div>
              <div class="col-lg-6 pr-1">
                <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" id="status">
                      @if(old('status', $siswa->status) == 'Naik Kelas')
                          <option value="Naik kelas"selected > Naik Kelas</option>
                          <option value="Lulus">Lulus</option>
                          <option value="Pindah Kelas">Pindah Kelas</option>
                          <option value="Tinggal Kelas">Tinggal Kelas</option>
                      @elseif($siswa->status == 'Lulus')
                          <option value="Lulus" selected>Lulus</option>
                          <option value="Naik Kelas">Naik Kelas</option>
                          <option value="Pindah Kelas">Pindah Kelas</option>
                          <option value="Tinggal Kelas">Tinggal Kelas</option>
                      @elseif($siswa->status == 'Pindah Kelas')
                          <option value="Pindah Kelas" selected>Pindah Kelas</option>
                          <option value="Lulus">Lulus</option>
                          <option value="Tinggal Kelas">Tinggal Kelas</option>
                          <option value="Naik Kelas">Naik Kelas</option>
                      @elseif($siswa->status == 'Tinggal Kelas')
                          <option value="Tinggal Kelas" selected>Tinggal Kelas</option>
                          <option value="Lulus">Lulus</option>
                          <option value="Pindah Kelas">Pindah Kelas</option>
                          <option value="Naik Kelas">Naik Kelas</option>
                      @endif
                    </select>
                </div>
              </div>
              <div class="col-lg-6 pl-1">
                <div class="form-group">
                    <label>Tahun Ajaran</label>
                    <select class="form-control" name="tahun_id" id="tahun_id">
                      @foreach ($tahun_ajaran as $c)
                      @if(old('tahun_id', $siswa->tahun_id) == $c->id)
                        <option value="{{ $c->id }}"selected > {{ $c->nama_tahun }}</option>
                      @else 
                        <option value="{{ $c->id }}">{{ $c->nama_tahun }}</option>
                      @endif
                    @endforeach
                    </select>
                </div>
              </div>
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>No. Telepon</label>
                  <input type="number" class="form-control" name="no_telp" placeholder="Masukkan Nomer Telepon" value="{{ $siswa->no_telp }}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="textarea" class="form-control" name="alamat" placeholder="Masukkan Nomer Telepon" value="{{ $siswa->alamat }}">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-rounded btn-primary">Edit Siswa</button>
              </div>
            </div>
          </form>
          <div class="update ml-auto" style="margin-top: -35px">
            <a href="{{ route('siswa') }}" type="submit" class="btn btn-rounded btn-danger"><i class="bi bi-arrow-90deg-left"></i></a>
          </div>
        </div>
      </div>
</x-dashboard-layout>