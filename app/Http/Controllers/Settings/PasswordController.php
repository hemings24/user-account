<?php

namespace App\Http\Controllers\Settings;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;


class PasswordController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth','verified']);
   }

   public function edit()
   {
      return view('settings.password', ['user' => auth()->user()]);
   }

   public function update(Request $request)
   {
      $request->validate([
         'old_password' => 'required|string|min:8',
         'new_password' => 'required|string|min:8|confirmed'
      ]);
   
      if(!Hash::check($request->old_password, auth()->user()->password)){
         return back()->with('error', "Current Password Doesn't Match");
      }

      User::whereId(auth()->user()->id)->update([
         'password' => Hash::make($request->new_password)
      ]);
 
      return back()->with('success', "Password has been updated");
   }
}