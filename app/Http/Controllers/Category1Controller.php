<?php

namespace App\Http\Controllers;
use App\Models\Category1;
use Illuminate\Http\Request;
use App\Http\Controllers\CRUDController;

class Category1Controller extends Controller
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
        return view('Category1.create');
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
        $book_id= $request->get('book_id');
        

        try{
            Category1::create([
                'name'=>$name,
                'book_id'=>$book_id
                
                    
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
        $Cat=Category1::find($id);
        return view ('Category1.edit', compact('Cat'));
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
        $c = Category1::find($id);
        


        $name= $request->get('name');
        $book_id= $request->get('book_id');
        

        $c['name'] = $name;
        $c['book_id'] = $book_id;
        
        



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
        $Cat = Category1::find($id);
        $Cat->delete();

        return redirect()->route('CRUD.index');
    }
}
