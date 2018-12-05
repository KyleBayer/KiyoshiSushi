@extends('layouts.master')

@section ('title')
  Order Kiyoshi Sushi
@endsection

<!--https://stackoverflow.com/questions/43090063/how-to-get-data-from-database-to-view-page-in-laravel -->
@section('content')
	<div class="row">
  <div class="col-sm-6 col-md-4">
    @foreach($food as $key => $data)
      <tr>    
        <th>{{$data->Meal_Name}}</th>
        <th>{{$data->Meal_Price}}</th>
        <th>{{$data->Meal_Desc}}</th>               
      </tr>
    @endforeach
  </div>
</div>
@endsection




<!-- <div class="thumbnail">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg" alt="..." style="max-height: 150px" class="img-responsive">
      <div class="caption">
        <h3>Food1</h3>
        <p>DIS IS DA FEWD</p>
        <p><a href="#" class="btn btn-default" role="button">Add</a></p>
      </div>
    </div> -->