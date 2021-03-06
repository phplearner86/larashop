@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Edit profile </h4>
                </div>

                <div class="panel-body">
                    <form action="{{ route('profiles.update', Auth::user()->id) }}" method="post">
                    
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" autofocus value="{{ Auth::user()->email }}">
                    </div>

                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $profile->first_name }}">
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $profile->last_name }}">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" value="{{ $profile->address }}">
                    </div>

                    <button class="btn btn-primary">Save changes</button>
                </form>                
                </div>
            </div>
    </div>
@endsection