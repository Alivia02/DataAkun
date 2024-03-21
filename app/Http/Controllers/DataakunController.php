<?php

namespace App\Http\Controllers;

use App\Models\dataakun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class DataakunController extends Controller
{
    public function index()
    {
        $data = dataakun::orderBy('kode_akun', 'asc')->paginate(3);
        return view('dataakun/index')->with('data', $data);
    }

    public function create()
    {
        return view('dataakun/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_akun' => 'required|numeric',
            'nama_akun' => 'required',
            'deskripsi' => 'required',
            'tipe_akun' => 'required',
            'kategori_akun' => 'required',
            'level_akun' => 'required',
        ], [
            'kode_akun.required' => 'Kode akun wajib diisi!',
            'kode_akun.numeric' => 'Kode akun wajib diisi dalam angka!',
            'nama_akun.required' => 'Nama akun wajib diisi!',
            'deskripsi.required' => 'Deskripsi wajib diisi!',
            'tipe_akun.required' => 'Tipe akun wajib diisi!',
            'kategori_akun.required' => 'Kategori akun wajib diisi!',
            'level_akun.required' => 'Level akun wajib diisi!'
        ]);

        $data = [
            'kode_akun' => $request->input('kode_akun'),
            'nama_akun' => $request->input('nama_akun'),
            'deskripsi' => $request->input('deskripsi'),
            'tipe_akun' => $request->input('tipe_akun'),
            'kategori_akun' => $request->input('kategori_akun'),
            'level_akun' => $request->input('level_akun'),
        ];

        dataakun::create($data);
        return redirect('dataakun')->with('success', 'Berhasil memasukkan data');
    }

    public function show(string $id)
    {
        // Implementasi sesuai kebutuhan.
    }

    public function edit(string $id)
    {
        $data = dataakun::where('kode_akun',$id)->first();
        return view('dataakun/edit')->with('data', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_akun' => 'required',
            'deskripsi' => 'required',
            'tipe_akun' => 'required',
            'kategori_akun' => 'required',
            'level_akun' => 'required',
        ], [
            'kode_akun.numeric' => 'Kode akun wajib diisi dalam angka!',
            'nama_akun.required' => 'Nama akun wajib diisi!',
            'deskripsi.required' => 'Deskripsi wajib diisi!',
            'tipe_akun.required' => 'Tipe akun wajib diisi!',
            'kategori_akun.required' => 'Kategori akun wajib diisi!',
            'level_akun.required' => 'Level akun wajib diisi!'
        ]);
        $data = [
            'nama_akun' => $request->input('nama_akun'),
            'deskripsi' => $request->input('deskripsi'),
            'tipe_akun' => $request->input('tipe_akun'),
            'kategori_akun' => $request->input('kategori_akun'),
            'level_akun' => $request->input('level_akun'),
        ];
        dataakun::where('kode_akun', $id)->update($data);
        return redirect('/dataakun')->with('success', 'Berhasil melakukan update data');
    }


    public function destroy(string $id)
    {
        dataakun::where('kode_akun', $id)->delete();
        return redirect('/dataakun')->with('success', 'Berhasil hapus data');
    }
}
