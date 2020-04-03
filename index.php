<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>James Hager Portfolio</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <!-- Custom styles for this template -->
     <link href="album.css" rel="stylesheet">
  </head>
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
    <div id="projects" class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class ="card-img-top" src= "TOZ_thumb.PNG">
            <div class="card-body">
              <h5 class="card-title">Tomb of Azothin</h5>
              <p class="card-text">First group coding project done within GIMM 110. Created a scrolling turn based game from scratch in Adobe Animate. Later, I created a trailer for this game in GIMM 270.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group align-items-center">
                  <a href="Tomb of Azothin.php" class="btn btn-sm btn-outline-secondary" role="button">View Project Page</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="TOZ_thumb.PNG">
            <div class="card-body">
              <h5 class="card-title">360 Video Project</h5>
              <p class="card-text">First VR project that utilized Unity and 360 video.  Created a thriller scenario with an interactive element to show 2 different sides of the story.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="360 Video Project.php" class="btn btn-sm btn-outline-secondary" role="button">View Project Page</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="TOZ_thumb.PNG">
            <div class="card-body">
              <h5 class="card-title">STEM Essentials App</h5>
              <p class="card-text">App designed to help someone learn some essentials regarding STEM concepts.  Perfect for people that don't know anything about STEM and just want to learn a little more or be refreshed on concepts.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="STEMApp.php" class="btn btn-sm btn-outline-secondary" role="button">View Project Page</a>
                </div>       
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <?php require_once('footer.php');?>
</footer>
</html>
