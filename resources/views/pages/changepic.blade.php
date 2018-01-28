@extends('layouts.app')
@section('content')
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="panel-title pull-left" style="font-size:30px;">{{ $user->name }}</h1>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="panel-title pull-left">Edit profile</h3>
                <br><br>
                <form class="form-horizontal" action="/editprofile" method="POST">
                    {{ csrf_field() }}
                    <label for="name">Name</label>
                    <input type="text" required class="form-control" name="name" id="name" value="{{ $user->name }}">
                    <br/>
                    <label for="about">Email</label>
                    <input type="text" disabled class="form-control" name="email" id="email" value="{{ $user->email }}">
                    <br/>
                    <label for="about">About</label>
                    <input type="text" required class="form-control" name="about" id="about" value="{{ $user->about }}">

                    @if($user->type_id == 2)
                        <br/>
                        <label for="languages">Languages (comma separated)</label>
                        <input type="text" required class="form-control" name="langs" id="langs"
                               value="{{ $user->languages }}">
                    @endif

                    <br/>

                    <button type="submit" class="btn btn-primary">
                        <span class="fa fa-gear"></span>
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection