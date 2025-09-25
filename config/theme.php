<?php

/** Allow SVG through WordPress Media Uploader */
function cc_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'cc_mime_types' );



// Clean phone number
function phoneClean($number) {
	$number = str_replace(array('/', ' ', '(', ')'), "", $number);
	if(substr($number, 0 , 2) == "04" || substr($number, 0 , 2) == "08") {
		$newNum = preg_replace('/^(?:\+?0|0)?/','+32', $number);
	} else if(substr($number, 0 , 2) == "00") {
		$newNum = preg_replace('/^(?:\+?00|0)?/','+', $number);
	} else{
		$newNum = $number;
	}
	   
	return $newNum;
}