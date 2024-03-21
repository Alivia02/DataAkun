@extends('layout.aplikasi')

@section('konten')
    <form method="post" action="/dataakun">
        @csrf
        <div class="mb-3">
            <label for="kode_akun" class="form-label">Kode Akun</label>
            <input type="text" class="form-control" id="kode_akun" name="kode_akun" value="{{ Session::get('kode_akun')}}"required>
        </div>
        <div class="mb-3">
            <label for="nama_akun" class="form-label">Nama Akun</label>
            <input type="text" class="form-control" id="nama_akun" name="nama_akun" value="{{ Session::get('nama_akun')}}"required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">"{{ Session::get('deskripsi')}}"</textarea>
        </div>
        <div class="mb-3">
            <label for="tipe_akun" class="form-label">Tipe Akun</label>
            <input type="text" class="form-control" id="tipe_akun" name="tipe_akun" value="{{ Session::get('tipe_akun')}}">
        </div>
        <div class="mb-3">
            <label for="kategori_akun" class="form-label">Kategori Akun</label>
            <input type="text" class="form-control" id="kategori_akun" name="kategori_akun" value="{{ Session::get('kategori_akun')}}">
        </div>
        <div class="mb-3">
            <label for="level_akun" class="form-label">Level Akun</label>
            <input type="number" class="form-control" id="level_akun" name="level_akun" value="{{ Session::get('level_akun')}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">save</button>
        </div>
    </form>
@endsection
