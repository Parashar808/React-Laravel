<?php

namespace App\Http\Controllers;

use App\Models\CRUD;
use App\Models\Category1;
use App\Models\Category;

use Illuminate\Http\Request;

class CRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CRUDS = CRUD::all();
        $ca=Category1::all();
        $c=Category::all();
        // foreach($CRUDS as $c)
        // {
        //     $ca = Category1::where('cat1_id', $CRUDS->cat_id)->get();

        //     if(count($ca)==0){
        //         $c['abc']= false;
        //     }
        //     else{
        //         $c['abc']= true;
        //     }

        //     }
        
        return view('CRUD.home',compact('CRUDS','ca','c'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'founded' => 'required|integer|min:0|max:2021',
        //     'description' => 'required',
        //     'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        // ]);

        // $newImageName =time() . '-' . $request->name . '.' .
        // $request->image->extension();
        // $request->image->move(public_path('images'), $newImageName);

        $title= $request->get('title');
        $description= $request->get('description');
        
        $author= $request->get('author');

        try{
            CRUD::create([
                'title'=>$title,
                'description'=>$description,
                
                'author'=>$author
                    
            ]);
            return redirect()->route('CRUD.index');}
    
            catch(\Exception $e){
                dd($e->getMessage());
                return redirect()->back();
            }



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
        $CRUDS=CRUD::find($id);
        return view ('CRUD.edit', compact('CRUDS'));
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
        $c = CRUD::find($id);
        


        $title= $request->get('title');
        $description= $request->get('description');
        
        $author= $request->get('author');

        $c['title'] = $title;
        $c['description'] = $description;
        $c['author']= $author;
        



        $c->update();

        return redirect()->route('CRUD.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $CRUDS = CRUD::find($id);
        $CRUDS->delete();

        return redirect()->route('CRUD.index');
    }
}
