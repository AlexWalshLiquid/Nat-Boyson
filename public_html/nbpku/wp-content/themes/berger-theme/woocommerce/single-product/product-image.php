<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

?>
<!-- Product Slider -->
<div class="one_half">

	<?php
	
		$gallery = $product->get_gallery_attachment_ids();
		$attachment_count = count( $gallery );
		
		if ( $attachment_count ) {

			echo '<!-- Classic Slider -->';
            echo '<div class="classic-slider flexslider">';
            echo '<ul class="slides">';
            
			foreach( $gallery as $image_id ){
				
				$image_title = esc_attr( get_the_title( $image_id ) );
				$image_link  = wp_get_attachment_url( $image_id );
					
				echo '<li>';
                echo '<a class="gallery" href="' . $image_link . '"><img alt="' . $image_title . '" src="' . $image_link . '"></a>';                                    
                echo '</li>';

			}
			
			echo '</ul>';
			echo '<!-- /Classic Slider -->';
            echo '</div>';
            

		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'woocommerce' ) ), $post->ID );

		}
	?>

	<?php //do_action( 'woocommerce_product_thumbnails' ); ?>

<!-- /Product Slider -->
</div>
