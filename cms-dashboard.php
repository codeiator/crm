

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
                <div class="tiles red added-margin">
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
                    <br><a href="verify-property.php" style="color:#FFF">Live Properties</a>
                    </div>
                    <div class="progress transparent progress-small no-radius">
                      <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%" ></div>
                    </div>
                  
                  </div>
                </div>
              </div>


              <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                <div class="tiles blue added-margin">
                  <div class="tiles-body">
                    <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                  
                    <div class="heading"> <span class="fa fa-ticket"></span>
                    <br><a href="verify-projects.php" style="color:#FFF">Live Projects</a>
                    </div>
                    <div class="progress transparent progress-small no-radius">
                      <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="79%" ></div>
                    </div>
                  
                  </div>
                </div>
              </div>



            </div>

          
	

    </div>
  </div>