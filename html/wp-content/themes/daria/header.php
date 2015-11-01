<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php if (is_front_page()): ?>
        <title><?php echo bloginfo('name') ?> - <?php echo the_title() ?></title>
    <?php else: ?>
        <title><?php echo the_title() ?> - <?php echo bloginfo('name') ?></title>
    <?php endif; ?>
    <link rel="stylesheet" href="css/app.css" />
    <script src="vendor/modernizr/modernizr.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div id="myPreload"></div>
