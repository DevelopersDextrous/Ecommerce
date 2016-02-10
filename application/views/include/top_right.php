<?php if($this->session->userdata('is_logged_in') == true): ?>

	<nav class="k-functional-navig">
        
               <!--  <ul id="" class="k-dropdown-menu list-inline pull-right">
                    <li style="">
                        <a href="#" class="Pages Collection" title="" style="text-transform: none; border-top: none;"><?php echo $this->session->userdata('user_name')."  "; ?>
                        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url(); ?>index.php/admin" style="text-transform: none; font-weight: bold;" class="admin">Admin Home</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/logout" style="text-transform: none; font-weight: bold;" class="admin">Sign Out!</a></li>
                        </ul>
                    </li>

                        
                    
                </ul>-->
        
            
            <div class="btn-group pull-right top_right">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <?php echo $this->session->userdata('user_name')."  "; ?><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url(); ?>index.php/admin" style="text-transform: none; font-size: 14px; font-weight: bold;" class="admin">Admin Home</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/logout" style="text-transform: none; font-size: 14px; font-weight: bold;" class="admin">Sign Out!</a></li>
                
              </ul>
            </div>
            </nav> 


	<?php else: ?>

		<nav class="k-functional-navig"><!-- functional navig -->
        
                <ul class="list-inline pull-right">
                    <li><a href="#mymodal" data-toggle="modal" data-target="#myModal" style="font-size: 14px; font-weight: bold;">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"> </span>
                    <span class="glyphicon glyphicon-font" aria-hidden="true"></span>dmin Login</a></li>
                </ul>
        
            </nav>

		<?php endif; ?>