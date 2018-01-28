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

                    <script src="js/jquery.min.js"></script>
                    <script src="js/popper.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>


///****POSTS WITH NO PICS****////


 <!--  <script>
    //jQuery code here!
    $(document).ready(function() {
        var postsCount = 2;
        $("button").click(function() {
            postsCount = postsCount + 2;
            $("#posts").load("load-posts.php");
        });
    });
</script>
</head>
<body>

<div id="posts">
    php

         include  'dbh.php';

        $sql = "SELECT * FROM posts LIMIT 2";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<p>";
                echo $row['user_id'];
                echo "<br>";
                echo $row['title'];
                echo "<br>";
                echo $row['languages'];
                echo "<br>";
                echo $row['description'];
                echo "</p>";
            }
        } else {
            echo "There are no comments!";
        }
    ?>
</div>  -->















@endsection







 -->


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






@endsection

 