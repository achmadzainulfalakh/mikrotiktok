<?php 
	session_start();
	include "include/driver-api.php";
	include "include/header.php";
	
	?>
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
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>address</th>
								<th>network</th>
								<th>interface</th>
							</tr>
						</thead>	
						<?php 
							
							$util->setMenu('/ip address');
							
							foreach ($util->getAll() as $item) {							
							?>
							<tbody>
								<tr>
									<td> </td>
									<td><?php print $item->getProperty('address') ?></td>
									<td><?php print $item->getProperty('network') ?></td>
									<td><?php print $item->getProperty('interface') ?></td>
									</tr><?php
								}
							?>
						</tbody>
					</table>
					
					
					
				</div>
			</div>
		</div>
	</div>
	<!--/Content-->
	
</main>
<?php include "include/footer.php"; ?>

