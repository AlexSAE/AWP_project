@extends('layouts.app')

@section('content')



        <div class="container">
            <div class="row">
                <section class="row-section">
                    <div class="container">
                        <div class="col-md-10 offset-md-1 row-block">
                            <ul id="sortable">
                                @foreach ($posts as $post)
                                    <li>
                                        <div class="media">
                                            <div class="media-left align-self-center">
                                                <img class="rounded-circle" src="{{ $post->user->pic }}" width="150" height="150">
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ $post->user->name }}</h4>
                                                <p>{{ $post->title }}</p>
                                                <p>{{ $post->description }}</p>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="/create" class="btn btn-default">Contact Now</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul> 
                        </div>
                    </div>
                    <script>
                        $( function() {
                            $( "#sortable" ).sortable();
                            $( "#sortable" ).disableSelection();
                        } );
                    </script>
                    <script	src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

                    <script src="js/jquery.min.js"></script>
                    <script src="js/popper.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>






@endsection

 