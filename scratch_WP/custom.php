<?php
/*
Template Name: Nom du modèle
*/


/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>

<?php

 if (have_posts()) {
     while (have_posts()) {
         the_post();
         the_content(); ?>
     <?php } ?>

     <?php

     $args = array(
             'post_type' => 'post'
     );

     $post_query = new WP_Query($args);

     if ($post_query->have_posts()) {
         while ($post_query->have_posts()){
             $post_query->the_post();
             ?>
             <h2><?php the_title()?></h2>
             <?php if (has_post_thumbnail() ){
             the_post_thumbnail();
             }; ?>
             <?php
         }
     }

     ?>










<?php

get_footer();
}

?>