<!doctype html>
<html class="no-js"  lang="<?php echo e(app()->getLocale()); ?>">
		<head>
				<meta charset="utf-8">
				<meta http-equiv="x-ua-compatible" content="ie=edge">
				<title>UD. Naysa Ibrahim</title>
				<meta name="description" content="">
				<meta name="keywords" content="">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				
				<link rel="icon" href="favicon.ico" type="image/x-icon" />

		<!-- 		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
		 -->		
				<link rel="stylesheet" href="/assets/plugins/bootstrap/dist/css/bootstrap.min.css">
				<link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
				<link rel="stylesheet" href="/assets/plugins/icon-kit/dist/css/iconkit.min.css">
				<link rel="stylesheet" href="/assets/plugins/ionicons/dist/css/ionicons.min.css">
				<link rel="stylesheet" href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
				<link rel="stylesheet" href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
				<link rel="stylesheet" href="/assets/plugins/jvectormap/jquery-jvectormap.css">
				<link rel="stylesheet" href="/assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
				<link rel="stylesheet" href="/assets/plugins/weather-icons/css/weather-icons.min.css">
				<link rel="stylesheet" href="/assets/plugins/c3/c3.min.css">
				<link rel="stylesheet" href="/assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css">
				<link rel="stylesheet" href="/assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
				<link rel="stylesheet" href="/assets/css/jquery.dataTables.min.css">
				<link rel="stylesheet" href="/assets/css/select.dataTables.min.css">
				<link rel="stylesheet" href="/assets/dist/css/theme.min.css">
				<script src="/assets/src/js/vendor/modernizr-2.8.3.min.js"></script>
<!-- 				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
 --> 
		</head>

		<body>
				<!--[if lt IE 8]>
						<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
				<![endif]-->

				<div class="wrapper">
					 <?php echo $__env->make('layouts.includes._bootstrap_headertop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<div class="page-wrap">
								<?php echo $__env->make('layouts.includes._bootstrap_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								<div class="main-content">
										 <?php echo $__env->yieldContent('content'); ?>
								</div>
								
								<!-- <?php echo $__env->make('layouts.includes._bootstrap_rightsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
								<!-- <?php echo $__env->make('layouts.includes._bootstrap_chatpanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
								<!-- <?php echo $__env->make('layouts.includes._bootstrap_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
								
								
						</div>
				</div>
				
				
				

				<div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
						<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
										<div class="quick-search">
												<div class="container">
														<div class="row">
																<div class="col-md-4 ml-auto mr-auto">
																		<div class="input-wrap">
																				<input type="text" id="quick-search" class="form-control" placeholder="Search..." />
																				<i class="ik ik-search"></i>
																		</div>
																</div>
														</div>
												</div>
										</div>
										<div class="modal-body d-flex align-items-center">
												<div class="container">
														<div class="apps-wrap">
																<div class="app-item">
																		<a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
																</div>
																<div class="app-item dropdown">
																		<a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-command"></i><span>Ui</span></a>
																		<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
																				<a class="dropdown-item" href="#">Action</a>
																				<a class="dropdown-item" href="#">Another action</a>
																				<a class="dropdown-item" href="#">Something else here</a>
																		</div>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
																</div>
																<div class="app-item">
																		<a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>
        
				<script>window.jQuery || document.write('<script src="/assets/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
				<script src="/assets/plugins/popper.js/dist/umd/popper.min.js"></script>
				<script src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
				<script src="/assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
				<script src="/assets/plugins/screenfull/dist/screenfull.js"></script>
			 	<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
				<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
				<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
				<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
			 	<script src="/assets/plugins/jvectormap/jquery-jvectormap.min.js"></script>
				<script src="/assets/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
				<script src="/assets/plugins/moment/moment.js"></script>
				<script src="/assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
				<script src="/assets/plugins/d3/dist/d3.min.js"></script>
				<script src="/assets/plugins/c3/c3.min.js"></script>
<!-- 				<script src="/assets/js/tables.js"></script>
 -->
				<script src="/assets/js/widgets.js"></script>
				<script src="/assets/js/charts.js"></script>
				<script src="/assets/dist/js/theme.min.js"></script>
				<script src="/assets/js/sic.js"></script>
				<script src="/assets/js/dataTables.buttons.min.js"></script>
				<script src="/assets/js/dataTables.editor.min.js"></script>
				<script src="/assets/js/dataTables.select.min.js"></script>
				<script src="/assets/js/form-advanced.js"></script>
				<script src="/assets/js/customs/ajax-crud.js"></script>

				<?php echo $__env->yieldPushContent('scripts'); ?>
		</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-crud\resources\views/layouts/bootstrap_master.blade.php ENDPATH**/ ?>