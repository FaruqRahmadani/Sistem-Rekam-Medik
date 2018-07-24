<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use HCrypt;

class PasienController extends Controller
{
  public function Data(){
    $Pasien = Pasien::all();

    return view('Pasien.Data', compact('Pasien'));
  }

  public function Tambah(){
    return view('Pasien.Tambah');
  }

  public function submitTambah(Request $request){
    $Pasien = new Pasien;
    $Pasien->fill($request->all());
    $Pasien->save();

    return redirect()->Route('Tambah-Kunjungan', ['Id' => HCrypt::Encrypt($Pasien->id)]);
  }

  public function Edit($Id){
    $Id = HCrypt::Decrypt($Id);
    $Pasien = Pasien::findOrFail($Id);

    return view('Pasien.Edit', compact('Pasien'));
  }

  public function submitEdit(Request $request, $Id){
    $Id = HCrypt::Decrypt($Id);
    $Pasien = Pasien::findOrFail($Id);
    $Pasien->fill($request->all());
    $Pasien->save();

    return redirect()->Route('Data-Pasien')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Diedit']);
  }

  public function Hapus($Id){
    $Id = HCrypt::Decrypt($Id);
    $Pasien = Pasien::findOrFail($Id);
    $Pasien->delete();

    return redirect()->Route('Data-Pasien')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Dihapus']);
  }
}
