<?php 
include('dbconnect.php');


extract($_POST);
if(isset($save))
{

mysqli_query($connect,"insert into contact values('','$n','$m','$e','$msg',now())");
	
$err="<font color='green'>Admin Will Contact you soon</font>";	

}

?>

        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                
                <ol class="breadcrumb">
                    
                    </li>
                   
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
       <div class="row">
            <div class="col-md-8">
                <h3><font class="text-info">Contact us </font></h3>
                <form name="sentMessage" method="post" id="contactForm" novalidate>
                  <?php echo @$err; ?>
				    <div class="control-group form-group">
                        
						
						<div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="n" required placeholder="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mobile Number:</label>
                            <input type="number" class="form-control" name="m" required placeholder="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="e" required placeholder="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" name="msg" cols="100" class="form-control" id="message" required placeholder="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="save" class="btn btn-primary">Send Message</button>
					<h1></h1>
                </form>
            </div>
			<div class="col-md-4" style="margin-top:30px">
                <h3>Contact Details</h3>
                <p>
                   Nashik Pune<br>Highway, Sangamner<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>:7854485540</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="pathanasazad12@gmail.com">pathanasazad12@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Sunday: 9:00 AM to 9:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        </div>
        

    <br/><br/>
    
    </div>

