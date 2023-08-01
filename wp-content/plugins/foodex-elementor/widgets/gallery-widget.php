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
class BdevsGallery extends \Elementor\Widget_Base {

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
		return 'bdevs-gallery';
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
		return __( 'Gallery', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Gallery widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Gallery widget belongs to.
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
		return [ 'Gallery' ];
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
				'label' => esc_html__( 'Gallery', 'bdevs-elementor' ),
			]	
		);

		$this->add_control(
			'chose_style',
			[
				'label'     => esc_html__( 'Select Style', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'style_1'  => esc_html__( 'Carousel', 'bdevs-elementor' ),
					'style_2' => esc_html__( 'List', 'bdevs-elementor' ),
				],
				'default'   => 'style_1',
			]
		);


		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'condition' => [
                    'chose_style' => ['style_2']
                ],
				'fields' => [
					[
						'name'    => 'tab_image',
						'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'        => 'title',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Item Description 1' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'size',
						'label'       => esc_html__( 'Image Details Size', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '880x1791' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);


		$this->add_control(
			'number',
			[
				'label'       => __( 'Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => __( 'Number', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
                    'chose_style' => ['style_1']
                ],
			]
		);

		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => __( 'This is subheading', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
                    'chose_style' => ['style_1']
                ],
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => __( 'This is heading', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
                    'chose_style' => ['style_1']
                ],
			]
		);	

		$this->add_control(
			'description',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => __( 'This is description', 'bdevs-elementor' ),
				'label_block' => true,
				'condition' => [
                    'chose_style' => ['style_1']
                ],
			]
		);	

		$this->end_controls_section();

		
		$this->start_controls_section(
			'section_content_item',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs2',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'condition' => [
                    'chose_style' => ['style_1']
                ],
				'fields' => [
					[
						'name'    => 'tab_image_2',
						'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
				],
			]
		);

		$this->end_controls_section();

		/** 
		*	Layout section 
		**/
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
			'show_subheading',
			[
				'label'   => esc_html__( 'Show Subheading', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings); ?>
		<?php if( $chose_style == 'style_1' ): ?>
		<section id="inside" class="section-all bg-light">
            <!-- divider start -->
            <div class="divider-xl"></div>
            <!-- divider end -->
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                    	<?php if ( $settings['show_subheading'] ) : ?>
                        <!-- section subtitle start -->
                        <h2 class="hero-subheading hero-subheading-dark">
                            <span><?php print wp_kses_post($settings['number']); ?></span><?php print wp_kses_post($settings['subheading']); ?>
                        </h2>
                        <!-- section subtitle end -->
                    	<?php endif; ?>
                        <!-- divider start -->
                        <div class="divider-m"></div>
                        <!-- divider end -->
                        <!-- section title start -->
                        <h2 class="hero-heading hero-heading-dark">
                            <?php print wp_kses_post($settings['heading']); ?>
                        </h2>
                        <!-- section title end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- quote start -->
                        <div class="testimonial testimonial-bottom">
                            <div class="inner">
                                <div class="quote">
                                    <blockquote class="quote-inner">
                                        <?php print wp_kses_post($settings['description']); ?>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <!-- quote end -->
                    </div>
                    <!-- col end -->
                </div>

                <!-- row end -->
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-sm-12">
                        <!-- IMG carousel start -->
                        <div class="owl-carousel owl-carousel-inside popup-photo-gallery">
                        	<?php 
			                    foreach ( $settings['tabs2'] as $item ) : 
							?>
                            <!-- carousel img item 1 start -->
                            <div class="carousel-img-item hover-effect-img">
                                <div class="hover-icons">
                                    <a class="ion-ios-plus-empty" href="<?php echo wp_kses_post($item['tab_image_2']['url']); ?>"></a>
                                </div>
                                <div class="inside-img-item-1 carousel-img-item-all" style="background-image: url(<?php echo wp_kses_post($item['tab_image_2']['url']); ?>);"></div>
                                <div class="hover-effect the-team"></div>
                            </div>
                            <!-- carousel img item 1 end -->
                        	<?php endforeach; ?>
                        </div>
                        <!-- IMG carousel end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- divider start -->
                <div class="divider-m"></div>
                <!-- divider end -->
                <!-- owl nav start -->
                <div class="owl-nav owl-nav-custom-inside"></div>
                <!-- owl nav end -->            
            </div>
            <!-- container end -->
            <!-- divider start -->
            <div class="divider-xl"></div>
            <!-- divider end -->
        </section>
		<?php elseif( $chose_style == 'style_2' ): ?>
		<section id="menu" class="bg-light">
            <h6>Placeholder</h6>
            <!-- divider start -->
            <div class="divider-m-2"></div>
            <!-- divider end -->
            <!-- container start -->
            <div class="container-fluid">
                <!-- row start -->
                <div class="row">
                    <!-- photoSwipe start -->
                    <div class="legendary-gallery">
                    	<?php 
		                    foreach ( $settings['tabs'] as $item ) : 
						?>
                        <!-- gallery item 1 start -->
                        <figure class="col-sm-6 col-md-3 hover-effect-img move-down">
                            <a data-size="<?php print wp_kses_post($item['size']); ?>" href="<?php echo wp_kses_post($item['tab_image']['url']); ?>"><img alt="Image description" class="img-responsive" src="<?php echo wp_kses_post($item['tab_image']['url']); ?>"></a>
                            <figcaption>
                                <span class="img-caption"><?php print wp_kses_post($item['title']); ?></span>
                                <div class="hover-effect"></div>
                                <div class="hover-icons">
                                    <a class="iw-slide-right ion-ios-plus-empty" href="#"></a>
                                </div>
                            </figcaption>
                        </figure>
                        <!-- gallery item 1 end -->
                    	<?php endforeach; ?>
                    </div>
                    <!-- photoSwipe end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
    	<?php endif; ?>
	<?php
	}

}