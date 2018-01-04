@extends('profile.master')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name}}</div>
                   <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>

                  <img src="{{url('../')}}/img/male.png" width="100px" height="100px"><br>
                  <br>
                  <br>

                  <form action="{{url('/')}}/uploadPhoto" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>  
                    
                    <input type="file" name="pic" class="form-control"/>
                    <br>
                    <input type="submit" name="btn" class="btn btn-success"/>
                  
                  </form> 
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection 