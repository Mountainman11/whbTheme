<!DOCTYPE html>
<html <?php language_attributes(  );?>>
    <head>
    <meta charset="<?php bloginfo('charset');?>">
    <title><?php wp_title();?></title>
    <?php wp_head();?>
    </head>
    <body>
    <header class="main-header ">
        <div>
            </h1>
                <a href="<?php echo site_url();?>">Whole Health Bound</a>
            </h1>
        <div>
        <div>
            <nav>
                <ul>
                    <li><a href="<?php echo site_url('/about-us');?>">About Us</a></li>
                    <li><a href="<?php echo site_url('');?>">Podcast</a></li>
                    <li><a href="<?php echo site_url('/blog');?>">Blog</a></li>
                    <li><a href="<?php echo site_url('');?>">Recipes</a></li>
                    <li><a href="<?php echo site_url('/authors');?>">Authors</a></li>
                </ul>
            </nav>
        </div>
    </header>