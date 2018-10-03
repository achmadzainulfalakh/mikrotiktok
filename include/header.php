<!DOCTYPE html>	
<html lang="en">
	<head>
		<meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
		<!-- Twitter meta-->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:site" content="@pratikborsadiya">
		<meta property="twitter:creator" content="@pratikborsadiya">
		<!-- Open Graph Meta-->
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="Vali Admin">
		<meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
		<meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
		<meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
		<meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
		<?php 
			$util->setMenu('/system identity');
			foreach ($util->getAll() as $item) {							
			?>
			<title><?php print $item->getProperty('name') ?></title>
		<?php } ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Main CSS-->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!-- Font-icon css-->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	</head>
	<body class="app sidebar-mini rtl" ng-app="myApp" ng-controller="myCtrl">
		<!-- Navbar-->
		<header class="app-header">
		<?php 
			$util->setMenu('/system identity');
			foreach ($util->getAll() as $item) {							
			?>
			<a class="app-header__logo" href="index.php"><?php print $item->getProperty('name') ?></a>
		<?php } ?>
			<!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
			<!-- Navbar Right Menu-->
			<ul class="app-nav">
			<li class="app-search">
			<input class="app-search__input" type="search" placeholder="Search">
			<button class="app-search__button"><i class="fa fa-search"></i></button>
			</li>
			<!--Notification Menu-->
			<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
				<ul class="app-notification dropdown-menu dropdown-menu-right">
					<li class="app-notification__title">You have 4 new notifications.</li>
					<div class="app-notification__content">
						<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
							<div>
								<p class="app-notification__message">Lisa sent you a mail</p>
								<p class="app-notification__meta">2 min ago</p>
							</div></a></li>
							<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
								<div>
									<p class="app-notification__message">Mail server not working</p>
									<p class="app-notification__meta">5 min ago</p>
								</div></a></li>
								<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
									<div>
										<p class="app-notification__message">Transaction complete</p>
										<p class="app-notification__meta">2 days ago</p>
									</div></a></li>
									<div class="app-notification__content">
										<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
											<div>
												<p class="app-notification__message">Lisa sent you a mail</p>
												<p class="app-notification__meta">2 min ago</p>
											</div></a></li>
											<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
												<div>
													<p class="app-notification__message">Mail server not working</p>
													<p class="app-notification__meta">5 min ago</p>
												</div></a></li>
												<li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
													<div>
														<p class="app-notification__message">Transaction complete</p>
														<p class="app-notification__meta">2 days ago</p>
													</div></a></li>
									</div>
					</div>
					<li class="app-notification__footer"><a href="#">See all notifications.</a></li>
				</ul>
			</li>
			<!-- User Menu-->
			<li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
				<ul class="dropdown-menu settings-menu dropdown-menu-right">
					<li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
					<li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
					<li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
				</ul>
			</li>
			</ul>
		</header>
		<!-- Sidebar menu-->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar">
			<div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
				<div>
					<p class="app-sidebar__user-name"><?php print $_SESSION["username"];?></p>
					<p class="app-sidebar__user-designation"><?php print $_SESSION["host"];?></p>
				</div>
			</div>
			<ul class="app-menu">
				<li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
				<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">IP</span><i class="treeview-indicator fa fa-angle-right"></i></a>
					<ul class="treeview-menu">
						<li><a class="treeview-item" href="ip-arp.php"><i class="icon fa fa-circle-o"></i> Arp</a></li>
						<li><a class="treeview-item" href="ip-address.php"><i class="icon fa fa-circle-o"></i> Address</a></li>
						<li><a class="treeview-item" href="ip-dhcp-server.php"><i class="icon fa fa-circle-o"></i> DHCP Server</a></li>
						<li><a class="treeview-item" href="ip-dhcp-client.php"><i class="icon fa fa-circle-o"></i> DHCP Client</a></li>
					</ul>
				</li>
				<li><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Charts</span></a></li>
				<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">System</span><i class="treeview-indicator fa fa-angle-right"></i></a>
					<ul class="treeview-menu">
						<li><a class="treeview-item" href="system-resource.php"><i class="icon fa fa-circle-o"></i> Resource</a></li>
						<li><a class="treeview-item" href="form-custom.html"><i class="icon fa fa-circle-o"></i> Custom Components</a></li>
						<li><a class="treeview-item" href="form-samples.html"><i class="icon fa fa-circle-o"></i> Form Samples</a></li>
						<li><a class="treeview-item" href="form-notifications.html"><i class="icon fa fa-circle-o"></i> Form Notifications</a></li>
					</ul>
				</li>
				<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tables</span><i class="treeview-indicator fa fa-angle-right"></i></a>
					<ul class="treeview-menu">
						<li><a class="treeview-item" href="table-basic.html"><i class="icon fa fa-circle-o"></i> Basic Tables</a></li>
						<li><a class="treeview-item" href="table-data-table.html"><i class="icon fa fa-circle-o"></i> Data Tables</a></li>
					</ul>
				</li>
			</ul>
		</aside>		