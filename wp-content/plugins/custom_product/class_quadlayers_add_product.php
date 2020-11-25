<?php

class QuadLayers_class{
public function __construct(){ 
	add_action('activated_plugin',array($this,'quadlayers_add_product'));
}
	public function quadlayers_add_product(){
	$post_id = wp_insert_post( array(
	'post_title' => 'Custom Product',
	'post_content' => 'Hey, this is our new product',
	'post_status' => 'publish',
	'post_type' => "product",
	) );
	wp_set_object_terms( $post_id, 'simple', 'product_type' );
	update_post_meta($post_id,'_price', '500');
	update_post_meta($post_id,'_featured', 'yes');
	update_post_meta($post_id,'_stock', '20');
	update_post_meta($post_id,'_stock_status', 'instock');
	update_post_meta($post_id,'_sku', 'cus01');
	}
}
?>