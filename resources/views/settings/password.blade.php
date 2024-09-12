@extends('layouts.main')
@section('title', 'User Account | Settings > Update Password')
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
                  <a href="{{route('settings.email.edit')}}" class="list-group-item list-group-item-action">Email</span></a>
                  <a href="{{route('settings.password.edit')}}" class="list-group-item list-group-item-action active">Password</span></a>
               </div>
            </div>
         </div>

         <div class="col-md-9">
            @include('layouts._message')
            <form action="{{route('settings.password.update')}}" method="POST">
               @method('PUT')
               @csrf
               <div class="card">
                  
                  <div class="card-header card-title">
                     <strong>Update Password</strong>
                  </div>

                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-8">

                           <div class="form-group">
                              <label for="oldPasswordInput">Current Password</label>
                              <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" autocomplete="new-password">
                              @error('old_password')
                                 <span class="invalid-feedback">{{$message}}</span>
                              @enderror
                           </div>

                           <div class="form-group">
                              <label for="newPasswordInput">New Password</label>
                              <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput">
                              @error('new_password')
                                 <span class="invalid-feedback">{{$message}}</span>
                              @enderror
                           </div>

                           <div class="form-group">
                              <label for="confirmNewPasswordInput">Confirm New Password</label>
                              <input name="new_password_confirmation" type="password" class="form-control @error('new_password') is-invalid @enderror" id="confirmNewPasswordInput">
                           </div>

                        </div>
                     </div>
                  </div>

                  <div class="card-footer">
                     <div class="row">
                        <div class="col-md-8">
                           <div class="row">
                              <div class="col-md-offset-3 col-md-6">
                                 <button type="submit" class="btn btn-success">Update Password</button>
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