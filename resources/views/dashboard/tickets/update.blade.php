<x-dashboard-layout>
  <img src="{{ asset('dashboard2/images/pesan tiket.png') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">

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
                    <input type="text" class="form-control" name="title" value="{{ $ticket->title }}">
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="description" value="{{ $ticket->description }}">
                  </div>
                </div>
                <div class="col-lg-6 pr-1">
                  <div class="form-group">
                      <label>Priority</label>
                      <select class="form-control" name="priority_id" id="priority_id">
                        @foreach ($priority as $c)
                        @if(old('priority_id', $ticket->priority_id) == $c->id)
                          <option value="{{ $c->id }}"selected > {{ $c->name }}</option>
                        @else 
                          <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endif
                      @endforeach
                      </select>
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
            <a href="{{ route('ticket') }}" type="submit" class="btn btn-rounded btn-danger"><i class="bi bi-arrow-90deg-left"></i></a>
          </div>
        </div>
      </div>
</x-dashboard-layout>