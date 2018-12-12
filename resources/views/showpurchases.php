@extends ('layouts.master')

@section ('title')
  Record Purchase Record
@endsection

@section ('content')

@foreach ($ProductSuppliers as $ProductSupplier)

<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Records') }}</div>
      
      {{ $ProductSupplier->Product_Supplier_Id }}
      <br></br>
      {{ $ProductSupplier->Product_Id }} 
      <br></br>
      {{ $ProductSupplier->Supplier_Id }}
      <br></br>
      {{ $ProductSupplier->Supplier_Address }}
      <br></br>
      {{ $ProductSupplier->Product_Price }}
      <br></br>
      {{ $ProductSupplier->comment }}
    
</div>
</div>
</div>
</div>

@endforeach

@endsection
