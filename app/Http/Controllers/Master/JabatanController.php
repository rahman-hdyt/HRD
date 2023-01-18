<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Models\MasterJabatan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JabatanController extends Controller
{
    public function index()
    {



        $jabatan = DB::table('master_jabatan')
            ->where('jabatan_isdelete', '0')
            ->get();

        // $jabatan = MasterJabatan::all();

        return view('master.jabatan.index')->with('jabatans', $jabatan);
    }

    public function store(Request $request, $id = null)
    {
        $rules = [
            'jabatan_nama' => 'required',
            'jabatan_level' => 'required'
        ];

        $this->validate($request, $rules);

        $input = $request->all();

        $status = MasterJabatan::updateOrCreate(['jabatan_id' => $id], $input);

        if ($status) {
            return redirect()->route('master.jabatan')->with('success', 'Jabatan Berhasil Ditambahkan!');
        } else {
            return back()->with('failed', 'Gagal Tambah Data');
        }
    }

    public function destroy($id)
    {
        $data = MasterJabatan::find($id);

        $data->jabatan_isdelete = 1;
        $data->save();

        return redirect()->route('master.jabatan')->with('success', 'Jabatan Berhasil Dihapus!');
    }
}
