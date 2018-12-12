@extends ('layouts.master')

@section ('content')
<form action = "/createorder" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Meal Name:</td>
               <td><input type='text' name='Meal_Name' /></td>
            </tr>
            <tr>
               <td>Meal Price:</td>
               <td><input type='text' name='Meal_Price' /></td>
            </tr>
            <tr>
               <td>Supplier Address:</td>
               <td><input type='text' name='Supplier_Address' /></td>
            </tr>
            <tr>
               <td>Meal Description:</td>
               <td><input type='text' name='Meal_Desc' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Record"/>
               </td>
            </tr>
         </table>
  </form>
  <a href = "/order">Click Here to view the menu</a>
@endsection