<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;
use DB;



class OrderController extends Controller
{
   public function __construct()
    {
        //$this->middleware('guest', ['except' => 'destroy']);
        $this->middleware('guest');
    }


   public function Order()
    {
        $Meals = DB::table('Meals');
	
        $Meals = $Meals->get();

        return view('order', ['Meals' => $Meals]);
    }
   
}
