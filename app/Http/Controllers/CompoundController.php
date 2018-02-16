<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compound;
use App\Project;
use DB;

class CompoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $compound = Compound::orderBy('id','DESC')->paginate(5);

        return view('admin.compound.index',compact('compound'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $project = Project::pluck('name','id');

        return view('admin.compound.add',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'img' => 'required',
            'project_id' => 'required'
        ]);

        if($request->hasFile('img')){
            $filenameWithExtension=$request->file("img")->getClientOriginalName();
            
            $fileName=pathinfo( $filenameWithExtension,PATHINFO_FILENAME);
            
            $extension =$request->file("img")->getClientOriginalExtension();
            
            $fileNameStore=$fileName.'_'.time().'.'.$extension;
            
            $path=$request->file("img")->storeAs('public/image', $fileNameStore);
            
         }
         else{
            $fileNameStore='no_image.jpg';
         }
        $compound = new Compound;
        
               $compound->name = $request->input('name');
               $compound->location = $request->input('location');
               $compound->project_id = $request->input('project_id');
               $compound->img = $request->input('img');
               $compound->img=$fileNameStore;
               $compound->save();
        return redirect()->route('compound.index')
                        ->with('success','Compound created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compound = Compound::find($id);
        $project = Project::pluck('name','id');
        $projectcompound = $compound->project->pluck('id','id')->toArray();
        return view('admin.compound.edit' , compact('compound','projectcompound', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'img' => 'required',
            'project_id' => 'required'
        ]);
       if($request->hasFile('img')){
            $filenameWithExtension=$request->file("img")->getClientOriginalName();
            $fileName=pathinfo( $filenameWithExtension,PATHINFO_FILENAME);
            $extension =$request->file("img")->getClientOriginalExtension();
            $fileNameStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file("img")->storeAs('public/image', $fileNameStore);
        }
        else{
            $fileNameStore='public/image/no_image.jpg';
        }


       $compound= Compound::find($id);
              $compound->name = $request->input('name');
              $compound->location = $request->input('location');
              $compound->project_id = $request->input('project_id'); 
              $compound->img=$fileNameStore;
              $compound->save();

              
        return redirect()->route('compound.index')
                        ->with('success','Compound updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("compounds")->where('id',$id)->delete();
        
               return redirect()->route('compound.index')
        
                               ->with('success','Compound deleted successfully');
    }





    public function showDetailsCom(){
        
                return view ('user.showcompound');
            }
}
