<?php
	$new_meta_boxes =
	array(
	    "notice" => array(
	    	"name" => "notice",
	    	"title" => "Notice Name",
	    	"type" => "textarea"
	    ),

	    "content" => array(
	    	"name" => "content",
	    	"title" => "Notice Content",
	    	"type" => "textarea"
	    ),

	    "title" => array(
	    	"name" => "title",
	    	"title" => "Title",
	    	"type" => "textarea"
	    )
	);

	function new_meta_boxes() {
    global $post, $new_meta_boxes;

    foreach($new_meta_boxes as $meta_box) {
        $meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);

        if($meta_box_value == "")
            $meta_box_value = $meta_box['std'];

        echo '<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

        	switch ( $meta_box['type'] ){

       			case 'textarea':
        			echo '<h4>'.$meta_box['title'].'</h4>';
       				echo '<textarea cols="60" rows="1" style="resize:none;" name="'.$meta_box['name'].'_value">'.$meta_box_value.'</textarea><br />';
       			break;
    		}
    }
	}

	function create_meta_box() {
    global $theme_name;

    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'new-meta-boxes', 'Notice', 'new_meta_boxes', 'post', 'normal', 'high' );
    }
	}

	function save_postdata( $post_id ) {
    	global $post, $new_meta_boxes;

	    foreach($new_meta_boxes as $meta_box) {
	        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) ))  {
	            return $post_id;
	        }

	        if ( 'page' == $_POST['post_type'] ) {
	            if ( !current_user_can( 'edit_page', $post_id ))
	                return $post_id;
	        }
	        else {
	            if ( !current_user_can( 'edit_post', $post_id ))
	                return $post_id;
	        }

	        $data = $_POST[$meta_box['name'].'_value'];

	        if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
	            add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
	        elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
	            update_post_meta($post_id, $meta_box['name'].'_value', $data);
	        elseif($data == "")
	            delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
	    }
	}

	add_action('admin_menu', 'create_meta_box');
	add_action('save_post', 'save_postdata');
?>