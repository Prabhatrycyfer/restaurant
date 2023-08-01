<?php 
    while (have_posts()): the_post();
?>
<?php $post_select = get_post_meta(get_the_ID(),'_cmb_post_select', true); ?>
<?php  if ($post_select =='light') { ?>
<?php
   $foodex_redux_demo = get_option('redux_demo');
   get_header('single-light'); 
?>
<?php }else{ ?>
<?php
   $foodex_redux_demo = get_option('redux_demo');
   get_header('single-dark'); 
?>
<?php } ?>
<div class="upper-page" id="home">
    <!-- dots start -->
    <div class="dots">
        <div class="the-dots"></div>
    </div>
    <div class="dots-reverse">
        <div class="the-dots"></div>
    </div>
    <!-- dots end -->
    <!-- hero bg start -->
    <div class="hero-fullscreen">
        <div class="hero-fullscreen-FIX">
            <div class="hero-bg">
                <!-- hero slider wrapper start -->
                <div class="swiper-container-wrapper">
                    <!-- swiper container start -->
                    <div class="swiper-container">
                        <!-- swiper wrapper start -->
                        <div class="swiper-wrapper">
                            <!-- swiper slider item start -->
                            <div class="swiper-slide">
                                <div class="swiper-slide-inner">
                                    <?php if(isset($foodex_redux_demo['blog_details_image']['url']) && $foodex_redux_demo['blog_details_image']['url'] != ''){ ?>
                                    <!-- swiper slider item IMG start -->
                                    <div class="swiper-slide-inner-bg bg-img-1" style="background-image: url( <?php echo esc_url($foodex_redux_demo['blog_details_image']['url']); ?> );" >
                                    </div>
                                    <?php }else{ ?>
                                    <div class="swiper-slide-inner-bg bg-img-1">
                                    </div>
                                    <?php } ?>
                                    <!-- overlay start -->
                                    <div class="overlay overlay-dark-75"></div>
                                    <!-- overlay end -->
                                    <!-- swiper slider item txt start -->
                                    <div class="swiper-slide-inner-txt">
                                        <!-- section subtitle start -->
                                        <a href="#">
                                            <h2 class="hero-subheading hero-subheading-home fadeIn-element introduction">
                                                <span><?php the_time(get_option('date_format')); ?></span>
                                            </h2>
                                        </a>
                                        <!-- section subtitle end -->
                                        <!-- divider start -->
                                        <div class="divider-m"></div>
                                        <!-- divider end -->
                                        <!-- section title start -->
                                        <h1 class="hero-heading hero-heading-home fadeIn-element introduction">
                                            <?php the_title(); ?>                                              
                                        </h1>
                                        <!-- section title end -->
                                    </div>
                                    <!-- swiper slider item txt end -->
                                </div>
                            </div>
                            <!-- swiper slider item end -->
                        </div>
                        <!-- swiper wrapper end -->   
                    </div>
                    <!-- swiper container end -->
                </div>
                <!-- hero slider wrapper end -->
            </div>
        </div>
    </div>
    <!-- hero bg end -->
    <!-- center container start -->
    <!-- center container end -->
    <!-- waves start -->
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave-1" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave-1" x="48" y="0" fill="rgba(255, 255, 255, 0.7" />
            <use xlink:href="#gentle-wave-1" x="48" y="3" fill="rgba(255, 255, 255, 0.5)" />
            <use xlink:href="#gentle-wave-1" x="48" y="5" fill="rgba(255, 255, 255, 0.3)" />
            <use xlink:href="#gentle-wave-1" x="48" y="7" fill="#fff" />
        </g>
    </svg>
    <!-- waves end -->
</div>
<!-- home end -->

<!-- news modal 1 start -->
<!-- news modal content start -->
<div class="lower-page lower-page-modal">
    <div class="modal-content">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <div class="col-md-12">
                    <!-- divider start -->
                    <div class="divider-xl"></div>
                    <!-- divider end -->
                    <div class="text">
                        <!-- section subtitle start -->
                        <span class="blog-tag"><?php the_time(get_option('date_format')); ?></span>
                        <!-- section subtitle end -->
                        <!-- divider start -->
                        <div class="divider-m"></div>
                        <!-- divider end -->
                        <!-- section title start -->
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <!-- section title end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
        <?php the_content(); ?>
        <!-- container end -->
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <div class="col-md-12">
                    <!-- divider start -->
                    <div class="divider-l"></div>
                    <!-- divider end -->
                    <?php comments_template();?>
                    <!-- divider start -->
                    <div class="divider-xl"></div>
                    <!-- divider end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog sidebar launcher start -->
<div class="blog-side-launcher" data-id="blog-side">
    <span class="ion-ios-arrow-left"></span>
</div>
<!-- blog sidebar launcher end -->
<!-- blog sidebar start -->
<div class="blog-side panel-overlay-from-right-blog blog-side-launch"></div>
<div class="blog-side panel-from-left-blog">
    <!-- blog sidebar wrapper start -->
    <div class="blog-sidebar-wrapper">
        <?php get_sidebar();?>
    </div>
    <!-- blog sidebar wrapper end -->
</div>
<!-- blog sidebar end -->


<?php
    get_footer();
?>
<?php endwhile; ?>