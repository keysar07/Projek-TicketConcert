<x-dashboard-layout>
    <img src="{{ asset('dashboard2/images/metode.gif') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

    @role('Admin')
    <div class="card card-user" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h5 class="card-title">Form Tambah Metode</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('metode-service-insert') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                    <label>Nama Metode</label>
                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Metode..">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-rounded btn-primary">Tambah Metode</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    @endrole
    
    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h4 class="card-title">List Data Metode</h4>
        </div>
        <div class="card-body">
            <x-core-table idTable="table-kelas">
                @include('content.table', [
                    'rows' =>['id','Metode', 'Created', 'Updated']
                    ])
                     <tbody>
                        @foreach ($metode as $s)
                        <tr>
                            <th>{{ $s->id }}</th>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->created_at }}</td>
                            <td>{{ $s->updated_at }}</td>
                            <td>
                                @role('Admin')
                                <div class="rounded-button d-flex">
                                <a class="btn btn-rounded btn-outline-success mr-1" href="{{ route('metode-detail', $s->id) }}"><i class="bi bi-ticket-detailed"></i> Detail</a>
                                <a class="btn btn-rounded btn-outline-warning mr-1" href="{{ route('metode-update',$s->name) }}"><i class="bi bi-pencil-fill"></i> Edit</a>
                                <form action="{{ route('metode-service-destroy', $s) }}" method="POST">
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