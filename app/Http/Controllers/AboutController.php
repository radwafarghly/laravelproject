<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AboutController extends Controller
{

	


    public function index(){

        $projects=DB::table('projects')
        ->select('projects.name')->get();

        return view('user.about',compact('projects'));
        
        

    }
}
