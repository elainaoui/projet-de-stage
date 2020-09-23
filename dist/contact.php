
<?php

$host="localhost";
$user="root";
$pw="";
$db="contact";

$con=mysqli_connect($host,$user,$pw,$db);

/*if($con){
    echo 'connected';
}else{
    echo 'jhgugh';
}*/
//variable
if(isset($_POST['submit'])){
    $name=filter_var(trim(strtolower($_POST['name'])),FILTER_SANITIZE_STRING);
    $subject=filter_var(trim(strtolower($_POST['subject'])),FILTER_SANITIZE_STRING);
    $email=filter_var(trim(strtolower($_POST['email'])),FILTER_SANITIZE_EMAIL);
    $message=filter_var(trim(strtolower($_POST['message'])),FILTER_SANITIZE_STRING);
    $query = "INSERT INTO abde(name,subject,email,message)value('$name','$subject','$email','$message')";
    //mysqli_query($con,$query);
    //creation de array
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <!--font awsome-->
   <script src="https://kit.fontawesome.com/978546dd0d.js" crossorigin="anonymous"></script>
   <!--css-->
   <link rel="stylesheet" href="css/contact.css">
  <title>Contact</title>
</head>
<body>
    <!--start upper bar-->
    <div class="upper-bar">
      <div class="container">
          <div class="row align-items-center">
              <div class="col">
                  <div class="logo">
                      <!--logo-->
                      <a href="contact.php">
                      <img src="img/logo2.jpg" alt="lino trans" width="250px">
                      </a>
                      <!--logo-->
                  </div>
              </div>
              <div class="col"> 
                  <div class="info-icon">
                      <img src="img/images (1).png" alt="icon phone" width="40px">
                  </div>
                  <div class="info-icon">
                      <h5>phone :</h5>
                      <p>0032 (0) 2 721 21 36</p>
                  </div>
              </div>
              <div class="col">
                  <div class="info-icon">
                    <img src="img/cc86a9f4ca65a140b2edadf3f87f2c17-email-circle-icon-design-by-vexels.png" width="40px" alt="icon email" width="40px">
                  </div>
                  <div class="info-icon">
                      <h5>E-mail :</h5>
                      <p>linotrans.sprl@gmail.com</p>
                  </div>

              </div>
              <div class="col">
                  <div class="info-icon">
                      <img src="img/Clock-512.png" alt="icon" width="40px">
                  </div>
                  <div class="info-icon">
                      <h5>24/24</h5>
                      <p>7/7</p>
                  </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!--End upper bar-->
    <!--start Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link" href="index.html">ACCUEIL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Galerie.html">GALERIE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                FRANCAIS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    <!--End Navbar-->
     <!--start contact-->
    <section class="contact pb-5">
        <div class="container py-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center font-weight-light py-5">contact nos</h1>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="row pt-3">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                <img src="img/loc.gif" width="60px" height="60px" alt="">
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Find Us at office</h3>
                                    <p>Lorem ipsum dolor <br> Lorem ipsum dolor</p>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2">
                                <img src="img/cel.gif" width="50px" height="50px" alt="">
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-9 col-9">
                                    <h3 class="font-weight-light">Find Us at office</h3>
                                    <p>Lorem ipsum dolor <br> Lorem ipsum dolor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="POST">
                                <div class="form-row">
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label>Votre nom</label>
                                        <input name="name" type="text" class="form-control" placeholder="votre nom">
                                        <div class="eror" style="color:red">
                                        <?php if(empty($name)){echo "Ce champ est obligatoire.<br>";}else if(strlen($name)<3){echo "il faut écrire trois ou plus caractéres.";}?>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                                        <label>subject</label>
                                        <input name="subject" type="text" class="form-control" placeholder="subject">
                                    </div>
                                    <label>Email</label>
                                    <input name="email" type="Email" placeholder="Email" class="form-control">
                                    
                                    <label><div class="eror" style="color:red"><?php if(empty($email)){echo "Ce champ est obligatoire.";} ?></div><br>Votre message</label>
                                    <textarea name="message" type="text" cols="10" rows="5" placeholder="Votre message" class="form-control mb-3" ></textarea>
                                    <input type="submit" name="submit" class="btn btn-primary"> 
                                </div>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end contact-->
        <!--start copyright-->
        <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col text-left text-uppercase text-light">
           &copy; 2020 lino logistique
          </div>
          <div class="col text-right">
            <ul class="list-unstyled">
              <li>
                <a href="#">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-linkedin"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-google-plus"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--end copyright-->
<!--cdn-->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

