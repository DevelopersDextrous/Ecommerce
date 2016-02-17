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
        <link href="<?php echo base_url(); ?>css/cart.css" rel="stylesheet" type="text/css">
<style type="text/css">



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
                <?php include 'include/cart.php' ?>

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
                                <h1 class="page-title text-primary"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Manufacturers</h1>
                                
                                <div class="news-body">
                                 <?php foreach ($product as $key): ?>                              
                                <div class="list-group dir">

                                  <div class="row no-gutter fullwidth prod_view">
                                    
                                    <div class="col-lg-3 clearfix">
                                      <img src="<?php
                                            echo base_url();
                                            echo $key->image;
                                            ?>" alt="..." class="img-thumbnail" title="<?php echo $key->name; ?>" >
                                    </div>

                                    <div class="col-lg-6 clearfix">
                                      <table class="table table-striped">
                                        <tr>
                                          <td><strong>Price:</strong></td>
                                          <td><?php echo $key->name; ?></td>
                                        </tr>
                                        <tr>
                                          <td><strong>Description:</strong></td>
                                          <td><?php echo $key->description; ?></td>
                                        </tr>
    
                                        <tr>
                                          <td><strong>Price:</strong></td>
                                          <td><?php echo '$'.$key->price; ?></td>
                                        </tr>

                                        <tr>
                                          <td><strong>Quantity:</strong></td>
                                          <td>
                                            <?php if($key->quantity >= 1): 
                                            echo 'Available';
                                          else:
                                            echo 'Not Available';
                                          endif;
                                          ?>
                                          </td>
                                        </tr>

                                        <tr>
                                          <td><strong>Categories:</strong></td>
                                          <td><?php echo $key->cat_name." "; ?></td>
                                        </tr>

                                        <tr>
                                          <td><strong>Manufacturer:</strong></td>
                                          <td><?php echo $key->manu_name; ?></td>
                                        </tr>

                                      </table>
                                    </div>

                                    <div class="col-lg-2 col-lg-offset-1 clearfix">
                                    <button class="btn btn-lg btn-info add_to_cart"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</button>
                                </div>

                                  </div>

                                
                                  
                                
                                </div>
                                <?php endforeach; ?>
                                </div>
                            </div>

                        </div><!-- row end -->
                        

                       
                    </div><!-- inner custom column end -->

                </div><!-- doc body wrapper end -->


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
<script src="<?php echo base_url(); ?>js/cart.js"></script>

</body>
</html>
