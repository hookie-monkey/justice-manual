<?php get_header();?>
<div class="dark-villain">
    <div class="container">
        <h1><?php the_title();?></h1>
    </div>
</div>
<div class="container">

    <h1><?php echo single_cat_title();?></h1>
    <?php get_template_part('includes/section','archive');?>
    <?php previous_post_link( '%link','Previous Post' ) ?>
<?php next_post_link( '%link','Next Post' ) ?>


</div>
</section>


<?php get_footer();?>