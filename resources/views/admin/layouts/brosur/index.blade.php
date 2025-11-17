@extends('admin.layouts.main')

@section('content')
<div class="container my-5">
    <h2>Brosur Admin</h2>
    <a href="{{ route('admin.brosur.create') }}" class="btn btn-success mb-3">Tambah Brosur</a>

    @if($brosurs->count() == 0)
        <p>Tidak ada brosur.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Brosur</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brosurs as $b)
                    <tr>
                        <td>{{ $b->nama }}</td>
                        <td>
                            <a href="{{ asset('storage/brosur/'.$b->file) }}" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                            <form action="{{ route('admin.brosur.destroy', $b->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
