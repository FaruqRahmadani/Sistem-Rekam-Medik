<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kunjungan;
use App\Rak;
use HCrypt;

class RekamMedikController extends Controller
{
  public function Statistik(){
    $Kunjungan = Kunjungan::all();
    return view('RekamMedik.Statistik', compact('Kunjungan'));
  }

  public function Data(){
    $Rak = Rak::all();
    return view('RekamMedik.Data', compact('Rak'));
  }

  public function Tambah(){
    return view('RekamMedik.Tambah');
  }

  public function submitTambah(Request $request){
    $Rak = new Rak;
    $Rak->fill($request->all());
    $Rak->save();

    return redirect()->Route('Data-Penyimpanan-Rekam-Medik')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Tersimpan']);
  }

  public function Edit($Id){
    $Id = HCrypt::Decrypt($Id);
    $Rak = Rak::findOrFail($Id);

    return view('RekamMedik.Edit', compact('Rak'));
  }

  public function submitEdit(Request $request, $Id){
    $Id = HCrypt::Decrypt($Id);
    $Rak = Rak::findOrFail($Id);
    $Rak->fill($request->all());
    $Rak->save();

    return redirect()->Route('Data-Penyimpanan-Rekam-Medik')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Diedit']);
  }

  public function Hapus($Id){
    $Id = HCrypt::Decrypt($Id);
    $Rak = Rak::findOrFail($Id);
    $Rak->delete();

    return redirect()->Route('Data-Penyimpanan-Rekam-Medik')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Dihapus']);
  }
}
