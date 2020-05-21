<?php if ( have_posts() ): while ( have_posts() ): the_post();?>



<?php the_content();?>

<?php 
 $fname = get_the_author_meta ('first_name'); ?>
 <p> Posted by <?php echo $fname;?> </p>
 
<?php $tags = get_the_tags();
if($tags):
foreach($tags as $tag):?>


    <a href="<?php echo get_tag_link($tag->term_id);?> " class="badge badge-success">
        <?php echo $tag->name;?>
    </a>

<?php endforeach; endif;?>

<?php
$categories = get_the_category();
foreach($categories as $cat):?>

<p><a href="<?php echo get_category_link($cat-> term_id);?>">

    <?php echo $cat->name;?></a>
</p>


<?php endforeach; ?>

<p><?php echo get_the_date();?></p>

    <?php endwhile; else: endif;?>