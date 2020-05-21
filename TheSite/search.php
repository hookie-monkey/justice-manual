<?php get_header();?>
<section class="page-wrap">
<div class="container">

    <h1>Search results for '<?php echo get_search_query();?>'</h1>
    <?php get_template_part('includes/section','searchresults');?>
    <?php previous_post_link( '%link','Previous Post' ) ?>
<?php next_post_link( '%link','Next Post' ) ?>


</div>
</section>


<?php get_footer();?>