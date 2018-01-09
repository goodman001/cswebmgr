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
				<li>
					<a href="<?php echo U('Dashboard/index');;?>">
					<i class="icon-bar-chart"></i>
					Default Dashboard</a>
				</li>
			</ul>
		</li>
		<li>
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
				<li>
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
				<li>
					<a href="#">
						<i class="icon-bar-chart"></i>
						Data Analysis
					</a>
				</li>
			</ul>
		</li>
		<li  class="active">
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
				<li class="active">
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
			Workers <small>workers listing</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Workers</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo U('Worker/workerlist');;?>">Worker info</a>
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
				<div class="col-md-12">
					<!-- Begin: life time stats -->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-shopping-cart"></i>Worker Listing
							</div>
							<div class="actions">
								<a href="<?php echo U('Worker/workernewpage');;?>" class="btn default yellow-stripe">
									<i class="fa fa-plus"></i>
									<span class="hidden-480"> New worker </span>
								</a>
								<div class="btn-group">
									<a class="btn default yellow-stripe dropdown-toggle" href="javascript:;" data-toggle="dropdown">
									<i class="fa fa-share"></i>
									<span class="hidden-480">
									Tools </span>
									<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:;">
											Export to Excel </a>
										</li>
										<li>
											<a href="javascript:;">
											Export to CSV </a>
										</li>
										<li>
											<a href="javascript:;">
											Export to XML </a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="javascript:;">
											Print Invoices </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="row well">
									<form role="form" action="<?php echo U('Worker/workerlist');;?>" method="post">
									<div class="col-md-12 col-sm-12">
										#Technologies:
										<?php if(is_array($teches)): foreach($teches as $key=>$item): if(in_array(($item["techid"]), is_array($techstr)?$techstr:explode(',',$techstr))): ?><input type="checkbox" name="techsearch[]" class="group-checkable" value="<?php echo ($item["techid"]); ?>" checked><?php echo ($item["content"]); ?>
											<?php else: ?>
												<input type="checkbox" name="techsearch[]" class="group-checkable" value="<?php echo ($item["techid"]); ?>" ><?php echo ($item["content"]); endif; endforeach; endif; ?>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="dataTables_paginate paging_bootstrap_extended" id="datatable_orders_paginate">
											#Sort conditions:
											<select class="table-group-action-input form-control input-inline input-small input-sm">
												<option value="10">addtime asc</option>
												<option value="11">addtime desc</option>
												<option value="20">remark desc</option>
												<option value="21">remark asc</option>
												<option value="30">income desc</option>
												<option value="31">income asc</option>
												<option value="50">projects desc</option>
												<option value="51">projects asc</option>
											</select>
											<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-search"></i> Search</button>
											<a href="<?php echo U('Worker/workerlist');;?>" class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> Reset</a>
										</div>
									</div>
									</form>
								</div>
								<div class="table-scrollable">
									<table class="table table-striped table-bordered table-hover " id="datatable_orders">
									<thead>
									<tr role="row" class="heading">
										<th width="15%">
											 WeChat
										</th>
										<th >
											 Email
										</th>
										<th width="15%">
											 Technologies
										</th>

										<th width="5%">
											 Remark
										</th>
										<th width="10%">
											 Income
										</th>
										<th width="10%">
											 Addtime
										</th>
										<th width="15%">
											 Project
										</th>
										<th width="10%">
											 Description
										</th>
										<th width="10%">
											 Actions
										</th>
									</tr>
									</thead>
									<tbody>
										<?php if(is_array($workers)): foreach($workers as $key=>$vo): ?><tr role="row">
												<td>
													<i class="fa fa-dot-circle-o"></i> <?php echo ($vo["wxname"]); ?>
													<br>
													<i class="fa fa-circle-o"></i> <?php echo ($vo["wxid"]); ?>
												</td>
												<td><?php echo ($vo["email"]); ?></td>
												<td>
													<?php if(is_array($vo["techarr"])): foreach($vo["techarr"] as $key=>$vv): ?><span class="label label-sm label-success" style="margin-right:3px;"><?php echo ($vv["content"]); ?> </span><br><?php endforeach; endif; ?>
												</td>
												<td><?php echo ($vo["remark"]); ?></td>
												<td>
													<?php echo ($vo["income"]); ?> RMB
												</td>
												<td><?php echo ($vo["addtime"]); ?></td>
												<td>
													<span class="label label-sm label-info">ALL projects:  <?php echo ($vo["orderall"]); ?></span>
													<br>
													<span class="label label-sm label-success">Complete projects:  <?php echo ($vo["ordercomplete"]); ?></span>
													<br>
													<span class="label label-sm label-danger">Incomplete projects:  <?php echo ($vo["orderincomplete"]); ?></span>

												</td>
												<td><?php echo ($vo["description"]); ?></td>
												<td>
												<a class="btn  btn-xs red" href="<?php echo U('Worker/workereditpage?wxid='.$vo['wxid'].'');;?>">
													<i class="fa fa-edit"></i>
												</a>
												<a class="btn btn-xs purple" href="#confirmModal<?php echo ($vo['wxid']); ?>" data-toggle="modal">
													<i class="fa fa-times"></i>
												</a>
												<a href="<?php echo U('Worker/workerdetailpage?wxid='.$vo['wxid'].'');;?>" class="btn btn-xs yellow">
													<i class="fa fa-search">
													</i>
												</a>
													<div class="modal fade modal-overflow in" id="confirmModal<?php echo ($vo['wxid']); ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
																	<h4 class="modal-title">Delete warning</h4>
																</div>
																<div class="modal-body">
																	<p>Are you sure to delete this worker?</p>
																	<p><?php echo ($vo['wxid']); ?> : <?php echo ($vo['wxname']); ?></p>

																</div>
																<div class="modal-footer">
																	<a class="btn default" data-dismiss="modal"> Cancel </a>
																	<a href="<?php echo U('Worker/workerdelete?wxid='.$vo['wxid'].'');;?>" type="button" class="btn blue"> Delete </a>
																</div>
															</div>
															<!-- /.modal-content -->
														</div>
													<!-- /.modal-dialog -->
													</div>

												</td>
											</tr><?php endforeach; endif; ?>
									</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
					<!-- End: life time stats -->
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
	<script src="/cswebmgr/Public/metronic3_7/assets/global/scripts/metronic.js" type="text/javascript"></script>
	<script src="/cswebmgr/Public/metronic3_7/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>

	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
			jQuery(document).ready(function() {
           Metronic.init(); // init metronic core components
Layout.init(); // init current layout
			});
		</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>