<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-productos.php'; ?>

</article><!-- #post-<?php the_ID(); ?> -->
