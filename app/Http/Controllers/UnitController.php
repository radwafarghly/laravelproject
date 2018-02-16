<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;
use App\Building;
use DB;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $unit = Unit::orderBy('id','DESC')->paginate(5);
        
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



    public function showDetailsUnit()
    {

        return view ('user.showunits');
    }
}
