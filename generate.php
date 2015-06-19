<?php
	require_once ( "encode.php" );
	
	$encode_array = [ 6111, 340, -2628, -255, 7550 ];

	foreach ( $encode_array as $value ){
		echo "<br />" . $value . " => ";
		echo encode_data( $value );
	}

	echo "<p>";
	
	$decode_array = [ 
			"0A" => "0A",	
			"00" => "29",		
			"3F" => "0F",		
			"44" => "00",		
			"5E" => "7F",
	];
		
	foreach ( $decode_array as $hi => $lo ){
		echo "<br />" . $hi . $lo . " => ";
		echo decode_data( $hi, $lo );
	}	

?>