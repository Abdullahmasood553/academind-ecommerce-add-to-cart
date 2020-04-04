@extends('layouts.master')
@section('content')
<div class="row">
       <div class="col-md-4 col-md-offset-4">
           <h1>Sign Up</h1>
           @if(count($errors) > 0)  
           <div class="alert alert-danger">
               @foreach($errors->all() as $error)    
               <p>{{ $error }}</p>
           </div>
           @endforeach
           @endif
           <form action="{{ route('user.login') }}" method="POST">
               @csrf
               <div class="form-group">
                   <label for="">Email</label>
                   <input type="text" id="email" name="email" class="form-control">
               </div>

               <div class="form-group">
                       <label for="password">Password</label>
                       <input type="password" id="password" name="password"  class="form-control">
               </div>
               <button type="submit" class="btn btn-primary">Login</button>
           </form>
           <p>Dont have an account <a href="{{ route('user.register') }}"></a>Sigun Up Instead</p>
       </div>
   </div>

   @endsection