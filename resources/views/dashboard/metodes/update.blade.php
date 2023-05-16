<x-dashboard-layout>
  <img src="{{ asset('dashboard2/images/kas.gif') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

    <div class="card card-user" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
          <h5 class="card-title">Form Edit Metode</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('metode-service-update', $metode) }}">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label>Metode</label>
                    <input type="text" class="form-control" name="name" value="{{ $metode->name }}">
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-rounded btn-primary">Edit Metode</button>
              </div>
            </div>
          </form>
          <div class="update ml-auto" style="margin-top: -35px">
            <a href="{{ route('metode') }}" type="submit" class="btn btn-rounded btn-danger"><i class="bi bi-arrow-90deg-left"></i></a>
          </div>
        </div>
      </div>
</x-dashboard-layout>