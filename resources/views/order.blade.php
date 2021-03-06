@extends('layouts.master')

@section ('title')
  Menu
@endsection

@section('content')
  @foreach ($Meals as $Meal)
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __( $Meal->Meal_Name ) }}</div>

    
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg" style="width:5em; height:6em;">
        
      <br></br>
      ${{ $Meal->Meal_Price }}
      <br></br>
      {{ $Meal->Meal_Desc }} 
      <a href="{{ route('editmeal', $Meal->Meal_Name) }}" class="btn btn-primary">Edit Menu Item</a>
    
</ul>
</div>
</div>
</div>
</div>
<br></br>
<br></br>
<br></br>

  @endforeach

@endsection













































<!-- @extends('layouts.master')


@section ('title')
  Order Kiyoshi Sushi
@endsection
@section('content')

<div class="pageRow">
  <div class="Menu">
    <div class="menuTitle" >
    <h2 align="center
    ">Menu Items</h2>
    <p></p>
    <hr>
  </div>
  <div class="items">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg" style="width:5em; height:6em;">
            <h3>Sushi</h3>
            <p>Sensei's Delicious Exotic Sushi</p><p>Price: $15.99 </p>
            <p><a href="#" class="btn btn-default" role="button">Add</a></p>
 </div>
           
 <div class="items">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg" style="width:5em; height:6em;">
            <h3>Sushi</h3>
            <p>Sensei's Delicious Exotic Sushi</p><p>Price: $15.99 </p>
            <p><a href="#" class="btn btn-default" role="button">Add</a></p>
</div>

<div class="items">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg" style="width:5em; height:6em;">
            <h3>Sushi</h3>
            <p>Sensei's Delicious Exotic Sushi</p><p>Price: $15.99 </p>
            <p><a href="#" class="btn btn-default" role="button">Add</a></p>
</div>

<div class="items">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg" style="width:5em; height:6em;">
            <h3>Sushi</h3>
            <p>Sensei's Delicious Exotic Sushi</p><p>Price: $15.99 </p>
            <p><a href="#" class="btn btn-default" role="button">Add</a></p>
</div>

<div class="items">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg" style="width:5em; height:6em;">
            <h3>Sushi</h3>
            <p>Sensei's Delicious Exotic Sushi</p><p>Price: $15.99 </p>
            <p><a href="#" class="btn btn-default" role="button">Add</a></p>
</div>

<div class="items">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg" style="width:5em; height:6em;">
            <h3>Sushi</h3>
            <p>Sensei's Delicious Exotic Sushi</p><p>Price: $15.99 </p>
            <p><a href="#" class="btn btn-default" role="button">Add</a></p>
</div>

<div class="items">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Vegetable_gimbap.jpg/1200px-Vegetable_gimbap.jpg" style="width:5em; height:6em;">
            <h3>Sushi</h3>
            <p>Sensei's Delicious Exotic Sushi</p><p>Price: $15.99 </p>
            <p><a href="#" class="btn btn-default" role="button">Add</a></p>
</div>
</div>
  <div class="Cart">
    <div class="col-25">
    <div class="container">
      <h2 align="center"><i class="fa fa-shopping-cart">Checkout Cart <span class="price" style="color:black"></i></span></h2><p></p>
    <hr>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
  </div>
</div>

@endsection

 -->