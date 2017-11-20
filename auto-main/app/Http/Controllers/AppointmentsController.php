<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{

    public function index()
    {
        return view('pages.appointments.index');
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(Appointment $appointment)
    {

    }

    
    public function edit(Appointment $appointment)
    {

    }

  
    public function update(Request $request, Appointment $appointment)
    {

    }

   
    public function destroy(Appointment $appointment)
    {

    }
}
