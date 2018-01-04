@extends('layouts.app')

@section('content')


        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="panel-title pull-left" style="font-size:30px;">My profile</h1>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Your Name</h3>
                    <br><br>
                    <form class="form-horizontal">
                        <label for="First_name">First name</label>
                        <input type="text" class="form-control" id="First_name" placeholder="John" value="John">
                        <label for="Last_name">Last name</label>
                        <input type="email" class="form-control" id="Last_name" placeholder="Doe" value="Doe">
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Describe your skils</h3>
                    <br><br>
                    <form class="form-horizontal">
                        <input type="text" class="form-control" id="keywords" placeholder="Like #movies #kittens #travel #teacher #newyork">
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Your photo</h3>
                    <br><br>
                    <div align="center">
                        <div class="col-lg-12 col-md-12">
                            <img class="img-thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Upload a new profile photo!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">My extended profile</h3>
                    <br><br>
                    <p>Visibility of your extended profile:</p>
                    ...
                    <br><br>
                    <form class="form-horizontal">
                        <label>Your bio</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </form>
                    <br><br>
                    <form class="form-horizontal">
                        <label for="Your_location">Your location</label>
                        <input type="text" class="form-control" id="Your_location" placeholder="Fill me out">
                        <br>
                        <label for="Your_gender">Your gender</label>
                        <input type="text" class="form-control" id="Your_gender" placeholder="Fill me out">
                        <br>

            <hr>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Profile settings</h3>
                    <br><br>
                    <h4>Search</h4>
                    <div class="well checkbox">
                        <label class="checkbox-inline" for="profile_searchable"><input type="checkbox" name="profile[searchable]" id="profile_searchable" value="true" checked="checked">
                            Allow for people to search for you within diaspora*
                        </label>
                    </div>
                    <br>

                </div>
                    <p class="text-danger"><strong><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> If you choose not to select this option, please add the #nsfw tag each time you share such material.</strong></p>
                    <button class="btn btn-default"><i class="fa fa-fw fa-times" aria-hidden="true"></i> Cancel</button>
                    <button class="btn btn-primary"><i class="fa fa-fw fa-check" aria-hidden="true"></i> Update Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>