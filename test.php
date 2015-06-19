<?php 
	require_once ( "encode.php" );

	function test_encode(){
		assert ( encode_data( 0 ) == "4000" );
		assert ( encode_data( -8192 ) == "0000" );
		assert ( encode_data( 8191 ) == "7f7f" );
		assert ( encode_data( 2048 ) == "5000" );
		assert ( encode_data( -4096 ) == "2000" );
		assert ( encode_data( -6907 ) == "0a05" );
		assert ( encode_data( 2688 ) == "5500" );
	} 

	test_encode();
	
	function test_decode(){
		assert ( decode_data( "40", "00" ) == 0 );
		assert ( decode_data( "00", "00" ) == -8192 );
		assert ( decode_data( "7f", "7f" ) == 8191 );
		assert ( decode_data( "50", "00" ) == 2048 );
		assert ( decode_data( "0A", "05" ) == -6907 );
		assert ( decode_data( "55", "00" ) == 2688 );
	} 

	test_decode();
?>	