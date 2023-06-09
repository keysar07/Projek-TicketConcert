<x-dashboard-layout>
    <img src="{{ asset('dashboard2/images/user.gif') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

    @role('Admin')
    <div class="card card-user" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h5 class="card-title">Form Tambah Pengguna</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('user-service-insert') }}">
            @csrf
            <div class="row">
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Lengkap..">
                    </div>
                </div>
                <div class="col-md-6 pl-1">
                    <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username..">
                    </div>
                </div>
                <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                  </div>
                <div class="col-lg-6 pl-1">
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control" name="roles" id="roles">
                            @foreach ($roles as $k)
                            <option value="{{ $k }}">{{ $k }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
            </div>
            <div class="row">
                <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-rounded btn-primary">Tambah Pengguna</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    @endrole
    
    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h4 class="card-title">List Data Pengguna</h4>
        </div>
        <div class="card-body">
            <x-core-table idTable="table-kelas">
                @include('content.table', [
                    'rows' =>['id','Nama', 'Username', 'Created', 'Updated']
                    ])
                     <tbody>
                        @foreach ($user as $s)
                        <tr>
                            <th>{{ $s->id }}</th>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->username }}</td>
                            <td>{{ $s->created_at }}</td>
                            <td>{{ $s->updated_at }}</td>
                            <td>
                                @role('Admin')
                                <div class="rounded-button d-flex">
                                <a class="btn btn-rounded btn-outline-warning mr-1" href="{{ route('user-update',$s->name) }}"><i class="bi bi-pencil-fill"></i> Edit</a>
                                <form action="{{ route('user-service-destroy', $s) }}" method="POST">
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