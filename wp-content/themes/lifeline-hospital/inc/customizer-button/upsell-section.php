<?php
/**
 * Custom Customizer Controls.
 *
 * @package lifeline_hospital
 */

if ( ! class_exists( 'WP_Customize_Section' ) ) {
	return null;
}

/**
 * Upsell customizer section.
 *
 * @since  1.0.0
 * @access public
 */
class Lifeline_Hospital_Customize_Upsell_Section extends WP_Customize_Section{

	/**
	 * The type of customize section being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'lifeline-hospital-upsell';

	/**
	 * Custom button text to output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_text = '';

	/**
	 * Custom pro button URL.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $pro_url = '';

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function json() {
		$json = parent::json();

		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );

		return $json;
	}

	/**
	 * Outputs the Underscore.js template.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	protected function render_template() { ?>

		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand" style="display:list-item !important">
			<h3 class="accordion-section-title">
				{{ data.title }}
				<# if ( data.pro_text && data.pro_url ) { #>
				<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
		<?php 
	}
}

