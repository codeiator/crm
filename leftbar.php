<!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
      <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src="userimages/admin.png"  alt="" data-src="userimages/admin.png" data-src-retina="userimages/admin.ico" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting" style="font-size:14px;">Welcome</div>
          <div class="username" style="font-size:12px;"><?php echo $_SESSION['name'];?></div>
          <div class="status" style="font-size:10px;"><a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
        </div>
        
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>

      <?php $role = $_SESSION['role_id'] ; ?>
   
    <ul>	
          <li class="start"> <a href="dashboard.php"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span>  </a> 
          </li>
    
          <li class=""><a href="change-password.php"><span class="fa fa-file-text-o"></span> Change Password</a>
          </li>

          <li><a href="profile.php"><span class="fa fa-user"></span> Profile</a>
          </li>
                         
          <?php if($_SESSION['role_id']  == 1) {?>

          <li ><a href="raw-leads.php"> <span class="fa fa-tasks"></span> Raw Leads</a>
          </li>

          <?php } ?> 

          <?php if($_SESSION['role_id']  == 1) {?>

          <li class=""><a href="create-ticket.php"><span class="fa fa-ticket"></span> Create Ticket</a>
          </li>

          <?php } ?> 

          <?php if($role  == 1 || $role == 2) {?>

          <li ><a href="view-tickets.php"><span class="fa fa-ticket"></span> Validate Listings</a>
          </li>
          
          <li ><a href="add-locality.php"><span class="fa fa-ticket"></span> Add Locality</a>
          </li>

          <?php } ?>
                           
    </ul>


    
  <!-- script for toastr -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<!-- script for toastr -->