@extends('layout.layout')


@section('title')
   مسلسل {{$serie->title}} - حلقة {{$episode->number}}
@endsection


@section('content')
    <div class="container f">
        <h3 class="mb-3">   مسلسل {{$serie->title}} - الحلقة {{$episode->number}}
        </h3>
        <div class="col-12 mb-5">
            <iframe width="990" height="470"
            src="{{$episode->url}}">
            </iframe>
        </div>
        <h3>باقي الحلقات</h3>
        <div>
            @foreach ($serie->episodes as $episod)
                @if ($episode->number!=$episod->number)
                <div class=" ml-2 mt-3  ep d-inline-block">
                    <a href="{{ route('episode',[$serie,$episod]) }}"> 
                          <img src="{{$episod->image_url}}" class="mb-2" alt="episode picture">
                            <p> الحلقة{{ $episod->number }}</p>
                   </a>
               </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection