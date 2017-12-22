<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.3
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
<![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js">
<![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>JHCL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!--begin global -->
    <link href="/csweb/DomainSystem/Public/metronic/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/csweb/DomainSystem/Public/metronic/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/csweb/DomainSystem/Public/metronic/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="/csweb/DomainSystem/Public/metronic/media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/csweb/DomainSystem/Public/metronic/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/csweb/DomainSystem/Public/metronic/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/csweb/DomainSystem/Public/metronic/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/csweb/DomainSystem/Public/metronic/media/css/chosen.css" rel="stylesheet" type="text/css" />
<!-- END CORE PLUGINS -->
    <link rel="stylesheet" type="text/css" media="screen"  href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
    <link href="/csweb/DomainSystem/Public/metronic/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- END begin global -->
    <!--favicon
    <link rel="shortcut icon" href="/csweb/DomainSystem/Public/metronic/media/image/favicon.ico"/>
    -->
</head>
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
<!-- BEGIN TOP NAVIGATION BAR -->
<div class="navbar-inner">
<div class="container-fluid">
<!-- BEGIN LOGO -->
    <a class="brand" href="<?php echo U('Profile/index');;?>">
        <center><img style="max-width:100px; margin-top: -7px;" src="/csweb/DomainSystem/Public/img/logo.png" /></center>
    </a>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
        <img src="/csweb/DomainSystem/Public/metronic/media/image/menu-toggler.png" alt=""/>
    </a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN TOP NAVIGATION MENU -->
    <ul class="nav pull-right">
    <!-- BEGIN INBOX DROPDOWN -->
    <!-- END INBOX DROPDOWN -->
    <!-- BEGIN USER LOGIN DROPDOWN -->
    <li class="dropdown user">
        <a href="<?php echo U('Index/shop');;?>" class="dropdown-toggle">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span class="username">Return shopping</span>
        </a>
    </li>
    <li class="dropdown user">
        <a href="<?php echo U('Login/logout');;?>" class="dropdown-toggle">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span class="username">Logout</span>
        </a>
    </li>
    <!-- END USER LOGIN DROPDOWN -->
    </ul>
    <!-- END TOP NAVIGATION MENU -->
</div>
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
    <!-- BEGIN SIDEBAR -->
    
    <!-- BEGIN SIDEBAR MENU -->
        
<div class="page-sidebar nav-collapse collapse">
    <ul class="page-sidebar-menu">
    <li>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone"></div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li>
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search">
            <div class="input-box">
                <a href="javascript:;" class="remove"></a>
                <input type="text" placeholder="Search..."/>
                <input type="button" class="submit" value=" "/>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="start">
        <a href="<?php echo U('Profile/index');;?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="title">My Profile</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="active">
        <a href="javascript:;">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="title">Customer Managerment</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo U('Customer/customerlist');;?>">
                    Customers List
                </a>
            </li>
            <li class="active">
                <a href="<?php echo U('Customer/customeradd');;?>">
                    Add Customers</a>
            </li>
        </ul>
    </li>
     <li class="">
        <a href="<?php echo U('Order/orderlist');;?>">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            <span class="title">Order Managerment</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li class="">
        <a href="<?php echo U('Transaction/translist');;?>">
            <i class="fa fa-cogs" aria-hidden="true"></i>
            <span class="title">Transaction Managerment</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li >
        <a href="<?php echo U('Domain/domainlist');;?>">
            <i class="fa fa-database" aria-hidden="true"></i>
            <span class="title">Domains Managerment</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li >
        <a href="javascript:;">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            <span class="title">Support</span>
            <span class="arrow "></span>
        </a>
        <!--
        <ul class="sub-menu">
            <li>
                <a href="<?php echo U('Domain/domainlist');;?>">
                    Domain List
                </a>
            </li>
			<li>
                <a href="<?php echo U('Domain/premiumlist');;?>">
                    Premium List
                </a>
            </li>
        </ul>
        -->
    </li>
    <li >
        <a href="javascript:;">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            <span class="title">Report</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a> Monthly Active TLDs</a>
            </li>
			<li>
                 <a> Active Accounts Per TLDs</a>
            </li>
            <li>
                 <a> New Customer</a>
            </li>
            <li>
                 <a> Monthly Transactions</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="active" href="javascript:;">
            <i class="fa fa-cog" aria-hidden="true"></i>
            <span class="title">Configuration</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="javascript:;">
                    General
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Configure/general_web');;?>">Web Setting</a></li>
                    <li><a href="<?php echo U('Configure/general_language');;?>">Language</a></li>
                    <li><a href="<?php echo U('Configure/general_domain');;?>">Domains</a></li>
                    <li><a href="<?php echo U('Configure/general_mail');;?>">Mail</a></li>
                    <li><a href="<?php echo U('Configure/general_credit');;?>">Credit</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo U('Configure/security');;?>">
                     Security
                </a>
            </li>
            <li>
                <a href="#">
                    Email Template
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    Administrators
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Configure/adminlist');;?>">Users Managerment</a></li>
                    <li><a href="<?php echo U('Configure/adminrolelist');;?>">Roles Managerment</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    Domain Price
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Configure/pricesetting');;?>">Price setting</a></li>
                    <li><a href="<?php echo U('Configure/pricetools');;?>">Tools Managerment</a></li>
                    <li><a href="<?php echo U('Configure/premiumlist');;?>">Premium Managerment</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    Payment
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Configure/paymentlist');;?>">Payment method</a></li>
                    <li><a href="<?php echo U('Configure/currencies');;?>">Currencies</a></li>
                    <li><a href="<?php echo U('Configure/taxrules');;?>">Tax Rules</a></li>
                    <li><a href="<?php echo U('Configure/promotion');;?>">Promotion</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo U('Configure/domainregistrar');;?>">
                    <span class="title">Domain Registrar</span>
                </a>
            </li>
        </ul>
    </li>
    </ul>
</div>

    
    <!-- END SIDEBAR MENU -->
    
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
        
<!-- BEGIN PAGE -->
<div class="page-content">
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div id="portlet-config" class="modal hide">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>portlet Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here will be a configuration form</p>
    </div>
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
    <div class="span12">
        <h3 class="page-title">
            Orders Managerment
            <small> Orders panel</small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="<?php echo U('Profile/index');;?>">Home</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li>
                <a href="#">Orders Managerment</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li><a href="<?php echo U('Order/orderaddpage');;?>">Add A New Order</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
	<div style="height: auto;" id="accordion1-1" class="accordion collapse">
		<form role="form" action="<?php echo U('Order/ordernew');;?>" method="post" class="form-horizontal">
			<div class="control-group">
				<label class="control-label">Create DateTime</label>
				<div class="controls">
					<div id="datetimepicker" class="input-append date">
					  <input name="createtime" class="m-wrap large" type="text" readonly />
					  <span class="add-on" >
						<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
					  </span>
					</div>	
				</div>
			</div>
			<hr>
			<div class="control-group">
				<label class="control-label">Guest Wechat ID</label>
				<div class="controls">
					<input name="guest_wxid" type="text" placeholder="Guest Wechat ID" class="m-wrap large" required>
					<span class="help-inline">wechat id</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Guest Wechat Name</label>
				<div class="controls">
					<input name="guest_wxname" type="text" placeholder="Guest Wechat Name" class="m-wrap large" required>
					<span class="help-inline">wechat name</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Project Name</label>
				<div class="controls">
					<input name="projectname" type="text" placeholder="Project name" class="m-wrap large" required>
					<span class="help-inline">Project Name</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Guest Dead line</label>
				<div class="controls">
					<div id="datetimepicker1" class="input-append date">
					  <input name="g_deadtime" class="m-wrap large" type="text" readonly />
					  <span class="add-on" >
						<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
					  </span>
					</div>	
				</div>
			</div>
			<hr>
			<div class="control-group">
				<label class="control-label">Currency Type</label>
				<div class="controls">
					<select name="moneytype" class="m-wrap large" data-placeholder="Choose a Currency" tabindex="1">
						<option value="USD">USD</option>
						<option value="RMB">RMB</option>
						<option value="EUR">EUR</option>
						<option value="CAD">CAD</option>
						<option value="HKD">HKD</option>
						<option value="AUD">AUD</option>
						<option value="SGD">SGD</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Total Price</label>
				<div class="controls">
					<input name="totalprice" type="number" value="0.00" min="0" step="0.01" class="m-wrap large" required>
					<span class="help-inline">Guest payment total money</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Guarantee Money</label>
				<div class="controls">
					<input name="guarantee" type="number" value="0.00" min="0" step="0.01" class="m-wrap large" required>
					<span class="help-inline">Guest payment Guarantee Money</span>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Exchange Rate</label>
				<div class="controls">
					<input name="exchange" type="number" value="1.00" min="0" step="0.01" class="m-wrap large" required>
					<span class="help-inline">exchange 1? = ?RMB</span>
				</div>
			</div>
			<!--
				0. guest have no paid gurrentee
				1. guest have paid gurrentee
				2. guest have pain all money
			-->
			<div class="control-group">
				<label class="control-label">Guest state</label>
				<div class="controls">
					<select name="g_state" class="m-wrap large" data-placeholder="Choose a Currency" tabindex="1">
						<option value="0">guest have no paid gurrentee</option>
						<option value="1">guest have paid gurrentee</option>
						<option value="2">guest have pain all money</option>
					</select>
				</div>
			</div>
			<hr>
			<div class="control-group">
				<label class="control-label">Select worker</label>
				<div class="controls">
					<select name="wxid" class="m-wrap large" data-placeholder="Choose a Currency" tabindex="1" >
						<option value="">Please Choose a worker</option>
						<?php if(is_array($workers)): foreach($workers as $key=>$vo): ?><option value="<?php echo ($vo["wxid"]); ?>"><?php echo ($vo["wxid"]); ?> : <?php echo ($vo["wxname"]); ?></option><?php endforeach; endif; ?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Worker Deadline</label>
				<div class="controls">
					<div id="datetimepicker2" class="input-append date">
					  <input name="w_deadline" class="m-wrap large" type="text" readonly />
					  <span class="add-on" >
						<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
					  </span>
					</div>	
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Worker salary</label>
				<div class="controls">
					<input name="w_payment" type="number" value="0.00" min="0" step="0.01" class="m-wrap large">
					<span class="help-inline">Worker salary(RMB)</span>
				</div>
			</div>
			<!--
				0. worker is doing
				1. worker has completed and no pay
				2. worker has completed and paid
			-->
			<div class="control-group">
				<label class="control-label">Worker state</label>
				<div class="controls">
					<select name="w_state" class="m-wrap large" tabindex="1">
						<option value="0" selected>worker is doing</option>
						<option value="1">worker has completed and no pay</option>
						<option value="2">worker has completed and paid</option>
						<option value="3">worker is finding</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Descrition</label>
				<div class="controls">
					<textarea class="large m-wrap" rows="3" name="description"></textarea>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn blue"><i class="icon-ok"></i>Save</button>
				<button type="button" class="btn">Cancel</button>
			</div>
		</form>
    </div>
	
	
	
	
	
</div>
<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->

        
        
        
    <!-- END PAGE -->
    </div>
    <!-- END CONTAINER -->
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        2017 &copy; JHCL
    </div>
    <div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
    </div>
</div>
<!-- END FOOTER -->
<!-- 引入 javascript  -->
<!-- BEGIN CORE PLUGINS -->
<!--jquery-->
<script src="/csweb/DomainSystem/Public/metronic/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

<script src="/csweb/DomainSystem/Public/metronic/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="/csweb/DomainSystem/Public/metronic/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/csweb/DomainSystem/Public/metronic/media/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="/csweb/DomainSystem/Public/metronic/media/js/excanvas.min.js"></script>
<script src="/csweb/DomainSystem/Public/metronic/media/js/respond.min.js"></script>
<![endif]-->

<script src="/csweb/DomainSystem/Public/metronic/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/csweb/DomainSystem/Public/metronic/media/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/csweb/DomainSystem/Public/metronic/media/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/csweb/DomainSystem/Public/metronic/media/js/jquery.uniform.min.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript" src="/csweb/DomainSystem/Public/metronic/media/js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="/csweb/DomainSystem/Public/metronic/media/js/validator.min.js"></script>
	<script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="/csweb/DomainSystem/Public/metronic/media/js/bootstrap-datetimepicker.js">
    </script>
    <script type="text/javascript" src="/csweb/DomainSystem/Public/metronic/media/js/bootstrap-datepicker.en-CA.js">
    </script>
    <script type="text/javascript">
		$('#datetimepicker').datetimepicker({
			format: 'yyyy-MM-dd hh:mm:ss'
		});
		$('#datetimepicker1').datetimepicker({
        	format: 'yyyy-MM-dd hh:mm:ss'
		});
		$('#datetimepicker2').datetimepicker({
        	format: 'yyyy-MM-dd hh:mm:ss'
		});
    </script>
	<!-- date -->
	

<script src="/csweb/DomainSystem/Public/metronic/media/js/app.js" type="text/javascript"></script>
<script src="/csweb/DomainSystem/Public/metronic/media/js/form-components.js"></script>  
<script>
        jQuery(document).ready(function () {

        // initiate layout and plugins

        App.init();
        FormComponents.init();

    });
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>