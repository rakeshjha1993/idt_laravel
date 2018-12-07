<?php

namespace App\Http\Controllers;

use App\Report;
use App\City;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
    {
      $reports = DB::table('reports')->get();
      return view('reports.index', ['reports' => $reports]);
    }


  public function createForm(){
    $months = ['Jan','Feb','March','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec'];
    $cities = DB::table('cities')->get();

    return view('reports.reportForm',['months' => $months,'cities' => $cities]);
  }

  public function create(Request $request)
    {

        // var_dump($request->file('report'));
         $path = $request->file('report')->store('UploadedReports');
        // var_dump($request->file);
        $report = new Report($request->all());
        $report->user_id = Auth::id();
        $report->file_url = $path;
        $report->save();
        return redirect('/reports');
    }
}


 ?>
