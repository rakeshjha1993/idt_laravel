@extends('layouts.app')

@section('content')
  <div class="container">
          {!! Form::open(array('id'=>'address-search-form')) !!}
          <div class="row">
            <div class="input-group col-md-12">
              {!! Form::text('searchTerm','',array('id'=>'searchterm_title','class'=>'form-control', 'placeholder' => 'Enter Location To Search')) !!}
              <div class="input-group-append">
                {!! Form::submit('Click Me!', array('class' => 'btn btn-primary')) !!}
              </div>
            </div>
          </div>
          {!! Form::close() !!}
          <div class="row mb-4 mt-2 d-none" id="ajax-search-response">
            <div class="col-md-4 ">
              <span class="text-danger text-capitalize">Administrative Region for Your Location:</span>
            </div>
            <div class="col-md-8">
              <span class="text-secondary text-capitalize" id="ajax-search-response"></span>
            </div>
          </div>
        <div class="row mt-4">
          <div class="col-md-4">
            <ul class="list-group" id="report-list-item">
              @foreach ($reports as $report)
                <li class="list-group-item " data-url= "{{ $report->file_url}}" data-title="{{ $report->reportTitle}}" data-description="{{ $report->reportDescription}}">{{$report->reportTitle}}<small class="text-muted"> {{ $report->tenure_from.'-'.$report->tenure_to.' '}} </small></li>
              @endforeach
            </ul>
          </div>
          <div class="col-md-8">
            <div class="report-detail-box row d-none">
              <div class="col-md-8">
                <h1 id="report-detail-box-title" ></h1>
                <p id="report-detail-box-description" class="p-2"></p>
              </div>
              <div class="col-md-4 text-center">
                <a href="#" class="p-2" id="report-detail-box-download" download><i class="far fa-file-pdf fa-5x"></i></a>
              </div>
              <div class="col-md-12 text-center ">
                <a href="#report-display-box" data-toggle="collapse" class="py-2 btn btn-primary btn-lg btn-block" id="report-detail-toggle-view"><i class="fas fa-chevron-circle-down fa-1x mr-2"></i><span>Read Full Report</span></a>
              </div>
          </div>
            <embed id="report-display-box" class="collapse mt-2" src="../pdf/sample-3pp.pdf#page=2" type="application/pdf" width="100%" height="100%">
          </div>

        </div>
  </div>
@endsection
