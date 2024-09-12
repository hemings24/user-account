@extends('layouts.main')
@section('title', 'User Account | Settings > Update Email Address')
@section('content')
<div class="py-5">
   <div class="container">
      <div class="row">
         
         <div class="col-md-3">
            <div class="card">
               <div class="card-header">
                  Settings
               </div>
               <div class="list-group list-group-flush">
                  <a href="{{route('settings.profile.edit')}}" class="list-group-item list-group-item-action">Profile</span></a>
                  <a href="{{route('settings.email.edit')}}" class="list-group-item list-group-item-action active">Email</span></a>
                  <a href="{{route('settings.password.edit')}}" class="list-group-item list-group-item-action">Password</span></a>
               </div>
            </div>
         </div>

         <div class="col-md-9">
            @include('layouts._message')
            <form action="{{route('settings.email.update')}}" method="POST">
               @method('PUT')
               @csrf
               <div class="card">
                  
                  <div class="card-header card-title">
                     <strong>Update Email Address</strong>
                  </div>

                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-8">

                           <div class="form-group">
                              <label for="email">Email Address</label>
                              <input name="email" type="email" id="email" value="{{old('email',$user->email)}}" class="form-control @error('email') is-invalid @enderror" autocomplete="email">
                              @error('email')
                                 <span class="invalid-feedback">{{$message}}</span>
                              @enderror
                           </div>
                           
                        </div>
                     </div>
                  </div>

                  <div class="card-footer">
                     <div class="row">
                        <div class="col-md-8">
                           <div class="row">
                              <div class="col-md-offset-3 col-md-6">
                                 <button type="submit" class="btn btn-success">Update Email Address</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              
               </div>
            </form>
         </div>
      </div>
   </div>
</div>   
@endsection

@section('styles')
<link href="{{asset('css/jasny-bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('scripts')
<script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>
@endsection