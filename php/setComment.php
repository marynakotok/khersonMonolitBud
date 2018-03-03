<?php
	 include 'connect.php';

	if (isset($_POST['submit']))
	{
		$message = $_POST['message'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];

		$errorEmpty = false;

		if (empty($message))
		{
			echo "<span class='error-message'>Заполни поле отзыва! </span>";
			$errorEmpty = true;
		}
		else {

				$sql = "INSERT INTO comments (uid, date, message) 
			    VALUES ('$uid', '$date', '$message')";
			    $connect->query($sql); 
			echo "<span class='success-message'>Ваш отзыв добавлен!</span>";

		}
	}
			    	
?>

<script >
	
$(document).ready(function() 
 {
	var errorEmpty = "<?php echo $errorEmpty ?>";
 	if (errorEmpty == false)
 	{
 		$("#commentMessage").val("");
 	}
 });

</script>
