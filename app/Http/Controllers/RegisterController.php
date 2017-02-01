<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegisterController extends Controller
{
    public function createUser(Request $request)
    {
      $data           = new User;
      $data->nim      = $request->nim;
      $data->nama     = $request->nama;
      $data->progdi   = $request->progdi;
      $data->password = bcrypt($request->password);
      $data->role     = 'member';
      $data->save();

      return view('success_login');
    }
}
