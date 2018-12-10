<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;



class OrderController extends Controller
{
   public function __construct()
    {
        //$this->middleware('guest', ['except' => 'destroy']);
        $this->middleware('guest');
    }

    public function index()
    {
        return view('createorder');
    }

    public function insert(Request $request)
    {
      $Meal_Name = $request->input('Meal_Name');
      $Meal_Price = $request->input('Meal_Price');
      $Supplier_Address = $request->input('Supplier_Address');
      $Meal_Desc = $request->input('Meal_Desc');

      DB::table('Meals')->insert([
         'Meal_Name' => $Meal_Name,
         'Meal_Price' => $Meal_Price,
         'Supplier_Address' => $Supplier_Address,
         'Meal_Desc' => $Meal_Desc
      ]);
      
      echo "Meal added successfully<br/>";
      echo '<a href = "/createorder">Click Here to return</a>';
    }

   public function Order()
    {
        $Meals = DB::table('Meals');
	
        $Meals = $Meals->get();

        return view('order', ['Meals' => $Meals]);
    }
   
}
