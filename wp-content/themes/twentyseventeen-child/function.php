<?php 


add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

 add_action('woocommerce_single_product_summary', 'add_content_above_checkout', 15);
    function add_content_above_checkout () { 
     echo 'TEST'; 
 }
 add_action('woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields');
 function woocommerce_product_custom_fields()
{
  $args = array(
      'id' => 'woocommerce_custom_fields',
      'label' => __('Add WooCommerce Custom Fields', 'cwoa'),
  );
  woocommerce_wp_text_input($args);
}
 

function save_woocommerce_product_custom_fields($post_id)
{
    $product = wc_get_product($post_id);
    $custom_fields_woocommerce_title = isset($_POST['woocommerce_custom_fields']) ? $_POST['woocommerce_custom_fields'] : '';
    $product->update_meta_data('woocommerce_custom_fields', sanitize_text_field($custom_fields_woocommerce_title));
    $product->save();
}
add_action('woocommerce_process_product_meta', 'save_woocommerce_product_custom_fields');
function woocommerce_custom_fields_display(){
	global $post;
	$product = wc_get_product($post->ID);
	$custom_fields_woocommerce_title= $product->get_meta('woocommerce_custom_fields');
	if ($custom_fields_woocommerce_title) {
		printf('<div><label>%s</label></div>',
            esc_html($custom_fields_woocommerce_title));
	}
}
add_action('woocommerce_before_add_to_cart_button', 'woocommerce_custom_fields_display');
add_filter('woocommerce_checkout_fields', 'my_add_field');
function my_add_field($fields){
   echo '<div id="my_custom_checkout_field"><h2>' . __('My Custom Field') . '</h2>';

     $fields['shipping']['shipping_field'] =  array(
        'type'          => 'text',
        'class'         => array('my-field-class form-row-wide'),
        'label'         => __('Fill in this custom field'),
        'placeholder'   => __('Enter something'),
        );
     return $fields;
    echo '</div>';
}
add_filter('woocommerce_checkout_fields', 'addBootstrapToCheckoutFields' );
function addBootstrapToCheckoutFields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group'; 

            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}
