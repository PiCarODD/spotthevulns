<?php 
		if (isset($_GET['cmd']) && isset($_GET['type'])){
			$input = $_GET['cmd'];
			$delimeter = $_GET['type'];
			if (preg_match("/\b[e]\d*([d])?\b/", $delimeter)){
				echo "<pre> Your input is >> ".$input."</pre>";
				$result = exec("ping -c 3 ".$input); //passthru,system,shell_exec,proc_open,pcntl_exec,popen
				echo "<pre> Scanning ...</pre>";
			}
			else{
				echo "Sorry Hacker!";
			}			
		}
		else{
			echo "You need to specify parameters!";
		}
?>