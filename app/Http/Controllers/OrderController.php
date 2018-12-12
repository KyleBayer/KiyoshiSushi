<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Carbon\Carbon;



class OrderController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
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

    public function showedit($Meal_Id)
    {

        return view('editmeal');
        
    }
    public function edit($Meal_Id)
    {
        $Meals = Task::findOrFail($id);

        return view('editmeal')->withTask($Meals);
        
    }
   
}
