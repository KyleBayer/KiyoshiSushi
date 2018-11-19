@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register Here</div>
                <br/><br/>
                <div class="panel-body">
                    <form method="POST" action="/register">

                        {{ csrf_field() }}

             
                        <div class="form-group">
                            <label for="name">Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value = "{{ old('name') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="someone@example.com"   id="email" name="email" value = "{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>


                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation:</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        
                        <div class="form-group">
                            
                            <button type="submit" class="btn btn-primary">Register </button>
                        </div>

             
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



