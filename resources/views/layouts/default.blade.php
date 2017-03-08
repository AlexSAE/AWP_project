
<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>

<body>

    <header class="row">
        @include('includes.header')
    </header>

    <div id="banner" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1 class="small"><span class="bold">TranlateUs</span></h1>
                    <p class="big">Multipurpose lenguage translations</p>
                    <a href="/login" class="btn btn-banner">Sign In<i class="fa fa-send"></i></a>
                    <a href="/register?type=translator" class="btn btn-banner">Translator<i class="fa fa-send"></i></a>
                    <a href="/register?type=publisher" class="btn btn-banner">Publisher<i class="fa fa-send"></i></a>
                </div>
            </div>
        </div>
    </div>




    @include('pages.about')




    <div id="main" class="row">


        <div class="container ">

            <div class="row">
                <div class="col-md-2">
                    <img src="https://placehold.it/150x150" class="img-responsive" alt="image"/>
                    {{--<span class="quote"><img src="img/icon1.png" alt=""/></span>--}}
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculiscursus utp massae malesuada, Morbi eget ornare quam tristique placerat</p>
                    <a href="#">5 hours ago</a>
                    <div class="clearfix"></div>
                </div>
            </div>
            {{--<div class="col-md-12">
    <ul>
            <li>
                    <a href="#"><span class="glyphicon glyphicon-heart"></span></a>
            </li>
            <li>
                    <a href="#"><span class="glyphicon glyphicon-comment"></span></a>
            </li>
    </ul>
    <div class="clearfix"></div>
</div>
</div>--}}
            <br>

            <br>

            <div class="row">
                <div class="col-md-2">
                    <img src="https://placehold.it/150x150" class="img-responsive" alt="image"/>
                    {{--<span class="quote"><img src="img/icon2.png" alt=""/></span>--}}
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculiscursus utp massae malesuada, Morbi eget ornare quam tristique placerat</p>
                    <a href="#">1 day ago</a>
                    <div class="clearfix"></div>
                </div>
                {{--<div class="col-md-10">
                        <ul>

                                <li>
                                        <a href="#"><span class="glyphicon glyphicon-heart"></span></a>
                                </li>
                                <li>
                                        <a href="#"><span class="glyphicon glyphicon-comment"></span></a>
                                </li>
                        </ul>
                        <div class="clearfix"></div>
                </div>--}}
            </div>
            <br>

            <br>                       <div class="row">
                <div class="col-md-2">
                    <img src="https://placehold.it/150x150" class="img-responsive" alt="image"/>
                    {{--<span class="quote"><img src="img/img4.jpg" alt=""/></span>--}}
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin iaculiscursus utp massae malesuada, Morbi eget ornare quam tristique placerat</p>
                    <a href="#">2 days ago</a>
                    <div class="clearfix"></div>
                </div>
                {{-- <div class="col-md-12">
                         <ul>
                                 <li>
                                         <a href="#"><span class="glyphicon glyphicon-heart"></span></a>
                                 </li>
                                 <li>
                                         <a href="#"><span class="glyphicon glyphicon-comment"></span></a>
                                 </li>
                         </ul>
                         <div class="clearfix"></div>
                 </div>--}}
            </div>
        </div>




















    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>



</body>
</html>





