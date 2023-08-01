<?php $foodex_redux_demo = get_option('redux_demo');?> 
    <!-- footer start -->
    <section id="footer" class="section-all bg-light">
        <div class="row footer-credits">
            <?php if(isset($foodex_redux_demo['footer_logo']['url']) && $foodex_redux_demo['footer_logo']['url'] != ''){ ?>
            <!-- footer logo start -->
            <div class="footer-credits-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img alt="Logo" src="<?php echo esc_url($foodex_redux_demo['footer_logo']['url']); ?>"></a>
            </div>
            <!-- footer logo end -->
            <?php }else{ ?>
            <div class="footer-credits-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>"><img alt="Logo" src="<?php echo get_template_directory_uri();?>/img/logo-footer.png"></a>
            </div>
            <?php } ?>
            <!-- divider start -->
            <div class="divider-l"></div>
            <!-- divider end -->
            <!-- col start -->
            <div class="col-lg-12">
                <!-- social icons start -->
                <div class="social-icons">
                    <ul>
                        <li>
                            <a class="ion-social-twitter" href="<?php echo esc_attr__($foodex_redux_demo['twitter']); ?>"><span>Twitter</span></a>                                
                        </li>
                        <li>
                            <a class="ion-social-facebook" href="<?php echo esc_attr__($foodex_redux_demo['facebook']); ?>"><span>Facebook</span></a>                                
                        </li>
                        <li>
                            <a class="ion-social-instagram" href="<?php echo esc_attr__($foodex_redux_demo['instagram']); ?>"><span>Instagram</span></a>                                
                        </li>
                    </ul>
                </div>
                <!-- social icons end -->
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
            </div>
            <!-- col end -->
            <!-- col start -->
            <div class="col-lg-12">
                <!-- copyright start -->
                <div class="copyright">
                    <?php echo wp_specialchars_decode($foodex_redux_demo['footer_description']); ?>
                </div>
                <!-- copyright end -->
            </div>
            <!-- col end -->
        </div>
        <!-- container end -->
        <!-- divider start -->
        <div class="divider-l"></div>
        <!-- divider end -->
    </section>
    <!-- footer end -->
    <!-- to top arrow start -->
    <a href="#home">
        <div class="to-top-arrow">
            <span class="ion-ios-arrow-up"></span>
        </div>
    </a>
    <!-- to top arrow end -->
    <!-- photoSwipe background start -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                        "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                        "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                    "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- photoSwipe background end -->
<?php wp_footer(); ?>
<!-- footer-area-end -->
</body>
</html>