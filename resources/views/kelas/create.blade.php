@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kelas</h1>

    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
