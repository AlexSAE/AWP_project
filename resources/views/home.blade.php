@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">



                    <div class="col-md-6 navigation-bottom-left">
                        <!-- Menu-1 -->
                        <div class="menu-search">
                            <div class="menu_1">
                                <div class="menu_1-box">
                                    <span class="menu_1_left"></span>
                                    <h3>Messages</h3>
                                    <div class="clearfix"></div>
                                </div>
                                <script>
                                    $( "span.menu_1_left" ).click(function() {
                                        $( "ul.menu_1_left_nav" ).slideToggle( "slow", function() {
                                            // Animation complete.
                                        });
                                    });
                                </script>
                                <ul class="menu_1_left_nav">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li class="last_menu"><a href="#">Logout</a></li>
                                </ul>
                            </div>
                            <!-- Menu-1 -->
                            <div class="search-box">
                                <div id="sb-search" class="sb-search">
                                    <form action="#" method="post">
                                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search"> </span>
                                    </form>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <!-- search-scripts -->
                            <script src="js/classie.js"></script>
                            <script src="js/uisearch.js"></script>
                            <script>
                                new UISearch( document.getElementById( 'sb-search' ) );
                            </script>
                            <!-- //search-scripts -->
                     </div>

                 </div>

                <div class="panel-body">


                        <div class="container">
                        <div class="navigation-bottom-menu-bottom scrollbar" id="style-2">
                            <div class="nav-btm-menu-btm-grid john">
                                <div class="nav-btm-menu-btm-grid-left">
                                    <img src="img/1.png" alt=" " class="img-responsive" />
                                    <div class="nav-btm-menu-btm-grid-left-pos">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="nav-btm-menu-btm-grid-left1">
                                    <h3>John Roy</h3>
                                    <p>Duis aute irure dolor in reprehen.</p>
                                </div>
                                <div class="nav-btm-menu-btm-grid-right">
                                    <h4>30 Minutes Ago</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <div class="nav-btm-menu-btm-grid">
                                <div class="nav-btm-menu-btm-grid-left">
                                    <img src="img/2.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="nav-btm-menu-btm-grid-left1">
                                    <h3>Michael</h3>
                                    <p>Duis aute irure dolor in reprehen.</p>
                                </div>
                                <div class="nav-btm-menu-btm-grid-right">
                                    <h4>1 hour pgo</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="nav-btm-menu-btm-grid john">
                                <div class="nav-btm-menu-btm-grid-left">
                                    <img src="img/3.png" alt=" " class="img-responsive" />
                                    <div class="nav-btm-menu-btm-grid-left-pos">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="nav-btm-menu-btm-grid-left1">
                                    <h3>Rita Roy</h3>
                                    <p>Duis aute irure dolor in reprehen.</p>
                                </div>
                                <div class="nav-btm-menu-btm-grid-right">
                                    <h4>2 hour Ago</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="nav-btm-menu-btm-grid">
                                <div class="nav-btm-menu-btm-grid-left">
                                    <img src="img/4.png" alt=" " class="img-responsive" />
                                </div>
                                <div class="nav-btm-menu-btm-grid-left1">
                                    <h3>Andrew</h3>
                                    <p>Duis aute irure dolor in reprehen.</p>
                                </div>
                                <div class="nav-btm-menu-btm-grid-right">
                                    <h4>2 hour Ago</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="nav-btm-menu-btm-grid">
                                <div class="nav-btm-menu-btm-grid-left">
                                    <img src="img/5.png" alt=" " class="img-responsive" />
                                    <div class="nav-btm-menu-btm-grid-left-pos">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="nav-btm-menu-btm-grid-left1">
                                    <h3>Laura</h3>
                                    <p>Duis aute irure dolor in reprehen.</p>
                                </div>
                                <div class="nav-btm-menu-btm-grid-right">
                                    <h4>2 hour Ago</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
