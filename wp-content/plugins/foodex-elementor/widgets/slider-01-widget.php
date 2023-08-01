<?php
namespace BdevsElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * Bdevs Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class BdevsSlider01 extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Bdevs Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'bdevs-slider-one';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Bdevs Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Multi Slider', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Slider widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-slider-album';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Slider widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'bdevs-elementor' ];
	}

	public function get_keywords() {
		return [ 'slider', 'carousel' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	// BDT Position
	protected function element_pack_position() {
	    $position_options = [
	        ''              => esc_html__('Default', 'bdevs-elementor'),
	        'top-left'      => esc_html__('Top Left', 'bdevs-elementor') ,
	        'top-center'    => esc_html__('Top Center', 'bdevs-elementor') ,
	        'top-right'     => esc_html__('Top Right', 'bdevs-elementor') ,
	        'center'        => esc_html__('Center', 'bdevs-elementor') ,
	        'center-left'   => esc_html__('Center Left', 'bdevs-elementor') ,
	        'center-right'  => esc_html__('Center Right', 'bdevs-elementor') ,
	        'bottom-left'   => esc_html__('Bottom Left', 'bdevs-elementor') ,
	        'bottom-center' => esc_html__('Bottom Center', 'bdevs-elementor') ,
	        'bottom-right'  => esc_html__('Bottom Right', 'bdevs-elementor') ,
	    ];

	    return $position_options;
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content_heading',
			[
				'label' => esc_html__( 'Slider', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Select Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'slider_style_1'  => esc_html__( 'Style 1', 'bdevs-elementor' ),
					'slider_style_2' => esc_html__( 'Style 2', 'bdevs-elementor' ),
				],
				'default'   => 'slider_style_1',
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'chose_style',
						'label'       => esc_html__( 'Select Style', 'bdevs-elementor' ),
						'type'        => Controls_Manager::SELECT,
						'dynamic'     => [ 'active' => true ],
						'options'   => [
								'image' => esc_html__( 'Image', 'bdevs-elementor' ),
								'video'  => esc_html__( 'Video', 'bdevs-elementor' ),
							],
							'default'   => 'image',
						'label_block' => true,
					],
					[
						'name'    => 'tab_image',
						'label'   => esc_html__( 'Background Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'        => 'video',
						'label'       => esc_html__( 'Link Video', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '#' , 'bdevs-elementor' ),
						'label_block' => true,
						'condition' => [
		                    'chose_style' => ['video']
		                ],
					],
					[
						'name'        => 'subheading',
						'label'       => esc_html__( 'Subheading', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'This is subheading' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'heading',
						'label'       => esc_html__( 'Heading', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'This is heading' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_layout',
			[
				'label' => esc_html__( 'Layout', 'bdevs-elementor' ),
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'   => esc_html__( 'Alignment', 'bdevs-elementor' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-justify',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'description'  => 'Use align to match position',
				'default'      => 'left',
			]
		);

		$this->add_control(
			'show_wave',
			[
				'label'   => esc_html__( 'Show Wave Animation', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display();
		extract($settings);
		?>
		<?php if( $chose_style == 'slider_style_1' ): ?>
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
                                	<?php 
					                    foreach ( $settings['tabs'] as $item ) : 
									?>

                                    <!-- swiper slider item start -->
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-inner" data-swiper-parallax="50%">
                                        	<?php if( wp_kses_post($item['chose_style']) == 'image'): ?> 
                                            <!-- swiper slider item IMG start -->
                                            <div class="swiper-slide-inner-bg bg-img-1" style="background-image: url(<?php echo wp_kses_post($item['tab_image']['url']); ?> );">
                                            </div>
                                            <?php elseif( wp_kses_post($item['chose_style']) == 'video'): ?>
                                            <div class="swiper-slide-inner-bg bg-img-3" style="background-image: url(<?php echo wp_kses_post($item['tab_image']['url']); ?>);">
                                                <!-- HTML5 video URL start -->
                                                <video playsinline autoplay muted loop>
                                                    <source src="<?php print wp_kses_post($item['video']); ?>" type="video/mp4">
                                                </video>
                                                <!-- HTML5 video URL end -->
                                            </div>
                                            <?php endif; ?>
                                            <!-- swiper slider item IMG end -->
                                            <!-- overlay start -->
                                            <div class="overlay overlay-dark-75"></div>
                                            <!-- overlay end -->
                                            <!-- swiper slider item txt start -->
                                            <div class="swiper-slide-inner-txt">
                                                <!-- section subtitle start -->
                                                <a href="#">
                                                    <h2 class="hero-subheading hero-subheading-home fadeIn-element introduction">
                                                        <span><?php print wp_kses_post($item['subheading']); ?></span>
                                                    </h2>
                                                </a>
                                                <!-- section subtitle end -->
                                                <!-- divider start -->
                                                <div class="divider-m"></div>
                                                <!-- divider end -->
                                                <!-- section title start -->
                                                <h1 class="hero-heading hero-heading-home fadeIn-element introduction">
                                                    <?php print wp_kses_post($item['heading']); ?>                                                
                                                </h1>
                                                <!-- section title end -->
                                            </div>
                                            <!-- swiper slider item txt end -->
                                        </div>
                                    </div>
                                    <!-- swiper slider item end -->

                                	<?php endforeach; ?>
                                </div>
                                <!-- swiper wrapper end -->   
                            </div>
                            <!-- swiper container end -->
                        </div>
                        <!-- hero slider wrapper end -->
                        <!-- swiper slider controls start -->
                        <div class="hero-slider-bg-controls fadeIn-element introduction">
                            <div class="swiper-slide-controls slide-prev">
                                <div class="ion-ios-arrow-left"></div>
                            </div>
                            <div class="swiper-slide-controls slide-next">
                                <div class="ion-ios-arrow-right"></div>
                            </div>
                        </div>
                        <!-- swiper slider controls end -->
                        <!-- swiper slider pagination start -->
                        <div class="swiper-slide-pagination fadeIn-element introduction"></div>
                        <!-- swiper slider pagination end -->
                        <!-- swiper slider play-pause start -->
                        <div class="swiper-slide-controls-play-pause-wrapper swiper-slide-controls-play-pause slider-on-off fadeIn-element introduction">
                            <div class="slider-on-off-switch">
                                <i class="ion-ios-play"></i>                            
                            </div>
                            <!-- swiper slider progress start -->
                            <div class="slider-progress-bar">
                                <span>
                                    <svg class="circle-svg" height="50" width="50">
                                        <circle class="circle" cx="25" cy="25" fill="none" r="24" stroke="#e0e0e0" stroke-width="2"></circle>
                                    </svg>
                                </span>
                            </div>
                            <!-- swiper slider progress end -->
                        </div>
                        <!-- swiper slider play-pause end -->
                    </div>
                </div>
            </div>
            <!-- hero bg end -->
            <!-- center container start -->
            <!-- center container end -->
            <?php if ( $settings['show_wave'] ) : ?>
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
        	<?php endif; ?>
        </div>
        <?php elseif( $chose_style == 'slider_style_2' ): ?>
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
                                	<?php 
					                    foreach ( $settings['tabs'] as $item ) : 
									?>
                                    <!-- swiper slider item start -->
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-inner" data-swiper-parallax="50%">
                                        	<?php if( wp_kses_post($item['chose_style']) == 'image'): ?> 
                                            <!-- swiper slider item IMG start -->
                                            <div class="swiper-slide-inner-bg bg-img-1" style="background-image: url(<?php echo wp_kses_post($item['tab_image']['url']); ?> );">
                                            </div>
                                            <?php elseif( wp_kses_post($item['chose_style']) == 'video'): ?>
                                            <div class="swiper-slide-inner-bg bg-img-3" style="background-image: url(<?php echo wp_kses_post($item['tab_image']['url']); ?>);">
                                                <!-- HTML5 video URL start -->
                                                <video playsinline autoplay muted loop>
                                                    <source src="<?php print wp_kses_post($item['video']); ?>" type="video/mp4">
                                                </video>
                                                <!-- HTML5 video URL end -->
                                            </div>
                                            <?php endif; ?>
                                            <!-- overlay start -->
                                            <div class="overlay overlay-dark-75"></div>
                                            <!-- overlay end -->
                                            <!-- swiper slider item txt start -->
                                            <div class="swiper-slide-inner-txt">
                                                <!-- section subtitle start -->
                                                <a href="#">
                                                    <h2 class="hero-subheading hero-subheading-home fadeIn-element introduction">
                                                        <span><?php print wp_kses_post($item['subheading']); ?>  </span>
                                                    </h2>
                                                </a>
                                                <!-- section subtitle end -->
                                                <!-- divider start -->
                                                <div class="divider-m"></div>
                                                <!-- divider end -->
                                                <!-- section title start -->
                                                <h1 class="hero-heading hero-heading-home fadeIn-element introduction">
                                                    <?php print wp_kses_post($item['heading']); ?>                                                  
                                                </h1>
                                                <!-- section title end -->
                                            </div>
                                            <!-- swiper slider item txt end -->
                                        </div>
                                    </div>
                                    <!-- swiper slider item end -->
                                	<?php endforeach; ?>
                                </div>
                                <!-- swiper wrapper end -->   
                            </div>
                            <!-- swiper container end -->
                        </div>
                        <!-- hero slider wrapper end -->
                        <!-- swiper slider controls start -->
                        <div class="hero-slider-bg-controls fadeIn-element introduction">
                            <div class="swiper-slide-controls slide-prev">
                                <div class="ion-ios-arrow-left"></div>

                            </div>
                            <div class="swiper-slide-controls slide-next">
                                <div class="ion-ios-arrow-right"></div>
                            </div>
                        </div>
                        <!-- swiper slider controls end -->
                        <!-- swiper slider pagination start -->
                        <div class="swiper-slide-pagination fadeIn-element introduction"></div>
                        <!-- swiper slider pagination end -->
                        <!-- swiper slider play-pause start -->
                        <div class="swiper-slide-controls-play-pause-wrapper swiper-slide-controls-play-pause slider-on-off fadeIn-element introduction">
                            <div class="slider-on-off-switch">
                                <i class="ion-ios-play"></i>                            
                            </div>
                            <!-- swiper slider progress start -->
                            <div class="slider-progress-bar">
                                <span>
                                    <svg class="circle-svg" height="50" width="50">
                                        <circle class="circle" cx="25" cy="25" fill="none" r="24" stroke="#e0e0e0" stroke-width="2"></circle>
                                    </svg>
                                </span>
                            </div>
                            <!-- swiper slider progress end -->
                        </div>
                        <!-- swiper slider play-pause end -->
                    </div>
                </div>
            </div>
            <!-- hero bg end -->
            <!-- center container start -->
            <!-- center container end -->
            <?php if ( $settings['show_wave'] ) : ?>
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
        	<?php endif; ?>
        </div>
        <?php endif; ?>
	<?php
	}

}