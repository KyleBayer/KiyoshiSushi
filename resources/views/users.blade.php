@extends('layouts.master')

@section ('title')
  Users
@endsection

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Users') }}</div>
<ul>
	@foreach ($cutomers as $cutomer)
	<li>
        	{{ $cutomer->first_name }} {{ $cutomer->last_name }}
	</li>
        @endforeach
</ul>
</div>
</div>
</div>
</div>

@endsection