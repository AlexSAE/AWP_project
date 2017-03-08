<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Register</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/register.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
</head>
<body>
<script src="js/jquery.vide.min.js"></script>
<!-- main -->

    <div class="center-container">
        <div class="w3ls-header">
            <div class="header-main">
                <h1>Register</h1>
                <div class="header-bottom">
                    <div class="header-right w3agile">
                        <div class="header-left-bottom agileinfo">
                            <form action="/register" method="post">
                                {{csrf_field()}}
                                <div class="icon1">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" placeholder="Enter your name" name="name" required=""/>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <div class="icon1">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" placeholder="Enter your email" name="email" required=""/>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="icon1">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                    <input type="password" placeholder="Password" name="password" required=""/>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <div class="icon1">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                    <input type="password" placeholder="Confirm password" name="password_confirmation" required=""/>
                                </div>
                                @if($_GET['type'] == 'translator')
                                    <div class="styled-input w3ls-text">
                                        <textarea name="languages" required=""></textarea>
                                        <label>Languages</label>
                                        <span></span>
                                    </div>
                                    <input type="hidden" name="type" value="translator">
                                @else
                                    <input type="hidden" name="type" value="publisher">
                                @endif
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                                <div class="bottom">
                                    <input type="submit" value="Sign Up" />
                                </div>
                            </form>
                            <div class="header-left-top">

                                <p>Already a member ? <a href="/login"> Sign In</a> </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        {{--</div>--}}
        <!--header end here-->

    </div>

</body>
</html>














