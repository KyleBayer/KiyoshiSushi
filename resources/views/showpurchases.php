@extends ('layouts.master')

@section ('title')
  Record Purchase Record
@endsection

@section ('content')

@foreach ($Purchases as $Purchase)

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __( $Purchase->Purchase_Date ) }}</div>
      
      ${{ $Purchase->Product_Supplier_Id }}
      <br></br>
      {{ $Purchase->Prodcut_Qty }} 
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
