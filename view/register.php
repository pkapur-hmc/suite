<?php

?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> 
        <link rel="stylesheet" type="text/css" href="style.css">


        <title>Register-Suite</title>
    </head>

    <body class="container">
        <h1>Create your Suite account</h1>

        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <div class="Absolute-Center">
                    <form class="form" name="register_form" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="year">Class Year</label>
                            <input type="year" class="form-control" id="year">
                        </div>
                        <div class="form-group">
                            <label for="room">Room Number</label>
                            <input type="room" class="form-control" id="room">
                        </div>
                        <div class="form-group">
                            <label for="suite">Suite</label>
                            <input type="suite" class="form-control" id="suite">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    </body>

</html>

