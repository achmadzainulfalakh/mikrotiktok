<?php session_start();
	include "include/driver-api.php";
	include "include/header.php"; 
	
?>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-dashboard"></i> System</h1>
			<p>Resource</p>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
			<li class="breadcrumb-item"><a href="#">System</a></li>
			<li class="breadcrumb-item"><a href="#">Resource</a></li>
		</ul>
	</div>
	<!--Content-->
	<div class="row">
		<div class="col-lg-12">
			<div class="tile">
				<div class="tile-body" >
					<h3>Resource</h3>
					<?php 
						$util->setMenu('/system resource');
						foreach ($util->getAll() as $item) {							
						?>
						<p>
							<strong>Uptime:</strong> <?php print $item->getProperty('uptime') ?><br/>
							<strong>Version:</strong> <?php print $item->getProperty('version') ?><br/>
							<strong>Build Time:</strong> <?php print $item->getProperty('build-time') ?><br/>
							<strong>Factory Software:</strong> <?php print $item->getProperty('factory-software') ?><br/>
							<strong>Free Memory:</strong> <?php print $item->getProperty('free-memory') ?><br/>
							<strong>Total Memory:</strong> <?php print $item->getProperty('total-memory') ?><br/>
							<strong>CPU:</strong> <?php print $item->getProperty('cpu') ?><br/>
							<strong>CPU Count:</strong> <?php print $item->getProperty('cpu-count') ?><br/>
							<strong>CPU Frequency:</strong> <?php print $item->getProperty('cpu-frequency') ?><br/>
							<strong>CPU Load:</strong> <?php print $item->getProperty('cpu-load') ?><br/>
							<strong>Total HDD Space:</strong> <?php print $item->getProperty('free-hdd-space') ?><br/>
							<strong>Total HDD Memory:</strong> <?php print $item->getProperty('total-hdd-space') ?><br/>
						</p>
						<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
	
</div>
<!--/Content-->

</main>
<?php include "include/footer.php"; ?>

