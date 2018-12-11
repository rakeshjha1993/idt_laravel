@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <ul class="list-group">
          @foreach ($cities as $city)
          {{ $city->city }}
            <li class="list-group-item " data-item= "{{ $city->id}}">{{$city->city}}<small class="text-muted"> {{ $city->city}} </small></li>
          @endforeach
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

@endsection
