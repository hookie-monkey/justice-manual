<?php if ( have_posts() ): while ( have_posts() ): the_post();?>
<div class="row justify-content-start">
    <div class="container">
    <div class="card mb-3 ">
        <div class="card-body d-flex justify-content-center align-item-center">
<div class="col-4">
        <?php if(has_post_thumbnail()):?>
    
    <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-responsive img-fluid  img-thumbnail mr-4" >
<?php endif;?>
</div>
<div class="col-8  blog-content">

            <h3><?php the_title();?></h3>
             <?php the_excerpt();?>
             <a href="<?php the_permalink();?>" class="btn btn-dark">Read more</a>
             </div><!---end blog content-->
        </div><!---end card body-->
    </div><!---end card-->
    </div>
 </div> 
<?php endwhile; else: endif;?>

