<?php if($this->session->userdata('is_logged_in') != true): ?>

<div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->

    <div class="col-padded col-shaded"><!-- inner custom column -->

        <ul class="list-unstyled clear-margins"><!-- widgets -->

            <li class="widget-container widget_nav_menu"><!-- widget -->

                <h1 class="title-widget">Select</h1>
                <ul>
                    <li><a href="<?php echo base_url(); ?>index.php/article/article_list" title="menu item">Articles (<?php $i=0; foreach ($article_count as $key) {
                        $i++;
                    } echo $i; ?>)</a></li>

                </ul>
                <ul>
                    <li><a href="<?php echo base_url(); ?>index.php/director/director_list" title="menu item">Our Directors (<?php $i=0; foreach ($director_count as $key) {
                        $i++;
                    } echo $i; ?>)</a></li>

                </ul>

            </li>
            <li class="widget-container widget_recent_news"><!-- widgets list -->
               
                <div class="social-icons">

                    <ul class="list-unstyled list-inline">

                        <li><a href="<?php echo base_url(); ?>index.php/service/contact_us" title="Contact us"><i class="fa fa-lg fa-envelope"></i></a></li>
                        <li><a href="https://www.twitter.com/" title="Twitter"><i class="fa fa-lg fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/" title="Facebook"><i class="fa fa-lg fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/" title="Linkedin"><i class="fa fa-lg fa-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/" title="Google+"><i class="fa fa-lg fa-google-plus"></i></a></li>

                    </ul>

                </div>

            </li>
        </ul>

    </div><!-- inner custom column end -->
    

</div><!-- sidebar wrapper end -->
<?php endif; ?>
