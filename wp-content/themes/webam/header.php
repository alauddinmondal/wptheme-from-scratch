<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webam</title>

<?php wp_head(); ?>
</head>
<body>
    
<header>
<div class="container">
<div class="row">
<div class="col-md-12">
<?php
wp_nav_menu(
    array(
        'theme_location' => 'top-menu',
        // 'menu' => 'Top bar'
        'menu_class' => 'webamtop-bar'
    )
);
?>
</div>
</div>
</div>

</header>