<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Photo Gallary</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallary</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!--Main image -->
<div>
  <img src="Photos/camera.jpg" class="img-fluid" alt="Camera" style="width: 100%;height:fit-content;padding-right:20%;padding-left:20%;" >
</div>

<!--Nature photo grid -->
<a id="nature">
<div class="my-4">
  <div class="py-4">
    <h1 class="text-center">Nature</h1>
  </div>

  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="photos/nature2.jpg" class="img-fluid " style="width: 100%;height:100%;">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="photos/nature3.jpg" class="img-fluid " style="width: 100%;height:100%;">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="photos/nature4.jpg" class="img-fluid " style="width: 100%;height:100%;">
  </div>
  </div>
  </div>
</div>
</a>

<!--Arcitecture photo grid -->
<a id="architecture">
<div class="my-4">
  <div class="py-4">
    <h1 class="text-center">Architecture</h1>
  </div>

  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="photos/archi4.jpg" class="img-fluid " style="width: 100%;height:100%;">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="photos/archi2.jpg" class="img-fluid " style="width: 100%;height:100%;">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="photos/archi3.jpg" class="img-fluid " style="width: 100%;height:100%;">
  </div>
  </div>
  </div>
</div>
</a>

<!--Travel photo grid -->
<a id="travel">
<div class="my-4">
  <div class="py-4">
    <h1 class="text-center">Travel</h1>
  </div>

  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="photos/travel1.jpg" class="img-fluid " style="width: 100%;height:60%;">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="photos/travel2.jpg" class="img-fluid " style="width: 100%;height:60%;">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="photos/travel3.jpg"class="img-fluid" style="width: 100%;height:60%;">
  </div>
  </div>
  </div>
</div>
</a>

<!--Contact us Form -->
<a id="contactus">
<section class="my-4">
  <div class="py-4">
    <h1 class="text-center">Contact Us</h1>
  </div>

  <div class="w-50 m-auto">
    <form action="about.php" method="post">
      <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label>Number:</label>
        <input type="text" name="number" class="form-control">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>
</a>


<!--About us -->
<a id="aboutus">
<section >
  <h1 class="text-center" style="padding:2% ;" >About Us</h1>
  <h3 class="text-center">Raksha Ramawat</h3>
  <p class="text-center">I am a student, pursuing my engineering degree. My branch is Information technology. This is my web development project</p>
</section>
</a>

    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>