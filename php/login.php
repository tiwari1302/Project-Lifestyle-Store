<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css" type="text/css">	
	<link href="../css/login.css" rel="stylesheet" type="text/css" />
	<script src="../jquery-3.5.1.min.js"></script>  
	<script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</head>
<body>
<?php include 'includes/header.php'; ?>
	<div class="container main-box-cus">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
							<p class="text-warning"><i>Login to make a purchase</i></p>
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
								<div class="form-group"></div>		<div class="form-group"></div>		<div class="form-group"></div>
								<div class="form-group"></div>		<div class="form-group"></div>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                    </div>
                </div>
            </div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html
