<x-dashboard-layout>
  <img src="{{ asset('dashboard2/images/pesan tiket.png') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

    <div class="card card-user" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
          <h5 class="card-title">Form Edit User</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('user-service-update', $user) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="{{ $user->username }}">
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                  </div>
                </div>
              <div class="col-lg-6 pr-1">
                <div class="form-group">
                    <label>Roles</label>
                    <select class="form-control" name="roles" id="roles">
                      @foreach ($roles as $c)
                      @if(old('roles', $user->roles) == $c)
                        <option value="{{ $c }}"selected > {{ $c }}</option>
                      @else 
                        <option value="{{ $c }}">{{ $c }}</option>
                      @endif
                    @endforeach
                    </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-rounded btn-primary">Edit User</button>
              </div>
            </div>
          </form>
          <div class="update ml-auto" style="margin-top: -35px">
            <a href="{{ route('user') }}" type="submit" class="btn btn-rounded btn-danger"><i class="bi bi-arrow-90deg-left"></i></a>
          </div>
        </div>
      </div>
</x-dashboard-layout>