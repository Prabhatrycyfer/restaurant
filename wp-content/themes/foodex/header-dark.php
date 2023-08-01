<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<?php $foodex_redux_demo = get_option('redux_demo'); ?>
    <head>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <?php if(isset($foodex_redux_demo['favicon']['url'])){ ?>
        <link rel="shortcut icon" href="<?php echo esc_url($foodex_redux_demo['favicon']['url']); ?>">
    <?php }?>
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        ?>
    <?php }?>
    <?php wp_head(); ?>
    </head>
    <body id="post-<?php the_ID(); ?>" <?php post_class('dark'); ?>>
        <!-- preloader start -->
        <div class="preloader-bg"></div>
        <div id="preloader">
            <div id="preloader-status">
                <div class="preloader-position loader">
                    <span></span>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <!-- border top start -->
        <div class="border-top top-position"></div>
        <!-- border top end -->
        <!-- border left start -->
        <div class="border-left left-position"></div>
        <!-- border left end -->
        <!-- border right start -->
        <div class="border-right right-position"></div>
        <!-- border right end -->
        <!-- border bottom start -->
        <div class="border-bottom bottom-position"></div>
        <!-- border bottom end -->
        <!-- navigation start -->
        <nav class="navbar navbar-fixed-top navbar-bg-switch">
            <!-- container start -->
            <div class="container">
                <div class="navbar-header fadeIn-element">
                    <!-- logo start -->
                    <div class="logo">
                        <a class="navbar-brand logo" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php if(isset($foodex_redux_demo['logo_light']['url']) && $foodex_redux_demo['logo_light']['url'] != ''){ ?>
                            <!-- logo light start -->
                            <img alt="Logo" class="logo-light" src="<?php echo esc_url($foodex_redux_demo['logo_light']['url']); ?>">
                            <!-- logo light end -->
                            <?php }else{ ?>
                            <img alt="Logo" class="logo-light" src="<?php echo get_template_directory_uri();?>/img/logo-light.png">
                            <?php } ?>

                            <?php if(isset($foodex_redux_demo['logo_light']['url']) && $foodex_redux_demo['logo_light']['url'] != ''){ ?>
                            <!-- logo light start -->
                            <img alt="Logo" class="logo-dark" src="<?php echo esc_url($foodex_redux_demo['logo_light']['url']); ?>">
                            <!-- logo light end -->
                            <?php }else{ ?>
                            <img alt="Logo" class="logo-dark" src="<?php echo get_template_directory_uri();?>/img/logo-light.png">
                            <?php } ?>
                        </a>
                    </div>
                    <!-- logo end -->
                </div>
                <!-- main navigation start -->
                <div class="main-navigation fadeIn-element">
                    <div class="navbar-header">
                        <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle
                        navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <!-- menu start -->
                        <?php 
                          wp_nav_menu( 
                          array( 
                                'theme_location' => 'primary',
                                'container' => '',
                                'menu_class' => '', 
                                'menu_id' => '',
                                'menu'            => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'echo'            => true,
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new foodex_wp_bootstrap_navwalker(),
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul  class=" nav navbar-nav navbar-right %2$s">%3$s</ul>',
                                'depth'           => 0,        
                            )
                        ); ?>
                    </div>
                </div>
                <!-- main navigation end -->
            </div>
            <!-- container end -->
        </nav>
        <!-- navigation end -->