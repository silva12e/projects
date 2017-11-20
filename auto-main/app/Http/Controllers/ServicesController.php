<?php

namespace App\Http\Controllers;

use App\Service;
use App\Type;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function getServiceByType($id)
    {
        $service = Service::where('vehicle_type', $id)->get();
        return response()->json(['services'=>$services]);
    }

    public function index()
    {
        return view('pages.services.index');
    }

    public function create()
    {
        return view('pages.services.create');
    }

    public function show($id)
    {
        $service = Service::find($id);
        return response()->json(['service'=>$service]);
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->vehicle_type = $request->vehicle_type;
        $service->description = $request->description;
        $service->price = $request->price;

        $service->save();
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        if($service)
            $service->delete();
    }

    public function services($id)
    {
        return view('pages.services.services');
    }

    public function getServices($id)
    {
        $services = Service::where('vehicle_type', $id)->get();
        $category = Type::find($id);
        return response()->json(['services'=>$services, 'vehicleType'=>$category]);
    }
}
