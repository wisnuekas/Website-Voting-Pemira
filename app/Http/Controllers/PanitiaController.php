<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pemira;

class PanitiaController extends Controller
{
  public function login()
  {
    return view('panitia/login');
  }

  public function input()
  {
    if (\Auth::check() && \Auth::user()->role == 'admin'){
      $pemira = new Pemira;
      $pemiras = $pemira->get();

      return view('panitia/input', ['pemiras' => $pemiras]);
    }
    return redirect('/login');
  }

  public function list()
  {
    if (\Auth::check() && \Auth::user()->role == 'admin'){
      $pemira = new Pemira;
      $pemiras = $pemira->get();

      return view('panitia/list', ['pemiras' => $pemiras]);
    }
    return redirect('/login');
  }

  public function edit($id)
  {
    if (\Auth::check() && \Auth::user()->role == 'admin'){
      $pemira = Pemira::find($id);
      $pemiras = Pemira::all();

      return view('panitia/edit', ['pemira' => $pemira,  'pemiras' => $pemiras]);
    }
    return redirect('/login');
  }

  public function view($id)
  {
    if (\Auth::check() && \Auth::user()->role == 'admin'){
      $pemira = Pemira::find($id);
      $pemiras = Pemira::all();
      
      return view('panitia/view', ['pemira' => $pemira, 'pemiras' => $pemiras]);
    }
    return redirect('/login');
  }

}
