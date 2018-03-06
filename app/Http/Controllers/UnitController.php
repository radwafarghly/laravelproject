<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Unit;
use App\Building;
use DB;
use App\Project;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $unit = Unit::orderBy('id','DESC')->paginate(200);
        
                return view('admin.unit.index',compact('unit'))
        
                    ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $building = Building::pluck('number','id');
        
                return view('admin.unit.add',compact('building'));
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
            'number' => 'required',
            'size' => 'required',
            'price' => 'required',
            'floor' => 'required',
            'img' => 'required',
            'rooms' => 'required',
                 
            'extra' => 'required',
            'building_id' => 'required',
    
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

         
         
        














         $unit = new Unit;
         $unit->number = $request->input('number');        
         $unit->size = $request->input('size');
         $unit->price = $request->input('price');
         $unit->floor = $request->input('floor');
         $unit->rooms = $request->input('rooms');
         $unit->extra = $request->input('extra');
         $unit->building_id = $request->input('building_id');
         $unit->img = $request->input('img');         
         $unit->img=$fileNameStore;
         $unit->save();

       // $input = $request->all();

       // $unit = Unit::create($input);

       /* foreach ($request->input('project') as $key => $value) {

            $compound->attachRole($value);
        }*/

        return redirect()->route('unit.index')

                        ->with('success','Unit created successfully');

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
        $unit = Unit::find($id);
        $building = Building::pluck('number','id');
        $unitbuilding = $unit->building->pluck('id','id')->toArray();
        return view('admin.unit.edit' , compact('unit','unitbuilding', 'building'));
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
            'number' => 'required',
            'size' => 'required',
            'price' => 'required',
            'floor' => 'required',
            'img' => 'required',
            'rooms' => 'required',
            'extra' => 'required',
            'building_id' => 'required',
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
        $unit= Unit::find($id);
        $unit->number = $request->input('number');        
        $unit->size = $request->input('size');
        $unit->price = $request->input('price');
        $unit->floor = $request->input('floor');
        $unit->rooms = $request->input('rooms');
        $unit->extra = $request->input('extra');
        $unit->building_id = $request->input('building_id');
        $unit->img=$fileNameStore;
        $unit->save();

        //Unit::find($id)->update($request->all());
        
        
                return redirect()->route('unit.index')
                                ->with('success','Unit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("units")->where('id',$id)->delete();
        
               return redirect()->route('unit.index')
        
                               ->with('success','Unit deleted successfully');
    }



    public function showDetailsUnit($compound_name,$building_number,$unit_number)
    {
       /* $projects=DB::table('projects')
        ->select('projects.name')->get();*/
        $projects=Project::with('compound')->get();

/*select units.number units.size ,units.price ,units.floor, units.status ,units.rooms ,units.img ,units.extra ,projects.name as pro_name ,buildings.number,compounds.name as com_name 
from projects 
join compounds on projects.id= compounds.project_id 
join buildings ON compounds.id=buildings.compound_id
JOIN units on buildings.id=units.building_id 
WHERE buildings.number=10 
AND units.number=1 
and compounds.name='assuit'*/
        $unit=DB::table('projects')
        ->join('compounds','projects.id','=','compounds.project_id')
        ->join('buildings','compounds.id','=','buildings.compound_id')
        ->join('units','buildings.id','=','units.building_id')
        ->select('units.id','units.number','units.size','units.price','units.floor','units.rooms','units.img','units.extra','projects.name AS pro_name','buildings.number AS bu_num','compounds.name as com_name','projects.governate AS pro_governate','projects.city AS pro_city','units.user_id')
        ->where('buildings.number',$building_number)
        ->where('compounds.name',$compound_name)
        ->where('units.number',$unit_number)
        ->get();

            
        return view ('user.showunits',compact('projects','unit_number','building_number','compound_name','unit'));
    }
}
