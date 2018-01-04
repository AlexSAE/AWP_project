@extends('layouts.app')


    

@section('content')


<!-- @foreach ($users as $user)
    {{ $user->username }}
@endforeac -->

 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->username}}</div>
                    <div class="panel-body">
                    
                      <div class = "row">
                        <div class = "col-sm-6 col-md-3">
                            <div class = "thumbnail">
                              <h3>{{ucwords(Auth::user()->username)}}</h3>
                              <img src="{{url('../')}}/public/img/{{(Auth::user()->pic)}}" width="100px" height="100px" class="img-circle">
                                

                              <p>{{Auth::user()->getProfile->about}}</p>

                            <div class = "caption">
                              
                              <p align="center">{{$data->about}} - {{$data->skils}}</p>
                              
                              <p align="center"><a href = "{{$url('/editProfile')}}" class = "btn btn-primary" role = "button">Edit Profile</a> 
                                 
                                 <a href = "#" class = "btn btn-default" role = "button">
                                    Button
                                 </a>
                              </p>
                            </div>
                          </div>
                      </div>
                      <div class = "col-sm-6 col-md-3">     
                       <h4 class=""><span class="label label-default">About</span></h4>
                       <p>{{$data->about}}</p>

                      </div>
                    </div>
                  </div>
            </div>
      </div>  
    </div>
</div>
 

@endsection








