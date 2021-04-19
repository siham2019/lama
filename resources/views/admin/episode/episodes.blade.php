@extends('layout.dashboard')

@section('content')

<div class="container text-right  mt-5">
    <h1>قائمة  الحلقات</h1>
    <a href="/admin/serie/{{$episodes->id}}/episode/add" class="btn btn-info float-left">اضافة الحلقة</a>
    <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">الحلقة</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
             

           @foreach ($episodes->episodes as $episode)
              
           
          <tr>
            <th scope="row">{{$episode->id}}</th>
            <td colspan="3">
            
                <div>
                       
                      <p class="mr-5">الحلقة   {{$episode->number}} </p>
                      <img src="{{$episode->image_url}}" alt="صورة الحلقة" class="w-25 ">
                </div>
             
            
            </td>
             
            <td>
                <div class="d-flex ">
                       
                     

                       
                            <a  href="/admin/episode/{{$episode->id}}/update" class="btn btn-primary ml-2" type="submit">تعديل </a>

                      
                      
                        <form action="/admin/episode/remove" method="post">

                            @csrf
                            <input type="hidden" name="id" value="{{$episode->id}}">
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