<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kunjungan;
use App\Pasien;
use App\Poli;
use HCrypt;

class KunjunganController extends Controller
{
  public function Data($IdPasien){
    $IdPasien = HCrypt::Decrypt($IdPasien);
    $Pasien = Pasien::findOrFail($IdPasien);
    $Kunjungan = Kunjungan::where('pasien_id', $IdPasien)
                          ->get();

    return view('Kunjungan.Data', compact('Pasien', 'Kunjungan'));
  }

  public function Tambah($IdPasien){
    $IdPasien = HCrypt::Decrypt($IdPasien);
    $Pasien = Pasien::findOrFail($IdPasien);
    $Poli = Poli::all();

    return view('Kunjungan.Tambah', compact('Pasien', 'Poli'));
  }

  public function submitTambah(Request $request, $IdPasien){
    $IdPasien = HCrypt::Decrypt($IdPasien);
    $Kunjungan = new Kunjungan;
    $Kunjungan->fill($request->all());
    $Kunjungan->pasien_id = $IdPasien;
    $Kunjungan->save();

    return redirect()->Route('Data-Pasien')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Tersimpan']);
  }

  public function Edit($Id){
    $Id = HCrypt::Decrypt($Id);
    $Kunjungan = Kunjungan::findOrFail($Id);
    $Pasien = $Kunjungan->Pasien;
    $Poli = Poli::all();

    return view('Kunjungan.Edit', compact('Kunjungan', 'Pasien', 'Poli'));
  }

  public function submitEdit(Request $request, $Id){
    $Id = HCrypt::Decrypt($Id);
    $Kunjungan = Kunjungan::findOrFail($Id);
    $Kunjungan->fill($request->all());
    $Kunjungan->save();

    return redirect()->Route('Data-Kunjungan', ['idPasien' => HCrypt::Encrypt($Kunjungan->Pasien->id)])->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Diedit']);
  }

  public function Hapus($Id){
    $Id = HCrypt::Decrypt($Id);
    $Kunjungan = Kunjungan::findOrFail($Id);
    $Kunjungan->delete();

    return redirect()->Route('Data-Kunjungan', ['idPasien' => HCrypt::Encrypt($Kunjungan->Pasien->id)])->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Dihapus']);
  }
}
