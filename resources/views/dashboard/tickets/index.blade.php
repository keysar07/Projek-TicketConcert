<x-dashboard-layout>
    <img src="{{ asset('dashboard2/images/daftar tiket.gif') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

    @role('Admin')
    <div class="card card-user" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h5 class="card-title">Form Tambah Tiket</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('ticket-service-insert') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                    <label>Nama Tiket</label>
                    <input type="text" class="form-control" name="title" placeholder="Masukkan Nama Tiket..">
                    </div>
                </div>
                <div class="col-md-6 pl-1">
                    <div class="form-group">
                    <label>Deskripsi Tiket</label>
                    <input type="text" class="form-control" name="description" placeholder="Masukkan Deskripsi..">
                    </div>
                </div>
                <div class="col-lg-6 pr-1">
                    <div class="form-group">
                        <label>Prioritas</label>
                        <select class="form-control" name="priority_id" id="priority_id">
                            @foreach ($priority as $k)
                            <option value="{{ $k->id }}">{{ $k->name }} - Rp.{{ $k->price }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-rounded btn-primary">Tambah Tiket</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    @endrole
    
    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h4 class="card-title">List Data Tiket</h4>
        </div>
        <div class="card-body">
            <x-core-table idTable="table-kelas">
                @include('content.table', [
                    'rows' =>['id','Tiket', 'Keterangan', 'Prioritas', 'Harga', 'Created', 'Updated']
                    ])
                     <tbody>
                        @foreach ($ticket as $s)
                        <tr>
                            <th>{{ $s->id }}</th>
                            <td>{{ $s->title }}</td>
                            <td>{{ $s->description }}</td>
                            <td>{{ $s->priority->name }}</td>
                            <td>{{ $s->priority->price }}</td>
                            <td>{{ $s->created_at }}</td>
                            <td>{{ $s->updated_at }}</td>
                            <td>
                                @role('Admin')
                                <div class="rounded-button d-flex">
                                <a class="btn btn-rounded btn-outline-success mr-1" href="{{ route('ticket-detail', $s->id) }}"><i class="bi bi-ticket-detailed"></i> Detail</a>
                                <a class="btn btn-rounded btn-outline-warning mr-1" href="{{ route('ticket-update',$s->title) }}"><i class="bi bi-pencil-fill"></i> Edit</a>
                                <form action="{{ route('ticket-service-destroy', $s) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn btn-rounded btn-outline-danger"><i class="bi bi-trash3-fill"></i> Delete</button>
                                </form>
                                </div>
                                @endrole
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </x-core-table>
        </div>
      </div>
</x-dashboard-layout>