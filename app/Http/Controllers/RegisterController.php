<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;



class RegistrationController extends Controller
{
   public function create()
   {

   		return view('auth.register');

   }


   public function store(RegistrationForm $form)
   {
         
         $form->persist();

         //session('message', 'Here is the default message');
         session()->flash('message', 'Thanks so much for signing up!');
   		return redirect()->home();

   		//return redirect('/posts');
   }
}
