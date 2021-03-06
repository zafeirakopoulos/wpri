<?php

/**
 * Functions managing the autogenerated pages.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    wpri
 * @subpackage wpri/includes
 */

/**
 * Functions managing the autogenerated pages.
 *
 * Functions managing the autogenerated pages.
 *
 * @since      1.0.0
 * @package    wpri
 * @subpackage wpri/includes
 * @author     Zafeirakis Zafeirakopoulos
 */
class WPRI_Pages {



	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */


	public static function create_pages() {

		$pages_list = WPRI_Declarations::get_pages();
		foreach ($pages_list as $page_name){
			//if (isset($_GET['activated']) && is_admin()){
			    $page_title = $page_name;
			    $page_check = get_page_by_title($page_title);
			    $page = array(
				    'post_type' => 'page',
				    'post_title' => $page_title,
				    'post_status' => 'publish',
				    'post_author' => 1,
				    'post_slug' => strtolower($page_title)
			    );
			 	if(!isset($page_check->ID) ){
       				$page_id = wp_insert_post($page);
			    }
			//}
	 	}

 	}

}
