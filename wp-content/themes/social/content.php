<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div class="container" id="archive">


    <div class="col-md-8">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if (is_sticky() && is_home() && !is_paged()) : ?>
                <div class="featured-post">
                    <?php _e('Featured post', 'twentytwelve'); ?>
                </div>
            <?php endif; ?>

            <center> <?php the_post_thumbnail(array(270, 370)); ?> </center>
            <?php if (is_single()) : ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php else : ?>
                <h1 class="entry-title">
                    <a href="<?php the_permalink(); ?>"
                       title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'twentytwelve'), the_title_attribute('echo=0'))); ?>"
                       rel="bookmark"><?php the_title(); ?></a>
                </h1>
            <?php endif; ?>
            <?php if (comments_open()) : ?>
                <div class="comments-link">
                    <?php comments_popup_link('<span class="leave-reply">' . __('Leave a reply', 'twentytwelve') . '</span>', __('1 Reply', 'twentytwelve'), __('% Replies', 'twentytwelve')); ?>
                </div>
            <?php endif; ?>

            <?php if (is_search()) : ?>
            <div class="entry-summary">
                <?php else : ?>
                    <div class="entry-content" style="text-align: justify;">
                        <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve')); ?>
                        <?php wp_link_pages(array('before' => '<div class="page-links">' . __('Pages:', 'twentytwelve'), 'after' => '</div>')); ?>
                    </div>
                <?php
                endif; ?>
        </article>
    </div>

    <div class="col-md-4">
        <?php if (is_active_sidebar('sidebar-3')) : ?>
        <div id="secondary" class="widget-area facebook" role="complementary">
            <?php dynamic_sidebar('sidebar-3'); ?>
            <?php endif; ?>
        </div>
    </div>

</div>