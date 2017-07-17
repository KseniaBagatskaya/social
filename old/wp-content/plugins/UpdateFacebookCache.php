<?php
/**
 * @package Update_Facebook_Cache
 * @version 1.0
 */
/*
Plugin Name: Update Facebook Cache
Plugin URI: http://www.actinweb.com
Description: Use this plugin when you want to update Facebook cache for all pages and posts.
Author: Frederic Russias
Version: 1.0
Author URI: http://www.actinweb.com
*/

$fb_debug = 'http://developers.facebook.com/tools/debug/og/object?q=';


function wp_update_fb_cache_page() {
  global $post;
  $posts = get_posts("order=ASC");
  echo "<div class=\"wrap\">";
  echo "<ul id=\"post_list\">";
  foreach ($posts as $post) :      
  ?>  
    <li>  
      <span><?php the_title(); ?></span> <span id="post_<?php the_id()?>">
	  <a href="#" onclick="javascript:update_fb_cache(<?php the_id()?>)">update facebook cache</a></span>
    </li>  
  <?php  
  endforeach;  
  echo "</ul>";  

ob_start();?>
<script type="text/javascript" >

function update_fb_cache(postId){
	var data = {
		action: 'update_fb_cache',
		post_id: postId
	};

	jQuery.post(ajaxurl, data, function(response) {
        if(/^http.*$/.test(response)){
            alert('URL '+response+' can not be opened');
        }else{
            jQuery('#post_'+response).fadeOut('fast').html('updated').fadeIn('fast');
        }
	});
}

function update_fb_cache_for_all_posts(){
    jQuery("#post_list").find("[id^='post_']").each(function (index) {
        update_fb_cache(jQuery(this).html().replace(/.*\(([0-9]*)\).*/g, "$1"));
    });
}
</script>

<input type="button" class="button-primary" value="Update Facebook Cache" onclick="javascript:update_fb_cache_for_all_posts();"/>
</div>


<?php

echo ob_get_clean();
}



function wp_update_fb_cache_tab() {
	
	$page_title = 'Update Facebook Cache';
	$menu_title = 'Facebook Cache';
	$capability = 'manage_options';
	$menu_slug = 'update_facebook_cache';
	$function = 'wp_update_fb_cache_page';
	add_options_page ($page_title, $menu_title, $capability, $menu_slug, $function);
}

add_action( 'admin_menu', 'wp_update_fb_cache_tab' );


add_action('wp_ajax_update_fb_cache', 'update_fb_cache_callback');

function update_fb_cache_callback() {
    global $fb_debug;
	$post_id = intval( $_POST['post_id'] );
    $url = $fb_debug.urlencode(get_permalink($post_id));
    $page = @file_get_contents($url);

    if($page === false){
        echo $url;
    }else{
        echo $post_id;
    }

    die(); // this is required to return a proper result
}


?>
