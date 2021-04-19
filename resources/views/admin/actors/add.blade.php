@extends('layout.dashboard')




@section('content')

  <div class="container text-right">
      
         <form method="POST" action="/admin/actor/add">
               @csrf
                      <h1>اضافة الممثل</h1>

                       @if (session('success'))
                           <div class="alert alert-success" role="alert">
                               {{ session('success') }}
                           </div>
                       @endif
                      
                       <div class="form-group">
                         <label for="name">اسم الممثل</label>
                         <input type="text" class="form-control" name="name" id="name"  placeholder="اسم الممثل" required>
                       </div>
                      
                       <div class="form-group">
                         <label for="image_url">رابط الصورة</label>
                         <input type="text" class="form-control" name="image_url" id="image_url" placeholder="رابط الصورة" required>
                       </div>
    
               <button type="submit" class="btn btn-primary container mb-5">تأكيد</button>
         </form>

    </div>



@endsection

    
