<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
      //$data = array('nim' => $request->nim , 'password' => $request->password );

      if (\Auth::attempt(['nim' => $request->nim, 'password' => $request->password, 'role' => 'member'])) {
        return redirect()->intended('vote');
      }
      if (\Auth::attempt(['nim' => $request->username, 'password' => $request->password, 'role' => 'admin'])) {
        return redirect()->intended('list');
      }

      return back()->withInput();
    }

    public function logout()
    {
      \Auth::logout();

      return back();
      //return redirect('/');
    }
}
