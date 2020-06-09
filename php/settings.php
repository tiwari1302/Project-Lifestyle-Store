<?php
    session_start();
//    require 'common.php';
   // if(!isset($_SESSION['email'])){
     //   header('location:index.php');
    //}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
	    <link href="../css/settings.css" rel="stylesheet" type="text/css" />
	    <script src="../jquery-3.5.1.min.js"></script>
	    <script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
	    <title>Settings</title>
    </head>
    <body>
        <div>
            <?php
                require 'includes/header.php';
            ?>
            <br>
            <div class="container main-box-cus">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
				        <h2>Change Password</h2>
					    <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Old Passowrd" name="name"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="New Passowrd"  name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type Password" name="password" required = "true">
                            </div>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
			        </div>
                </div>
            </div>
            <?php
                require 'includes/footer.php';
            ?>
        </div>
    </body>
</html>
