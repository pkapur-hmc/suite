<?php


?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> 
        <link rel="stylesheet" type="text/css" href="style.css">


        <title>Suite Home</title>
    </head>

    <body class="container">
        <h1>Your Suite</h1>

        <div class="row">
            <div class="Absolute-Center">
                <form class="form" name="status_form" method="POST">
                    <div class="form-group">
                        <label for="Status">What is your status?</label>
                        <select type="Status" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="Status">
                            <option selected="Choose"></option>
                            <option value="in_free">Inside suite (free)</option>
                            <option value="in_busy">Inside suite (busy)</option>
                            <option value="out_free">Outside suite (free)</option>
                            <option value="out_busy">Outside suite (busy)</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    </body>

</html>

