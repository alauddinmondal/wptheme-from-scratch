<?php get_header(); ?>
<section class="page-wrap">
<div class="container">
<div class="row">

<div class="col-md-3 sidebarBg">

<?php if(is_active_sidebar('page-sidebar')): ?>
<?php dynamic_sidebar('page-sidebar') ?>

<?php endif; ?>
</div>



<div class="col-md-9">
<h2><?php the_title(); ?></h2>
<?php get_template_part('includes/section','content'); ?>
</div>


</div>
</div>



</section>


<?php get_footer(); ?>