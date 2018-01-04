@extends('profile.master')

@section('content')
{{$data}}
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name}}</div>
                   <div class="panel-body">
                    

                    Edit your profile<br>

                  <img src="{{url('../')}}/img/male.png" width="100px" height="100px"><br>
                  <a href="{{url('/')}}/changePhoto">Change image</a>




                  <input type="text" name="about" value="{{$data}}"/>
                </div>
            </div>
        </div>
    </div>


</div>  
@endsection 