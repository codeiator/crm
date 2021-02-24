<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Dashboard </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">	
	<?php include("leftbar.php");?>
	<div class="clearfix"></div>
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
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
		<div class="page-title">	
			<h3>Quick Links</h3>	
      <div class="row 2col">

          <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
            <div class="tiles blue added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <?php 
                  $sql="SELECT * from buy_sell_property_list pro,users u where u.contactNo = pro.contactNo AND validated= 0 ";
                  $rowcount = 0; ;
                  if ($result=mysqli_query($con2,$sql))
                    {
                      $rowcount=mysqli_num_rows($result);
                     
                    }   

                    // $sql="SELECT * from buy_sell_land_property_list pro,users u where u.contactNo = pro.contactNo AND validated= 0 ";
  
                    // if ($result=mysqli_query($con2,$sql))
                    //   {
                    //     $rowcount= $rowcount + mysqli_num_rows($result);
                      
                    // } 
      
				        ?>
                <div class="heading"> (<span class="animate-number" data-value="<?php echo $rowcount;?>" data-animation-duration="1200">0</span>) <br> <a href="view-tickets.php" style="color:#FFF"> Validate Property List </a></div>
                
                <div class="progress transparent progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="26.8%"></div>
                </div>
             
              </div>
            </div>
          </div>


          <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
            <div class="tiles blue added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <?php 
                  $sql="SELECT * from projects_add project ,users u where u.contactNo = project.username AND  validated= 0 ";
                  $project = 0; ;
                  if ($result=mysqli_query($con2,$sql))
                    {
                      $project = mysqli_num_rows($result);
                     
                    }   
      
				        ?>
                <div class="heading"> (<span class="animate-number" data-value="<?php echo $project;?>" data-animation-duration="1200">0</span>) <br> <a href="view-project.php" style="color:#FFF"> Validate Project List </a></div>
                
                <div class="progress transparent progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="26.8%"></div>
                </div>
             
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
            <div class="tiles green added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
               
                <div class="heading"> <span class="fa fa-ticket"></span>
                <br><a href="raw-leads.php" style="color:#FFF">Raw Leads</a>
                 </div>
                <div class="progress transparent progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%" ></div>
                </div>
               
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 spacing-bottom">
            <div class="tiles red added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
             
                <div class="heading">  <span class="fa fa-user"></span>
                 <br><a href="potential-leads.php" style="color:#FFF">Potential Leads</a>
                 </div>
                <div class="progress transparent progress-white progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="45%" ></div>
                </div>
               
              </div>
            </div>
          </div>




        </div>
        



      <div class="row 2col">
          <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
            <div class="tiles blue added-margin" style="background: #7940d4">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="heading"> 
                  <span class="fa fa-home"></span> <br> 
                  <a href="vastu-leads.php" style="color:#FFF"> Vastu Leads </a></div>
                
                <div class="progress transparent progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="26.8%"></div>
                </div>
             
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
            <div class="tiles green added-margin" style="background:#428bca;">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
               
                <div class="heading"> <span class="fa fa-wechat"></span>
                <br><a href="raw-leads.php" style="color:#FFF">Chat Leads</a>
                 </div>
                <div class="progress transparent progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%" ></div>
                </div>
               
              </div>
            </div>
          </div>
          <!-- <div class="col-md-3 col-sm-6 spacing-bottom">
            <div class="tiles red added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
             
                <div class="heading">  <span class="fa fa-user"></span>
                 <br><a href="potential-leads.php" style="color:#FFF">Potential Leads</a>
                 </div>
                <div class="progress transparent progress-white progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="45%" ></div>
                </div>
               
              </div>
            </div>
          </div> -->

          <div class="col-md-3 col-sm-6">
            <div class="tiles purple added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                
                <div class="row-fluid">
                  <div class="heading"> <span class="fa fa-home"></span>
                 <br> <a href="home-loan-leads.php" style="color:#FFF">Home Loan Leads </a>
                   </div>
                  <div class="progress transparent progress-white progress-small no-radius">
                    <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-3 col-sm-6">
            <div class="tiles purple added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                
                <div class="row-fluid">
                  <div class="heading"> <span class="fa fa-ticket"></span>
                  <a href="create-ticket.php" style="color:#FFF">Create </a>
                   </div>
                  <div class="progress transparent progress-white progress-small no-radius">
                    <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row 2col">
          <div class="col-md-3 col-sm-6">
              <div class="tiles purple added-margin">
                <div class="tiles-body">
                  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  
                  <div class="row-fluid">
                    <div class="heading"> <span class="fa fa-home"></span>
                  <br> <a href="home-loan-apply-leads.php" style="color:#FFF">Home Loan  Apply </a>
                    </div>
                    <div class="progress transparent progress-white progress-small no-radius">
                      <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


               
          <div class="col-md-3 col-sm-6">
              <div class="tiles purple added-margin">
                <div class="tiles-body">
                  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  
                  <div class="row-fluid">
                    <div class="heading"> <span class="fa fa-plus"></span>
                  <br> <a href="add-blog.php" style="color:#FFF">Add Blog </a>
                    </div>
                    <div class="progress transparent progress-white progress-small no-radius">
                      <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


                       
        <div class="col-md-3 col-sm-6">
              <div class="tiles purple added-margin">
                <div class="tiles-body">
                  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  
                  <div class="row-fluid">
                    <div class="heading"> <span class="fa fa-list"></span>
                  <br> <a href="converted-leads.php" style="color:#FFF">Converted Lead </a>
                    </div>
                    <div class="progress transparent progress-white progress-small no-radius">
                      <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
              <div class="tiles purple added-margin">
                <div class="tiles-body">
                  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  
                  <div class="row-fluid">
                    <div class="heading"> <span class="fa fa-list"></span>
                  <br> <a href="cold-leads.php" style="color:#FFF">Cold Leads </a>
                    </div>
                    <div class="progress transparent progress-white progress-small no-radius">
                      <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="12%"></div>
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
<div class="chat-window-wrapper">
	<div id="main-chat-wrapper" class="inner-content">
     
          
            <div class="side-widget fadeIn">
               <div class="side-widget-title">Chat Panel</div>
             <div><?php include("chat.php");?></div>
            </div>
        </div>

       
    </div>
</div>
 </div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 

</body>
</html>