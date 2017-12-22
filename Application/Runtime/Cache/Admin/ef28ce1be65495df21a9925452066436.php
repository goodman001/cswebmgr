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
            <li class="active">
                <a href="<?php echo U('Customer/customerlist');;?>">
                    Customers List
                </a>
            </li>
            <li >
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
            <small> orders Managerment</small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="<?php echo U('Profile/index');;?>">Home</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li>
                <a href="#">Order Managerment</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li><a href="<?php echo U('Order/orderlist');;?>">Order List</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <div class="span12">
		<h4>Search optiones</h4>
        <form role="form" action="<?php echo U('Worker/workerlist');;?>" method="post" class="form-search">
            <div class="control alert alert-info">
				<?php if(is_array($teches)): foreach($teches as $key=>$item): ?><label class="checkbox">
						<div class="checkboxdiv"><span><input name="techsearch[]" type="checkbox" value="<?php echo ($item["techid"]); ?>" /> <?php echo ($item["content"]); ?> </span></div>
					</label><?php endforeach; endif; ?>
				<br>
				<hr>
                <button type="submit" class="btn green" type="button">Search!</button>
            </div>
        </form>
    </div>
</div>
<div class="row-fluid">
    <div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
       <thead>
        <tr>
            <th>OrderID</th>
            <th>Guest Wechat</th>
            <th>Project</th>
            <th>Guest Deadline</th>
            <th>Total price</th>
            <th>Guarantee</th>
            <th>Exchange</th>
            <th>Guest State</th>
            <th>Worker</th>
            <th>Worker deadline</th>
            <th>Worker payment</th>
            <th>Worker state</th>
            <th>Remark</th>
            <th>Description</th>
            <th></th>
        </tr>
       </thead>
       <tbody>
        <?php if(is_array($orders)): foreach($orders as $key=>$vo): ?><tr>
            <td><?php echo ($vo["orderid"]); ?></td>
            <td><?php echo ($vo["gwxid"]); ?> : <?php echo ($vo["gwxname"]); ?></td>
            <td><?php echo ($vo["projectname"]); ?></td>
            <td><?php echo ($vo["g_deadtime"]); ?></td>
            <td><?php echo ($vo["totalprice"]); echo ($vo["moneytype"]); ?></td>
            <td><?php echo ($vo["guarantee"]); echo ($vo["moneytype"]); ?></td>
            <td><?php echo ($vo["exchange"]); ?></td>
            <td><?php echo ($vo["g_state"]); ?></td>
            <td><?php echo ($vo["wxid"]); ?> : <?php echo ($vo["wxname"]); ?></td>
            <td><?php echo ($vo["w_deadline"]); ?></td>
            <td><?php echo ($vo["w_payment"]); ?>RMB</td>
            <td><?php echo ($vo["w_state"]); ?>RMB</td>
            <td><?php echo ($vo["gremark"]); ?></td>
            <td><?php echo ($vo["description"]); ?></td>
            <td>
                <!--
                <a class="btn yellow easy-pie-chart-reload" href="<?php echo U('Worker/workereditpage?wxid='.$vo['wxid'].'');;?>">
                    Edit	
                </a>
				<a class="btn yellow easy-pie-chart-reload" href="#confirmModal" data-toggle="modal">
                    Delete
                </a>
				<div id="confirmModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="confirmModal3" aria-hidden="true" style="display:none" >
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
						<h3 id="confirmModal3"> Delete user window</h3>

					</div>	
					<div class="modal-body">
						<p>Would you like to delete this Worker?</p>
					</div>
					<div class="modal-footer">
						<a class="btn blue" href="<?php echo U('Worker/workerdelete?wxid='.$vo['wxid'].'');;?>" >Confirm</a>
						<a class="btn" data-dismiss="modal" aria-hidden="true">Close</a>

					</div>
				</div>
-->
            </td>
          </tr><?php endforeach; endif; ?>
       </tbody>
    </table>
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
    <script type="text/javascript" src="/csweb/DomainSystem/Public/metronic/media/js/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="/csweb/DomainSystem/Public/metronic/media/js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="/csweb/DomainSystem/Public/metronic/media/js/validator.min.js"></script>
    <script>
        jQuery(document).ready(function () {

        // initiate layout and plugins

        App.init();

    });
        
    </script>

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