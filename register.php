<!DOCTYPE HTML>
<html lang="en">
  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <?php include_once('inc/navbar.php'); 
    include_once('inc/in.php'); ?>





<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="text-blue col-lg-12 con-1 p-4">
				<h2>REGISTER</h2>
			</div>

				<div class="col-lg-12">
					<form>
						<div class="form-group row p-2" >
						  	<label class="col-sm-4 col-form-label text-11 text-lightblue login-text-cen  ">Email</label>
							 	<div class="col-sm-4 ">
							   	<input type="text"  class="form-control   register-bnt-fix-size  register-but-fix register-1">
							 	</div>
						</div>
						<div class="form-group row p-2">
						  	<label class="col-sm-4 col-form-label text-11 text-lightblue login-text-cen ">Password</label>
							 	<div class="col-sm-4">
							   	<input type="password" class="form-control  register-bnt-fix-size register-but-fix register-1 ">
							 	</div>
						</div>


						<div class="col-sm-4">
						</div>
					</form>	
				</div>


			<div class="col-lg-12 ">
				<div class="text-center p-3">
					<button type="button" class="btn btn-blue  register-bnt-fix-size register-1" >Sing Up with Email</button>
				</div>
				<hr class="blue-hr" style="width: 160px;">
			</div>


			<div class="col-lg-12 p-1">
				<div class="text-center">
					<button type="button" class="btn btn-blue register-bnt-fix-size register-1">
						<i class="fab fa-facebook-square re-tap320"></i>
						<font class="re-tap ">Sing Up with Facebook</font>
					</button>
				</div>
			</div>


			<div class="col-lg-12 p-3">
				<div class="text-center  register-1">
					<button type="button" class="btn btn-blue btn-red register-bnt-fix-size " style="margin-bottom: 60px;">
						<i class="fab fa-google Register-icon Register-icon1 "></i>
						<font class="re-tap ">Sing Up with google</font>
					</button>
				</div>
			</div>		
		</div>
	</div>
</div>
	














     <?php include_once('inc/footer.php'); ?>

  </body>
</html>
<?php include_once('inc/footer-script.php'); ?>
