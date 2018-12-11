<?php

namespace App\Http\Controllers;
use App\Report;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpenReportController extends Controller
{
    //
    public function index()
      {
        $reports = DB::table('reports')->get();
        return view('reports.index', ['reports' => $reports]);
      }
}
