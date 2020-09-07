<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
    <div class="row">
    <div class="col-md-12">
    <h2><?php the_title(); ?></h2>
    <?php  if(has_post_thumbnail()):?>
        <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb3 img-thumbnail">
    <?php endif; ?>
   
        
        
        <hr>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        
        <?php get_template_part('includes/section','blogcontent'); ?>
        <?php wp_link_pages(); ?>
        
        </div>
    </div>
</div>
</section>
<?php get_footer(); ?>