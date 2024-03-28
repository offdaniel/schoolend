<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Örkényi gépkölcsönző</title>
  <script src="getdata.js"></script>
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="kepek/logo.png"/>
</head>

<body >
  <div class="container-fluid bg-light p-0">

    <nav class="navbar navbar-expand navbar-dark bg-black fixed-top ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse container-fluid  " id="navbarNav">
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
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Kereső" aria-label="Kereső" name="keres">
          <button class="btn btn-outline-secondary" type="submit">Kereső</button>
        </form>
      </div>
    </nav>

    <div class="justify-content-center mt-5">
      <!--az URL-ben kapott program betöltése-->
      <?php
        if(isset($_GET['prog']))
          include $_GET['prog'];
         else
          include 'fooldal.php'; 

         /*  mysql_connect("localhost","root","") or die("errorbitch");
          mysql_select_db("search_test") or die("searcherror");
          $output = "";

          if(isset($_POST['search'])) {
            $searchkeres = $_POST['search'];
            $searchkeres = preg_replace("#[^0-9a-z]#i","",$searchkeres);

            $query = mysql_query("SELECT gepek.nev FROM gepek WHERE gepek.nev LIKE '%$searchkeres%' ") or die("errordollar");
            $count = mysql_num_rows($query);
            if($count == 0){
              $output = "Nincs találat";
            } else {
                while($row = mysql_fetch_array($query)) {
                  $nev = $row['nev'];

                  $output .= '<div> '.$nev.' </div>';
                }
            }
          }

          print("$output"); */
      ?>
    </div>

  </div>
</body>

</html>