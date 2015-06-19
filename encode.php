<?php

/**
 * Encode data.
 *
 */
	function encode_data( $data ){
		$lo_byte_mask = 0x7f;							// Specify lo byte mask.
		$hi_byte_mask = 0xff80;							// Specify hi byte mask.
		
		$data = $data + 8192;							// Add 8192 to raw value.

		$lo_byte = $data & $lo_byte_mask;				// Get lo bytes.
		$hi_byte = ( $data & $hi_byte_mask ) << 1;		// Get hi bytes.

		$data = $hi_byte | $lo_byte;					// Combine hi bytes and lo bytes.
		$data = base_convert( $data, 10, 16 );			// Convert to hexadecimal.
		$data = str_pad( $data, 4, "0", STR_PAD_LEFT );
		return $data;
	}
	
/**
 * Decode data.
 *
 */
	function decode_data( $hi_byte, $lo_byte ){
		$lo_byte = base_convert( $lo_byte, 16, 10 );
		$hi_byte = base_convert( $hi_byte, 16, 10 );
		$hi_byte = $hi_byte << 7;
		$data = $hi_byte | $lo_byte;						// Combine hi_byte and lo_byte.
		$data = ( $data - 8192 );							// Unencoded decimal.	
		return $data;
	}
?>