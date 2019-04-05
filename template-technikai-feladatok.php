<?php
/*
Template Name: Technikai feladatok
*/
get_header(); ?>

<div class="container padding-top-40">
    <?php
    $args = array(
  'category_name' => 'technikai-feladatok',
  'posts_per_page' => 50,
);
$category = get_category( $args['category_name'] );
    ?>
    <h1 class="center-align"> <?php echo $category->name ?></h1>
    <h2 class="center-align"> <?php echo $category->description ?></h2>
    
<?php $catquery = new WP_Query($args); ?>

<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
<h3 class="center-align"><?php the_title(); ?></h3>
<?php the_content(); ?>

<?php endwhile; ?> 

<?php wp_reset_postdata(); ?>
</div>	

<?php get_footer(); ?>
