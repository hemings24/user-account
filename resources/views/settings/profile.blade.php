@extends('layouts.main')
@section('title', 'User Account | Settings > Update Profile')
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
                  <a href="{{route('settings.profile.edit')}}" class="list-group-item list-group-item-action active">Profile</span></a>
                  <a href="{{route('settings.email.edit')}}" class="list-group-item list-group-item-action">Email</span></a>
                  <a href="{{route('settings.password.edit')}}" class="list-group-item list-group-item-action">Password</span></a>
               </div>
            </div>
         </div>

         <div class="col-md-9">
            @include('layouts._message')
            <form action="{{route('settings.profile.update')}}" method="POST" enctype="multipart/form-data">
               @method('PUT')
               @csrf
               <div class="card">
                  
                  <div class="card-header card-title">
                     <strong>Update Profile</strong>
                  </div>

                  <div class="card-body">
                     <div class="row">

                        <div class="col-md-8">

                           <div class="form-group">
                              <label for="first_name">First Name</label>
                              <input name="first_name" type="text" value="{{old('first_name',$user->first_name)}}" id="first_name" class="form-control @error('first_name') is-invalid @enderror" autocomplete="first_name">
                              @error('first_name')
                                 <span class="invalid-feedback">{{$message}}</span>
                              @enderror
                           </div>

                           <div class="form-group">
                              <label for="last_name">Last Name</label>
                              <input name="last_name" type="text" value="{{old('last_name',$user->last_name)}}" id="last_name" class="form-control @error('last_name') is-invalid @enderror" autocomplete="last_name">
                              @error('last_name')
                                 <span class="invalid-feedback">{{$message}}</span>
                              @enderror
                           </div>

                           <div class="form-group">
                              <label for="company">Company</label>
                              <input name="company" type="text" value="{{old('company',$user->company)}}" id="company" class="form-control" autocomplete="company">
                           </div>

                        </div>

                        <div class="offset-md-1 col-md-3">
                           <div class="form-group">
                              <label for="profile_image">Profile Image</label>
                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                 <div class="fileinput-new img-thumbnail">
                                    <img src="{{$user->profileUrl()}}" alt="...">
                                 </div>
                                 <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width:150px;max-height:150px;"></div>
                                 <div class="mt-2">
                                    <span class="btn btn-outline-secondary btn-file">
                                       <span class="fileinput-new">Select image</span>
                                       <span class="fileinput-exists">Change</span>
                                       <input name="profile_image" type="file" accept="image/*">
                                    </span>
                                    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                 </div>
                              </div>
                              @error('profile_image')
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
                                 <button type="submit" class="btn btn-success">Update Profile</button>
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