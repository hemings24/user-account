@extends('layouts.main')
@section('title', 'User Account | Home')
@section('content')
<div class="container mt-5">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">

            <div class="card-header">{{__('Home')}}</div>
                
            <div class="card-body">
               @include('layouts._message')
            </div>

         </div>
      </div>
   </div>
</div>
@endsection