<?php get_header();?>

<div class="blue-hero">
    <div class="container">
        <h1><?php the_title();?></h1>
    </div>
</div>
<div class="container">
 
    <?php if(has_post_thumbnail()):?>
    
        <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail" >
    <?php endif;?>
    
   
    <?php get_template_part('includes/section','blogcontent');?>

</div>


   
<?php get_footer();?>