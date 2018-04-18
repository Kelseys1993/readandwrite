<?php

if(isset($_POST["name"])){
	$name = $_POST["name"];
	if(!empty($name)) {
		$handle = fopen('names.text', 'a');
		fwrite($handle, $name. "\n" );
		fclose($handle);
	}else{
		echo "Please enter name";
	}
}


?>

<form action="names.php" method="POST">
	
Names <br><br>
<input type='text' name='name'></input><br><br>

<input type="submit" value='submit'>


</form>