<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailUpdateRequest;


class EmailController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth','verified']);
   }

   public function edit()
   {
      return view('settings.email', ['user' => auth()->user()]);
   }

   public function update(EmailUpdateRequest $request)
   {
      $accountData = $request->handleRequest();
      $request->user()->update($accountData);

      return back()->with('success', "Email Address has been updated");
   }
}