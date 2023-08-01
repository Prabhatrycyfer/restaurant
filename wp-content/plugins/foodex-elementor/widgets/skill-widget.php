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
class BdevsSkills extends \Elementor\Widget_Base {

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
		return 'bdevs-skills';
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
		return __( 'Skills', 'bdevs-elementor' );
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
		return 'eicon-skill-bar';
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
		return [ 'skills' ];
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
				'label' => esc_html__( 'Skills', 'bdevs-elementor' ),
			]	
		);

		$this->add_control(
			'tabs2',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'title',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'percent',
						'label'       => esc_html__( 'Percent', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( '100' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_image',
			[
				'label' => esc_html__( 'Images', 'bdevs-elementor' ),
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
		extract($settings); ?>
		
		<!-- know-how start -->
        <section id="know-how" class="section-all bg-light">
            <h6>Placeholder</h6>
            <!-- container start -->
            <div class="container-fluid">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-md-6 nopadding">
                        <!-- slick right start -->
                        <div class="slick-right-alternative">
                        	<?php 
			                    foreach ( $settings['tabs'] as $item ) : 
							?>
                            <!-- know-how carousel item 1 img start -->
                            <div class="img-fullwidth-wrapper">
                                <div class="img-fullwidth img-fullwidth-all img-fullwidth-know-how-carousel-1" style="background-image: url( <?php echo wp_kses_post($item['tab_image']['url']); ?> );"></div>
                            </div>
                            <!-- know-how carousel item 1 img end -->
                        	<?php endforeach; ?>
                        </div>
                        <!-- slick right end -->
                        <?php if ( $settings['show_wave'] ) : ?>
                        <!-- waves start -->
                        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                            <defs>
                                <path id="gentle-wave-2" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                            </defs>
                            <g class="parallax">
                                <use xlink:href="#gentle-wave-2" x="48" y="0" fill="rgba(255, 255, 255, 0.7" />
                                <use xlink:href="#gentle-wave-2" x="48" y="3" fill="rgba(255, 255, 255, 0.5)" />
                                <use xlink:href="#gentle-wave-2" x="48" y="5" fill="rgba(255, 255, 255, 0.3)" />
                                <use xlink:href="#gentle-wave-2" x="48" y="7" fill="#fff" />
                            </g>
                        </svg>
                        <!-- waves end -->
                    	<?php endif; ?>
                    </div>
                    <!-- col end -->
                    <!-- col start -->
                    <div class="col-md-6 nopadding">
                        <!-- slick left start -->
                        <div class="slick-left">
                            <div class="blockquote">
                                <!-- center container start -->
                                <div class="center-container">
                                    <!-- center block start -->
                                    <div class="center-block">
                                        <!-- skills bar start -->
                                        <div class="show-skillbar">
                                        	<?php 
							                    foreach ( $settings['tabs2'] as $item ) : 
											?>
                                            <!-- skill 1 start -->
                                            <div class="skillbar" data-percent="<?php print wp_kses_post($item['percent']); ?>">
                                                <span class="skillbar-title"><?php print wp_kses_post($item['title']); ?></span>
                                                <div class="skillbar-bar"></div>
                                                <span class="skill-bar-percent"></span>
                                            </div>
                                            <!-- skill 1 end -->
                                        	<?php endforeach; ?>
                                        </div>
                                        <!-- skills bar end -->
                                    </div>
                                    <!-- center block end -->
                                </div>
                                <!-- center container end -->
                            </div>
                        </div>
                        <!-- slick left end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>
        <!-- know-how end -->
	<?php
	}

}