<?php
/**
 * Trusted Shops Reviews Graphic
 *
 * @author 		Vendidero
 * @package 	WooCommerceGermanized/Templates
 * @version     1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

?>

<?php echo WC_trusted_shops()->trusted_shops->get_review_widget_html(); ?>