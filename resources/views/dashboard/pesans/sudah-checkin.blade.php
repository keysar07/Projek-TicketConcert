<x-dashboard-layout>
    <img src="{{ asset('dashboard2/images/pesan tiket.png') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    
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
                        @if($s->checkin_status)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->user->name }}</td>
                            <td>{{ $s->ticket->title }}</td>
                            <td>{{ $s->ticket->priority->price }}</td>
                            <td>{{ $s->metode->name }}</td>
                            <td>{{ $s->created_at }}</td>
                            <td>{{ $s->updated_at }}</td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
            </x-core-table>
        </div>
      </div>
      @endrole
</x-dashboard-layout>