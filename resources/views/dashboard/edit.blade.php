@extends('layouts.app') 
@section('content')
<div class="container">
  <h4> تعديل موقع</h4><br/>
  <form method="post" action="{{action('DashboardController@update', $id)}}" enctype="multipart/form-data">
    @csrf
    <input name="_method" type="hidden" value="PATCH">

    <div class="form-group">
      <label for="inputNameEn">الاسم بالانكليزي</label>
      <input type="text" class="form-control" id="inputNameEn" name="name_en" placeholder="أدخل الأسم" required value="{{$service->name_en}}">
    </div>
    <div class="form-group">
      <label for="inputNameFr">الاسم بالفرنسي</label>
      <input type="text" class="form-control" id="inputNameFr" name="name_fr" placeholder="أدخل الأسم" required value="{{$service->name_fr}}">
    </div>
    <div class="form-group">
      <label for="inputNameFa">الاسم بالفارسي</label>
      <input type="text" class="form-control" id="inputNameFa" name="name_fa" placeholder="أدخل الأسم" required value="{{$service->name_fa}}">
    </div>

    <div class="form-group">
      <label for="inputDetailsEn">التفاصيل بالانكليزي</label>
      <textarea class="form-control" id="inputDetailsEn" name="details_en" rows="2">{{$service->details_en}}</textarea>
    </div>
    <div class="form-group">
      <label for="inputDetailsFr">التفاصيل بالفرنسي</label>
      <textarea class="form-control" id="inputDetailsFr" name="details_fr" rows="2">{{$service->details_fr}}</textarea>
    </div>
    <div class="form-group">
      <label for="inputDetailsFa">التفاصيل بالفارسي</label>
      <textarea class="form-control" id="inputDetailsFa" name="details_fa" rows="2">{{$service->details_fa}}</textarea>
    </div>

    <div class="form-group">
      <label for="inputPhone">الموبايل</label>
      <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="أدخل الموبايل"  value="{{$service->phone}}">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputLat">خط العرض</label>
        <input type="text" class="form-control" id="inputLat" name="lat"   value="{{$service->lat}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputLng">خط الطول</label>
        <input type="text" class="form-control" id="inputLng" name="lng"   value="{{$service->lng}}">
      </div>
    </div>
    <button id='btnLocation' type="button" class="btn btn-link">تحديد الموقع</button>
    <div class="form-group">
      <label for="inputCat">الصنف</label>

      <select id="inputCat" name="category" class="form-control" required>
                          <option selected disabled></option>
                          <option value="1" @if($service->category==1) selected @endif>المزارات</option>
                          <option value="2" @if($service->category==2) selected @endif>الفنادق</option>
                          <option value="3" @if($service->category==3) selected @endif>الصحيات</option>
                          <option value="4" @if($service->category==4) selected @endif>النقل</option>
                          <option value="5" @if($service->category==5) selected @endif>الهدايا و النذور</option>
                          <option value="6" @if($service->category==6) selected @endif>مراكز توزيع الكتب المجانيه</option>
                          <option value="7" @if($service->category==7) selected @endif>المطاعم</option>
                          <option value="8" @if($service->category==8) selected @endif>الضيافه</option>
                          <option value="9" @if($service->category==9) selected @endif>مدن الزائرين</option>
                          <option value="10" @if($service->category==10) selected @endif>أدارة العتبات</option>
                          <option value="11" @if($service->category==11) selected @endif>مداخل المدينه</option>
                          <option value="12" @if($service->category==12) selected @endif>المراكز الطبيه</option>
                        </select>
    </div>
    <div class="form-group">
      <label for="inputfilename">الصوره</label>
      <input type="file" name="img">
    </div>
    <button type="submit" class="btn btn-success btn-block">حفظ</button>
  </form>
</div>




<script type="text/javascript">
  $(function() {
    $('#btnLocation').click(function(){
      getLocation();
    });
});  
function getLocation() {
console.log('geolocat');
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position){
          $('#inputLat').val(position.coords.latitude);
          $('#inputLat').attr('readonly','readonly');
          $('#inputLng').val(position.coords.longitude);
          $('#inputLng').attr('readonly','readonly');
    })
  } else {
    console.log("Geolocation is not supported by this browser.") ;
  }
}

  </script>
@endsection