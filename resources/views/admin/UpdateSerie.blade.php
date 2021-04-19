@extends('layout.dashboard')

@section('content')

  <div class="container text-right">
      
<form method="POST" action="{{ route('updateSerie',$serie->id) }}">
  @csrf
    <h1>تعديل المسلسل</h1>

    <div class="form-group">
      <label>اسم المسلسل</label>
      <input type="text" class="form-control"  name="title" value="{{$serie->title}}" placeholder="اسم المسلسل" required>
    </div>
 
     <div class="form-group">
        <label>رابط القناة على اليوتيوب</label>
        <input type="url" class="form-control"  name="url_youtube" placeholder="" value="{{$serie->url_youtube}}" required>
      </div>

      <div class="form-group">
        <label >الفيسبوك</label>
        <input type="url" class="form-control" name="url_others" placeholder="" value="{{$serie->url_others}}">
      </div>
      <div class="form-group">
        <label >رابط الصورة</label>
        <input type="url" class="form-control" name="url_image" placeholder="رابط الصورة" value="{{$serie->url_image}}" required>
      </div>
      <div class="form-group">
        <label >ساعة البث</label>
        <input type="time" class="form-control" name="hour_begin" placeholder="ساعة البث"  value="{{$serie->hour_begin}}" required>
      </div>
      <div class="form-group">
        <label >فناة البث</label>
        <input type="text" class="form-control" name="chaine_tv" value="{{$serie->chaine_tv}}" placeholder="قناة البث" required>
      </div>
      <div class="form-group">
        <label >رابط الاعلان</label>
        <input type="url" class="form-control" name="url_trailer" value="{{$serie->url_trailer}}" placeholder="رابط الاعلان" required>
      </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">وصف</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"   required>{{$serie->description}}</textarea>
    </div>
 <button type="submit" class="btn btn-primary container mb-5">تأكيد</button>
  </form>

  </div>



@endsection