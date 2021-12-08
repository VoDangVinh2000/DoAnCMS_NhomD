<?php
/*
 * Display product categories
 */
if (!class_exists('WooCommerce')) return;

class ecommerce_plus_product_search_widget extends WC_Widget {

		function __construct() {
		
				$this->widget_cssclass    = 'woocommerce product_search_widget';
				$this->widget_description = __( 'Display product search.', 'ecommerce-plus' );
				$this->widget_id          = 'ecommerce_plus_product_search_widget';
				$this->widget_name        = __( '+ Product Search', 'ecommerce-plus' );
		
				parent::__construct();
				
		}

		// Creating widget front-end
		public function widget($args, $instance) {
		?>
        
		<?php
		}

		public function form($instance) {
		}

		public function update($new_instance, $old_instance) {
				$instance = array();
				return $instance;
		}
}


function ecommerce_plus_product_search_widget() {
		register_widget('ecommerce_plus_product_search_widget');
}
add_action('widgets_init', 'ecommerce_plus_product_search_widget');





