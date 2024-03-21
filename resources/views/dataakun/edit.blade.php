@extends('layout.aplikasi')

@section('konten')
    <a href='/dataakun' class="btn btn-secondary"><< Back</a>
    <form method="post" action="{{ '/dataakun/'.$data->kode_akun }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <h1>Kode Akun: {{ $data->kode_akun }}</h1>
        </div>
        <div class="mb-3">
            <label for="nama_akun" class="form-label">Nama Akun</label>
            <input type="text" class="form-control" id="nama_akun" name="nama_akun" 
            value="{{ $data->nama_akun }}"required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">
            "{{ $data->deskripsi}}"</textarea>
        </div>
        <div class="mb-3">
            <label for="tipe_akun" class="form-label">Tipe Akun</label>
            <input type="text" class="form-control" id="tipe_akun" name="tipe_akun" 
            value="{{ $data->tipe_akun }}">
        </div>
        <div class="mb-3">
            <label for="kategori_akun" class="form-label">Kategori Akun</label>
            <input type="text" class="form-control" id="kategori_akun" name="kategori_akun" 
            value="{{ $data->kategori_akun}}">
        </div>
        <div class="mb-3">
            <label for="level_akun" class="form-label">Level Akun</label>
            <input type="number" class="form-control" id="level_akun" name="level_akun" 
            value="{{ $data->level_akun}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
