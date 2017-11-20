<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypesController extends Controller
{   
    
    public function index()
    {
        return view('pages.vehicle_types.index');
    }

    public function getAllTypes()
    {
        $types = Type::with('service')->get();

        return response()->json(['types'=>$types]);
    }

    public function store(Request $request)
    {
        $type = new Type; 
        $type->type = $request->type;
        $type->save();
    }

    public function edit($id)
    {
        $type = Type::find($id);
        return response()->json(['type'=>$type]);
    }

    public function update(Request $request, $id)
    {
        $type = Type::find($id);
        $type->type = $request->type;
        $type->save();   
    }

    public function destroy($id)
    {
        $type = Type::find($id);
        if($type)
            $type->delete();

    }
}
