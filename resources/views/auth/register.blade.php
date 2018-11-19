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
                            <label for="first_name">First Name:</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value = "{{ old('first_name') }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value = "{{ old('last_name') }}" required autofocus>
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
//THIS IS JUST ADDED FOR THE POSSIBLE PAYPAL EMAIL. IT ISN'T REQUIRED FOR USERS WHO WANT TO GO TO STORE 
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="someone@paypal.com"   id="email2" name="email2" value = "{{ old('email') }}" >
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



