@extends('layouts.app')

@section('content')
    <div class="container">
            <h4>أضافة موقع جديد</h4><br/>
            <form method="post" action="{{action('DashboardController@store')}}" enctype="multipart/form-data">
              @csrf
                    <div class="form-group">
                            <label for="inputName">الأسم</label>
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="أدخل الأسم" required>
                    </div>
                    <div class="form-group">
                            <label for="inputDetails">التفاصيل</label>
                            <textarea class="form-control" id="inputDetails" name="details" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="inputPhone">الموبايل</label>
                      <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="أدخل الموبايل">
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputLat">خط العرض</label>
                        <input type="text" class="form-control" id="inputLat" name="lat"  required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputLng">خط الطول</label>
                        <input type="text" class="form-control" id="inputLng" name="lng"  required>
                      </div>
                    </div>
                    <button id='btnLocation' type="button" class="btn btn-link">تحديد الموقع</button>
                    <div class="form-group">
                            <label for="inputCat">الصنف</label>
                            <select id="inputCat" name="category" class="form-control">
                              <option selected>اختر...</option>
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