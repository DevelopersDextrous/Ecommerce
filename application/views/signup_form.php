<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo base_url(); ?>js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo base_url(); ?>js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link href="<?php echo base_url(); ?>css/logo.css" rel="stylesheet" type="text/css"><!-- theme styles -->

     

  </head>
  
  <body role="document" class="page">
  
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->
    
        <div class="row"><!-- row -->
        
            <?php include 'include/top_right.php' ?>
        
            <div class="col-lg-12">
        
                <?php include 'include/logo.php' ?>

                <?php include 'include/menu_bar.php' ?>
            
            </div>
            
        </div><!-- row end -->
    
    </div><!-- container + head wrapper end -->
    
    <div id="k-body"><!-- content wrapper -->
    
        <div class="container"><!-- container -->
            
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2"><!-- doc body wrapper -->
                    
                    <div class="col-padded"><!-- inner custom column -->
                    
                        <div class="row gutter"><!-- row -->
                        
                            <div class="col-lg-12 col-md-12">
                    
                                
                                
                                
                                <div class="news-body">
                                    

                                    <div class="page-header">
                                        <h3 class="text-primary">Sign Up!</h3>
                                        </div>

                                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/register/signup">
                                        <div class="form-group">
                                        <label for="first_name" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Your first name...">
                                      </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Your last name...">
                                      </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                        <label for="address" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="address" name="address" placeholder="Your address...">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                        <label for="contact" class="col-sm-2 control-label">Contact</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="contact" name="contact" placeholder="Your contact...">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                          <label for="password" class="col-sm-2 control-label">Password:</label>
                                          <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label for="confirm_password" class="col-sm-2 control-label">Confirm Password:</label>
                                          <div class="col-sm-10">
                                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password">
                                          </div>
                                        </div>
                              

                              
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-info">Submit</button>
                              </div>
                          </div>

                        <?php if($errors): ?>
                        <div class="alert alert-danger">
                            <?php echo $errors; ?>                                         
                        </div>
                        <?php endif; ?>
                      </form>
                                    
                                </div>
                            
                            </div>
                        
                        </div><!-- row end -->
                                
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
               
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    
    
    <?php include 'include/footer.php';?>
    <?php include 'include/modal.php' ?>
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>jQuery/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>jQuery/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Drop-down -->
    <script src="<?php echo base_url(); ?>js/dropdown-menu/dropdown-menu.js"></script>
    
    <!-- Fancybox -->
    <script src="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url(); ?>js/fancybox/jquery.fancybox-media.js"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    <script src="<?php echo base_url(); ?>js/jquery.fitvids.js"></script>
    
    <!-- Audio player -->
    <script src="<?php echo base_url(); ?>js/audioplayer/audioplayer.min.js"></script>
    
    <!-- Pie charts -->
    <script src="<?php echo base_url(); ?>js/jquery.easy-pie-chart.js"></script>
    
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    
    <!-- Theme -->
    <script src="<?php echo base_url(); ?>js/theme.js"></script>
    
  </body>
</html>