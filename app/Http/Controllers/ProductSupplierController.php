<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ProductSupplierController extends Controller {
   
   public function __construct()
   {
        //$this->middleware('guest', ['except' => 'destroy']);
        $this->middleware('auth');
   }

   public function index()
   {

         return view('purchase');

   }
   public function show()
   {

        $ProductSuppliers = DB::table('Product_Suppliers');
   
        $ProductSuppliers = $ProductSuppliers->get();

        return view('showpurchases', ['Product_Suppliers' => $ProductSuppliers]);

   }
   
   public function insert(Request $request){
      $dateTime = Carbon::parse($request->your_datetime_field);
      $Product_Supplier_Id = $request->input('Product_Supplier_Id');
      $Product_Qty = $request->input('Product_Qty');
      $Price_Purchased = $request->input('Price_Purchased');
      $Date_Purchased = $request['Date_Purchased'] = $dateTime->format('Y-m-d H:i:s');

      DB::table('Purchases')->insert([
         'Product_Supplier_Id' => $Product_Supplier_Id,
         'Product_Qty' => $Product_Qty,
         'Price_Purchased' => $Price_Purchased,
         'Date_Purchased' => $Date_Purchased

      ]);
      
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/purchase">Click Here</a> to go back.';
   }
}