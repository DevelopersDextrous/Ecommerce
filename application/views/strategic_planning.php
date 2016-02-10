<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Strategic Planning</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    <link href="<?php echo base_url(); ?>js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo base_url(); ?>js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link href="<?php echo base_url(); ?>css/logo.css" rel="stylesheet" type="text/css">

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

            <div class="row"><!-- row -->

                <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->

                    <form action="#" id="top-searchform" method="get" role="search">
                        <div class="input-group">
                            <input type="text" name="s" id="sitesearch" class="form-control" autocomplete="off" placeholder="Type in keyword(s) then hit Enter on keyboard" />
                        </div>
                    </form>
                    
                    <div id="bt-toggle-search" class="search-icon text-center"><i class="s-open fa fa-search"></i><i class="s-close fa fa-times"></i></div><!-- toggle search button -->

                </div><!-- top search end -->

                <div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->

                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->               
                
            </div><!-- row end -->
            
            <div class="row no-gutter"><!-- row -->

                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->

                    <div class="col-padded"><!-- inner custom column -->

                        <div class="row gutter"><!-- row -->

                            <div class="col-lg-12 col-md-12">


                                <h1 class="page-title">Strategic Planning</h1>
                                
                                <div class="news-body">

                                    <p class="call-out">
                                        The pressures of daily business can often mean strategic planning takes a back seat - but to
                                        have a successful business you <b>must</b> plan ahead.
                                    </p>

                                    <p>
                                        We will help you establish a strategic plan that looks at where you want your business to be
                                        in the next 3-5 years and exactly how you and your team can achieve these aims and
                                        objectives.
                                    </p>
                                    <p>
                                        <b>Your strategic plan will:</b>
                                        <div>
                                            <ol>Define the characteristics of your company in three to five years</ol>
                                            <ol>Identify your competitors</ol>
                                            <ol>Define your objectives and financial goals</ol>
                                            <ol>Put in place an effective implementation plan to achieve your goals.</ol>
                                        </div>
                                    </p>
                                </div>

                            </div>

                        </div><!-- row end -->


                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->
                
                <?php include 'include/side_bar.php' ?>
                <?php include 'include/modal.php' ?>
            </div><!-- row end -->

        </div><!-- container end -->

    </div><!-- content wrapper end -->
    
    <?php include 'include/footer.php' ?>

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