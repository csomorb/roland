<?php
/*
Template Name: Tananyag
*/
get_header(); ?>
<div class="parallax-container parat padding-top-40">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/guitar-detail-img.jpg"></div>
      <div class="container padding-top-40">

    <h1 class="center-align" style="color:white"> Tananyag </h1>
    <div class="flex-t">
<?php    
// Set up the objects needed
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));

// Get the page as an Object
$portfolio =  get_page_by_title('Tananyag');

// Filter through all pages and find Portfolio's children
$portfolio_children = get_page_children( $portfolio->ID, $all_wp_pages );
for ($i = count($portfolio_children) -1; $i >= 0; $i--) {?>
    <div>
        <a href="<?php echo  $portfolio_children[$i]->post_name ?>">
            <div class="tdivlien"><?php echo  $portfolio_children[$i]->post_title ?></div>
        </a>
    </div>
<?php } ?>
    </div>
   </div>
</div>

<script>
$(document).ready(function(){
    $('.parallax').parallax();
  });
</script>

<?php get_footer(); ?>
