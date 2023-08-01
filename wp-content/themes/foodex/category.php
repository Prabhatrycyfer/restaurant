<?php
     $foodex_redux_demo = get_option('redux_demo');
     get_header('single-light'); 
?>
<!-- home start -->
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
                                    <?php if(isset($foodex_redux_demo['blog_image']['url']) && $foodex_redux_demo['blog_image']['url'] != ''){ ?>
                                    <!-- swiper slider item IMG start -->
                                    <div class="swiper-slide-inner-bg bg-img-1" style="background-image: url( <?php echo esc_url($foodex_redux_demo['blog_image']['url']); ?> );" >
                                    </div>
                                    <?php }else{ ?>
                                    <div class="swiper-slide-inner-bg bg-img-1">
                                    </div>
                                    <?php } ?>
                                    <!-- swiper slider item IMG end -->
                                    <!-- overlay start -->
                                    <div class="overlay overlay-dark-75"></div>
                                    <!-- overlay end -->
                                    <!-- swiper slider item txt start -->
                                    <div class="swiper-slide-inner-txt">
                                        <!-- divider start -->
                                        <div class="divider-m"></div>
                                        <!-- divider end -->
                                        <!-- section title start -->
                                        <h1 class="hero-heading hero-heading-home fadeIn-element introduction">
                                            <?php printf( esc_html__( 'Category : %s', 'foodex' ), single_cat_title( '', false ) ); ?>                                
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
<?php 
while (have_posts()): the_post();
?>
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
                    <!-- button start -->
                    <a href="<?php the_permalink(); ?>">
                        <div class="more-wraper-center">
                            <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle">
                            </div>
                            <div class="more-button-txt-center more-button-txt-center-close">
                                <button>
                                <span>
                                    <?php if(isset($foodex_redux_demo['read_more'])){?>
                                    <?php echo wp_specialchars_decode(esc_attr($foodex_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Details', 'foodex' );
                                    }
                                    ?>
                                </span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <!-- button end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- news modal content end -->
<!-- news modal 1 end -->
<?php endwhile; ?>
<!-- divider start -->
<div class="divider-xl"></div>
<!-- divider end -->
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