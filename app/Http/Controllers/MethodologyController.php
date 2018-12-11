<?php



namespace App\Http\Controllers;
use App\Methodology;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MethodologyController extends Controller
{

  /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }


    //
   public function index()
    {
      $methodology = DB::table('methodologies')->get();
      $cities = DB::table('cities')->join('methodologies', 'methodologies.city' , '=', 'cities.id')->get();
      return view('methodology.index',['methodologies' => $methodology, 'cities' => $cities]);
    }

    public function createForm()
    {
      $cities = DB::table('cities')->get();
      return view('methodology.methodologyCreate', ['cities' => $cities]);
    }
     public function create(Request $request)
     {
       //var_dump($request->all());
       $methodology = new Methodology($request->all());
       $methodology->save();
       return redirect('/methodology');
     }
}
