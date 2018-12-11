@extends('layouts.app')

@section('content')
  <div class="container">
        {!! Form::open(array('action' => 'MethodologyController@createForm', 'method' => 'post')) !!}
          <div class="row">
            <div class="form-group col-md-6">
              {!! Form::label('Selectedcity','Select city',array('id'=>'Selectedcity_label','class'=>'')) !!}
              <select class="form-control" name="city">
                @if ($cities->count())
                     @foreach($cities as $city)
                         <option value="{{ $city->id}}" >{{ $city->city }}</option>
                      @endforeach
                 @endif
              </select>
            </div>
            <div class="form-group col-md-6">
                {!! Form::label('MethodologyYear','Select Year of Methodology',array('id'=>'medolodogy_year_label','class'=>'')) !!}
              <select class="form-control" name="for_year">
                @for ($ldate = date('Y'); $ldate >= 1980; $ldate--)
                     <option value="{{$ldate}}" >{{$ldate}}</option>
                @endfor
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              {!! Form::label('Methodology','MethodologyInput',array('id'=>'report_description_label','class'=>'form-group')) !!}
              {!! Form::textarea('body','',array('id'=>'methodology_input_textarea','class'=>'form-control', 'placeholder' => 'Enter Report Body')) !!}
            </div>
          </div>
          {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
        {!! Form::close() !!}
  </div>
@endsection
