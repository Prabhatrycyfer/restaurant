<?php
/**
 * The Template for displaying all single posts
 */
 $foodex_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
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
<!-- blog-area start -->
<div class="lower-page lower-page-modal">
    <div class="container">
        <div class="extra-margin-all post-spacing">
            <!-- row start -->
            <div class="row">
              <div class="col-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <div class="blog-wrapper blog-details">
                  <div class="blog-thumb">
                    <a href="<?php the_permalink();?>">
                      <?php if ( has_post_thumbnail() ) { ?>
                      <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  />
                      <?php } ?>
                    </a>
                  </div>
                  <div class="blog-content">
                      <?php the_content(); ?>
                      <?php wp_link_pages( array(
                      'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'foodex' ),
                      'after'       => '</div>',
                      'link_before' => '<span class="page-number">',
                      'link_after'  => '</span>',
                      ) ); ?>
                  </div>
                  <div class="next-prev-post clearfix">
                    <?php previous_post_link('%link',wp_specialchars_decode(esc_html__( '<i class="ion-arrow-left-c"></i> Previous Post','foodex'),ENT_QUOTES), true); ?>
                    <div class='right'><?php next_post_link('%link',wp_specialchars_decode(esc_html__('Next Post <i class="ion-arrow-right-c"></i>','foodex'),ENT_QUOTES), true); ?></div>
                  </div>
                 <?php           
                    if ( comments_open() || get_comments_number() ) {
                      comments_template();
                    }
                    ?>
                </div>        
              </div>
          </div>
      </div>
    </div>
</div>
<?php endwhile; ?>

  <!-- blog-area end -->
 <?php get_footer();?>