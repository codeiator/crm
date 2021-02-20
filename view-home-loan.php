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
<title>Home Loan Application</title>
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
        <li><a href="#" class="active">Home Loan Application</a></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3>Home Loan Applicatio  n</h3>
      </div>
      <div class="clearfix"></div>
      
      <h4> <span class="semi-bold">Application</span></h4>
      <br>
     <?php $rt=mysqli_query($con2,"SELECT * from home_loan where id=".$_GET['h_id']);
     $num=mysqli_num_rows($rt);
if($num>0){

													while($row=mysqli_fetch_array($rt))
													{
													?> 
      <div class="row">
        <div class="col-md-12">

        
        <div class="container py-2">
            <div class="row">
                <div class="col">

                <div class="container py-2">
  
    <div class="row shadow-lg p-3 mb-5 bg-white rounded">
        <div class="row">
         <select class="form-control col-md-3" onchange="val()" id="select_id">
            <option value='1'>Application Filled
                  We Have Recieved Your Application</option>
            <option value="2">Verification
                  Document Verification Under Process</option>
            <option value="3">Verification
                Document Verification Under Process</option>
            <option value="4">Loan Approved
              Loan Has Been Granted</option>
          </select>
            </div>
        <div class="col-md-6">
           <label class="h4 px-4">Name:</label><span ><?php echo $row['name'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">Father Name:</label><span><?php echo $row['father_name'] ?? 'NA'; ?></span>
        </div>
         <div class="col-md-6">
           <label class="h4 px-4">Mother Name:</label><span><?php echo $row['mother_name'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">Residential Status:</label><span><?php echo $row['residental_status'] ?? 'NA'; ?></span>
        </div>
         <div class="col-md-6">
           <label class="h4 px-4">Pancard:</label><span><?php echo $row['pancard'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">Identity:</label><span><?php echo $row['photo_id'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">DOB:</label><span><?php echo $row['dob'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">Gender:</label><span><?php echo $row['gender'] ?? 'NA'; ?></span>
        </div>
         <div class="col-md-6">
           <label class="h4 px-4">Category:</label><span><?php echo $row['category'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">Education:</label><span><?php echo $row['education'] ?? 'NA'; ?></span>
        </div>
         <div class="col-md-6">
           <label class="h4 px-4">Marital Status:</label><span><?php echo $row['marital_status'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">Spouse Contact:</label><span><?php echo $row['spouse_contact'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">Present Address Line1:</label><span><?php echo $row['present_address_line_1'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">Present Address Line2:</label><span><?php echo $row['present_address_line_2'] ?? 'NA'; ?></span>
        </div>
        <div class="col-md-6">
           <label class="h4 px-4">Present City:</label><span><?php echo $row['present_city'] ?? 'NA'; ?></span>
        </div>
         <div class="col-md-6">
           <label class="h4 px-4">Present Pincode:</label><span><?php echo $row['present_pincode'] ?? 'NA'; ?></span>
        </div>
       
    </div>
</div>
                   
                    
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
<input type="hidden" value="<?php echo $_GET['h_id']; ?>" id="h_id">
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
</body>
</html>

<script>
function val() {
    d = document.getElementById("select_id").value;
    var id = $("#h_id").val();
 

    $.post('functions/ChangeLoanStatus.php' , { val : d , id : id} , function(res){
      if(res == 1)
      {
        toastr.success("Changed Home Loan Status");
        toastr.options.timeOut = 2000;
    
      }
    })
}
</script>