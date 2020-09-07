<?php //get_header('secondary'); ?>

<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="col-md-12">
        <?php get_template_part('includes/section','content'); ?>
        <?php get_search_form(); ?>
        </div>
    </div>
</div>
</section>
<?php get_footer(); ?>