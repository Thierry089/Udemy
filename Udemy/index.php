<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <!-- bloginfo() function displays information about the current site -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php body_class('example'); ?> >
    <?php wp_body_open(); ?>
    <p>Hello World !</p>

    <?php wp_footer(); ?>
</body>
</html>