@extends('layout.layout')


@section('title')
آخر الحلقات 
@endsection


@section('content')
{{-- مسلسل {{$episodeس->title}} - حلقة {{$episodeس->number}}
 --}}
 
 <div class="container f">
    <div class="row ">

      @foreach ($episodes as $episode)
        <div class="col-3 ml-2 mt-3 s">
               <a href="{{ route('episode',[$episode->serie,$episode]) }}"> <img src="{{url($episode->image_url)}}" class="h-60 " alt="" srcset="">
                <div class="t py-2">مسلسل {{ $episode->serie->title }}- حلقة {{$episode->number}}</div></a>
        </div>
      @endforeach
        
     
        
    </div>
</div>
 
 
 
 
 @endsection