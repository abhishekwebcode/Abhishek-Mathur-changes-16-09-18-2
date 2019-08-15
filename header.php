<?php
session_start();
require_once("function/connectin_config.php");
require_once("modules/database/autoload.php");
$depts="";
$title="";
try {
    function getDepartment()
    {
        global $depts;
        global $title;
        $query = "SELECT departments.name as name , employees.job_title as title from employees,departments WHERE employees.id=? and departments.id=employees.department_id";
        $conn = get_connection();
        $q = $conn->prepare($query);
        $q->bind_param("i", $_SESSION["id"]);
        $res = $q->execute();
        $stmt = $q;
        $meta = $stmt->result_metadata();
        while ($field = $meta->fetch_field()) {
            $parameters[] = &$row[$field->name];
        }
        call_user_func_array(array($stmt, 'bind_result'), $parameters);
        while ($stmt->fetch()) {
            foreach ($row as $key => $val) {
                $x[$key] = $val;
            }
            $results[] = $x;
        }
        $title=$results["0"]["title"];
        return $results;
    }

    $depts = getDepartment();
    $dept=($depts[0]["name"]);
} catch (Exception $e) {}

?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from crm.thememinister.com/crmAdmin/profile.html by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 24 Apr 2018 12:40:39 GMT -->
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>HUNET HRSS</title>
      <!-- Favicon and touch icons -->

      <link rel="shortcut icon" href="http://www.hunet-hr.com/lib/img/logo.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>

      <link href="stylecrm.css" rel="stylesheet" type="text/css"/>

      <link href="assets/dist/css/style_box.css" rel="stylesheet" type="text/css"/>

      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>





        <style type="text/css">
         .red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
  padding: 10px 40px 60px;
  margin: 10px 0px 60px;
  border: 1px solid #fff;
  }
.form-area .form-control {
    display: block;
    width: 100%;
    height: 42px !important;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #6f6c6c;
    background-color: #fafafa;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.1);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
         .div_row_top{margin-top: 25px;}
.comment2{color: #999; padding: 10px 10px 0px; border-top: 1px solid #ccc;}
.comment{color: #6299c8;}
.comment a{color: #6299c8;}
  .table_design {
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 4px;
}
   .table_design h2 {
    color: #000;
    font-size: 18px;
    letter-spacing: 1px;
    margin: 0px;
    padding: 0px 0px 10px;
    border-bottom: 1px solid #ccc;
}
    .table_design h2 span{ color: #6299c8; font-size: 18px; letter-spacing: 1px; }
    .table_design table tr td span{ color: #6299c8;} 
    .table_design ul{list-style: none; padding: 0px; margin: 0px; }
   .table_design ul li {
    padding: 10px;
    display: inline-block;
    border-right: 1px solid #9999;
    width: 28%;
}
.table_design ul li:last-child {
    border-right: none;

}
    .table_design ul li span {
    display: block; height: 30px;
}
.nav-tabs>li>a:hover{background:none; border: none;}
            .sidebar-menu > li:hover > a, .sidebar-menu > li.active > a {
    color: #fff;
    background: #4186d3;
}
.main-sidebar {
   
    background-color: #323c44;
}
.main-header .logo {
    background-color: #ffffff;
    color: #241d1d;
    -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.3s ease-in-out;
    border-bottom: 2px solid #ffffff; border-right: 1px solid #0000002b;
}
.main-header .logo .logo-lg img, .main-header .logo .logo-mini img {
    height: 52px;
    margin-top: -23px;
}
[class^="pe-7s-"], [class*=" pe-7s-"] {
    color: #1d1717;
}
.navbar-nav > li > a > i {
    padding: 10px 3px;
    width: 36px;
    text-align: center;
    color: #494950;
    height: 52px;
    font-size: 28px;
    font-weight: 500;
}
.main-header .navbar {
    background-color: #ffffff;
    border-bottom: 1px solid #ffffff;
}
     
.card { border-top: 3px solid #4185d4;
    margin-bottom: 20px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    background: #fff;
    padding: 10px;
}

.card2{margin-bottom: 20px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
    background: #fff;
    padding: 10px 0px;}
    .card2 h2{padding-left: 20px; font-size: 18px; margin: 0px;     border-left: 2px solid #147de6;}
.card2 h2 span{ background: #4e94e1;
    color: #fff;
    padding: 3px 10px;
    font-size: 11px;
    border-radius: 10px;}

.user h2{font-size: 16px; margin: 0px; padding: 0px; margin-top: 20px;}
.user p{font-size: 13px; color: #999; padding: 3px 0px; margin: 0px;}
.user p a{font-size: 13px; color: #4186d3; padding: 10px 0px; margin: 0px;}
.nav-tabs {
    border-bottom: 0;
    background: #4185d4;
    color: #fff;
}
.nav-tabs>li {
    float: left;
    margin-bottom: -1px;
    border-right: 1px solid #fff;
    color: #fff;
}
.nav-tabs>li>a {
    color: #fff;
    font-weight: 600;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #fff;
    cursor: default;
    background-color: #1c6ed2;
    border: 1px solid #1e6dd2;
    border-bottom-color: transparent;
}


.tab-content .panel-body {
    background: #fff;
    border: 1px solid #fefefe;
    border-radius: 2px;
    padding: 20px;
    position: relative;     overflow-y: scroll;
    height: 600px;
}
         </style>


         <style>
.main-sidebar {
    background-color: #fff ;
}

.sidebar-menu > li > a {
    color: #441d1d;!important;
}

.form-control {
    display: block;
    width: 100%;
    height: 42px !important;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #fe0237;
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 20px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.1);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.right_profile {
    background: #000;
    height: 45px;
    width: 45px;
    border-radius: 40px;
    line-height: 45px;
    text-align: center;
    color: #fff;
}
.modal-header-fix{
    padding:5px !important;
    text-align:center;
}

.headiing{
    padding-left: 30px;
    font-size: 17px;
}
.pwd-field{
    margin-top: 8px;
    margin-left: 7px;
    height: 30px;
    width: 90%;
}

</style>

   </head>








   <body class="hold-transition sidebar-mini">
   <!--preloader-->
      <div id="preloader" style="display: none;">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="index.html" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="zacd-logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a style="display:none;" href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
                <a class="sidebar-toggle"  style="text-decoration:none;">
                    <?php echo $_SESSION["first_name"] ?>
                    <br>
                    <p class="dept"><?php echo $title; ?></p>
                    <style>
                        .dept{
                            font-size: 14px;
                        }
                    </style>
                </a>
               <!-- searchbar-->
               <a style="display: none;" href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                  <button type="button" class="close">×</button>
                  <form>
                     <input type="search" value="" placeholder="type keyword(s) here" />
                     <button type="submit" class="btn btn-add">Search...</button>
                  </form>
               </div>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     <!-- Orders -->
                     <!-- <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                        <i class="pe-7s-cart"></i>
                        <span class="label label-primary">5</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li >
                             
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/basketball-jersey.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>polo shirt</h4>
                                       <p><strong>total item:</strong> 21
                                       </p>
                                    </a>
                                 </li>
                                 <li> -->
                                   <!--  <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/shirt.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Kits</h4>
                                       <p><strong>total item:</strong> 11
                                       </p>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/football.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Football</h4>
                                       <p><strong>total item:</strong> 16
                                       </p>
                                    </a>
                                 </li>
                                 <li class="nav-list">
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/shoe.png" class="img-thumbnail" alt="User Image">
                                       </div>
                                       <h4>Sports sheos</h4>
                                       <p><strong>total item:</strong> 10
                                       </p>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li> -->
                    
                    <!--  <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <li>
                                   
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Ronaldo</h4>
                                       <p>Please oreder 10 pices of kits..</p>
                                       <span class="badge badge-success badge-massege"><small>15 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar2.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Leo messi</h4>
                                       <p>Please oreder 10 pices of Sheos..</p>
                                       <span class="badge badge-info badge-massege"><small>6 days ago</small>
                                       </span>   
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left" >
                                          <img src="assets/dist/img/avatar3.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Modric</h4>
                                       <p>Please oreder 6 pices of bats..</p>
                                       <span class="badge badge-info badge-massege"><small>1 hour ago</small>
                                       </span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar4.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Salman</h4>
                                       <p>Hello i want 4 uefa footballs</p>
                                       <span class="badge badge-danger badge-massege">
                                       <small>6 days ago</small>
                                       </span>  
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                                       </div>
                                       <h4>Sergio Ramos</h4>
                                       <p>Hello i want 9 uefa footballs</p>
                                       <span class="badge badge-info badge-massege"><small>5 hours ago</small>
                                       </span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                      -->
                     <li class="dropdown notifications-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="pe-7s-bell"></i>
<span class="label label-warning notfc"></span>
</a>
<ul class="dropdown-menu">
<li>
<ul class="menu">
</ul>
</li>
</ul>
</li>

                     <!-- Tasks -->
                      <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-note2"></i>
                        <span class="label label-danger">6</span>
                        </a>
                       <ul class="dropdown-menu" >
                           <li>
                              <a href="?page=faq">
                              <i class="fa fa-line-chart"></i> FAQ</a>
                           </li>
                           <li><a href="?page=ticketing" ><i class="fa fa fa-bullhorn"></i> Ticketing</a></li>
                        </ul>
                     </li>
                     <!-- Help -->
                    
                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <div class="right_profile">
                            <span>
                                <?php
                                if (isset($_SESSION["first_name"]) && (isset($_SESSION["last_name"]))) {
                                    echo $_SESSION["first_name"][0]." ".$_SESSION["last_name"][0];
                                }
                                ?>
                            </span>
                          </div>
                        </a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="?page=profile1">
                              <i class="fa fa-edit"></i>Profile</a>
                           </li>
                           <li>
                              <a href="javascript:void(0)" data-toggle='modal' data-target='#password_manag' id="pasword">
                              <i class="fa fa-key" aria-hidden="true"></i>Change Password</a>
                           </li>
                          
                           <li><a href="logout.php">
                              <i class="fa fa-sign-out"></i> Logout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>


         <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                           
                               <img src="hunet.png">
                           
                           
                        </div>
                    </div>
                    <div class="panel-body">
                        <form id="loginForm" method="post">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Access Restricted !</label>
                                    <p>Thank you for your interest. </p>
                                    <!-- <input type="text" value="" id="username" class="form-control" name="email" required=""> -->
                                   <!--  <span class="help-block small">Your unique username to app</span> -->
                                </div>
                            
                            </div>
                             <div class="row">

                              <div class="form-group col-lg-12">
                                   <!--  <label> Password</label> -->
                                    <!-- <input type="password" value="" id="repeatpassword" class="form-control" name="password" required=""> -->
                                   
                                </div>

                                </div>
                               <!-- <button type="submit" name="submit" class="btn btn-warning">Close</button> -->

                                                            </form></div>
                        
                        </div>
                    </div>
      
    </div>
  </div>


<div class="modal fade " id="password_manag" tabindex="-1" role="dialog"
     aria-labelledby="" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header modal-header-primary modal-header-fix">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4>Manage Password</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-4">
                <h5  class="headiing">Current password</h5>
                </div>
                <div class="col-md-8">
                <input class="pwd-field" type="password" id="confirmPswd" />
                </div>
	            </div>

                <div class="row">
                <div class="col-md-4">
                <h5 class="headiing">New password</h5>
                </div>
                <div class="col-md-8">
                <input class="pwd-field" type="password" id="newPswd" />
                </div>
	            </div>

                <div class="row">
                <div class="col-md-4">
                <h5  class="headiing">Retype password</h5>
                </div>
                <div class="col-md-8">
                <input class="pwd-field" type="password" id="retypePswd" />
                </div>
	            </div>
            </div>
        </div>
    </div>
</div>

      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
      <!-- FastClick -->
      <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="assets/dist/js/custom.js" type="text/javascript"></script>


  <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>


     
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
 <script>



 </script>
          <script>
              $.post("modules/notifications/get_notifications.php",{},dsf=>{
                  console.log("NOTIFCATIONS",dsf);
                  e=JSON.parse(dsf);
                  nf=0;
                  for (i in e.data) {
                      if (e.data[i].clicked=="no") {
                          nf+=1;
                      }
                      template=`<li>
                            <a href="${e.data[i].link}" class="border-gray">
                            <i class="fa fa-dot-circle-o color-green"></i>${e.data[i].title}</a>
                      </li>`;
                      $("ul.menu").append(template);
                  }
                  if (nf>0) {
                      $(".notfc").text(nf);
                  }
              })
          </script>

<?php   include('sidebar.php');  ?>    