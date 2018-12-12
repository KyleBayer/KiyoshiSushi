@extends('layouts.master')

@section ('title')
  Record Purchase Record
@endsection

@section('content')
  <form action = "/purchase" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Product Supplier ID:</td>
               <td><input type='text' name='Product_Supplier_Id' /></td>
            </tr>
            <tr>
               <td>Product Quantity:</td>
               <td><input type='text' name='Product_Qty' /></td>
            </tr>
            <tr>
               <td>Price Purchased:</td>
               <td><input type='text' name='Price_Purchased' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Record"/>
               </td>
            </tr>
         </table>
  </form>
  <a href = "/pshowpurchases">Click Here to view purchase history</a>    
@endsection
