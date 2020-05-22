<?php
/*
 * Template Name: masonry
 * Template Post Type: page
 */ ?> 
<?php get_header();?>
<section class="page-wrap">
<div class="container">

<h1><?php the_title();?></h1>
<?php get_template_part('includes/section','masonry');?>
</div>
</section>


<?php get_footer();?>




