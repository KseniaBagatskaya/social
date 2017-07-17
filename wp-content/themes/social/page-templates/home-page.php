<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="container">
    <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
  	<div id="primary" class="site-content"> 
		<div id="content" role="main">

	  <div class="news row">
	 <?php echo do_shortcode('[carousel-horizontal-posts-content-slider]'); ?>
	</div> 
	 
 <div class="content row">
	<div class="col-md-8" >
			<div id="ivent-facebook">
			<h1>Події</h1>
				  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area facebook" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
  	<?php endif; ?> 
			</div>
</div>
			<div id="blog">
			<h1>Блог</h1>
	<div class="block-posts"> 
  <?php echo do_shortcode("[wp_blog_designer]"); ?>

 </div> 
</div>
		  <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="widget-area facebook" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
  	<?php endif; ?> 

	</div>

</div>


	<div class="col-md-4" > 	    
		<div id="services">
		<h1>Наші послуги</h1>
			<?php if( have_rows('services', 'option') ): ?>
							<?php while( have_rows('services', 'option') ): the_row(); ?>
							<ul>
								<li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('name_link'); ?></a></li>
							</ul>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<div id="about"> 
			<h1>Про нас</h1>
			<?php if( have_rows('about') ): ?>
						<?php while( have_rows('about') ): the_row(); 
							$image = get_sub_field('img'); ?>
								<div class="col-xs-12 col-sm-12 ">							 							 
										<p><a href="<?php the_sub_field('link'); ?>">
										<img src="<?php echo $image['url']; ?>"  style="width: 100px; height: 140px;"/>					
										<?php the_sub_field('info'); ?></a></p>	 
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
		</div>
	</div>
</div>
 
</div>
 	
</div>
 

		</div>
	</div>
</div>
 
 <?php get_footer(); ?>