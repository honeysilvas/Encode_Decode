<?php

	$encode_result = "";
	$decode_result = "";

	if ( isset( $_POST[ "submit" ] ) ){ 
		require_once ( "encode.php" );
	
		if ( $_POST[ "submit" ] == "Encode" ){
			$encode_result = encode_data( $_POST[ "data" ] );
		} elseif ( $_POST[ "submit" ] == "Decode" ){	
			$decode_result = decode_data( $_POST[ "hi_byte" ], $_POST[ "lo_byte" ] );	
		}
	}	
?>
<!DOCTYPE html>
<html lang="en">
<head>	
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<title>Encode / Decode Data</title>
</head>
<body>

<h1>Encode / Decode Data</h1>

<form action="" method="post">
	<h2>Encode</h2>
	<input name="data" type="number" min="-8192" max="8192" value="">
	<input name="submit" type="submit" value="Encode">
	<p style="background-color: #ffff00"><strong><?php echo $encode_result; ?></strong></p>

	<h2>Decode</h2>
	Hi-bit: <input name="hi_byte" type="text" size="2" maxlength="2" value="">
	Lo-bit: <input name="lo_byte" type="text" size="2" maxlength="2" value="">
	<input name="submit" type="submit" value="Decode">
	<p style="background-color: #ffff00"><strong><?php echo $decode_result; ?></strong></p>
</form>

</body>
</html>
