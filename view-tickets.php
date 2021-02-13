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
<title>Validate listing</title>
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
        <li><a href="#" class="active">Validate Listing</a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Validate Listings</h3>
      </div>
      <div class="clearfix"></div>
      
      <h4> <span class="semi-bold">Tickets</span></h4>
      <br>
     <?php $rt=mysqli_query($con,"SELECT * from awaas.buy_sell_property_list where vaildated=0");
     $num=mysqli_num_rows($rt);
if($num>0){

													while($row=mysqli_fetch_array($rt))
													{
													?> 
      <div class="row">
        <div class="col-md-12">
          <div class="simple no-border" style="background: #fff;">
            <div class="grid-title no-border descriptive clickable">
              <h4 class="semi-bold"><?php echo $row['property_for'];?></h4>
              <p >Listing By <span class="text-success bold"><?php echo $row['contactName'];?> 
              <?php echo $row['contactNo'];?></span> - Posted on <?php echo $row['date'];?>
             <span class="label">
              <a href="../awaas/property.php?p_id=<?php echo $row['p_id'];?>" target="_blank" style=""> View</a>
             </span></p>
              <div class="actions"> 
                <a class="verify" val="<?php echo $row['p_id'];?>">
                  <i class="fa fa-check" style="color:#58d058;"></i> 
                Verify</a> &emsp;
                <a class="delete" val="<?php echo $row['p_id'];?>">
                  <i class="fa fa-trash" style="color:#fb6767;"></i> 
                Delete</a>  </div>
            </div>
            <div class="grid-body  no-border" style="display:none">
              <div class="post">
                
                  <div class=""> 
                    <span><?php echo $row['contactName'];?></span> </div>
                
                <div class="info-wrapper">
                  <div class="info"><?php echo $row['ticket'];?> </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
              <br>
              <div class="form-actions">
                <div class="post col-md-12">
                  <div class="user-profile-pic-wrapper">
                    <div class="user-profile-pic-normal"> <img width="35" height="35" data-src-retina="userimages/admin.ico"
                     data-src="userimages/admin.ico" src="userimages/admin.ico" alt=""> </div>
                  </div>
                  <div class="info-wrapper">
 
                      <br>
                      <?php echo $row['admin_remark'];?>
                      <hr>
                      <p class="small-text">Posted on <?php echo $row['admin_remark_date'];?></p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
               <?php } } else {?>
<h3 align="center" style="color:red;">No Record found</h3>
<?php } ?>                
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