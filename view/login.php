<?php





?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">    
        <link rel="stylesheet" type="text/css" href="style.css">


        <title>Login-Suite</title>
    </head>

    <body class="container">
        <h1>Login to your Suite account</h1>

        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <div class="Absolute-Center">
                    <form class="form" name="login_form" method="POST">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="register.html" class="btn btn-secondary">Sign up</a>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    </body>

</html>



<!-- <html>
  <head></head>

  <body>
    <?php 
      echo $result;
    ?>
    <form action="" method="POST">
      <p>
      <label>Username</label>
      <input id="username" value="" name="username" type="text" required="required" /><br>
      </p>

      <p>
      <label>Password</label>
      <input id="password" name="password" type="password" required="required" />
      </p>
      <br />
      <p>
        <button type="submit" class="green big" name="submit"><span>Login</span></button> <button type="reset" class="grey big"><span>Cancel</span></button>
      </p>
    </form>

  </body>
</html> -->