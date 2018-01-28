
@extends('layouts.app')

@section('content')


    dd(Auth::user(), User::findOrFail(Auth::user()->id));
        <div class="container">
            <div class="row">
                <section class="row-section">
                    <div class="container">
                        <div class="col-md-10 offset-md-1 row-block">
                            <ul id="sortable">
                                @foreach ($threads as $thread)
                                    <li>
                                        <div class="media">
                                            <div class="media-left align-self-center">
                                                <img class="rounded-circle" src="{{ $thread->user->pic }}" width="150" height="150">
                                            </div>
                                            <div class="media-body">
                                                <h4>{{ $thread->user->name }}</h4>
                                                <p>{{ $thread->title }}</p>
                                                <p>{{ $thread->text }}</p>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <a href="#" class="btn btn-default">Contact Now</a>
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
                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>

                    <script src="js/jquery.min.js"></script>
                    <script src="js/popper.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
