<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>Hello, world!</title>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#"><img src="img/Page/LogoTrLow.png" alt="" sizes="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Ver Pagina Stream</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Proximamente
          </a>
          <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
            <a class="dropdown-item active" href="#">Action</a>
            <a class="dropdown-item active" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item active" href="#">Something else here</a>
          </div>
        </li>

      </ul>

    </div>
  </nav>


  <?php 
  
  if(!isset($_GET["pag"]))
  include 'content/editor.php'; 
  else{
    switch ($_GET["pag"]) {
        case 'Controlador':
            # code...
        break;
        
        default:
            include 'content/editor.php'; 
        break;
    }
  }
  ?>


  <!-- Footer -->
  <footer class="page-footer font-small bg-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1" href="https://www.facebook.com/ESTRMTY/">
            <i class="fa fa-facebook"> </i>
          </a>
          
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1" href="https://twitter.com/MtyRoom">
            <i class="fa fa-twitter"> </i>
          </a>
        </li>

      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">Unete al grupo de Facebook:
      <a href="https://www.facebook.com/groups/SSBTrainingRoomMty/"> Trainig Room Monterrey</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!-- <script src="js/index.js"></script> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/index.css">

</body>

</html>