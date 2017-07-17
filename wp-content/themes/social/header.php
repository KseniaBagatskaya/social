<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <meta name="description"
          content="Сайт содержит основную информацию о соционике. Соционическая модель, аспекты, соционические типы, признаки типов (дихотомии), признаки Рейнина, интертипные отношения, статьи, ссылки.">
    <meta name="keywords"
          content="студия социального дизайна, студія соціального дизайну, social design studio, socionics, poltava, соционика, полтава, соционика в полтаве, соционический, дуал, отношения, аспекты, модель"/>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon"/>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->


    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.9&appId=1769511796674215";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<header id="masthead" class="site-header">
    <div class="container">
        <div class="col-md-4">
            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><img class="logo"
                                                                                                    src="<?php echo esc_url(home_url('/wp-content/themes/twentytwelve/images/logo.png')); ?>"
                                                                                                    style="height:150px"/>
            </a></div>
        <div class="col-md-8">
            <h3 class="menu-toggle"><?php _e('Menu', 'twentytwelve'); ?></h3>
            <a class="assistive-text" href="#content"
               title="<?php esc_attr_e('Skip to content', 'twentytwelve'); ?>"><?php _e('Skip to content', 'twentytwelve'); ?></a>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </div>
        <div id="sb-search" class="sb-search ">    
            <form action="<?php echo home_url('/') ?>">
                        <input class="sb-search-input " onkeyup="buttonUp();" placeholder="Enter your search term..."
                               onblur="monkey();" type="search" value="" name="search" id="search" for="s">
                        <input class="sb-search-submit" type="submit" value="<?php echo get_search_query() ?>" name="s"
                               id="s">
                        <a class="sb-icon-search"><img src="/wp-content/themes/twentytwelve/images/search.svg"
                                                       class="fa-fa-search"> Пошук</a>   
            </form>
        </div>
    </div>
    <?php $header_image = get_header_image();
    if (!empty($header_image)) : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($header_image); ?>"
                                                             class="header-image"
                                                             width="<?php echo get_custom_header()->width; ?>"
                                                             height="<?php echo get_custom_header()->height; ?>"
                                                             alt=""/></a>
    <?php endif; ?>
</header>
<!-- #masthead -->
<div class="clearfix"></div>
<div id="main" class="wrapper" style="margin-top: 120px;">
    <script type="text/javascript">
        function buttonUp() {
            var valux = $('.sb-search-input').val();
            valux = $.trim(valux).length;
            if (valux !== 0) {
                $('.sb-search-submit').css('z-index', '99');
            } else {
                $('.sb-search-input').val('');
                $('.sb-search-submit').css('z-index', '-999');
            }
        }

        $(document).ready(function () {
            var submitIcon = $('.sb-icon-search');
            var submitInput = $('.sb-search-input');
            var searchBox = $('.sb-search');
            var isOpen = false;

            $(document).mouseup(function () {
                if (isOpen == true) {
                    submitInput.val('');
                    $('.sb-search-submit').css('z-index', '-999');
                    submitIcon.click();
                }
            });

            submitIcon.mouseup(function () {
                return false;
            });

            searchBox.mouseup(function () {
                return false;
            });

            submitIcon.click(function () {
                if (isOpen == false) {
                    searchBox.addClass('sb-search-open');
                    isOpen = true;
                } else {
                    searchBox.removeClass('sb-search-open');
                    isOpen = false;
                }
            });

        });
    </script>
