<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Shop Home</title>

        <!-- Styles -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
        <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
        <link href="<?php echo base_url(); ?>js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
        <link href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
        <link href="<?php echo base_url(); ?>js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
        <link href="<?php echo base_url(); ?>css/logo.css" rel="stylesheet" type="text/css"><!-- theme styles -->
        <link href="<?php echo base_url(); ?>css/cart.css" rel="stylesheet" type="text/css"/><!-- cart style -->

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

            #name:hover {
                color: red;
            }


        </style>
    </head>

    <body role="document">

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


<?php include 'include/cart.php' ?>

            </div><!-- row end -->

        </div><!-- container + head wrapper end -->

        

        <div id="k-body"><!-- content wrapper -->

            <div class="container"><!-- container -->
                <h1 class="page-title text-primary"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Featured Products</h1>
                <div class="row no-gutter fullwidth"><!-- row -->
                    <?php foreach ($records as $key): ?>
                        <div class="col-lg-8 col-lg-offset 2 clearfix"><!-- featured posts slider -->





                            <img src="<?php
                            echo base_url();
                            echo $key->image;
                            ?>" alt="..." class="img-thumbnail" title="<?php echo $key->name; ?>" >

                            <a href="index.php/products/view_product?id=<?php echo $key->id; ?>"><h3 id="name"><?php echo $key->name; ?></h3></a>
                            <h5 id="branch"><?php echo $key->description; ?></h5>
                            <h5 id="branch"><?php echo $key->price; ?></h5>



                        </div><!-- featured posts slider end -->

                    <?php endforeach; ?>

                </div><!-- row end -->

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="pagi_wrap">
                            <?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>


            </div><!-- container end -->

        </div><!-- content wrapper end -->


        <?php include 'include/footer.php'; ?>
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
        <script src="<?php echo base_url(); ?>js/cart.js"></script>

    </body>
</html>
