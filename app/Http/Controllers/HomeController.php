<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function collaborateur()
    {
        return view('collaborateur');
    }

    public function collaborateurbis()
    {
        return view('collaborateurbis');
    }

     public function collaborateurc()
    {
        return view('collaborateurc');
    }

     public function collaborateurd()
    {
        return view('collaborateurd');
    }

    public function suivi()
    {
        return view('suivi');
    }

     public function message()
    {
        return view('message');
    }

    public function modification()
    {
        return view('modification');
    }

    public function ajouter()
    {
        return view('ajouter');
    }

}
