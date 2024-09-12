<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
   use RegistersUsers;

   protected $redirectTo = RouteServiceProvider::HOME;


   public function __construct()
   {
      $this->middleware('guest');
   }

   protected function validator(array $data)
   {
      return Validator::make($data,[
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
   }

   /*Create new user instance after valid registration*/
   protected function create(array $data)
   {
      $nameParts = explode(" ", $data['name']);
      $firstName = array_shift($nameParts);
      $lastName  = implode(" ", $nameParts);

      return User::create([
         'first_name' => $firstName,
         'last_name'  => $lastName,
         'email'      => $data['email'],
         'password'   => Hash::make($data['password']),
      ]);
   }
}