<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
   use AuthenticatesUsers;

   protected $redirectTo = RouteServiceProvider::HOME;

   
   public function __construct()
   {
      $this->middleware('guest')->except('logout');
   }

   protected function loggedOut(Request $request)
   {
      return redirect("/");
   }
}