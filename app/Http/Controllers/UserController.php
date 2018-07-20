<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use HCrypt;
use File;

class UserController extends Controller
{
  public function Data(){
    $User = User::all();

    return view('User.Data', ['User' => $User]);
  }

  public function Tambah(){
    return view('User.Tambah');
  }

  public function submitTambah(Request $request){
    $User = new User();
    $User->fill($request->all());
    if ($request->foto) {
      $FotoExt  = $request->foto->getClientOriginalExtension();
      $NamaFoto = Carbon::now()->format('dmYHis');
      $Foto = $NamaFoto.'.'.$FotoExt;
      $request->foto->move(public_path('img/user'), $Foto);
      $User->foto = $Foto;
    }
    $User->save();

    return redirect()->Route('Data-User')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Tersimpan']);
  }

  public function Edit($Id){
    $Id = HCrypt::Decrypt($Id);
    $User = User::findOrFail($Id);

    return view('User.Edit', ['User' => $User]);
  }

  public function submitEdit(Request $request, $Id){
    $Id = HCrypt::Decrypt($Id);
    $User = User::findOrFail($Id);
    if (($User->foto != 'default.png') && ($request->foto)) {
      File::delete('img/user/'.$User->foto);
    }
    $User->fill($request->all());
    if ($request->foto) {
      $FotoExt  = $request->foto->getClientOriginalExtension();
      $NamaFoto = Carbon::now()->format('dmYHis');
      $Foto = $NamaFoto.'.'.$FotoExt;
      $request->foto->move(public_path('img/user'), $Foto);
      $User->foto = $Foto;
    }
    $User->save();

    return redirect()->Route('Data-User')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Diedit']);
  }

  public function Hapus($Id){
    $Id = HCrypt::Decrypt($Id);
    $User = User::findOrFail($Id);
    if ($User->foto != 'default.png') {
      File::delete('img/user/'.$User->foto);
    }
    $User->delete();

    return redirect()->Route('Data-User')->with(['alert' => true, 'tipe' => 'success', 'judul' => 'Berhasil', 'pesan' => 'Data Dihapus']);
  }
}
