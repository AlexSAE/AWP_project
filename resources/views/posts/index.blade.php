@extends('layouts.app')
	
	return view('posts', ['posts => $posts]);


	

@section('content')


        <div class="container">
            <div class="row">
                <section class="row-section">
                    <div class="container">
                        <div class="col-md-10 offset-md-1 row-block">
                            <ul id="sortable">
                                <li><div class="media">
                                        <div class="media-left align-self-center">
                                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/women/50.jpg">
                                        </div>
                                        <div class="media-body">
                                            <h4>Camila Terry</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <a href="#" class="btn btn-default">Contact Now</a>
                                        </div>
                                    </div></li>
                                <li><div class="media">
                                        <div class="media-left align-self-center">
                                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/men/42.jpg">
                                        </div>
                                        <div class="media-body">
                                            <h4>Joel Williamson</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <a href="#" class="btn btn-default">Contact Now</a>
                                        </div>
                                    </div></li>
                                <li><div class="media">
                                        <div class="media-left align-self-center">
                                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/women/67.jpg">
                                        </div>
                                        <div class="media-body">
                                            <h4>Deann Payne</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <a href="#" class="btn btn-default">Contact Now</a>
                                        </div>
                                    </div></li>
                                <li><div class="media">
                                        <div class="media-left align-self-center">
                                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/women/50.jpg">
                                        </div>
                                        <div class="media-body">
                                            <h4>Leona Hunter</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <a href="#" class="btn btn-default">Contact Now</a>
                                        </div>
                                    </div></li>
                                <li><div class="media">
                                        <div class="media-left align-self-center">
                                            <img class="rounded-circle" src="https://randomuser.me/api/portraits/men/89.jpg">
                                        </div>
                                        <div class="media-body">
                                            <h4>Donald Perkins</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <a href="#" class="btn btn-default">Contact Now</a>
                                        </div>
                                    </div></li>



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

 