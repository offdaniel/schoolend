<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Örkényi gépkölcsönző</title>
  <link rel="icon" type="image/png" href="kepek/logo.png">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="getdata.js"></script>
</head>

<body>

  <div class="modal fade container-fluid" id="exampleModal" role="dialog" 
      tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body" id="modal-body-content"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bezárás</button>
          </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-light p-0">
      <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top py-3">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
         data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav fs-5">
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link" href="index.php">Főoldal</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link" href="index.php?prog=benzines.php">Benzines gépek</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link" href="index.php?prog=elektromos.php">Elektromos gépek</a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a class="nav-link" href="index.php?prog=akkumlatoros.php">Akkumlátoros gépek</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-center">
                <li class="nav-item">
                    <button class="nav-link" type="button" onclick="info(this)" data-bs-toggle="modal" 
                    data-bs-target="#exampleModal"><img src="kepek/info.png" style="max-width: 30px"></button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?prog=search.php">
                      <img src="kepek/search.png" style="max-width: 30px"></a>
                </li>
            </ul>
        </div>
      </nav>
  </div>

  <div class="justify-content-center mt-5 pt-4" >
    <?php
      if(isset($_GET['prog']))
        include $_GET['prog'];
       else
        include 'fooldal.php';
    ?>
  </div>
</body>

<div class="bg-black text-center footer col-12" style="color:white;">
  <div class="text-center p-3">2024 © Örkényi gépkölcsönző</div>
</div>

<script defer>

  function info() {
    //console.log("info");
    var modalBody = document.querySelector('.modal-body');
      modalBody.innerHTML = ''; 
      modalBody.innerHTML += 
      `<div style="font-size:19px">
        <p>Gépkölcsönzéshez szükséges: 
        <br> -Személyi igazolvány 
        <br> -Lakcímkártya 
        <br> -Kaukció összege 
        <br> <b>Telefonos</b> egyeztetés szükséges a gépkölcsönzéshez!
        <br>  Tel.: +36 20/937 1906
        <br> E-mail: orkeny.gepkolcsonzo@gmail.com</p>
        <br> <div class="text-center"><a href="https://maps.app.goo.gl/pNSCB1EYVWXFktUn6" 
        target="_blank"><img src="kepek/maps.jpg" style="max-width: 80px;"></a></div>
       </div>`;
  }

  const links=document.querySelectorAll('a');
  for(let valami of links){
    if(valami.href==document.URL){
      valami.style.color='white';
      valami.style.textDecoration='underline';
    }
  }

</script>

</html>