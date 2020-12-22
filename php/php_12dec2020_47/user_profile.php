<?php
	function UserProfile(){
		$user[] = "Jason Gilmore";
		$user[] = "jason@example.com";
		$user[] = "English";
		$user[] = "male";
		return $user;
	}
	list($name, $email, $language, $gender) = UserProfile();
	echo "Name: {$name}<br> Email: {$email}<br> Language: {$language}<br> Gender: {$gender}<br>";
?>
<script>
	var x = 5;
	x = Boolean(x);
	document.write(x);	
</script>