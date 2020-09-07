<div style="background:#dcdcdc;padding:20px 0;">
<footer>
<div class="container">
<div class="row">
<div class="col-md-12">
<?php
wp_nav_menu(
    array(
        'theme_location' => 'footer-menu',
        // 'menu' => 'Top bar'
        'menu_class' => 'webamfooter-bar'
    )
);
?>
</div>
</div>
</div>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>