@extends('layouts.app')

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::users()->name}}</div>
                   <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>

                  <img src="{{url('../')}}/img/male.png" width="100px" height="100px" class="img-circle"><br>
                  <a href="{{url('/')}}/changePhoto">Change image</a>
                </div>
            </div>
        </div>
    </div>
</div>  


@endsection
