<?php
	$user_names = array("Grace", "Doris", "Gray", "Nate", "missing", "Tom", "Steve", "Graje");
	for($x = 0; $x<count($user_names); $x++){
		if($user_names[$x]=="missing"){
			continue;
		}
		printf("Staff member: %s <br/>", $user_names[$x]);
	}
?>