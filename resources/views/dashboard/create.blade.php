@extends('layouts.app') 
@section('content')
<div class="container">
  <h4>أضافة موقع جديد</h4><br/>
  <form method="post" action="{{action('DashboardController@store')}}" enctype="multipart/form-data">
    @csrf
   
    <div class="form-group">
      <label for="inputNameEn">الاسم بالانكليزي</label>
      <input type="text" class="form-control" id="inputNameEn" name="name_en" placeholder="أدخل الأسم" required>
    </div>
    <div class="form-group">
      <label for="inputNameFr">الاسم بالفرنسي</label>
      <input type="text" class="form-control" id="inputNameFr" name="name_fr" placeholder="أدخل الأسم" required>
    </div>
    <div class="form-group">
      <label for="inputNameFa">الاسم بالفارسي</label>
      <input type="text" class="form-control" id="inputNameFa" name="name_fa" placeholder="أدخل الأسم" required>
    </div>


    <div class="form-group">
      <label for="inputDetailsEn">التفاصيل بالانكليزي</label>
      <textarea class="form-control" id="inputDetailsEn" name="details_en" rows="2"></textarea>
    </div>
    <div class="form-group">
      <label for="inputDetailsFr">التفاصيل بالفرنسي</label>
      <textarea class="form-control" id="inputDetailsFr" name="details_fr" rows="2"></textarea>
    </div>
    <div class="form-group">
      <label for="inputDetailsFa">التفاصيل الفارسي</label>
      <textarea class="form-control" id="inputDetailsFa" name="details_fa" rows="2"></textarea>
    </div>

    <div class="form-group">
      <label for="inputPhone">الموبايل</label>
      <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="أدخل الموبايل">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputLat">خط العرض</label>
        <input type="text" class="form-control" id="inputLat" name="lat">
      </div>
      <div class="form-group col-md-6">
        <label for="inputLng">خط الطول</label>
        <input type="text" class="form-control" id="inputLng" name="lng">
      </div>
    </div>
    <button id='btnLocation' type="button" class="btn btn-link">تحديد الموقع</button>
    <div class="form-group">
      <label for="inputCat">الصنف</label>
      <select id="inputCat" name="category" class="form-control" required>
                              <option selected disabled></option>
                              <option value="1">المزارات</option>
                              <option value="2">الفنادق</option>
                              <option value="3">الصحيات</option>
                              <option value="4">النقل</option>
                              <option value="5">الهدايا و النذور</option>
                              <option value="6">مراكز توزيع الكتب المجانيه</option>
                              <option value="7">المطاعم</option>
                              <option value="8">الضيافه</option>
                              <option value="9">مدن الزائرين</option>
                              <option value="10">أدارة العتبات</option>
                              <option value="11">مداخل المدينه</option>
                              <option value="12">اخرى</option>
                            </select>
    </div>
    <div class="form-group">
      <label for="inputImg">الصوره</label>
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