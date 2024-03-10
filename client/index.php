<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <script src="getdata.js"></script>
  <link rel="stylesheet" href="index.css">
  <title>Örkényi gépkölcsönző</title>
  <link rel="shortcut icon" href="kepek/logo.png"/>
</head>

<body>
  <div class="container-fluid bg-light p-0">

    <nav class="navbar navbar-expand navbar-dark bg-dark rounded ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php">Főoldal</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php?prog=benzines.php"> Benzines gépek </a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php?prog=elektromos.php">Elektromos gépek</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php?prog=akkumlatoros.php">Akkumlátoros gépek</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class=" justify-content-center">
      <!--az URL-ben kapott program betöltése-->
      <?php
        if(isset($_GET['prog']))
          include $_GET['prog'];
         else
          include 'fooldal.php'; 
      ?>

    <div class="card"></div>
      
    </div>

  </div>
 
  <script src="bootstrap/jquery-3.5.1.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.js"></script>
</body>

</html>