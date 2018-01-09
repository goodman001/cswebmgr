<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="/cswebmgr/Public/metronic3_7/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/cswebmgr/Public/metronic3_7/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/cswebmgr/Public/metronic3_7/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="/cswebmgr/Public/metronic3_7/assets/global/plugins/select2/select2.css"/>
	<link rel="stylesheet" type="text/css" href="/cswebmgr/Public/metronic3_7/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="/cswebmgr/Public/metronic3_7/assets/global/plugins/clockface/css/clockface.css"/>
	<link rel="stylesheet" type="text/css" href="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
	<link rel="stylesheet" type="text/css" href="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
	<link rel="stylesheet" type="text/css" href="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
	<link rel="stylesheet" type="text/css" href="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
	<link rel="stylesheet" type="text/css" href="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>


<!-- BEGIN THEME STYLES -->
<link href="/cswebmgr/Public/metronic3_7/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="/cswebmgr/Public/metronic3_7/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/cswebmgr/Public/metronic3_7/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="/cswebmgr/Public/metronic3_7/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="/cswebmgr/Public/metronic3_7/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header -i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="/cswebmgr/Public/metronic3_7/assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler hide">
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="icon-calendar"></i>
					<span class="badge badge-default">
					3 </span>
					</a>
					<ul class="dropdown-menu extended tasks">
						<li class="external">
							<h3>You have <span class="bold">12 pending</span> tasks</h3>
							<a href="page_todo.html">view all</a>
						</li>
						<li>
							<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">New release v1.2 </span>
									<span class="percent">30%</span>
									</span>
									<span class="progress">
									<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Application deployment</span>
									<span class="percent">65%</span>
									</span>
									<span class="progress">
									<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile app release</span>
									<span class="percent">98%</span>
									</span>
									<span class="progress">
									<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Database migration</span>
									<span class="percent">10%</span>
									</span>
									<span class="progress">
									<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Web server upgrade</span>
									<span class="percent">58%</span>
									</span>
									<span class="progress">
									<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">Mobile development</span>
									<span class="percent">85%</span>
									</span>
									<span class="progress">
									<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
									</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
									<span class="task">
									<span class="desc">New UI release</span>
									<span class="percent">38%</span>
									</span>
									<span class="progress progress-striped">
									<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
									</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="/cswebmgr/Public/metronic3_7/assets/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					Nick </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="extra_profile.html">
							<i class="icon-user"></i> My Profile </a>
						</li>
						<li>
							<a href="page_calendar.html">
							<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="inbox.html">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						<li>
							<a href="page_todo.html">
							<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
							7 </span>
							</a>
						</li>
						<li class="divider">
						</li>
						<li>
							<a href="extra_lock.html">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="login.html">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				<!-- BEGIN QUICK SIDEBAR TOGGLER -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-quick-sidebar-toggler">
					<a href="javascript:;" class="dropdown-toggle">
					<i class="icon-logout"></i>
					</a>
				</li>
				<!-- END QUICK SIDEBAR TOGGLER -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->

			
	<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
		<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
		<li class="sidebar-toggler-wrapper">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler">
			</div>
			<!-- END SIDEBAR TOGGLER BUTTON -->
		</li>
		<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
		<li class="sidebar-search-wrapper">
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
			<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
			<form class="sidebar-search " action="extra_search.html" method="POST">
				<a href="javascript:;" class="remove">
				<i class="icon-close"></i>
				</a>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
		</li>
		<li class="start">
			<a href="javascript:;">
			<i class="icon-home"></i>
			<span class="title">Dashboard</span>
			<span class="selected"></span>
			<span class="arrow open"></span>
			</a>
			<ul class="sub-menu">
				<li class="active">
					<a href="<?php echo U('Dashboard/index');;?>">
					<i class="icon-bar-chart"></i>
					Default Dashboard</a>
				</li>
			</ul>
		</li>
		<li class="active open">
			<a href="javascript:;">
			<i class="icon-basket"></i>
			<span class="title">eCommerce</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="ecommerce_index.html">
					<i class="icon-home"></i>
					Dashboard</a>
				</li>
				<?php if($go == 1): ?><li class="active">
						<a href="<?php echo U('Order/orderlist_ongoing');;?>">
						<i class="icon-bell"></i>
						<span class="badge badge-danger"><?php echo ($cin); ?></span>
						Orders Ongoing</a>
					</li>
					<li>
						<a href="<?php echo U('Order/orderlist?flag=3');;?>">
						<i class="icon-basket"></i>
						Orders All</a>
					</li>
				<?php else: ?>
					<li>
						<a href="<?php echo U('Order/orderlist_ongoing');;?>">
						<i class="icon-bell"></i>
						<span class="badge badge-danger"><?php echo ($cin); ?></span>
						Orders Ongoing</a>
					</li>
					<li class="active" >
						<a href="<?php echo U('Order/orderlist');;?>">
						<i class="icon-basket"></i>
						Orders All</a>
					</li><?php endif; ?>


				<li>
					<a href="#">
						<i class="icon-bar-chart"></i>
						Data Analysis
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
				<i class="fa fa-code"></i>
				<span class="title">Workers</span>
				<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="ecommerce_index.html">
					<i class="icon-home"></i>
					Dashboard</a>
				</li>
				<li>
					<a href="<?php echo U('Worker/workerlist');;?>">
						<i class="icon-basket"></i>
						Workers
					</a>
				</li>
				<li>
					<a href="#">
						<i class="icon-bar-chart"></i>
						Data Analysis
					</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-settings"></i>
			<span class="title">Configuration</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="form_controls.html">
						Exchange Rate
					</a>
				</li>
				<li>
					<a href="form_controls_md.html">
						Technologies Conf
					</a>
				</li>

			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-settings"></i>
			<span class="title">Configuration</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="form_controls.html">
						Exchange Rate
					</a>
				</li>
				<li>
					<a href="form_controls_md.html">
						Technologies Conf
					</a>
				</li>

			</ul>
		</li>
	</ul>

			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		
	<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Orders <small>edit order</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">eCommerce</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<?php if($go == 1): ?><a href="<?php echo U('Order/orderlist_ongoing');;?>">Orders Ongoing</a>
						<?php else: ?>
							<a href="<?php echo U('Order/orderlist?flag=3');;?>">Orders All</a><?php endif; ?>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Edit Order</a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Actions <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12 ">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet box purple ">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> OrderID #<?php echo ($orderinfo["orderid"]); ?>
							</div>
							<div class="tools">
								<a href="" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="" class="reload">
								</a>
								<a href="" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<form class="form-horizontal" action="<?php echo U('Order/orderupdate?go='.$go.'');;?>" method="post"  role="form">
                				<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">Order ID</label>
										<div class="col-md-9">
											<input name="orderid" type="text" value="<?php echo ($orderinfo["orderid"]); ?>" class="form-control input-inline input-medium" readonly>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Guest Wechat ID</label>
										<div class="col-md-9">
											<input name="guest_wxid" type="text" placeholder="Guest Wechat ID" value="<?php echo ($orderinfo["gwxid"]); ?>" class="form-control input-inline input-medium" readonly>
											<span class="help-inline">
											guest's wechat id. </span>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="col-md-3 control-label">Guest Wechat Name</label>
										<div class="col-md-9">
											<input name="guest_wxname" type="text" placeholder="Guest Wechat Name" class="form-control input-inline input-medium" value="<?php echo ($orderinfo["gwxname"]); ?>" required>
											<span class="help-inline"> guest's wechat name. </span>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="col-md-3 control-label">Project Name</label>
										<div class="col-md-9">
											<input name="projectname" type="text" placeholder="Project name" class="form-control" value="<?php echo ($orderinfo["projectname"]); ?>" required>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="col-md-3 control-label">Guest deadline</label>
										<div class="col-md-3">
											<div class="input-group date form_meridian_datetimenew" data-date="2012-12-21">
												<input name="g_deadtime" type="text" size="10" class="form-control input-inline " placeholder="Guest deadline" value="<?php echo ($orderinfo["g_deadline"]); ?>" required>
												<span class="input-group-btn">
												<button class="btn default date-reset" type="button"><i class="fa fa-times"></i></button>
												<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="col-md-3 control-label">Currency Type</label>
										<div class="col-md-9">
											<select name="moneytype" class="form-control input-inline input-medium">
												<?php if(is_array($currencies)): foreach($currencies as $key=>$vo): if($vo['currency'] == $orderinfo['moneytype']): ?>\
														<option value="<?php echo ($orderinfo["moneytype"]); ?>" selected><?php echo ($orderinfo["moneytype"]); ?></option>
													<?php else: ?>
														<option value="<?php echo ($vo['currency']); ?>" ><?php echo ($vo['currency']); ?></option><?php endif; endforeach; endif; ?>
											</select>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="col-md-3 control-label">Total Price</label>
										<div class="col-md-9">
											<input name="totalprice" type="number" min="0" step="0.01" class="form-control input-inline input-medium" value="<?php echo ($orderinfo["totalprice"]); ?>" required>
											<span class="help-inline"> guest's total price. </span>
										</div>
									</div>
									<div class="form-group has-error">
										<label class="col-md-3 control-label">Guarantee</label>
										<div class="col-md-9">
											<input name="guarantee" type="number" min="0" step="0.01" class="form-control input-inline input-medium" value="<?php echo ($orderinfo["guarantee"]); ?>" required>
											<span class="help-inline"> guest's guarantee price. </span>
										</div>
									</div>
									<!--
										0. guest have no paid gurrentee
										1. guest have paid gurrentee
										2. guest have pain all money
									-->
									<!--
										0. no
										1. worker is doing
										2. worker has completed and no pay
										3. worker has completed and paid
									-->
									<div class="form-group  has-error">
										<label class="col-md-3 control-label">Guest state</label>
										<div class="col-md-9">
											<select name="g_state" class="form-control input-inline input-medium">
												<?php if($orderinfo["g_state"] == 0 ): ?><option value="0" selected>Guest have no paid gurrentee</option>
																		<option value="1">Guest have paid gurrentee</option>
																		<option value="2">Guest have pain all money</option>
												<?php elseif($name == 1): ?>
												  <option value="0">Guest have no paid gurrentee</option>
																		<option value="1" selected>Guest have paid gurrentee</option>
																		<option value="2">Guest have pain all money</option>
												<?php else: ?>
												  <option value="0">Guest have no paid gurrentee</option>
																		<option value="1">Guest have paid gurrentee</option>
																		<option value="2" selected>Guest have pain all money</option><?php endif; ?>

											</select>
										</div>
									</div>
									<hr>
									<div class="form-group">
										<label class="col-md-3 control-label">Select worker</label>
										<div class="col-md-9">
											<input name="oriid" type="hidden" value="<?php echo ($orderinfo[wxid]); ?>" readonly>
											<select name="wxid" class="form-control input-inline input-medium">
												<?php if(is_array($workers)): foreach($workers as $key=>$vo): ?><option value="">Please Choose a worker</option>
													<?php if($orderinfo[wxid] == $vo[wxid]): ?><option value="<?php echo ($vo["wxid"]); ?>" selected><?php echo ($vo["wxid"]); ?> : <?php echo ($vo["wxname"]); ?></option>
													<?php else: ?>
														<option value="<?php echo ($vo["wxid"]); ?>"><?php echo ($vo["wxid"]); ?> : <?php echo ($vo["wxname"]); ?></option><?php endif; endforeach; endif; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Worker deadline</label>
										<div class="col-md-3">
											<div class="input-group date form_meridian_datetimenew" data-date="2012-12-21">
												<input name="w_deadline" type="text" size="10" class="form-control input-inline " placeholder="Worker deadline" value="<?php echo ($orderinfo["w_deadline"]); ?>" readonly>
												<span class="input-group-btn">
												<button class="btn default date-reset" type="button"><i class="fa fa-times"></i></button>
												<button class="btn default date-set" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Worker salary</label>
										<div class="col-md-9">
											<input name="w_payment" type="number"  min="0" step="0.01" class="form-control input-inline input-medium" value="<?php echo ($orderinfo["w_payment"]); ?>">
											<span class="help-inline"> Worker salary. </span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Worker state</label>
										<div class="col-md-9">
											<select name="w_state" class="form-control input-inline input-medium">
												<?php if($orderinfo["w_state"] == 0 ): ?><option value="0" selected>null</option>
																		<option value="1">worker is doing</option>
																		<option value="2">worker has completed and no pay</option>
																		<option value="3">worker has completed and paid</option>
												<?php elseif($orderinfo["w_state"] == 1): ?>
												  <option value="0">null</option>
												  <option value="1" selected>worker is doing</option>
												  <option value="2">worker has completed and no pay</option>
												  <option value="3">worker has completed and paid</option>
												<?php elseif($orderinfo["w_state"] == 2): ?>
												  <option value="0">null</option>
												  <option value="1">worker is doing</option>
												  <option value="2" selected>worker has completed and no pay</option>
												  <option value="3">worker has completed and paid</option>
												<?php else: ?>
												  <option value="0">null</option>
												  <option value="1">worker is doing</option>
												  <option value="2">worker has completed and no pay</option>
												  <option value="3" selected>worker has completed and paid</option><?php endif; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Description</label>
										<div class="col-md-9">
											<textarea name="description" class="form-control input-inline input-medium" rows="3"> <?php echo ($orderinfo["description"]); ?></textarea>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<?php if($go == 1): ?><a href="<?php echo U('Order/orderlist_ongoing');;?>" type="button" class="btn default">Cancel</a>
											<?php else: ?>
												<a href="<?php echo U('Order/orderlist');;?>" type="button" class="btn default">Cancel</a><?php endif; ?>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
					<!-- BEGIN SAMPLE FORM PORTLET-->

					<!-- END SAMPLE FORM PORTLET-->
					<!-- BEGIN SAMPLE FORM PORTLET-->

				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>

	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Metronic by keenthemes.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>

<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/respond.min.js"></script>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/clockface/js/clockface.js"></script>
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
	<script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/cswebmgr/Public/metronic3_7/assets/global/scripts/metronic.js" type="text/javascript"></script>
	<script src="/cswebmgr/Public/metronic3_7/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
	<script src="/cswebmgr/Public/metronic3_7/assets/admin/pages/scripts/components-pickers.js"></script>

		<!-- END PAGE LEVEL SCRIPTS -->
		<script>
			jQuery(document).ready(function() {
				// initiate layout and plugins
				Metronic.init(); // init metronic core components
				Layout.init(); // init current layout
				ComponentsPickers.init();
	        });
			</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>