@extends('layout.layout')


@section('title')
  تسجيل الدخول
@endsection

@section('content')
   
              <form  class="f" method="post" action="{{route('login')}}">
                   <h3 class="text-center">تسجيل الدخول</h3>
          
                   @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">الايميل الالكتروني</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder=" email">
                     @error('email')
                         <div class="text-warning">
                           {{$message}}
                         </div>
                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">كلمة المرور</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                    @error('password')
                    <div class="text-warning">
                      {{$message}}
                    </div>
                @enderror
                 
                  </div>
                  @if (session('err'))
                  <div class="text-warning mb-3">
                   {{session('err')}}
                 </div>
                  @endif
                  <button type="submit" class="btn c container">تأكيد</button>
                </form>
     
@endsection