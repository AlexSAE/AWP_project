
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
                    <a href="/register?type=translator" class="btn btn-banner">Tranlate<i class="fa fa-send"></i></a>
                    <a href="/register?type=publisher" class="btn btn-banner">Translator<i class="fa fa-send"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div id="main" class="row">


        @yield('content')

    </div>



    <footer class="row">
        @include('includes.footer')
    </footer>


</body>
</html>





