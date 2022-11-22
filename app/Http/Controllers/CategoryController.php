<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name= $request->get('name');
        $a_id= $request->get('a_id');
        

        try{
            Category::create([
                'name'=>$name,
                'a_id'=>$a_id,
                
                    
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
        //
        $Cat=Category::find($id);
        return view ('Category.edit', compact('Cat'));
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
        //
        $c = Category::find($id);
        


        $name= $request->get('name');
        $a_id= $request->get('a_id');
        

        $c['name'] = $name;
        $c['a_id'] = $a_id;
        
        



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
        //
        $C = Category::find($id);
        $C->delete();

        return redirect()->route('CRUD.index');
    }
}
