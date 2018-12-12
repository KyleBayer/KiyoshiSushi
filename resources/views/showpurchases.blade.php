@extends ('layouts.master')

@section ('title')
  Record Purchase Record
@endsection

@section ('content')
div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Supplier's) }}</div>
	<ul>
		
	</ul>
</div>
</div>
</div>
</div>

@foreach ($Purchases as $Purchase)

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __( $Purchase->Purchase_Date ) }}</div>
      
      <p></p>
      {{ $Purchase->Product_Supplier_Id }}
      <br></br>
      {{ $Purchase->Product_Qty }} 
      <br></br>
      {{ $Purchase->Price_Purchased }}
      <br></br>
      {{ $Purchase->Date_Purchased }}
    
</div>
</div>
</div>
</div>

@endforeach

@endsection
