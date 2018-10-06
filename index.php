<?php 
	session_start();
if(!$_SESSION["host"]){
	header("Location: login.php");
}
	include "include/driver-api.php";
	
include "include/header.php"; ?>

<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-dashboard"></i> Blank Page</h1>
			<p>Start a beautiful journey here</p>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
			<li class="breadcrumb-item"><a href="#">Blank Page</a></li>
		</ul>
	</div>
	<!--Content-->
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<div class="tile-body" >
					<?php
						
						print "host: ".$_SESSION["host"]."<br/>";
						print "username: ".$_SESSION["username"]."<br/>";
						print "password: ".$_SESSION["password"]."<br/>";
					?>
					
					
					
				</div>
			</div>
		</div>
	</div>
	<!--/Content-->
	
</main>
<?php include "include/footer.php"; ?>


