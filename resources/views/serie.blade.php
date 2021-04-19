@extends('layout.layout')


@section('title')
   مسلسل {{$serie->title}}
@endsection

@section('content')
    <div class=" f">
        <div class="row ">
         <div class="col-4 mr-3 ser">
            <img src="{{url($serie->url_image)}}"  alt="" srcset="">
         </div>
         <div class="col-5 ">
             <div class="desc text-right p-3 text-light">
                 <div class="border-bottom d-flex justify-content-between">
                    <h3 class="pb-2"> مسلسل {{$serie->title}} </h3>
                    <div class="d-flex ">
                        <a href="{{$serie->url_youtube}}"><i class="fa fa-youtube-play ml-2" style="font-size:36px;color:red"></i></a>
                        <a href=""><i class="fa fa-facebook-official" style="font-size:36px"></i></a>

                    </div>
                 </div>
        
                <p class="text-justify mt-3">{{$serie->description}}</p>
                
                <div class="d-flex justify-content-end text-center mt-4">
                        <div class="ml-3">
                            <h5>قناة البث</h5>
                            <p>{{$serie->chaine_tv}}</p>
                        </div>
                        <div>
                            <h5>الموعد</h5>
                            <p>{{$serie->hour_begin}}</p>
                        </div>
                </div> 
            
            
            
            </div>
             <a  href="{{$serie->url_trailer}}" class="btn  container ia mt-3" data-toggle="modal" data-target="#exampleModal">
                 مشاهدة اعلان
             </a>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> اعلان</h5>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق الاعلان</button>

        </div>
        <div class="modal-body">
            <iframe width="470" height="470"
            src="{{$serie->url_trailer}}">
            </iframe>
        </div>
      
      </div>
    </div>
  </div>
         </div>
            <div class="col-2  text-center text-light">
                <h3 class="mb-3">الممثلين</h3>
                
                @foreach ($serie->actors as $actor)
                <div>
                    <img class="ar" src="{{ $actor->image_url }}" alt="actor picture" srcset="">
                    <p>{{$actor->name}}</p>
                </div>
                @endforeach
              

                </div>
            </div>
         
            
        </div>
        <div class="container f">
            <h3> الحلقات</h3>
         
                @foreach ($serie->episodes as $episode)
                <div class=" ml-2 mt-3  ep d-inline-block">
                    <a href="{{ route('episode',[$serie,$episode]) }}"> 
                          <img src="{{$episode->image_url}}" class="mb-2" alt="episode picture">
                            <p> الحلقة{{ $episode->number }}</p>
                   </a>
               </div>
                @endforeach
        
                 
                      
        </div>
    </div>
@endsection