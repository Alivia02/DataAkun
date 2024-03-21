<?php

namespace App\Http\Controllers;

use App\Models\dataakun;
use Illuminate\Http\Request;

class DataakunController extends Controller
{
    public function index()
    {
        // $data = dataakun::all();
        $data = dataakun::orderBy('kode_akun', 'asc')->get();
        return view('dataakun.index')->with('data', $data);
    }

    public function detail($id)
    {
        $data = dataakun::where('kode_akun', $id)->first();

        if (!$data) {
            return abort(404); // Tambahkan penanganan jika data tidak ditemukan.
        }

        return view('dataakun.show')->with('data', $data);
    }

    public function create()
    {
        // Tambahkan logika yang sesuai untuk method create
        return view('dataakun.create');
    }

    public function delete($id)
    {
        // Tambahkan logika yang sesuai untuk method delete
        $data = dataakun::where('kode_akun', $id)->first();

        if ($data) {
            $data->delete();
            return redirect()->route('dataakun.index')->with('success', 'Data berhasil dihapus');
        } else {
            return abort(404); // Tambahkan penanganan jika data tidak ditemukan.
        }
    }
}
