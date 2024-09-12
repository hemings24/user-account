<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;


class EmailUpdateRequest extends FormRequest
{
   /*Determine if user is authorized to make this request*/
   public function authorize()
   {
      return true;
   }

   /*Get validation rules that apply to the request*/
   public function rules()
   {
      return[
         'email' => ['required','string','email','max:255', Rule::unique('users')
         ->ignore($this->user()->id)],
      ];
   }
   
   public function handleRequest()
   {
      $accountData = $this->validated();

      return $accountData;    
   }
}