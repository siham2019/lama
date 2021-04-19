@extends('layout.dashboard')




@section('content')

  <div class="container text-right">
      
         <form method="POST" action="{{route('addActor',$serie)}}">
               @csrf
                      <h1>اضافة الممثل</h1>
                            @if ($actors->isEmpty())
    
                                <div class="alert alert-danger" role="alert">
                                       لقد تمت اضافة كل الممثلين
                                </div>

                            @else
    
    
                              <div class="form-group">
                                            <label for="actor">الممثل</label>
        
                                             @if (session('success'))
                                               <div class="alert alert-success" role="alert">
                                                        {{session('success')}}
                                               </div>     
                                             @endif
       
                                         <select id="actor" class="form-control" name="actor">
                                                @foreach ($actors as $actor)

                                                      <option value="{{$actor->id}}"> {{$actor->name}} </option>

                                                 @endforeach
                                          </select>
                                </div>
                               <button type="submit" class="btn btn-primary container mb-5">تأكيد</button>
                             </form>

                          </div>

    
                  @endif
     


@endsection

    
