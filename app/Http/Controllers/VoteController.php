<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pemira;
use App\Vote;

class VoteController extends Controller
{
  public function vote()
  {
    if (\Auth::check() && \Auth::user()->role == 'member'){
      $id = Vote::where('id_user', '=', \Auth::user()->id)->first();//dicek sudah pernah melakukan voting ?

      if ($id) {
        return redirect('/vote/thankyou');
      }
      $pemira = new Pemira;
      $pemiras = $pemira->get();

      return view('voter/vote', ['pemiras' => $pemiras]);
    }
    return redirect('/');
  }

  public function storeVote(Request $request)
  {
    $vote = new Vote;
    $vote->id_user = $request->voter;
    $vote->id_pemira = $request->pilihan;
    $vote->save();

    $pemira = Pemira::find($vote->id_pemira);
    $pemira->jumlah_vote = $pemira->jumlah_vote + 1; //menambahkan 1 suara
    $pemira->update();

    return redirect('/vote/thankyou');
  }

  public function thankyouVote()
  {
    $vote = Vote::where('id_user', '=', \Auth::user()->id)->first();
    $time = strtotime($vote->created_at);
    $time_vote = date( "d-m-Y H:i:s", $time);

    \Auth::logout();

    return view('thankyou_vote', ['time' => $time_vote]);
  }

  public function count($id)
  {
    # code...
  }
}
