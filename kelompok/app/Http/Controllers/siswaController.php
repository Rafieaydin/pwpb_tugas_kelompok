<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class siswaController extends Controller
{
    public function index()
    {
        // ngambil data siswa
        // $siswa = Siswa::all();

        // paginate
        $siswa = Siswa::paginate(5);
        return view('siswa', ['siswa' => $siswa]);
    }

    public function detail($id)
    {
        // $siswa = Siswa::find($id);
        $siswa = Siswa::where('id',$id)->first();
        return view('detail', ['siswa' => $siswa]);
    }

    public function create()
    {
        return view('tambah');
    }

    public function store(Request $request){
        // Siswa::create([
        //     'nama' => $request->nama,
        //     'kelas' => $request->kelas,
        //     'absen' => $request->absen
        // ]);
        Siswa::create($request->all());
        return redirect('/siswa');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id){
        Siswa::where('id', $id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'absen' => $request->absen
        ]);
        return redirect('/siswa');
    }

    public function destroy($id)
    {
        Siswa::destroy($id);
        return redirect('/siswa');
    }

    public function softdelete()
    {
        $siswa = Siswa::onlyTrashed()->get();
        return view('delete', ['siswa' => $siswa]);
    }

    public function restore($id){
        $siswa = Siswa::where('id', $id)->restore();;
        return redirect('/siswa');
    }

    public function permanent($id)
    {
        $siswa = Siswa::where('id', $id)->forceDelete();;
        return redirect('/siswa/softdelete');
    }
}
