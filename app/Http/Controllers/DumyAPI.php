<?php

namespace App\Http\Controllers;
use App\models\CRUD;

use Illuminate\Http\Request;

class DumyAPI extends Controller
{
     function getData()
    {
        return ["name"=>"parashar"];
    }

    function list($id=null){
        return $id?CRUD::find($id):CRUD::all();
     }
}
