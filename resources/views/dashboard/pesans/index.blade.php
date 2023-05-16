<x-dashboard-layout>
    <img src="{{ asset('dashboard2/images/pesan tiket.png') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

    @role('Pemesan')

    <span style="color: red">*Dimohon jika sudah mengisi form pemesanan segera di screenshot/print buktinya dengan menekan tombol 'Cetak Bukti' pada halaman 'Riwayat Pemesanan'</span>
    
    <div class="card card-user" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h5 class="card-title">Form Pesan Tiket</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('pesan-service-insert') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6 pl-1">
                    <div class="form-group">
                        <label>Tiket</label>
                        <select class="form-control" name="ticket_id" id="ticket_id">
                            @foreach ($ticket as $k)
                            <option value="{{ $k->id }}">{{ $k->title }} - Rp.{{ $k->priority->price }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 pr-1">
                    <div class="form-group">
                        <label>Metode Bayar</label>
                        <select class="form-control" name="metode_id" id="metode_id">
                            @foreach ($metode as $k)
                            <option value="{{ $k->id }}">{{ $k->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 pl-1">
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat..">
                    </div>
                </div>
                <div class="col-lg-6 pr-1">
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="number" class="form-control" name="no_telp" placeholder="Masukkan Nomer Telepon..">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-rounded btn-primary">Pesan Tiket</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    @endrole
    
    @role('Admin')
    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h4 class="card-title">List Data Pesanan Tiket</h4>
        </div>
        <div class="card-body">
            <x-core-table idTable="table-kelas">
                @include('content.table', [
                    'rows' =>['ID Tiket','Nama', 'Tiket', 'Harga', 'Metode', 'Created', 'Updated']
                    ])
                     <tbody>
                        @foreach ($pesan as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->user->name }}</td>
                            <td>{{ $s->ticket->title }}</td>
                            <td>{{ $s->ticket->priority->price }}</td>
                            <td>{{ $s->metode->name }}</td>
                            <td>{{ $s->created_at }}</td>
                            <td>{{ $s->updated_at }}</td>
                            <td>
                                <div class="rounded-button d-flex">
                                <a class="btn btn-rounded btn-outline-success mr-1" href="{{ route('pesan-detail', $s->id) }}"><i class="bi bi-ticket-detailed"></i> Detail</a>
                                <a class="btn btn-rounded btn-outline-warning mr-1" href="{{ route('pesan-update',$s->id) }}"><i class="bi bi-pencil-fill"></i> Edit</a>
                                <form action="{{ route('pesan-service-destroy', $s) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn btn-rounded btn-outline-danger"><i class="bi bi-trash3-fill"></i> Delete</button>
                                </form>
                                </div>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </x-core-table>
        </div>
      </div>
      @endrole
</x-dashboard-layout>