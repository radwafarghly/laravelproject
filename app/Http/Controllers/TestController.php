<?php

namespace App\Http\Controllers;

use DB;
use Request;
use App\Project;


class TestController extends Controller
{
//    public function test(){
//     $x=55;
//     return view('test.test',compact('x'));
//    }
//    public function testbook(){
//     $x=DB::table('book')->select('user_id')->get();
    
//     return view('test.test',compact('x'));
//    }


public function index(Request $request)
{
 $projects=Project::with('compound')->get();
   $query = Request::input('search');
  $testsearch=DB::table('projects')
  ->join('compounds','projects.id','=','compounds.project_id')
  ->join('buildings','compounds.id','=','buildings.compound_id')
  ->join('units','buildings.id','=','units.building_id')
  ->select('units.id','units.number','units.size','units.price','units.floor','units.rooms','units.img','units.extra','projects.name AS pro_name','buildings.number AS bu_num','compounds.name as com_name','projects.governate AS pro_governate','projects.city AS pro_city','units.user_id')
  ->where('projects.city', 'LIKE', '%' . $query . '%')
  ->orWhere('projects.governate', 'LIKE', '%' . $query . '%')
  ->orWhere('units.price', 'LIKE', '%' . $query . '%')->get();
  return view('test.test', compact('testsearch', 'query','projects'));
 }
}



// Gets the query string from our form submission 
  // Returns an array of articles that have the query string located somewhere within 
  // our articles titles. Paginates them so we can break up lots of search results.

//   select units.number, units.size ,units.price ,units.floor,units.rooms ,units.img ,units.extra ,projects.name as pro_name,buildings.number,compounds.name as com_name ,projects.governate 
//   from projects
//   JOIN compounds on projects.id=compounds.project_id
//   join buildings on compounds.id= buildings.compound_id 
//   JOIN units on units.building_id=buildings.id
//   WHERE projects.governate='Cairo'
 // $articles = DB::table('articles')->where('title', 'LIKE', '%' . $query . '%')->paginate(10);