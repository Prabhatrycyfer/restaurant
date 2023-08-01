<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
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
                                    <?php if(isset($foodex_redux_demo['404_image']['url']) && $foodex_redux_demo['404_image']['url'] != ''){ ?>
                                    <!-- swiper slider item IMG start -->
                                    <div class="swiper-slide-inner-bg bg-img-1" style="background-image: url( <?php echo esc_url($foodex_redux_demo['404_image']['url']); ?> );" >
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
                                        <!-- section subtitle start -->
                                        <h1 class="hero-heading hero-heading-home fadeIn-element introduction">
                                            <span>  <?php if(isset($foodex_redux_demo['404_title'])){?>
                                                      <?php echo wp_specialchars_decode(esc_attr($foodex_redux_demo['404_title']));?>
                                                      <?php }else{?>
                                                      <?php echo esc_html__( '404 Page', 'foodex' );
                                                      }
                                                      ?>   </span>
                                        </h1>
                                        <!-- section subtitle end -->
                                        <!-- divider start -->
                                        <div class="divider-m"></div>
                                        <!-- divider end -->
                                        <a href="<?php echo esc_url(home_url('/')); ?>">
                                            <div class="more-wraper-center white">
                                                <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle ">
                                                </div>
                                                <div class="more-button-txt-center more-button-txt-center-close">
                                                    <button>
                                                    <span><?php if(isset($foodex_redux_demo['404_button'])){?>
                                                          <?php echo wp_specialchars_decode(esc_attr($foodex_redux_demo['404_button']));?>
                                                          <?php }else{?>
                                                          <?php echo esc_html__( 'Back To Home', 'foodex' );
                                                          }
                                                          ?> </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </a>
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
  get_footer();
?> 