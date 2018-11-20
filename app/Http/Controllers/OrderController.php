<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;



class OrderController extends Controller
{
   public function __construct()
    {
        //$this->middleware('guest', ['except' => 'destroy']);
        $this->middleware('guest');
    }


   public function Order()
    {
        return view('order');
    }
   
}
