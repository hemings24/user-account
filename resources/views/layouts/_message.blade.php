@if($message = session('success'))
   <div class="alert alert-success" role="alert">{{$message}}</div>
@elseif($message = session('error'))
   <div class="alert alert-danger" role="alert">{{$message}}</div>
@endif