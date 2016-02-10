<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo base_url(); ?>js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo base_url(); ?>js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link href="<?php echo base_url(); ?>css/logo.css" rel="stylesheet" type="text/css"><!-- theme styles -->

    <style>
    table {margin: 10px 0 10px 0;}
        table tr td {width: 250px; text-align: center;}
    .page-header{
        margin-top: 15%;
    }
    </style>   

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
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                    
                    <div class="col-padded"><!-- inner custom column -->
                    
                        <div class="row gutter"><!-- row -->
                        
                            <div class="col-lg-12 col-md-12">
                    
                                
                                <h1 class="page-title text-primary">Contact us</h1>
                                
                                <div class="news-body">
                                    <p class="call-out">At <b>MTLC</b>, we have made it easy to make an appointment with us. Simply enter your details in our postal or E-mail or call us the above numbers.</p>
                                
                                    <table class="table table-bordered table-hover">
                                    <caption>Postal Address for all Offices</caption>
                                        
                                        
                                        <tr>
                                            <td><span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span><b> Postal Address:</b></td>
                                            <td>23/d/1 Free School Street, <br> Box Culvert Road, <br> Panthapath, Dhaka-1205</td>
                                        </tr>
                                    </table>

                                    <table class="table table-bordered table-hover">
                                    <caption>Phone &amp; Fax Number for all Offices</caption>
                                        
                                        
                                        <tr>
                                            <td><span class="glyphicon glyphicon-earphone" aria-hidden="true"> </span><b> Phone:</b></td>
                                            <td>+88 01917272316</td>
                                        </tr>

                                        <tr>
                                            <td><span class="glyphicon glyphicon-print" aria-hidden="true"> </span> <b> Fax:</b> </td>
                                            <td>+88 01741126758</td>
                                        </tr>
                                    </table>

                                    <table class="table table-bordered table-hover">
                                    <caption>E-mail for all Offices</caption>
                                        
                                        
                                        <tr>
                                            <td><span class="glyphicon glyphicon-send" aria-hidden="true"> </span> <b> Address:</b></td>
                                            <td style="text-decoration: underline;">akperd@yahoo.com</td>
                                        </tr>

                                        
                                    </table>

                                    <div class="page-header">
                                        <h3 class="text-primary">Send Message</h3>
                                        </div>

                                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/email">
                                        <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="name" name="name" placeholder="Your name...">
                                      </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="subject" class="col-sm-2 control-label">Subject</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                  </div>
                              </div>
                              <div class="form-group">
                                    <label for="messege" class="col-sm-2 control-label">Messege</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="messege" rows="5" name="message" placeholder="Write something for us..."></textarea>
                                  </div>
                              </div>

                              
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-info">Send</button>
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
                
               <?php include 'include/side_bar.php' ?>
            
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