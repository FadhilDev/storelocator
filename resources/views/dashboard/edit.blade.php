@extends('layouts.app') 
@section('content')
<div class="container">
  <h4> تعديل موقع</h4><br/>
  <form method="post" action="{{action('ServiceController@update', $id)}}" enctype="multipart/form-data">
    @csrf
    <input name="_method" type="hidden" value="PATCH">

    <div class="form-group">
      <label for="inputName">الأسم</label>
      <input type="text" class="form-control" id="inputName" name="name" placeholder="أدخل الأسم" required value="{{$service->name}}">
    </div>
    <div class="form-group">
      <label for="inputDetails">التفاصيل</label>
      <textarea class="form-control" id="inputDetails" name="details" rows="3" required>{{$service->details}}</textarea>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputLat">خط العرض</label>
        <input type="text" class="form-control" id="inputLat" name="lat" required required value="{{$service->lat}}">
      </div>
      <div class="form-group col-md-6">
        <label for="inputLng">خط الطول</label>
        <input type="text" class="form-control" id="inputLng" name="lng" required required value="{{$service->lng}}">
      </div>
    </div>
    <button id='btnLocation' type="button" class="btn btn-link">تحديد الموقع</button>
    <div class="form-group">
      <label for="inputCat">الصنف</label>
      <select id="inputCat" name="category" class="form-control">
                          <option selected>اختر...</option>
                          <option value="1"  @if($service->category==1) selected @endif>فنادق</option>
                        </select>
    </div>
    <div class="form-group">
      <label for="inputfilename">الصوره</label>
      <input type="file" name="filename">
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