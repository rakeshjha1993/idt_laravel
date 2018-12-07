@extends('layouts.app')

@section('content')
  <div class="container">
    {!! Form::open(array('action' => 'ReportController@create', 'method' => 'post', 'enctype' => "multipart/form-data")) !!}
        <div class="row">
          <div class="form-group col-md-8">
            {!! Form::label('reportTitle','ReportTitle',array('id'=>'report_title_label','class'=>'')) !!}
            {!! Form::text('reportTitle','ReportTitle',array('id'=>'report_title','class'=>'form-control', 'placeholder' => 'Enter Description')) !!}
          </div>
          <div class="form-group col-md-4">
            {!! Form::label('Selectedcity','Select city',array('id'=>'Selectedcity_label','class'=>'')) !!}
            <select class="form-control" name="city">
              @if ($cities->count())

                   @foreach($cities as $city)
                       <option value="{{ $city->name }}" >{{ $city->name }}</option>
                    @endforeach
               @endif
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            {!! Form::label('tenure_from','Select Tenure From',array('id'=>'tenure_form_label','class'=>'')) !!}
            <select class="form-control" name="tenure_from">
                   @foreach($months as $month)
                       <option value="{{ $month }}" >{{ $month }}</option>
                    @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            {!! Form::label('tenure_to','Select Tenure To',array('id'=>'tenure_to_label','class'=>'')) !!}
            <select class="form-control" name="tenure_to">
                   @foreach($months as $month)
                       <option value="{{ $month }}" >{{ $month }}</option>
                    @endforeach
            </select>
          </div>
          <div class="form-group col-md-4">
            {!! Form::label('tenure_year','Select Year of Tenure',array('id'=>'tenure_year_label','class'=>'')) !!}
            <select class="form-control" name="tenure_year">
              @for ($ldate = date('Y'); $ldate >= 1980; $ldate--)
                   <option value="{{$ldate}}" >{{$ldate}}</option>
              @endfor
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            {!! Form::label('reportDescription','reportDescription',array('id'=>'report_description_label','class'=>'form-group')) !!}
            {!! Form::textarea('reportDescription','reportDescription',array('id'=>'report_description','class'=>'form-control', 'placeholder' => 'Enter Description')) !!}
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            {!! Form::file('report',array('class' => 'form-control-file')) !!}
          </div>
        </div>

        {!! Form::submit('Click Me!', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}
  </div>

@endsection
