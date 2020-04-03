<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>360 Video Project</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>
  <body>
    <header>
    <?php require_once('header.php');?>
</header>

<main role="main">

<section class="jumbotron">
    
    <!--<img src= "lake.jpg" style="background-size: cover;">-->
    <div class= "mask rgba-black-light d-flex justify-content-center align-items-center">
    <div class ="text-center white-text mx-5">
    <h1>James Hager's Portfolio</h1>
    <p class="lead" style="font-weight: 600;">Projects and Work done throughout my time in the GIMM program.</p>
    <?php require_once('buttons.php');?>
    </div>
    </div>
  </div>
</section>

  
<div class="album py-5 bg-light">
      
      <section class = "mt-5 wow container">
      <div class="row">
       
      <div class="col-md-7 mb-4">
          <img src="360Vid.png">
          </div>
          <div class="col-md-5 md-4 justify-content-right">
          
              <h3>Interactive 360 Video Project</h3>
              <p>We created a 360 Interactive Video Project with Unity in GIMM 280.  The interactivity puts you in full control of the thriller we have created.  Choose your side to experience with the lights on, or lights off.</p>
             <br>
             <p><b>Headset Version: Coming soon!</b></p>
             <br>
             <p><b>Mouse Control Version: Coming soon!</b></p>
            </div>
          </div>
        </div>
        
        
     

</main>

<footer class="text-muted">
  <?php require_once('footer.php');?>
</footer>
</html>
