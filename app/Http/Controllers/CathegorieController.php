<?php

namespace App\Http\Controllers;

use App\Cathegorie;
use Illuminate\Http\Request;

class CathegorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_active=0;
        $categories=Cathegorie::all();
        return view('backEnd.category.index',compact('menu_active','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu_active=2;
        $plucked=Cathegorie::where('c_parent_id',0)->pluck('c_libelle','id');
        $cate_levels=['0'=>'Main Category']+$plucked->all();
        return view('backEnd.category.create',compact('menu_active','cate_levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'c_libelle'=>'required|max:255|unique:cathegories,c_libelle',
           
        ]);
        $data=$request->all();
        Cathegorie::create($data);
        return redirect()->route('category.index')->with('message','Ajouté avec succès!');
    }



    

    /**
     * Display the specified resource.
     *
     * @param  \App\Cathegorie  $cathegorie
     * @return \Illuminate\Http\Response
     */
    public function show(Cathegorie $cathegorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cathegorie  $cathegorie
     * @return \Illuminate\Http\Response
     */
      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu_active=0;
        $plucked=Cathegorie::where('c_parent_id',0)->pluck('c_libelle','id');
        $cate_levels=['0'=>'Main Category']+$plucked->all();
        $edit_category=Cathegorie::findOrFail($id);
        return view('backEnd.category.edit',compact('edit_category','menu_active','cate_levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cathegorie  $cathegorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update_categories=Cathegorie::findOrFail($id);
        $this->validate($request,[
            'c_libelle'=>'required|max:255|unique:cathegories,c_libelle,'.$update_categories->id,
            
        ]);
        //dd($request->all());die();
        $input_data=$request->all();
      
        $update_categories->update($input_data);
        return redirect()->route('category.index')->with('message','Modifiée avec succès!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cathegorie  $cathegorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Cathegorie::findOrFail($id);
        $delete->delete();
        return redirect()->route('category.index')->with('message','Supprimée avec succès!');
    }

    /** Pour récuperer les questions associées a une cathegories */
    public function lesproduits($id)
    {


    }

}
