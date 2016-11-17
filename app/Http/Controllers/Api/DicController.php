<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dic as Entity;

class DicController extends ApiController
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $type = $request->input('type', '');
        if(empty($type)){
            $data = Entity::all();
        }else{
            $data = Entity::where('type', $type)->get();
        }
        return response($data, 200);
    }

    public function newEntity(array $attributes = [])
    {
        return new Entity($attributes);
    }
}
