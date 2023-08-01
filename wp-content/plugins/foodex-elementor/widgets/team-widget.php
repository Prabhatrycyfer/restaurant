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
class BdevsTeam extends \Elementor\Widget_Base {

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
		return 'bdevs-team';
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
		return __( 'Team', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Team widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-person';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Team widget belongs to.
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
		return [ 'Team' ];
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
				'label' => esc_html__( 'Team', 'bdevs-elementor' ),
			]	
		);

		$this->add_control(
			'number',
			[
				'label'       => __( 'Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'		=> __('Number', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'		=> __('This is subheading', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'		=> __('This is heading', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'description',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'		=> __('This is description', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_team',
			[
				'label' => esc_html__( 'Team Items', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'    => 'tab_image',
						'label'   => esc_html__( 'Image', 'bdevs-elementor' ),
						'type'    => Controls_Manager::MEDIA,
						'dynamic' => [ 'active' => true ],
					],
					[
						'name'        => 'name',
						'label'       => esc_html__( 'Name', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Name' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'info',
						'label'       => esc_html__( 'Info', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Info' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'twitter',
						'label'       => esc_html__( 'Link Twitter', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'https://twitter.com/' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'facebook',
						'label'       => esc_html__( 'Link Facebook', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'https://facebook.com/' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'instagram',
						'label'       => esc_html__( 'Link instagram', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'https://instagram.com/' , 'bdevs-elementor' ),
						'label_block' => true,
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

		$this->add_control(
			'show_description',
			[
				'label'   => esc_html__( 'Show Description', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings); ?>
		
		<!-- team start -->
        <section id="team" class="section-all bg-dark">
            <!-- divider start -->
            <div class="divider-xl"></div>
            <!-- divider end -->
            <!-- divider start -->
            <div class="divider-xl visible-mobile-devices"></div>
            <!-- divider end -->
            <!-- divider start -->
            <div class="divider-xl hidden-mobile-devices"></div>
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
                <?php if ( $settings['show_description'] ) : ?>
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- quote start -->
                        <div class="testimonial">
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
            	<?php endif; ?>
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-sm-12">
                        <!-- IMG carousel start -->
                        <div class="owl-carousel owl-carousel-team">
                        	<?php 
			                    foreach ( $settings['tabs'] as $item ) : 
							?>
                            <!-- carousel img item 1 start -->
                            <div class="carousel-img-item hover-effect-img">
                                <div class="hover-icons">
                                    <a class="iw-slide-left ion-social-twitter" href="<?php print wp_kses_post($item['twitter']); ?>"></a> 
                                    <a class="ion-social-facebook" href="<?php print wp_kses_post($item['facebook']); ?>"></a> 
                                    <a class="iw-slide-right ion-social-instagram" href="<?php print wp_kses_post($item['instagram']); ?>"></a>
                                </div>
                                <div class="carousel-img-item-1 carousel-img-item-all" style="background-image: url( <?php echo wp_kses_post($item['tab_image']['url']); ?> );"></div>
                                <div class="hover-effect the-team"></div>
                                <div class="team-box">
                                    <?php print wp_kses_post($item['name']); ?><span><?php print wp_kses_post($item['info']); ?></span>                                
                                </div>
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
                <div class="owl-nav owl-nav-custom-team"></div>
                <!-- owl nav end -->
            </div>
            <!-- container end -->
            <!-- divider start -->
            <div class="divider-xl"></div>
            <!-- divider end -->
        </section>
        <!-- about end -->
	<?php
	}

}