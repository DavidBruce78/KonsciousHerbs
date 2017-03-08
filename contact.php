<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KonsciousHerbs Contact Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/konscienceherbscss.css">
    <link rel="icon" href="images/konsciousherbs.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container wrapper">
      <!-- Header Row -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <img class="img-responsive konscienceherbsheader" src="images/konsciousherbs.png">
        </div>
      </div>
      <!-- Navigation Row -->
      <div class="row">
          <a href="index.php"><div class="col-1g-4 col-md-3 col-sm-6 col-xs-6 nav">
            <h3>About</h3>
            </div>
          </a>
          <a href="konscienceherbs.php"><div class="col-1g-4 col-md-3 col-sm-6 col-xs-6 nav">
            <h3>Herbs</h3>
            </div>
          </a>
          <a href="contact.php"><div class="col-1g-4 col-md-3 col-sm-6 col-xs-6 nav">
            <h3>Contact</h3>
            </div>
          </a>
          <a href="testimonials.php"><div class="col-1g-4 col-md-3 col-sm-6 col-xs-6 nav">
            <h3>Testimonials</h3>
            </div>
          </a>
      </div>
      <!--About Section -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 aboutsection">
          <p>Please ask any questions that come to mind. We are here
             to help you understand everything there is to know about the healing
             power of Herbs. Sign up for our weekly News letter. It is filled with
             useful information and purchasing deals. 
          </p>
        </div>
      <div class="row contactform">
          <form class="col-lg-6 col-md-6 col-sm-10 col-xs-10">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Email News Letter
          </label>
        </div>
        <label for=textarea>Comments or Questions</label>
        <textarea class="form-control" rows="3" id="textarea"></textarea><br>
        <button type="submit" class="btn btn-default">Submit</button>
        </form>
       </div>
    </div><br>
      <footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Copywright 2017 Konscience Herbs LLC</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>