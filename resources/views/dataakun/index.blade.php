@extends('layout/aplikasi')

@section('konten')
<head>
    <!-- Element head lainnya -->

    <!-- Tambahkan baris ini untuk menyertakan Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body style="background-color: #cbdddd;">

<a href="/dataakun/create" class="btn btn-success mb-3">+ Tambah Data Akun</a>

<table class="table table-bordered table-hover custom-table" style="background-color: rgba(255, 255, 255, 0.3); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 15px; border-collapse: collapse;">
    <thead style="background-color: rgba(218, 218, 218, 0.5); color: #3d3d3d; font-size: 16px; border: 1px solid #cbdddd;">
        <tr>
            <th style="background-color: rgba(218, 218, 218, 0.5); text-align: center; border: 1px solid #cbdddd;">Kode Akun</th>
            <th style="background-color: rgba(218, 218, 218, 0.5); text-align: center; border: 1px solid #cbdddd;">Nama Akun</th>
            <th style="background-color: rgba(218, 218, 218, 0.5); text-align: center; border: 1px solid #cbdddd;">Deskripsi</th>
            <th style="background-color: rgba(218, 218, 218, 0.5); text-align: center; border: 1px solid #cbdddd;">Tipe Akun</th>
            <th style="background-color: rgba(218, 218, 218, 0.5); text-align: center; border: 1px solid #cbdddd;">Kategori Akun</th>
            <th style="background-color: rgba(218, 218, 218, 0.5); text-align: center; border: 1px solid #cbdddd;">Level Akun</th>
            <th style="background-color: rgba(218, 218, 218, 0.5); text-align: center; border: 1px solid #cbdddd;">Aksi</th>
        </tr>
    </thead>
    <tbody style="background-color: rgba(173, 216, 230, 0.4); font-size: 14px; border: 1px solid #cbdddd;">
        @foreach ($data as $item)
            <tr>
                <td style="background-color: rgba(243, 231, 231, 0.5); text-align: center; border: 1px solid #cbdddd;">{{ $item->kode_akun }}</td>
                <td style="background-color: rgba(243, 231, 231, 0.5); text-align: center; border: 1px solid #cbdddd;">{{ $item->nama_akun }}</td>
                <td style="background-color: rgba(243, 231, 231, 0.5); text-align: center; border: 1px solid #cbdddd;">{{ $item->deskripsi }}</td>
                <td style="background-color: rgba(243, 231, 231, 0.5); text-align: center; border: 1px solid #cbdddd;">{{ $item->tipe_akun }}</td>
                <td style="background-color: rgba(243, 231, 231, 0.5); text-align: center; border: 1px solid #cbdddd;">{{ $item->kategori_akun }}</td>
                <td style="background-color: rgba(243, 231, 231, 0.5); text-align: center; border: 1px solid #cbdddd;">{{ $item->level_akun }}</td>
                <td style="text-align: center; border: 1px solid #cbdddd; background-color: rgba(243, 231, 231, 0.5);"> <!-- Menambahkan background pada kolom Aksi -->
                    <a class='btn btn-info btn-sm' href='{{ url('/dataakun/'.$item->kode_akun) }}'><i class="fas fa-exclamation-circle fa-lg"></i></a>
                    <a class='btn btn-warning btn-sm' href='{{ url('/dataakun/'.$item->kode_akun.'/edit') }}'><i class="fas fa-pencil-alt fa-lg"></i></a>

                    <form class='d-inline' action="{{ '/dataakun/'.$item->kode_akun }}" method='post' onsubmit="return confirm('Hapus data?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash-alt fa-lg"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center mt-3">
    {{ $data->links('pagination::bootstrap-4') }}
</div>

</body>

@endsection
