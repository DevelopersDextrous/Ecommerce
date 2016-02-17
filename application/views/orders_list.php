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

            .page-title {
                margin: 20px 0 20px 0;
            }

            .prod_view {
                margin: 0 0 30px 0;
                padding-bottom: 20px;
                border-bottom: 1px solid #e3e3e3;
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
                <div class="pull-right back">
                                    <a href="<?php echo base_url(); ?>index.php/admin" class="btn btn-large btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden=""></span> Back to Admin Home</a>
                                </div>

                <h1 class="page-title text-primary"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Orders</h1>
                <div class="row no-gutter fullwidth"><!-- row -->
                    
                        <div class="col-lg-12 clearfix"><!-- featured posts slider -->


                            <div class="row no-gutter fullwidth prod_view">
                                

                                <div class="col-lg-12 clearfix">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>Invoice No.</th>
                                            <th>Ordered by</th>
                                            <th>User Email</th>
                                            <th>User Contact</th>
                                            <th>Ordered Product</th>
                                            <th>Unit Price</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>
                                            <th>Address</th>
                                            <th>Order Date &amp; Time</th>
                                            <th>Payment Method</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        <?php foreach ($records as $key): ?>
                                        
                                        <tr>
                                            <td><?php echo $key->invoice; ?></td>
                                            <td><?php echo $key->first_name." ".$key->last_name; ?></td>
                                            <td><?php echo $key->email; ?></td>
                                            <td><?php echo $key->contact; ?></td>
                                            <td><?php echo $key->name; ?></td>
                                            <td><?php echo '$'.$key->price; ?></td>
                                            <td><?php echo $key->quantity; ?></td>
                                            <td><?php echo '$'.$key->price*$key->quantity; ?></td>
                                            <td><?php echo $key->address; ?></td>
                                            <td><?php echo $key->order_date." ".$key->order_time; ?></td>
                                            <td><?php echo $key->payment_type; ?></td>
                                            <form action="<?php echo base_url(); ?>index.php/orders/update_status?id=<?php echo $key->id; ?>" method="post" class="form-horizontal">
                                            <td>
                                                <select id="stat" class="stat form-control" name="status">
                                                    <option value="<?php echo $key->status; ?>" selected="selected"><?php echo $key->status; ?></option>
                                                    
                                                    <option value="Preparing to Deliver">Preparing to Deliver</option>
                                                    <option value="Delivered">Delivered</option>
                                                    <option value="Cancel">Cancel</option>
                                                    
                                                </select>
                                            </td>
                                            <td>
                                                <input type="submit" class="btn btn-large btn-success" value="Update!">
                                            </td>
                                        </form>
                                        </tr>

                                        <?php endforeach; ?>
                                    </table>
                                </div>

                                
                            </div>



                        </div><!-- featured posts slider end -->

                    

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
