@extends('layout.dashboard')

@section('content')

  <div class="container text-right">
      
<form method="POST" action="{{ route('updateEpisode',$episode->id) }}">
  @csrf
    <h1>تعديل الحلقة</h1>

     @if (session('success'))
         <div class="alert alert-success" role="alert">
              {{session('success')}}
         </div>     
     @endif
    
     <div class="form-group">
      <label>رقم الحلقة</label>
      <input type="number" class="form-control"  name="number" placeholder="رقم الحلقة" value="{{$episode->number}}" required>
    </div>
 
     <div class="form-group">
        <label>رابط الحلقة على اليوتيوب</label>
        <input type="url" class="form-control"  name="url" placeholder="" value="{{$episode->url}}" required>
      </div>


      <div class="form-group">
        <label >رابط الصورة</label>
        <input type="url" class="form-control" name="image_url" value="{{$episode->image_url}}" placeholder="رابط الصورة" required>
      </div>
  
   
    
 <button type="submit" class="btn btn-primary container mb-5">تأكيد</button>
  </form>

  </div>



@endsection