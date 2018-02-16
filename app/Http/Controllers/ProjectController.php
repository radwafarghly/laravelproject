<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Datatables;
use DB;


class ProjectController extends Controller
{
    public function index(Request $request)

    {

        $project = Project::orderBy('id','DESC')->paginate(100);

        return view('admin.project.index',compact('project'))

            ->with('i', ($request->input('page', 1) - 1) * 5);

    }


   #add projects
   

   public function create()

   {


       return view('admin.project.add');

   }

   public function store(Request $request)

   {

       $this->validate($request, [

           'name' => 'required|unique:roles,name',

           'governate' => 'required',

           'city' => 'required',

           'img' => 'required',

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


       $project = new Project;

       $project->name = $request->input('name');

       $project->governate = $request->input('governate');

       $project->city = $request->input('city');

       $project->img = $request->input('img');
       $project->img=$fileNameStore;
       $project->save();




       return redirect()->route('project.index')

                       ->with('success','Project created successfully');

   }


   public function edit($id)

   {

      $project = Project::find($id);

     return view('admin.project.edit' , compact('project'));

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
        
                   'governate' => 'required',
        
                   'city' => 'required',
        
                   'img' => 'required',    
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
              //Project::find($id)->update($request->all());
              $project=Project::find($id);
              $project->name = $request->input('name');
              
              $project->governate = $request->input('governate');
              
              $project->city = $request->input('city');             
              $project->img=$fileNameStore;
              $project->save();  
               return redirect()->route('project.index')
                               ->with('success','Project updated successfully');
   }

  
   public function destroy($id)

   {

       DB::table("projects")->where('id',$id)->delete();

       return redirect()->route('project.index')

                       ->with('success','project deleted successfully');
   }
   public function showDetailsPro($project_name)
   {
       //die($project_name);
      /* SELECT projects.city,compounds.name,compounds.location,compounds.img
       FROM projects 
       JOIN compounds ON compounds.project_id=projects.id
       WHERE projects.name='نتتااااااااالاتنمك'*/
       /*projects=select *from projects
     where projects.name='jjjj'*/

       $comp=DB::table('projects')
       ->join('compounds','compounds.project_id','=','projects.id')
       ->select('projects.city AS pro_city','compounds.name AS comp_name','compounds.location AS comp_location','compounds.img AS comp_img')
       ->where('projects.name',$project_name)
       ->get();
       return view('user.showDetailsProj',compact('project_name','comp'));
   }

   public function showDetailsPro2(){
    return view('user.showproject');

   }
   
}