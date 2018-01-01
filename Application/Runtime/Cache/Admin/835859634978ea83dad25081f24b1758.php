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
  <link href="/cswebmgr/Public/metronic3_7/assets/admin/pages/css/todo.css" rel="stylesheet" type="text/css"/>
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
					<a href="index.html">
					<i class="icon-bar-chart"></i>
					Default Dashboard</a>
				</li>
				<li>
					<a href="index_2.html">
					<i class="icon-bulb"></i>
					New Dashboard #1</a>
				</li>
				<li>
					<a href="index_3.html">
					<i class="icon-graph"></i>
					New Dashboard #2</a>
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
					<a href="ecommerce_orders.html">
					<i class="icon-basket"></i>
					Orders</a>
				</li>
				<li>
					<a href="ecommerce_orders_view.html">
					<i class="icon-tag"></i>
					Order View</a>
				</li>
				<li>
					<a href="ecommerce_products.html">
					<i class="icon-handbag"></i>
					Products</a>
				</li>
				<li>
					<a href="ecommerce_products_edit.html">
					<i class="icon-pencil"></i>
					Product Edit</a>
				</li>
			</ul>
		</li>
		<li  class="active open">
			<a href="javascript:;">
			<i class="icon-basket"></i>
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
					Worker info</a>
				</li>
				<li>
					<a href="ecommerce_orders_view.html">
					<i class="icon-tag"></i>
					Order View</a>
				</li>
				<li>
					<a href="ecommerce_products.html">
					<i class="icon-handbag"></i>
					Products</a>
				</li>
				<li>
					<a href="ecommerce_products_edit.html">
					<i class="icon-pencil"></i>
					Product Edit</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-rocket"></i>
			<span class="title">Page Layouts</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="layout_horizontal_sidebar_menu.html">
					Horizontal & Sidebar Menu</a>
				</li>
				<li>
					<a href="index_horizontal_menu.html">
					Dashboard & Mega Menu</a>
				</li>
				<li>
					<a href="layout_horizontal_menu1.html">
					Horizontal Mega Menu 1</a>
				</li>
				<li>
					<a href="layout_horizontal_menu2.html">
					Horizontal Mega Menu 2</a>
				</li>
				<li>
					<a href="layout_fontawesome_icons.html">
					<span class="badge badge-roundless badge-danger">new</span>Layout with Fontawesome Icons</a>
				</li>
				<li>
					<a href="layout_glyphicons.html">
					Layout with Glyphicon</a>
				</li>
				<li>
					<a href="layout_full_height_portlet.html">
					<span class="badge badge-roundless badge-success">new</span>Full Height Portlet</a>
				</li>
				<li>
					<a href="layout_full_height_content.html">
					<span class="badge badge-roundless badge-warning">new</span>Full Height Content</a>
				</li>
				<li>
					<a href="layout_search_on_header1.html">
					Search Box On Header 1</a>
				</li>
				<li>
					<a href="layout_search_on_header2.html">
					Search Box On Header 2</a>
				</li>
				<li>
					<a href="layout_sidebar_search_option1.html">
					Sidebar Search Option 1</a>
				</li>
				<li>
					<a href="layout_sidebar_search_option2.html">
					Sidebar Search Option 2</a>
				</li>
				<li>
					<a href="layout_sidebar_reversed.html">
					<span class="badge badge-roundless badge-warning">new</span>Right Sidebar Page</a>
				</li>
				<li>
					<a href="layout_sidebar_fixed.html">
					Sidebar Fixed Page</a>
				</li>
				<li>
					<a href="layout_sidebar_closed.html">
					Sidebar Closed Page</a>
				</li>
				<li>
					<a href="layout_ajax.html">
					Content Loading via Ajax</a>
				</li>
				<li>
					<a href="layout_disabled_menu.html">
					Disabled Menu Links</a>
				</li>
				<li>
					<a href="layout_blank_page.html">
					Blank Page</a>
				</li>
				<li>
					<a href="layout_boxed_page.html">
					Boxed Page</a>
				</li>
				<li>
					<a href="layout_language_bar.html">
					Language Switch Bar</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-diamond"></i>
			<span class="title">UI Features</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="ui_general.html">
					General Components</a>
				</li>
				<li>
					<a href="ui_buttons.html">
					Buttons</a>
				</li>
				<li>
					<a href="ui_confirmations.html">
					Popover Confirmations</a>
				</li>
				<li>
					<a href="ui_icons.html">
					<span class="badge badge-roundless badge-danger">new</span>Font Icons</a>
				</li>
				<li>
					<a href="ui_colors.html">
					Flat UI Colors</a>
				</li>
				<li>
					<a href="ui_typography.html">
					Typography</a>
				</li>
				<li>
					<a href="ui_tabs_accordions_navs.html">
					Tabs, Accordions & Navs</a>
				</li>
				<li>
					<a href="ui_tree.html">
					<span class="badge badge-roundless badge-danger">new</span>Tree View</a>
				</li>
				<li>
					<a href="ui_page_progress_style_1.html">
					<span class="badge badge-roundless badge-warning">new</span>Page Progress Bar</a>
				</li>
				<li>
					<a href="ui_blockui.html">
					Block UI</a>
				</li>
				<li>
					<a href="ui_bootstrap_growl.html">
					<span class="badge badge-roundless badge-warning">new</span>Bootstrap Growl Notifications</a>
				</li>
				<li>
					<a href="ui_notific8.html">
					Notific8 Notifications</a>
				</li>
				<li>
					<a href="ui_toastr.html">
					Toastr Notifications</a>
				</li>
				<li>
					<a href="ui_alert_dialog_api.html">
					<span class="badge badge-roundless badge-danger">new</span>Alerts & Dialogs API</a>
				</li>
				<li>
					<a href="ui_session_timeout.html">
					Session Timeout</a>
				</li>
				<li>
					<a href="ui_idle_timeout.html">
					User Idle Timeout</a>
				</li>
				<li>
					<a href="ui_modals.html">
					Modals</a>
				</li>
				<li>
					<a href="ui_extended_modals.html">
					Extended Modals</a>
				</li>
				<li>
					<a href="ui_tiles.html">
					Tiles</a>
				</li>
				<li>
					<a href="ui_datepaginator.html">
					<span class="badge badge-roundless badge-success">new</span>Date Paginator</a>
				</li>
				<li>
					<a href="ui_nestable.html">
					Nestable List</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-puzzle"></i>
			<span class="title">UI Components</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="components_pickers.html">
					Date & Time Pickers</a>
				</li>
				<li>
					<a href="components_context_menu.html">
					Context Menu</a>
				</li>
				<li>
					<a href="components_dropdowns.html">
					Custom Dropdowns</a>
				</li>
				<li>
					<a href="components_form_tools.html">
					Form Widgets & Tools</a>
				</li>
				<li>
					<a href="components_form_tools2.html">
					Form Widgets & Tools 2</a>
				</li>
				<li>
					<a href="components_editors.html">
					Markdown & WYSIWYG Editors</a>
				</li>
				<li>
					<a href="components_ion_sliders.html">
					Ion Range Sliders</a>
				</li>
				<li>
					<a href="components_noui_sliders.html">
					NoUI Range Sliders</a>
				</li>
				<li>
					<a href="components_jqueryui_sliders.html">
					jQuery UI Sliders</a>
				</li>
				<li>
					<a href="components_knob_dials.html">
					Knob Circle Dials</a>
				</li>
			</ul>
		</li>
		<!-- BEGIN ANGULARJS LINK -->
		<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="AngularJS version demo">
			<a href="angularjs" target="_blank">
			<i class="icon-paper-plane"></i>
			<span class="title">
			AngularJS Version </span>
			</a>
		</li>
		<!-- END ANGULARJS LINK -->
		<li class="heading">
			<h3 class="uppercase">Features</h3>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-settings"></i>
			<span class="title">Form Stuff</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="form_controls_md.html">
					<span class="badge badge-roundless badge-danger">new</span>Material Design<br>
					Form Controls</a>
				</li>
				<li>
					<a href="form_controls.html">
					Bootstrap<br>
					Form Controls</a>
				</li>
				<li>
					<a href="form_icheck.html">
					iCheck Controls</a>
				</li>
				<li>
					<a href="form_layouts.html">
					Form Layouts</a>
				</li>
				<li>
					<a href="form_editable.html">
					<span class="badge badge-roundless badge-warning">new</span>Form X-editable</a>
				</li>
				<li>
					<a href="form_wizard.html">
					Form Wizard</a>
				</li>
				<li>
					<a href="form_validation.html">
					Form Validation</a>
				</li>
				<li>
					<a href="form_image_crop.html">
					<span class="badge badge-roundless badge-danger">new</span>Image Cropping</a>
				</li>
				<li>
					<a href="form_fileupload.html">
					Multiple File Upload</a>
				</li>
				<li>
					<a href="form_dropzone.html">
					Dropzone File Upload</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-briefcase"></i>
			<span class="title">Data Tables</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="table_basic.html">
					Basic Datatables</a>
				</li>
				<li>
					<a href="table_tree.html">
					Tree Datatables</a>
				</li>
				<li>
					<a href="table_responsive.html">
					Responsive Datatables</a>
				</li>
				<li>
					<a href="table_managed.html">
					Managed Datatables</a>
				</li>
				<li>
					<a href="table_editable.html">
					Editable Datatables</a>
				</li>
				<li>
					<a href="table_advanced.html">
					Advanced Datatables</a>
				</li>
				<li>
					<a href="table_ajax.html">
					Ajax Datatables</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-wallet"></i>
			<span class="title">Portlets</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="portlet_general.html">
					General Portlets</a>
				</li>
				<li>
					<a href="portlet_general2.html">
					<span class="badge badge-roundless badge-danger">new</span>New Portlets #1</a>
				</li>
				<li>
					<a href="portlet_general3.html">
					<span class="badge badge-roundless badge-danger">new</span>New Portlets #2</a>
				</li>
				<li>
					<a href="portlet_ajax.html">
					Ajax Portlets</a>
				</li>
				<li>
					<a href="portlet_draggable.html">
					Draggable Portlets</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-bar-chart"></i>
			<span class="title">Charts</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="charts_amcharts.html">
					amChart</a>
				</li>
				<li>
					<a href="charts_flotcharts.html">
					Flotchart</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-docs"></i>
			<span class="title">Pages</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="page_timeline.html">
					<i class="icon-paper-plane"></i>
					<span class="badge badge-warning">2</span>New Timeline</a>
				</li>
				<li>
					<a href="extra_profile.html">
					<i class="icon-user-following"></i>
					<span class="badge badge-success badge-roundless">new</span>New User Profile</a>
				</li>
				<li>
					<a href="page_todo.html">
					<i class="icon-check"></i>
					Todo</a>
				</li>
				<li>
					<a href="inbox.html">
					<i class="icon-envelope"></i>
					<span class="badge badge-danger">4</span>Inbox</a>
				</li>
				<li>
					<a href="extra_faq.html">
					<i class="icon-question"></i>
					FAQ</a>
				</li>
				<li>
					<a href="page_calendar.html">
					<i class="icon-calendar"></i>
					<span class="badge badge-danger">14</span>Calendar</a>
				</li>
				<li>
					<a href="page_coming_soon.html">
					<i class="icon-flag"></i>
					Coming Soon</a>
				</li>
				<li>
					<a href="page_blog.html">
					<i class="icon-speech"></i>
					Blog</a>
				</li>
				<li>
					<a href="page_blog_item.html">
					<i class="icon-link"></i>
					Blog Post</a>
				</li>
				<li>
					<a href="page_news.html">
					<i class="icon-eye"></i>
					<span class="badge badge-success">9</span>News</a>
				</li>
				<li>
					<a href="page_news_item.html">
					<i class="icon-bell"></i>
					News View</a>
				</li>
				<li>
					<a href="page_timeline_old.html">
					<i class="icon-paper-plane"></i>
					<span class="badge badge-warning">2</span>Old Timeline</a>
				</li>
				<li>
					<a href="extra_profile_old.html">
					<i class="icon-user"></i>
					Old User Profile</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-present"></i>
			<span class="title">Extra</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="page_about.html">
					About Us</a>
				</li>
				<li>
					<a href="page_contact.html">
					Contact Us</a>
				</li>
				<li>
					<a href="extra_search.html">
					Search Results</a>
				</li>
				<li>
					<a href="extra_invoice.html">
					Invoice</a>
				</li>
				<li>
					<a href="page_portfolio.html">
					Portfolio</a>
				</li>
				<li>
					<a href="extra_pricing_table.html">
					Pricing Tables</a>
				</li>
				<li>
					<a href="extra_404_option1.html">
					404 Page Option 1</a>
				</li>
				<li>
					<a href="extra_404_option2.html">
					404 Page Option 2</a>
				</li>
				<li>
					<a href="extra_404_option3.html">
					404 Page Option 3</a>
				</li>
				<li>
					<a href="extra_500_option1.html">
					500 Page Option 1</a>
				</li>
				<li>
					<a href="extra_500_option2.html">
					500 Page Option 2</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-folder"></i>
			<span class="title">Multi Level Menu</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="javascript:;">
					<i class="icon-settings"></i> Item 1 <span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-user"></i>
							Sample Link 1 <span class="arrow"></span>
							</a>
							<ul class="sub-menu">
								<li>
									<a href="#"><i class="icon-power"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-paper-plane"></i> Sample Link 1</a>
								</li>
								<li>
									<a href="#"><i class="icon-star"></i> Sample Link 1</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#"><i class="icon-camera"></i> Sample Link 1</a>
						</li>
						<li>
							<a href="#"><i class="icon-link"></i> Sample Link 2</a>
						</li>
						<li>
							<a href="#"><i class="icon-pointer"></i> Sample Link 3</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-globe"></i> Item 2 <span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#"><i class="icon-tag"></i> Sample Link 1</a>
						</li>
						<li>
							<a href="#"><i class="icon-pencil"></i> Sample Link 1</a>
						</li>
						<li>
							<a href="#"><i class="icon-graph"></i> Sample Link 1</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
					<i class="icon-bar-chart"></i>
					Item 3 </a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-user"></i>
			<span class="title">Login Options</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="login.html">
					Login Form 1</a>
				</li>
				<li>
					<a href="login_2.html">
					Login Form 2</a>
				</li>
				<li>
					<a href="login_3.html">
					Login Form 3</a>
				</li>
				<li>
					<a href="login_soft.html">
					Login Form 4</a>
				</li>
				<li>
					<a href="extra_lock.html">
					Lock Screen 1</a>
				</li>
				<li>
					<a href="extra_lock2.html">
					Lock Screen 2</a>
				</li>
			</ul>
		</li>
		<li class="heading">
			<h3 class="uppercase">More</h3>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-logout"></i>
			<span class="title">Quick Sidebar</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="quick_sidebar_push_content.html">
					Push Content</a>
				</li>
				<li>
					<a href="quick_sidebar_over_content.html">
					Over Content</a>
				</li>
				<li>
					<a href="quick_sidebar_over_content_transparent.html">
					Over Content & Transparent</a>
				</li>
				<li>
					<a href="quick_sidebar_on_boxed_layout.html">
					Boxed Layout</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;">
			<i class="icon-envelope-open"></i>
			<span class="title">Email Templates</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="email_template1.html">
					New Email Template 1</a>
				</li>
				<li>
					<a href="email_template2.html">
					New Email Template 2</a>
				</li>
				<li>
					<a href="email_template3.html">
					New Email Template 3</a>
				</li>
				<li>
					<a href="email_template4.html">
					New Email Template 4</a>
				</li>
				<li>
					<a href="email_newsletter.html">
					Old Email Template 1</a>
				</li>
				<li>
					<a href="email_system.html">
					Old Email Template 2</a>
				</li>
			</ul>
		</li>
		<li class="last ">
			<a href="javascript:;">
			<i class="icon-pointer"></i>
			<span class="title">Maps</span>
			<span class="arrow "></span>
			</a>
			<ul class="sub-menu">
				<li>
					<a href="maps_google.html">
					Google Maps</a>
				</li>
				<li>
					<a href="maps_vector.html">
					Vector Maps</a>
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
			Worker #<?php echo ($workerinfo["wxid"]); ?> <small>worker detail</small>
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
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Worker Detail</a>
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
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
					<div class="dashboard-stat red-intense">
						<div class="visual">
							<i class="fa fa-briefcase fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo ($workerinfo["income"]); ?> RMB
							</div>
							<div class="desc">
								 Total Income
							</div>
						</div>
						<a class="more" href="javascript:;">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-haze">
						<div class="visual">
							<i class="fa fa-group fa-icon-medium"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo ($workerinfo["orderincomplete"]); ?>
							</div>
							<div class="desc">
								 Incomplete Projects
							</div>
						</div>
						<a class="more" href="javascript:;">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-madison">
						<div class="visual">
							<i class="fa fa-shopping-cart"></i>
						</div>
						<div class="details">
							<div class="number">
								 <?php echo ($workerinfo["orderall"]); ?>
							</div>
							<div class="desc">
								 Total Projects
							</div>
						</div>
						<a class="more" href="javascript:;">
						View more <i class="m-icon-swapright m-icon-white"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN TODO SIDEBAR -->
					<div>
						<div class="todo-sidebar">
							<div class="portlet light">
								<div class="portlet-title">
									<div class="caption" data-toggle="collapse" data-target=".todo-project-list-content">
										<span class="caption-subject font-green-sharp bold uppercase">
											<i class="icon-user-following"></i> Worker profile
										</span>
									</div>
								</div>
								<div class="portlet-body todo-project-list-content" style="height: auto;">
									<div class="todo-project-list">
										<ul class="nav nav-pills nav-stacked">
											<li>
												<i class="fa fa-wechat"></i> <?php echo ($workerinfo["wxid"]); ?> </a>
											</li>
											<li>
												<i class="fa fa-user"></i> <?php echo ($workerinfo["wxname"]); ?> </a>
											</li>
											<li>
												<i class="fa fa-envelope-o"></i> <?php echo ($workerinfo["email"]); ?> </a>
											</li>
											<li>
												<i class="fa fa-star-o"></i> <?php echo ($workerinfo["remark"]); ?> </a>
											</li>
											<li>
												<i class="fa fa-clock-o"></i> <?php echo ($workerinfo["addtime"]); ?> </a>
											</li>

											<li>
												<i class="fa fa-cog"></i>Technologies
											</li>
											<li>
												<?php if(is_array($workerinfo["teches"])): foreach($workerinfo["teches"] as $key=>$item): ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-terminal"></i><?php echo ($item["content"]); ?><br><?php endforeach; endif; ?>

											</li>
											<li>
												<div class="todo-tasklist-item-text">
															 <i class="fa fa-comments-o"></i> <?php echo ($workerinfo["description"]); ?>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- END TODO SIDEBAR -->
						<!-- BEGIN TODO CONTENT -->
						<div class="todo-content">
							<div class="portlet light">
								<!-- PROJECT HEAD -->
								<div class="portlet-title">
									<div class="caption">
										<i class="icon-bar-chart font-green-sharp"></i>
										<span class="caption-subject font-green-sharp bold uppercase"> PROJECTS</span>
									</div>
									<div class="actions">
										<div class="btn-group">
											<a class="btn green-haze btn-circle btn-sm" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
											MANAGE <i class="fa fa-angle-down"></i>
											</a>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="javascript:;">
													<i class="i"></i> New Task </a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">
													Pending <span class="badge badge-danger">
													4 </span>
													</a>
												</li>
												<li>
													<a href="javascript:;">
													Completed <span class="badge badge-success">
													12 </span>
													</a>
												</li>
												<li>
													<a href="javascript:;">
													Overdue <span class="badge badge-warning">
													9 </span>
													</a>
												</li>
												<li class="divider">
												</li>
												<li>
													<a href="javascript:;">
													<i class="i"></i> Delete Project </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- end PROJECT HEAD -->
								<div class="portlet-body">
									<div class="row">

										<div class="col-md-6 col-sm-8">
											<h4><i class="fa fa-list-ul"></i> Incomplete projects</h4>
											<div class="scroller" style="max-height: 1000px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
												<?php if(is_array($workerinfo["orderincomelist"])): foreach($workerinfo["orderincomelist"] as $key=>$item): ?><div class="form-group">
														<div class="col-md-12">
															<ul class="media-list">
																<li class="media">
																		<?php if(($item["g_state"] == 2) AND ($item["w_state"] == 2) ): ?><div class="media-body todo-comment todo-tasklist-item todo-tasklist-item-border-red">
																		<?php else: ?>
																			<div class="media-body todo-comment todo-tasklist-item todo-tasklist-item-border-green"><?php endif; ?>
																		<p class="todo-comment-head">
																			<span class="todo-comment-username">
																				<i class="fa fa-check-square"></i>&nbsp;<?php echo ($item["projectname"]); ?></span>
																		</p>
																		<p class="todo-text-color">
																			<span class="label label-sm label-success circle">W</span> <?php echo ($item["w_deadline"]); ?>
																			<br><span class="label label-sm label-danger circle">G</span><strong> <?php echo ($item["g_deadline"]); ?></strong>
																			<br>
																			<i class="fa fa-volume-up"></i>
																			<?php switch($item["g_state"]): case "0": ?><span class="label label-sm label-danger">Guest No gurrentee</span><?php break;?>
																				<?php case "1": ?><span class="label label-sm label-danger">Guest Only gurrentee</span><?php break;?>
																				<?php default: ?><span class="label label-sm label-success"> Guest Have paid All</span><?php endswitch;?>
																			<?php switch($item["w_state"]): case "1": ?><span class="label label-sm label-danger">Worker doing</span><?php break;?>
																				<?php case "2": ?><span class="label label-sm label-danger">Worker done & no paid</span><?php break;?>
																				<?php case "3": ?><span class="label label-sm label-success">Woker done & paid</span><?php break;?>
																				<?php default: ?><span class="label label-sm label-default">Worker unset </span><?php endswitch;?>
																			<br>
																			<span class="label label-sm label-info circle">P</span> <?php echo ($item["totalprice"]); ?> <?php echo ($item["moneytype"]); ?>/<?php echo ($item["guarantee"]); ?> <?php echo ($item["moneytype"]); ?>
																			<br>
																			<span class="label label-sm label-warning circle">S</span> <?php echo ($item["w_payment"]); ?>RMB
																		</p>
																		<div class="todo-tasklist-controls pull-left">
																			<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> <?php echo ($item["createtime"]); ?> </span>
																			<a href="<?php echo U('Order/orderdetailpage?go=1&orderid='.$item['orderid'].'');;?>" class="btn btn-xs grey-cascade">
																				 <i class="fa fa-link"></i> View
																			</a>
																		</div>
																		<!-- Nested media object -->
																	</div>

																</li>
															</ul>
														</div>
													</div><?php endforeach; endif; ?>

											</div>
										</div>
										<div class="col-md-6 col-sm-4">
											<h4><i class="fa fa-list-ul"></i> All projects</h4>
											<div class="scroller" style="max-height: 600px;" data-always-visible="0" data-rail-visible="0" data-handle-color="#dae3e7">
												<div class="todo-tasklist">
													<?php if(is_array($workerinfo["orderlist"])): foreach($workerinfo["orderlist"] as $key=>$item): if(($item["g_state"] == 2) AND ($item["w_state"] == 3) ): ?><div class="todo-tasklist-item todo-tasklist-item-border-green">
														<?php else: ?>
															<div class="todo-tasklist-item todo-tasklist-item-border-red"><?php endif; ?>

															<div class="todo-tasklist-item-title">
																  <i class="fa fa-check-square-o"></i>
																	&nbsp;<?php echo ($item["projectname"]); ?>
															</div>
															<div class="todo-tasklist-item-text">
																<i class="fa fa-volume-up"></i>
																<?php switch($item["g_state"]): case "0": ?><span class="label label-sm label-danger">Guest No gurrentee</span><?php break;?>
																	<?php case "1": ?><span class="label label-sm label-danger">Guest Only gurrentee</span><?php break;?>
																	<?php default: ?><span class="label label-sm label-success"> Guest Have paid All</span><?php endswitch;?>
																<?php switch($item["w_state"]): case "1": ?><span class="label label-sm label-danger">Worker doing</span><?php break;?>
																	<?php case "2": ?><span class="label label-sm label-danger">Worker done & no paid</span><?php break;?>
																	<?php case "3": ?><span class="label label-sm label-success">Woker done & paid</span><?php break;?>
																	<?php default: ?><span class="label label-sm label-default">Worker unset </span><?php endswitch;?>
																<br>
																<span class="label label-sm label-info circle">P</span> <?php echo ($item["totalprice"]); ?> <?php echo ($item["moneytype"]); ?>/<?php echo ($item["guarantee"]); ?> <?php echo ($item["moneytype"]); ?>
																<span class="label label-sm label-warning circle">S</span> <?php echo ($item["w_payment"]); ?>RMB
															</div>
															<div class="todo-tasklist-controls pull-left">
																<span class="todo-tasklist-date"><i class="fa fa-calendar"></i> <?php echo ($item["createtime"]); ?> </span>
																<a href="<?php echo U('Order/orderdetailpage?go=1&orderid='.$item['orderid'].'');;?>" class="btn btn-xs grey-cascade">
																	 <i class="fa fa-link"></i> View
																</a>
															</div>
														</div><?php endforeach; endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END TODO CONTENT -->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
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

  <script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="/cswebmgr/Public/metronic3_7/assets/global/plugins/select2/select2.min.js"></script>
  <script src="/cswebmgr/Public/metronic3_7/assets/admin/pages/scripts/todo.js" type="text/javascript"></script>
  <!-- END PAGE PLUGINS & SCRIPTS -->
  <script src="/cswebmgr/Public/metronic3_7/assets/global/scripts/metronic.js" type="text/javascript"></script>
  <script src="/cswebmgr/Public/metronic3_7/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
  <script src="/cswebmgr/Public/metronic3_7/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
  <script src="/cswebmgr/Public/metronic3_7/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
  <script>
      jQuery(document).ready(function() {
          Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  QuickSidebar.init(); // init quick sidebar
  Demo.init(); // init demo features
  Todo.init(); // init todo page
      });
  </script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>