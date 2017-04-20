<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookNewAppointmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*adding the consultant guard so users cant access consultation page without authorisation*/
        $this->middleware('auth:web');
    }

    /**
     * Show the animal records page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booknewappointment');
    }
}
