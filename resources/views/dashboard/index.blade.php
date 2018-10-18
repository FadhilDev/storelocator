@extends('layouts.app')

@section('content')
<div class="container">
 
    <br />
    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ \Session::get('success') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><br />
     @endif
     <div class="row">
       <div class="col-md-12 mx-2">
        <a href="{{action('DashboardController@create')}}" class="btn btn-primary">أضافه</a>
      </div>
      @foreach($services as $service)

<div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card shadow rounded p-2 m-2">
        <img class="card-img-top" style="height:20rem"
        src=
        @if($service->filename)
        {{asset('storage/imgs/'.$service->filename)}}
         @else
         {{asset('storage/imgs/empty-image.png')}}
          @endif
        alt="Card image cap">
          <div class="card-body">
              <h3 class="card-title">{{$service['name_en']}}</h4>
                <p class="card-text">{{$service['details_en']}}</p>
                <hr/>
            <h3 class="card-title">{{$service['name_fr']}}</h4>
            <p class="card-text">{{$service['details_fr']}}</p>
            <hr/>
              <h3 class="card-title">{{$service['name_fa']}}</h4>
                <p class="card-text">{{$service['details_fa']}}</p>

            <div class="d-flex flex-row justify-content-end" style="margin: 0 -4px;">

                <a href="{{action('DashboardController@edit', $service['id'])}}" class="btn btn-sm  btn-warning mx-1  mx-sm-2">تعديل</a>

                <form  action="{{action('DashboardController@destroy', $service['id'])}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-sm btn-danger mx-1 mx-sm-2" type="submit">حذف</button>
                  </form>
                
            </div>

            
            
            
          </div>
        </div>
      </div>
      @endforeach
      <div class="col-md-12 mx-2">
      {{ $services->links() }}
    </div>
    </div>
  </div>
@endsection