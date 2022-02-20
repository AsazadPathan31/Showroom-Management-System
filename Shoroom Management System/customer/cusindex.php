<?php



include("../dbconnect.php");

session_start();
$id=$_SESSION["uid"];

$qr=mysqli_query($connect,"select * from tb_customer where cust_id='$id'");

$d=mysqli_fetch_assoc($qr);




?> 
<!DOCTYPE html>
<html>
<head>


<link href="../css/adminpagestyle.css" rel="stylesheet">
	<link href="../css/empindexstyle.css" rel=stylesheet>

	<!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	 <link href="../css/empindexstyle.css" rel=stylesheet>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to Login</title>



</head>
<body>

	
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php"><strong> Welcome,  <?php echo($d["cust_name"]);?> </strong></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="cusindex.php?info=upwd"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                   
                </li>
             
            </ul>
            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="cusindex.php?info=dash"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
						<li>
			
				   
				   <li>
			<a href="cusindex.php?info=bp" class="list-group-link"><i class="fa fa-history"></i> Bike Purchase</a>
		</li>
			   
				         
								<li>
			<a href="cusindex.php?info=eepro" class="list-group-link"><i class="fa fa-edit"></i> Edit Profile</a>
		</li>
			   
				   
				        
                    </ul>
                </div>
        
            </div>
       
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-md-7">

                		<?php

			@$info=$_GET["info"];

			if($info=="bp")
			{
				include("bikepurchase.php");
			}
			
			else if($info=="upwd")
			{

				include("updatepassword.php");

			}

			else if($info=="eepro")
			{

				include("editprofile.php");

			}
            else if($info=="dash")
            {
                          include("dashboardcust.php");
            }
            else{

                    include("dashboardcust.php");

            }


			?>

                   
               
				
				</div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

     <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>



</body>
</html>