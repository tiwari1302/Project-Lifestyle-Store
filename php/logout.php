<?php
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">
	<!--	<link href="../css/index.css" rel="stylesheet" type="text/css" />       -->
		<script src="../jquery-3.5.1.min.js"></script>  
		<script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</head>
    <body>
        <div>
            <?php
                require 'includes/header.php';
            ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>You have been logged out. <a href="login.php">Login again.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                require 'includes/footer.php';
            ?>
        </div>
    </body>
</html>
