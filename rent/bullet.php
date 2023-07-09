<?
session_start();
?>

<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> RB shop </title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <script src="script.js"></script>
    <section id="header">
        <a href="l"><img src="rb logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">

                <li><a class="active" href="indext.html">Home</a></li>
                <li><a class="" href="Shop.html">book</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="vehical-details.php">Login</a></li>
                <li><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
     </section>
     <section id="silder" style="align-items: center;">

     <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/bullet 350.png" class="d-block w-80" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/bullet 351.png" class="d-block w-80" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/bullet 352.png" class="d-block w-80" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>




<aside class="col-md-3">

    
    <div class="sidebar_widget">
      <div class="widget_heading">
        <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
      </div>
      <form method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
        </div>
        <div class="form-group">
          <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="AdharNo" placeholder="Adhar No" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="LicenceNo" placeholder="Licence No" required>
        </div>
        
        
      <?php if($_SESSION['login'])
          {?>
          <div class="form-group">
            <input type="submit" class="btn"  name="submit" value="Book Now">
          </div>
          <?php } else  ?>
<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Book</a>

          
      </form>
    </div>
  </aside><!-- JavaScript Bundle with Popper -->

  
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>