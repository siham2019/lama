@extends('layout.layout')


@section('title')
    جميع المسلسلات
@endsection

@section('content')
    <div class="container f">
        <div class="row ">

          @foreach ($series as $serie)
            <div class="col-3 ml-2 mt-3 s">
                   <a href="{{ route('serie',$serie) }}"> <img src="{{url($serie->url_image)}}" class="h-60 " alt="" srcset="">
                    <div class="t ">مسلسل {{ $serie->title }}</div></a>
            </div>
          @endforeach
            
         
            
        </div>
    </div>
@endsection