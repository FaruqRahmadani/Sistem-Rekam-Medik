<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poli;
use HCrypt;

class PoliController extends Controller
{
  public function Data(){
    $Poli = Poli::all();

    return view('Poli.Data', compact('Poli'));
  }

  public function Tambah(){
    return view('Poli.Tambah');
  }

  public function submitTambah(Request $request){
    $Poli = new Poli;
    $Poli->fill($request->all());
    $Poli->save();

    return redirect()->Route('Data-Poli')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Tersimpan']);
  }

  public function Edit($Id){
    $Id = HCrypt::Decrypt($Id);
    $Poli = Poli::findOrFail($Id);

    return view('Poli.Edit', compact('Poli'));
  }

  public function submitEdit(Request $request, $Id){
    $Id = HCrypt::Decrypt($Id);
    $Poli = Poli::findOrFail($Id);
    $Poli->fill($request->all());
    $Poli->save();

    return redirect()->Route('Data-Poli')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Diedit']);
  }

  public function Hapus($Id){
    $Id = HCrypt::Decrypt($Id);
    $Poli = Poli::findOrFail($Id);
    $Poli->delete();

    return redirect()->Route('Data-Poli')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Dihapus']);
  }
}
