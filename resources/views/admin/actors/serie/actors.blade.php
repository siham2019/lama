@extends('layout.dashboard')

@section('content')

<div class="container text-right  mt-5">
    <h1>قائمة  الممثلين</h1>
    
    @if ($series->actors)

    <a href="/admin/serie/{{$series->id}}/actor/add" class="btn btn-info float-left">اضافة الممثل</a>

    @endif

    <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الممثل</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
             

           @foreach ($series->actors as $actor)
              
           
          <tr>
            <th scope="row">{{$actor->id}}</th>
            <td colspan="3">
            
                <div>
                       
                      <p class="mr-5">   {{$actor->name}} </p>
                      <img src="{{$actor->image_url}}" alt="صورة الحلقة" class="w-25 ">
                </div>
             
            
            </td>
             
            <td>
                <div class="d-flex ">
  
                        <form action="/admin/serie/{{$series->id}}/actor/{{$actor->id}}/remove" method="post">

                            @csrf
                            <button class="btn btn-danger ml-2" type="submit">الحذف</button>
                        </form>

                </div>
            </td>


            
          </tr>


           @endforeach

   
        </tbody>
      </table>


</div>

@endsection