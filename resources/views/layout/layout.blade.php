<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> لمة - @yield('title') </title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
     <link rel="stylesheet" href="{{ url('/css.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg  mb-3">
    
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse ">
            <ul class="navbar-nav ml-auto  ">
                @if (!Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="/login" tabindex="-1">تسجيل الدخول</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}" tabindex="-1">                    لوحة ادارة المحتوى
                    </a>
                </li>
                @endif
         
                <li class="nav-item">
                    <a class="nav-link" href="/">جميع المسلسلات </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('episodeLatest')}}" tabindex="-1" >أخر الحلقات</a>
                </li>
              
            </ul>
        </div>
        <div class="navbar-brand ml-3 text-light"> 

                  <div >
                    <p class="m-0 n d-flex border-left pl-2">
                        <img src="{{url('\f.png')}}" alt="فانوس" >

                        <span class="m-0">
                            لمة
                        </span>
                    </p>
                    <p class="m-0 v">رمضان كريم</p>
                </div>
       
        
        
        
        
        
        </div>
    </nav>

  @yield('content')




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>