<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Directors</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo base_url(); ?>js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo base_url(); ?>js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link href="<?php echo base_url(); ?>css/logo.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link href="<?php echo base_url(); ?>css/back.css" rel="stylesheet" type="text/css">
<style type="text/css">
.pagi_wrap a, .pagi_wrap strong{
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.428571429;
  text-decoration: none;
  background-color: #ffffff;
  border: 1px solid #dddddd;
}
.pagi_wrap strong, .pagi_wrap a:hover{
  font-weight: normal;
  background-color: #CCCCFF;
}

.pagi_wrap{
  margin-bottom: 20px;

}

#name, #branch {display: inline;}
#designation {margin-top: -1px; font-weight: 400;}
#email {text-decoration: underline; font-weight: bold;}
.dir {border-bottom: 1px solid rgba( 0, 0, 0, 0.05 );}


</style>
</head>

<body role="document" class="page">

    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->

        <div class="row"><!-- row -->

                <?php include 'include/top_right.php'; ?>

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
                            <?php if($this->session->userdata('is_logged_in') == true){?>
                                <div class="pull-right back">
                                    <a href="<?php echo base_url(); ?>index.php/admin" class="btn btn-large btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden=""></span> Back to Admin Home</a>
                                </div> 
                            <?php } ?>
                            <div class="col-lg-12 col-md-12">
                                <h1 class="page-title text-primary"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Directors</h1>
                                
                                <div class="news-body">
                                 <?php foreach ($records->result() as $key): ?>                              
                                <div class="list-group dir">
                                  <div class="line1">
                                      <h3 id="name"><?php echo $key->name.", "; ?></h3>
                                      <h5 id="branch"><?php echo $key->branch; ?></h5>

                                  </div>
                                  <p id="designation"><?php echo "(".$key->designation.")"; ?></p>
                                  <p id="email"><?php echo $key->email; ?></p>
                                  <p id="desc"><?php echo $key->description; ?></p>
                                
                                </div>
                                <?php endforeach; ?>
                                </div>
                            </div>

                        </div><!-- row end -->
                        

                        <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="pagi_wrap">
                                <?php echo $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>
                    </div><!-- inner custom column end -->

                </div><!-- doc body wrapper end -->

            <?php include 'include/side_bar.php' ?>

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- content wrapper end -->



<?php include 'include/footer.php';?>
<?php include 'include/modal.php'; ?>
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
