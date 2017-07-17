<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <div class="clearfix"></div>
    <div id="primary" class="site-content">
        <div id="content" role="main">
            <div class="container" id="archive">
                <div class="col-md-12">
                    <div class="row">
                        <h1><?php wp_title('|', true, 'right'); ?> </h1>
                        <?php
                        if (have_rows('content')):
                            while (have_rows('content')) : the_row();
                                if (get_row_layout() == 'post_blog'):

                                    if (have_rows('post')):
                                        while (have_rows('post')) : the_row();
                                            $image = get_sub_field('photo');
                                            $url = $image['url'];
                                            $link = get_sub_field('link');
                                            $text = get_sub_field('text');
                                            $size = 'thumbnail';
                                            $thumb = $image['sizes'][$size];
                                            ?>
                                            <div class="col-6 col-sm-6 col-lg-4 post_blog">
                                                <?php echo ' <a href=" ' . $link . '" >'; ?>
                                                <img src="<?php echo $thumb; ?>"/>
                                                <?php echo '     <p>  ' . $text . ' </p> </a>'; ?>
                                            </div>
                                        <?php
                                        endwhile;?>
                                    <?php
                                    endif;
                                endif;
                            endwhile;
                        else :
                            while (have_posts()) : the_post();
                                get_template_part('content', 'page');
                                comments_template('', true);
                            endwhile;
                        endif; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php if (is_active_sidebar('sidebar-3')) : ?>
                    <div id="secondary" class="widget-area facebook" role="complementary">
                        <?php dynamic_sidebar('sidebar-3'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>