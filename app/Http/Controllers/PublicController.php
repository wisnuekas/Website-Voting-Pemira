<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pemira;

class PublicController extends Controller
{
  public function home()
  {
    $total_voted = DB::table('pemiras')->sum('jumlah_vote');

    $pemiras = DB::table('pemiras')
                ->select('pemiras.id as id',
                          'pemiras.nama_pres as nama_pres',
                          'pemiras.nama_wapres as nama_wapres',
                          'pemiras.gbr_pres_wapres as gbr_pres_wapres',
                          'pemiras.visi as visi',
                          DB::raw('pemiras.jumlah_vote/'.$total_voted.'*100 as jumlah_vote'))
                ->get();

    return view('public/home', [ 'pemiras' => $pemiras]);
  }

  public function details($id)
  {
    $pemira = Pemira::find($id);

    return view('public/details', ['pemira' => $pemira]);
  }
}
