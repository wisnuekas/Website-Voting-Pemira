<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

use App\Pemira;

class PemiraController extends Controller
{
    public function store(Request $request)
    {
      $pemira = new Pemira; //intance

      $gbr_pres          = $request->file('gbr_pres');
      $gbr_wapres        = $request->file('gbr_wapres');
      $gbr_pres_wapres   = $request->file('gbr_pres_wapres');

      //mengambil nama file yang akan disimpan dalam database
      $gbr_pres_file_name         = date('Y-m-d-H:i:s')."-".$gbr_pres->getClientOriginalName();
      $gbr_wapres_file_name       = date('Y-m-d-H:i:s')."-".$gbr_wapres->getClientOriginalName();
      $gbr_pres_wapres_file_name  = date('Y-m-d-H:i:s')."-".$gbr_pres_wapres->getClientOriginalName();

      //memindahkan file dari folder temporary ke folder uploads
      $request->file('gbr_pres')->move("uploads/",$gbr_pres_file_name);
      $request->file('gbr_wapres')->move("uploads/",$gbr_wapres_file_name);
      $request->file('gbr_pres_wapres')->move("uploads/",$gbr_pres_wapres_file_name);

      $pemira->nama_pres        = $request->nama_pres;
      $pemira->nama_wapres      = $request->nama_wapres;
      $pemira->nim_pres         = $request->nim_pres;
      $pemira->nim_wapres       = $request->nim_wapres;
      $pemira->progdi_pres      = $request->progdi_pres;
      $pemira->progdi_wapres    = $request->progdi_wapres;
      $pemira->fakultas_pres    = $request->fakultas_pres;
      $pemira->fakultas_wapres  = $request->fakultas_wapres;
      $pemira->ipk_pres         = $request->ipk_pres;
      $pemira->ipk_wapres       = $request->ipk_wapres;
      $pemira->visi             = $request->visi;
      $pemira->misi             = $request->misi;
      $pemira->gbr_pres         = $gbr_pres_file_name;
      $pemira->gbr_wapres       = $gbr_wapres_file_name;
      $pemira->gbr_pres_wapres  = $gbr_pres_wapres_file_name;
      $pemira->save(); //simpan ke database

      //redirect ke halaman list
      return redirect('list');
    }

    public function update(Request $request, $id)
    {
      $pemira = Pemira::find($id);

      $gbr_pres          = $request->file('gbr_pres');
      $gbr_wapres        = $request->file('gbr_wapres');
      $gbr_pres_wapres   = $request->file('gbr_pres_wapres');

      //kalo misal ga upload gambar baru
      if ($gbr_pres == ''){
        $pemira->gbr_pres = $pemira->gbr_pres;
      }else {
        $gbr_pres_file_name         = date('Y-m-d-H:i:s')."-".$gbr_pres->getClientOriginalName(); //mengambil nama file yang akan disimpan dalam database
        $request->file('gbr_pres')->move("uploads/",$gbr_pres_file_name); //memindahkan file dari folder temporary ke folder uploads
        Storage::delete('/uploads/'.$pemira->gbr_pres);
        $pemira->gbr_pres         = $gbr_pres_file_name;
      }

      if ($gbr_wapres == ''){
        $pemira->gbr_wapres = $pemira->gbr_wapres;
      }
      else {
        $gbr_wapres_file_name       = date('Y-m-d-H:i:s')."-".$gbr_wapres->getClientOriginalName(); //mengambil nama file yang akan disimpan dalam database
        $request->file('gbr_wapres')->move("uploads/",$gbr_wapres_file_name); //memindahkan file dari folder temporary ke folder uploads
        Storage::delete('/uploads/'.$pemira->gbr_wapres);
        $pemira->gbr_wapres       = $gbr_wapres_file_name;
      }

      if ($gbr_pres_wapres == ''){
        $pemira->gbr_pres_wapres = $pemira->gbr_pres_wapres;
      }else {
        $gbr_pres_wapres_file_name  = date('Y-m-d-H:i:s')."-".$gbr_pres_wapres->getClientOriginalName(); //mengambil nama file yang akan disimpan dalam database
        $request->file('gbr_pres_wapres')->move("uploads/",$gbr_pres_wapres_file_name); //memindahkan file dari folder temporary ke folder uploads
        Storage::delete('/uploads/'.$pemira->gbr_pres_wapres);
        $pemira->gbr_pres_wapres  = $gbr_pres_wapres_file_name;
      }

      $pemira->nama_pres        = $request->nama_pres;
      $pemira->nama_wapres      = $request->nama_wapres;
      $pemira->nim_pres         = $request->nim_pres;
      $pemira->nim_wapres       = $request->nim_wapres;
      $pemira->progdi_pres      = $request->progdi_pres;
      $pemira->progdi_wapres    = $request->progdi_wapres;
      $pemira->fakultas_pres    = $request->fakultas_pres;
      $pemira->fakultas_wapres  = $request->fakultas_wapres;
      $pemira->ipk_pres         = $request->ipk_pres;
      $pemira->ipk_wapres       = $request->ipk_wapres;
      $pemira->visi             = $request->visi;
      $pemira->misi             = $request->misi;

      $pemira->update(); //update ke database

      return redirect('list');
    }



    public function destroy($id)
    {
      $pemira = Pemira::find($id);

      Storage::delete('/uploads/'.$pemira->gbr_pres,
                       '/uploads/'.$pemira->gbr_wapres,
                       '/uploads/'.$pemira->gbr_pres_wapres);
      
      $pemira->delete();

      return redirect('list');
    }

    public function validasi($input)
    {
      $this->validate($input, [
        // 'nama_pres' => 'required|min:5',
        // 'nama_wapres' => 'required|min:5',
        // 'nim_pres' => 'required|min:5',
        // 'nim_wapres' => 'required|min:5',
        // 'visi'=> 'required|min:5',
        // 'misi' =>'required|min:5',
        'gbr_pres' => 'mimes:jpg,jpeg,png',
        'gbr_wapres' => 'mimes:jpg,jpeg,png',
        'gbr_pres_wapres' => 'mimes:jpg,jpeg,png'
      ]);
    }

    public function test()
    {
      $pemira = new Pemira;
      return view('test', ['pemiras' => count($pemira)]);
    }
}
