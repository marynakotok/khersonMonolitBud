<?php
 include 'connect.php';
 include 'commentForm.php';

$commentNewto = $_POST['commentNewto'];
$sql = "SELECT * FROM comments LIMIT $commentNewto";
  	$result = mysqli_query($connect, $sql);
  	if (mysqli_num_rows($result) > 0 )  
  	{
  		while($row = mysqli_fetch_assoc($result))
	  	{
	  		echo "<div class='".$row['cid']."' id='comment_box'> <p>";
		  		echo "<span class='Ucomment'>".nl2br($row['uid'])."</span><br><span class='vl'></span>";
		  		echo "<span class='Dcomment'>".nl2br($row['date'])."</span><br>";
		  		echo "<span class='Mcomment'>".nl2br($row['message'])."</span>";
	  		echo "</p>
	  				<!--<form class='delete-form' id='delete-form'> 
	  					<input type='hidden' name='cid' value='".$row['cid']."'>
	  					<button class='".$row['cid']."' id='commentDelete'>Удалить</button>
	  				</form>
	  				<form method='post' class='edit-form' action='php/editcomment.php'> 
	  					<input type='hidden' name='cid' value='".$row['cid']."'>
	  					<input type='hidden' name='uid' value='".$row['uid']."'>
	  					<input type='hidden' name='date' value='".$row['date']."'>
	  					<input type='hidden' name='message' value='".$row['message']."'>
	  					<button>Редактировать</button>
	  				</form>-->
	  			 </div>";
	  	}
  	}
  	else {
  		echo "Нет отзывов! Хочешь оставить отзыв?";
  		
  	}	
?>