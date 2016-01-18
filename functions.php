<?php

function the_excerpt_content( $more ) {
	if(!is_singular()) {
		return '<a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( ' Devamını Oku »', 'devamini-oku' ) . '</a>';
	}
}
add_filter( 'excerpt_more', 'the_excerpt_content' );

function the_excerpt_length($length) {
	return 100;
}
add_filter('excerpt_length', 'the_excerpt_length');

