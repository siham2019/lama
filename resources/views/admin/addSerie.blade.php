@extends('layout.dashboard')

@section('content')

  <div class="container text-right">
      
<form method="POST" action="{{ route('addSerie') }}">
  @csrf
    <h1>اضافة المسلسل</h1>

    <div class="form-group">
      <label>اسم المسلسل</label>
      <input type="text" class="form-control"  name="title" placeholder="اسم المسلسل" required>
    </div>
 
     <div class="form-group">
        <label>رابط القناة على اليوتيوب</label>
        <input type="url" class="form-control"  name="url_youtube" placeholder="" required>
      </div>

      <div class="form-group">
        <label >الفيسبوك</label>
        <input type="url" class="form-control" name="url_others" placeholder="" >
      </div>
      <div class="form-group">
        <label >رابط الصورة</label>
        <input type="url" class="form-control" name="url_image" placeholder="رابط الصورة" required>
      </div>
      <div class="form-group">
        <label >ساعة البث</label>
        <input type="time" class="form-control" name="hour_begin" placeholder="ساعة البث" required>
      </div>
      <div class="form-group">
        <label >فناة البث</label>
        <input type="text" class="form-control" name="chaine_tv" placeholder="قناة البث" required>
      </div>
      <div class="form-group">
        <label >رابط الاعلان</label>
        <input type="url" class="form-control" name="url_trailer" placeholder="رابط الاعلان" required>
      </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">وصف</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" required></textarea>
    </div>
 <button type="submit" class="btn btn-primary container mb-5">تأكيد</button>
  </form>

  </div>



@endsection