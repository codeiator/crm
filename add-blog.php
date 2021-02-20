<?php
session_start();
//echo $_SESSION['id'];
//$_SESSION['msg'];
include("dbconnection.php");
include("checklogin.php");
check_login();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Potential Leads</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<?php include("header.php");?>
<div class="page-container row"> 
  <?php include("leftbar.php");?>
    <div class="clearfix"></div>
    </div>
  </div>
  <div class="page-content">
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>Home</p> 
        </li>
        <li><a href="#" class="active">Home Loan Leads</a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Home Loan Leads</h3>
      </div>
      <div class="clearfix"></div>






      <div class="container py-8">
    <div class="row">
        <div class="col-md-6">
            <form action="" method="" id="form">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Author Name</label>
                    <input type="text" name="author" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Upload File</label>
                    <input type="file" name="file" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="desc" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button id="submit" class="form-control btn btn-success " >Submit</button>

                </div>
            </form>
        </div>
    </div>
</div>
      
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- BEGIN CHAT --> 

</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/support_ticket.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END CORE TEMPLATE JS -->


<script type="text/javascript">
   $(".verify").click(function() {
     var pid = $(this).attr("val");
     if(confirm("Verify Listing?")){
      $.post("functions/verify-listing.php", { pid : pid }, function(res){
        if(res == 1) {
          location.href = "";
        } else {
          alert("Something went Wrong, please try again later");
        }
      });
     }
   });



   $(".delete").click(function() {
     var pid = $(this).attr("val");
     if(confirm("Confirm Delete?")){
      $.post("functions/delete-listing.php", { pid : pid }, function(res){
        alert(res);
        if(res == 1) {
          location.href = "";
        } else {
          alert("Something went Wrong, please try again later");
        }
      });
     }
   });   
</script>



</body>
</html>