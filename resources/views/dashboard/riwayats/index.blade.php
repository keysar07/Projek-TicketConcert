<x-dashboard-layout>
    <img src="{{ asset('dashboard2/images/kelas.gif') }}" alt="" width="100%" class="mb-3" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    
    <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <div class="card-header">
            <h4 class="card-title">List Data Riwayat Pesananan Tiket Anda</h4>
        </div>
        <div class="card-body">
            <x-core-table idTable="table-kelas">
                @include('content.table', [
                    'rows' =>['ID Tiket','Nama', 'Tiket', 'Harga', 'Metode', 'Created', 'Updated']
                    ])
                     <tbody>
                        @foreach ($data as $s)
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
                                <a class="btn btn-rounded btn-outline-warning mr-1" href="{{ route('pesan-invoice', $s->id) }}"><i class="bi bi-ticket-detailed"></i> Cetak Bukti</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </x-core-table>
        </div>
      </div>
</x-dashboard-layout>