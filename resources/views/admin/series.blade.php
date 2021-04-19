@extends('layout.dashboard')

@section('content')

<div class="container text-right  mt-5">
    <h1>قائمة المسلسلات</h1>
    <a href="/admin/serie/add" class="btn btn-info float-left">اضافة المسلسل</a>
    <table class="table mt-2">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">اسم المسلسل</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
             

           @foreach ($series as $serie)
              
           
          <tr>
            <th scope="row">{{$serie->id}}</th>
            <td colspan="3">{{$serie->title}}</td>
             
            <td>
                <div class="d-flex ">
                       
                      <a href="/admin/serie/{{$serie->id}}/episodes" class="ml-2">عرض الحلقات</a>
                       <a href="/admin/serie/{{$serie->id}}/actors" class="ml-2">عرض الممثلين</a>

                       
                            <a  href="/admin/serie/{{$serie->id}}/update" class="btn btn-primary ml-2" type="submit">تعديل </a>

                      
                      
                        <form action="/admin/serie/remove" method="post">

                            @csrf
                            <input type="hidden" name="id" value="{{$serie->id}}">
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