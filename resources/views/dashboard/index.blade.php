@extends('layouts.app')

@section('content')
<div class="container">
 
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div class="row">
       <div class="col-md-12 mx-2">
        <a href="{{action('ServiceController@create')}}" class="btn btn-primary">أضافه</a>
      </div>
      @foreach($services as $service)

<div class="col-md-6 col-sm-12">
      <div class="card shadow rounded p-2 m-2" style="">
          <div class="card-body">
            <h3 class="card-title">{{$service['name']}}</h4>
            <p class="card-text">{{$service['details']}}</p>

            <div class="d-flex flex-row justify-content-end w-25" style="margin: 0 -4px;">

                <a href="{{action('ServiceController@edit', $service['id'])}}" class="btn btn-sm  btn-warning mx-1  mx-sm-2">تعديل</a>

                <form  action="{{action('ServiceController@destroy', $service['id'])}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-sm btn-danger mx-1 mx-sm-2" type="submit">حذف</button>
                  </form>
                
            </div>

            
            
            
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection