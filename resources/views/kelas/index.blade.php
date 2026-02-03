@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Master Kelas</h1>
    <a href="{{ route('kelas.create') }}" class="btn btn-primary">Tambah Kelas</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas as $k)
            <tr>
                <td>{{ $k->id }}</td>
                <td>{{ $k->nama_kelas }}</td>
                <td>
                    <a href="{{ route('kelas.edit', $k->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kelas.destroy', $k->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus Kelas?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
