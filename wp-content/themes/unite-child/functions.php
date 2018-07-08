<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


function theme_slug_filter_the_content( $content ) {

	if ( is_post_type_archive() == "films") {

		$custom_content = $content;
	    $post_id = get_the_ID();
   		
		$country = wp_get_post_terms($post_id, 'country', array("fields" => "all"));
		foreach($country as $coun){
			$country_name = "<strong>Country :</strong> ".$coun->name." ";
		}
		
		$genre = wp_get_post_terms($post_id, 'genre', array("fields" => "all"));
		foreach($genre as $gen){
			$genre_name = "<strong>Genre :</strong> ".$gen->name." ";
		}

		$ticket_price = "<strong>Ticket Price :</strong> " . get_field( "ticket_price", $post_id );
		$release_date = get_field('release_date', false, false);
		$release_date = new DateTime($release_date);
		$release_date = $release_date->format('j M Y');
		$release_date = " <strong>Release Date :</strong> ".$release_date;
		
	

    	return $custom_content.$country_name.$genre_name.$ticket_price.$release_date;
    }else{
		return $content;
	}
}
add_filter( 'the_content', 'theme_slug_filter_the_content' );



	// recent 5 films
	function recent_five_films_func( $atts ){

	$film_args = array('post_type'=>'films','posts_per_page'=>5);
	$the_query = new WP_Query( $film_args ); ?>
	<?php if ( $the_query->have_posts() ) :
			$films_output = "";
			$films_output .= '<ul>';
				while ( $the_query->have_posts() ) : $the_query->the_post(); 
					$films_output .='<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
				endwhile; 
			$films_output .= '</ul>';
			wp_reset_postdata();
		else : 
			$films_output .= 'Sorry, no posts matched your criteria';
		endif;
		return $films_output;
	}
	add_shortcode( 'recent_films', 'recent_five_films_func' );


?>

