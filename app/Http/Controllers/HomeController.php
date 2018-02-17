<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /* public function __construct()
    {
        $this->middleware('auth');
    } 
  */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // SELECT projects.name FROM projects
       /* SELECT compounds.name
       FROM projects 
       JOIN compounds ON compounds.project_id=projects.id
       WHERE projects.name='نتتااااااااالاتنمك'
      */

      

        $projects=Project::with('compound')->get();
       
     /*   $compounds=DB::table('compounds')
        ->join('projects','compounds.project_id','=','projects.id')
        ->select('compounds.name AS comp_name')
       ->where('projects.name','radwa')        
        ->get();*/
        /*select compounds.name from compounds ,projects WHERE compounds.project_id =projects.id and projects.name='radwa'
*/
        return view('home',compact('projects'));
    }
}
