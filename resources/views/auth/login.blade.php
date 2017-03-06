<!DOCTYPE HTML>
<html>
<head>
    <title>Sign In</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="css/login.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->
</head>
<body>


<!--main-->
<div class="main-content-agile">
    <div class="sub-main-w3">
        <div class="wthree-pro">
            <img src="/img/logo.png" alt="image">
            <h2>Sign In</h2>
        </div>
        <form action="/login" method="post">
            {{csrf_field()}}
            <input placeholder="E-mail" name="email" class="user" type="text" required="">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span><br><br>
            <input  placeholder="Password" name="password" class="pass" type="password" required="">
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span><br>
            <div class="sub-w3l">
                <span><input type="checkbox" />Remember Me</span>
                <div class="right-w3l">
                    <input type="submit" value="Sign In">
                </div>
            </div>
        </form>
    </div>
</div>
<!--//main-->



</body>
</html>