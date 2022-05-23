<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{ 
    public function appointment()
    {
        return view('appointment');
    }
    public function index()
    {
        return view('index');
    }
   
    public function loginForm()
    {
        return view('loginForm');
    }
   
    public function patient()
    {
        return view('patient');
    }
   
    public function prescription_list()
    {
        return view('prescription_list');
    }
   
    public function treatment_plan()
    {
        return view('treatment_plan');
    }
   
    public function treatmentPlans()
    {
        return view('treatmentPlans');
    }

    public function registration()
    {
        return view('registration');
    }
    public function profile_edit()
    {
        return view('profile_edit');
    }

    public function login()
    {
        return view('login');
    }
}
