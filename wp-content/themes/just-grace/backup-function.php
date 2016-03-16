<?php 
/*
add_action( 'after_setup_theme', 'theme_ready' );
function theme_ready()
{*/
	add_theme_support("menus");
	add_theme_support("automatic-feed-links");
	add_theme_support("post-thumbnails");
	
	// registering Menu
	register_nav_menu('primary', 'Top navigation');
	
if ( function_exists('register_sidebar') ){
	
	register_sidebar(array(
        'name' => 'inner content left',
		'id' => 'inner-content-left',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
));
	register_sidebar(array(
        'name' => 'inner content right',
		'id' => 'inner-content-right',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
));
register_sidebar(array(
        'name' => 'footer top 1',
		'id' => 'footer-top-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
));
register_sidebar(array(
        'name' => 'footer 1',
		'id' => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
));
register_sidebar(array(
        'name' => 'footer 2',
		'id' => 'footer-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
));


register_sidebar(array(
        'name' => 'How to Help Sidebar',
		'id' => 'howto-help-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="inner-white-orang">',
        'after_title' => '</h2>',
));

register_sidebar(array(
        'name' => 'Initiatives Sidebar',
		'id' => 'initiatives-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="inner-white-orang">',
        'after_title' => '</h2>',
));

/******************** Custom Field ******************/
add_action("add_meta_boxes", "load_image_metabox");
add_action("save_post","save_image_metabox");
function load_image_metabox(){
	add_meta_box("background_image_url", __("Background Image Url", "background_image_url"), "add_metabox_fields", "page");
}

function add_metabox_fields ()
{
	global $post;
	$fields = array(
		array('label' => 'Background Image', 'type' => 'text', 'value' => get_post_meta($post->ID, 'bg_img_url',true), 'name' =>'bg_img_url')
	);
?>
	<table width="100%">
    <?php foreach($fields as $f){ 
				if($f['type'] == 'text'){?>
					<tr><td width="20%"><?php echo $f['label'];?></td>
                    	<td width="80%"><input style="width:50%;" type="text" name="<?php echo $f['name']; ?>" value="<?php echo $f['value']; ?>" /></td>
                   </tr>
			<?php }
			} ?>
    </table>
<?php
}

function save_image_metabox($post_id) {
	global $post;
	if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
		return;	
	}
		if('page' == $_POST['post_type']){
			$fields = array(
				array('label' => 'Background Image', 'type' => 'text', 'value' => get_post_meta($post->ID, 'bg_img_url',true), 'name' =>'bg_img_url')
			);
			
			foreach($fields as $f)	{
				update_post_meta($post_id, $f['name'] , $_POST[$f['name']]);
			}
		}
}

	
}
?>