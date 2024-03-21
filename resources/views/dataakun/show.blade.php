@extends('layout.aplikasi')

@section('konten')
    <div>
        <a href='/dataakun' class="btn btn-secondary">Kembali</a>
        <h1>{{ $data->nama_akun }}</h1>
        <p>
            <b>Kode Akun:</b> {{ $data->kode_akun }}
        </p>
        <p>
            <b>Deskripsi:</b> {{ $data->deskripsi }}
        </p>
        <p>
            <b>Tipe Akun:</b> {{ $data->tipe_akun }}
        </p>
        <p>
            <b>Kategori Akun:</b> {{ $data->kategori_akun }}
        </p>
        <p>
            <b>Level Akun:</b> {{ $data->level_akun }}
        </p>
        <p>
            <b>Created At:</b> {{ $data->created_at }} 
        </p>
    </div>
@endsection
