@extends('layouts.app')

@section('content')
  <div class="container">
          {!! Form::open(array('action' => 'ReportController@create', 'method' => 'post', 'enctype' => "multipart/form-data")) !!}
          <div class="row">
            <div class="input-group col-md-12">
              {!! Form::text('searchterm','Enter Location to Search',array('id'=>'searchterm_title','class'=>'form-control', 'placeholder' => 'Enter Location To Search')) !!}
              <div class="input-group-append">
                {!! Form::submit('Click Me!', array('class' => 'btn btn-primary')) !!}
              </div>
            </div>
          </div>
          {!! Form::close() !!}

        <div class="row mt-4">
          <div class="col-md-4">
            <ul class="list-group">
              @foreach ($reports as $report)
                <li class="list-group-item ">{{$report->reportTitle}}<small class="text-muted"> {{ $report->tenure_from.'-'.$report->tenure_to.' '}} </small></li>
              @endforeach
            </ul>
          </div>

        </div>
  </div>
@endsection
