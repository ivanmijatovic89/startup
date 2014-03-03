<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Backend by Mijatovic Ivan</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   
   <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
   <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
   <link href="{{ asset('assets/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 

   <!-- END PAGE LEVEL PLUGIN STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="{{ asset('assets/css/style-metronic.css')}}" rel="stylesheet" type="text/css"/>
   <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
   <link href="{{ asset('assets/css/style-responsive.css')}}" rel="stylesheet" type="text/css"/>
   <link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
   <link href="{{ asset('assets/css/pages/tasks.css')}}" rel="stylesheet" type="text/css"/>
   <link href="{{ asset('assets/css/themes/default.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="index.html">
         <img src="{{ asset('assets/img/logo.png')}}" alt="logo" class="img-responsive" />
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="{{ asset('assets/img/menu-toggler.png')}}" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
         <!-- BEGIN TOP NAVIGATION MENU -->
         <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class="dropdown" id="header_notification_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <i class="icon-warning-sign"></i>
               <span class="badge">6</span>
               </a>
               <ul class="dropdown-menu extended notification">
                  <li>
                     <p>You have 14 new notifications</p>
                  </li>
                  <li>
                     <ul class="dropdown-menu-list scroller" style="height: 250px;">
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-success"><i class="icon-plus"></i></span>
                           New user registered. 
                           <span class="time">Just now</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-danger"><i class="icon-bolt"></i></span>
                           Server #12 overloaded. 
                           <span class="time">15 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-warning"><i class="icon-bell"></i></span>
                           Server #2 not responding.
                           <span class="time">22 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-info"><i class="icon-bullhorn"></i></span>
                           Application error.
                           <span class="time">40 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-danger"><i class="icon-bolt"></i></span>
                           Database overloaded 68%. 
                           <span class="time">2 hrs</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-danger"><i class="icon-bolt"></i></span>
                           2 user IP blocked.
                           <span class="time">5 hrs</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-warning"><i class="icon-bell"></i></span>
                           Storage Server #4 not responding.
                           <span class="time">45 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-info"><i class="icon-bullhorn"></i></span>
                           System Error.
                           <span class="time">55 mins</span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="label label-sm label-icon label-danger"><i class="icon-bolt"></i></span>
                           Database overloaded 68%. 
                           <span class="time">2 hrs</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="external">   
                     <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN INBOX DROPDOWN -->
            <li class="dropdown" id="header_inbox_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                  data-close-others="true">
               <i class="icon-envelope"></i>
               <span class="badge">5</span>
               </a>
               <ul class="dropdown-menu extended inbox">
                  <li>
                     <p>You have 12 new messages</p>
                  </li>
                  <li>
                     <ul class="dropdown-menu-list scroller" style="height: 250px;">
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="{{ asset('assets/img/avatar2.jpg')}}" alt=""/></span>
                           <span class="subject">
                           <span class="from">Lisa Wong</span>
                           <span class="time">Just Now</span>
                           </span>
                           <span class="message">
                           Vivamus sed auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="{{ asset('assets/img/avatar3.jpg')}}" alt=""/></span>
                           <span class="subject">
                           <span class="from">Richard Doe</span>
                           <span class="time">16 mins</span>
                           </span>
                           <span class="message">
                           Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="{{ asset('assets/img/avatar1.jpg')}}" alt=""/></span>
                           <span class="subject">
                           <span class="from">Bob Nilson</span>
                           <span class="time">2 hrs</span>
                           </span>
                           <span class="message">
                           Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="{{ asset('assets/img/avatar2.jpg')}}" alt=""/></span>
                           <span class="subject">
                           <span class="from">Lisa Wong</span>
                           <span class="time">40 mins</span>
                           </span>
                           <span class="message">
                           Vivamus sed auctor 40% nibh congue nibh...
                           </span>  
                           </a>
                        </li>
                        <li>  
                           <a href="inbox.html?a=view">
                           <span class="photo"><img src="{{ asset('assets/img/avatar3.jpg')}}" alt=""/></span>
                           <span class="subject">
                           <span class="from">Richard Doe</span>
                           <span class="time">46 mins</span>
                           </span>
                           <span class="message">
                           Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                           auctor nibh...
                           </span>  
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="external">   
                     <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <!-- END INBOX DROPDOWN -->
            <!-- BEGIN TODO DROPDOWN -->
            <li class="dropdown" id="header_task_bar">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <i class="icon-tasks"></i>
               <span class="badge">5</span>
               </a>
               <ul class="dropdown-menu extended tasks">
                  <li>
                     <p>You have 12 pending tasks</p>
                  </li>
                  <li>
                     <ul class="dropdown-menu-list scroller" style="height: 250px;">
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">New release v1.2</span>
                           <span class="percent">30%</span>
                           </span>
                           <span class="progress">
                           <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">40% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Application deployment</span>
                           <span class="percent">65%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">65% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Mobile app release</span>
                           <span class="percent">98%</span>
                           </span>
                           <span class="progress">
                           <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">98% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Database migration</span>
                           <span class="percent">10%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">10% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Web server upgrade</span>
                           <span class="percent">58%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">58% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">Mobile development</span>
                           <span class="percent">85%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">85% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                        <li>  
                           <a href="#">
                           <span class="task">
                           <span class="desc">New UI release</span>
                           <span class="percent">18%</span>
                           </span>
                           <span class="progress progress-striped">
                           <span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                           <span class="sr-only">18% Complete</span>
                           </span>
                           </span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="external">   
                     <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                  </li>
               </ul>
            </li>
            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
               <img alt="" src="{{ asset('assets/img/avatar1_small.jpg')}}"/>
               <span class="username">Bob Nilson</span>
               <i class="icon-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a>
                  </li>
                  <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a>
                  </li>
                  <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox <span class="badge badge-danger">3</span></a>
                  </li>
                  <li><a href="#"><i class="icon-tasks"></i> My Tasks <span class="badge badge-success">7</span></a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a>
                  </li>
                  <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a>
                  </li>
                  <li><a href="login.html"><i class="icon-key"></i> Log Out</a>
                  </li>
               </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
         </ul>
         <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar navbar-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->        
         <ul class="page-sidebar-menu">
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <form class="sidebar-search" action="extra_search.html" method="POST">
                  <div class="form-container">
                     <div class="input-box">
                        <a href="javascript:;" class="remove"></a>
                        <input type="text" placeholder="Search..."/>
                        <input type="button" class="submit" value=" "/>
                     </div>
                  </div>
               </form>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start active ">
               <a href="index.html">
               <i class="icon-home"></i> 
               <span class="title">Single link</span>
               <span class="selected"></span>
               </a>
            </li>
            <li class="">
               <a href="javascript:;">
               <i class="icon-cogs"></i> 
               <span class="title">No single</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub-menu">
                  <li >
                     <a href="layout_language_bar.html">
                     <span class="badge badge-roundless badge-important">new</span>Language Switch Bar</a>
                  </li>
                  <li >
                     <a href="layout_horizontal_sidebar_menu.html">
                     Horizontal & Sidebar Menu</a>
                  </li>
                  <li >
                     <a href="layout_horizontal_menu1.html">
                     Horizontal Menu 1</a>
                  </li>
                  <li >
                     <a href="layout_horizontal_menu2.html">
                     Horizontal Menu 2</a>
                  </li><li >
                     <a href="layout_disabled_menu.html">
                     Disabled Menu Links</a>
                  </li>
                  <li >
                     <a href="layout_sidebar_fixed.html">
                     Sidebar Fixed Page</a>
                  </li>
                  <li >
                     <a href="layout_sidebar_closed.html">
                     Sidebar Closed Page</a>
                  </li>
                  <li >
                     <a href="layout_blank_page.html">
                     Blank Page</a>
                  </li>
                  <li >
                     <a href="layout_boxed_page.html">
                     Boxed Page</a>
                  </li>
                  <li >
                     <a href="layout_boxed_not_responsive.html">
                     Non-Responsive Boxed Layout</a>
                  </li>
                  <li >
                     <a href="layout_promo.html">
                     Promo Page</a>
                  </li>
                  <li >
                     <a href="layout_email.html">
                     Email Templates</a>
                  </li>
                  <li >
                     <a href="layout_ajax.html">
                     Content Loading via Ajax</a>
                  </li>
               </ul>
            </li>
         </ul>

         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                     Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
     
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Headline <small>small text</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.html">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li><a href="#">Dashboard</a></li>
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN DASHBOARD STATS -->
        
         <!-- END DASHBOARD STATS -->
         <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-12">
             page content
            </div>
         </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         2014 &copy; by Mijatovic Ivan
      </div>
      <div class="footer-tools">
         <span class="go-top">
         <i class="icon-angle-up"></i>
         </span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="{{ asset('assets/plugins/jquery-1.10.2.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('assets/plugins/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')}}" type="text/javascript" ></script>
   <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('assets/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>  
   <script src="{{ asset('assets/plugins/jquery.cookie.min.js')}}" type="text/javascript"></script>
   <script src="{{ asset('assets/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->

   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="{{ asset('assets/scripts/app.js')}}" type="text/javascript"></script>
   <script src="{{ asset('assets/scripts/index.js')}}" type="text/javascript"></script>
   <script src="{{ asset('assets/scripts/tasks.js')}}" type="text/javascript"></script>        
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {    
         App.init(); // initlayout and core plugins
         Index.init();
         Index.initJQVMAP(); // init index page's custom scripts
         Index.initCalendar(); // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
         Index.initChat();
         Index.initMiniCharts();
         Index.initDashboardDaterange();
         Index.initIntro();
         Tasks.initDashboardWidget();
      });
   </script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>