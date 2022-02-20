<?php
  
include("dbconnect.php");

$qry=mysqli_query($connect,"select * from tb_bikes");



?>





<!DOCTYPE html>
<html>
<head>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link href="./css/indexstyle.css" rel="stylesheet">


	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>

  <style>

    #bd{

      font-size: 25px;
      text-shadow:3px 3px 3px red;
    }
      #bk{

        font-size:30px;
        color:#516cbd;

      }

      hr{

        border: 2px solid #cf84c8;

      }

      #imgmod{

       /* box-shadow:4px 4px 4px 4px black;*/
        width: 300px;
        height: 300px;
      /*  border-radius:20px;

        margin-left:50px;

        margin-bottom:50px;
*/
      }

      .card:hover{

        box-shadow:4px 5px 6px 5px #857a7a;
      }

      #vdetails
      {

      }

    


  </style>


</head>
<body style="background-color:#ebedf0">

	<div class="container-fluid" style="margin: 0px;padding: 0px;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="margin-right:380px;"><strong id="bd">Rajedra Honda Showroom</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-home" style="font-size:20px"> Home</i ><span class="sr-only">(current)</span></a>
      </li>

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-sign-in" style="font-size:20px"> Registration

        </a></i>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?info=registration">Customer Registration
</a>
          <a class="dropdown-item" href="index.php?info=empregistration">Employee Registration
</a>
   
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fa fa-lock" style="font-size:20px"> Login</i>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php?info=cuslog">Customer Login</a>
          <a class="dropdown-item" href="index.php?info=emplog">Employee Login</a>
        
      </li>


            <li class="nav-item active">
        <a class="nav-link" href="index.php?info=cont"><i class="fa fa-address-book" style="font-size:20px"> Contact</i> <span class="sr-only">(current)</span></a>
      </li>
   
    </ul>
    
  </div>
</nav>

    <?php 


      @$info=$_GET["info"];

      if($info!="")
      {

        if($info=="registration")
        {
          include("registration.php");
        }
        else if($info=="empregistration")
        {
          include("employeereg.php");
        }
        else if($info=="emplog")
        {
          include("./employee/employeeloginpage.php");
        }
        else if($info=="cuslog")
        {
          include("./customer/customerloginpage.php");
        }
        else if($info=="cont")
        {
          include("contact.php");
        }
      }
      else{ ?>

        <div class="container" style="margin-top:80px;">

<div id="carouselE" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/carousel/s1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/carousel/s2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/carousel/pexels-sourav-mishra-2747540.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselE" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselE" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        </div>

        <div class="container" style="margin-top: 80px;">

          <div class="row">

            <div class="col-sm-2" id="bk">Bikes<hr></div>
            <div class="col-md-7"></div>
            <div class="col-md-4"></div>

          </div>

            <br><br><br>

      

          <div class="row">

            <?php 

            while($data=mysqli_fetch_assoc($qry))
            {

            ?>

            <div class="col-md-4">




           <div class="card">
              <div class="card-header">

                <strong> <center> <?php echo($data["b_name"])?></center></strong>

              </div>

              <div class="card-body">

                    <img src="employee/<?php echo($data['emp_id'])?>/albums/<?php echo($data['b_image'])?>" id="imgmod">


                    <br>
                      <a href="viewbikedetails.php?id=<?php echo($data["b_name"])?>" id="vdetails"> View Details</a>
                      <br>

              </div>

              <div class="card-footer">

                $<?php echo($data["b_prize"]) ?>  <a href="viewbikedetails.php?id=<?php echo($data["b_name"])?>"><button class="btn btn-success" style="position:relative;left:140px">
                  
                 Purchase

                </button></a>

              </div>

            </div>
          

            </div>

            <?php 

}
            ?>




            </div>



        </div>

        <br><br><br> <br><br><br> <br><br><br>

<?php

      }
     


?>



<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid" style="margin:0px;padding:0px; position: fixed; bottom: 0px;
    ">

  <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
   
    <div class="text-center p-3" style="background-color:#ff5e7c">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >ASAZAD PATHAN</a
        >
    </div>
  
  </footer>
  

</div>



</div>


</body>
</html>