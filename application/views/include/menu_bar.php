<nav id="k-menu" class="k-main-navig"><!-- main navig -->

    <ul id="drop-down-left" class="k-dropdown-menu">
        <li class="" id="menu_0">
            <a href="<?php echo base_url(); ?>index.php/home" class="Pages Collection" title="My Shop">Home</a>
        </li>

        <li id="menu_1">
            <a href="#" class="Pages Collection" title="Manufacturers">Manufacturers</a>
            <ul class="sub-menu">
                <?php foreach ($manufacturer as $key) { ?>
                    <li><a href="<?php echo site_url(); ?>/manufacturer/get_products?id=<?php echo $key->id; ?>"><?php echo $key->name; ?></a></li>
                <?php } ?>
            </ul>
        </li>

        <li id="menu_2">
            <a href="#" class="Pages Collection" title="Categories">Categories</a>
            <ul class="sub-menu">
                <?php foreach ($cat as $key) { ?>
                    <li><a href="<?php echo site_url(); ?>/category/get_products?id=<?php echo $key->id; ?>"><?php echo $key->name; ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li id="menu_3">
            <a href="about-us.html" title="How Things Work">About Us</a>

        </li>
        <li id="menu_4">
            <a href="<?php echo base_url(); ?>index.php/service/contact_us" title="Office Contacts">Contact Us</a>
        </li>
    </ul>

</nav><!-- main navig end -->

