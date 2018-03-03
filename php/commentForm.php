<?php
 //dont keep copy in databas
  function setComments($connect)
  {
  	if(isset($_POST['commentSubmit']) )
    	{
    			$uid = $_POST['uid'];
			    $date = $_POST['date'];
			    $message = $_POST['message'];

			    $sql = "INSERT INTO comments (uid, date, message) 
			    VALUES ('$uid', '$date', '$message')";
			    $connect->query($sql); 	
		}
  }
  
//problem here it must be dynamically
  function getComments($connect)
  {
  	$sql = "SELECT * FROM comments LIMIT 2";
  	$result = $connect->query($sql);
  	$j=1;
  		while($row = $result -> fetch_assoc())
	  	{
	  		
	  		echo "<div class='comment_box' id='comment_box".$j."'> <p>"; 
		  		echo "<span class='Ucomment'>".nl2br($row['uid'])."</span><br><span class='vl'></span>";
		  		echo "<span class='Dcomment'>".nl2br($row['date'])."</span><br>";
		  		echo "<span class='Mcomment'>".nl2br($row['message'])."</span>";
	  		echo "</p>
	  				<form method='post' class='delete-form' action='".deleteComments($connect)."'> 
	  					<input type='hidden' name='cid' value='".$row['cid']."'>
	  					<button type='submit' name='commentDelete'>Удалить</button>
	  				</form> 
	  				<form method='post' class='edit-form' action='php/editcomment.php'> 
	  					<input type='hidden' name='cid' value='".$row['cid']."'>
	  					<input type='hidden' name='uid' value='".$row['uid']."'>
	  					<input type='hidden' name='date' value='".$row['date']."'>
	  					<input type='hidden' name='message' value='".$row['message']."'>
	  					<button >Редактировать</button>
	  				</form></div>";
	  			 $j++;
	  	}
	  	echo "<div class='comment_box' id='comment_box'></div>";
	  	// $result->close();
	  	// $connect -> close();
}
  
function editComments($connect)
  {
  	if(isset($_POST['commentSubmit']) )
    	{
    		if(isset($_POST['message']))
    		{
    			$cid = $_POST['cid'];
    			$uid = $_POST['uid'];
			    $date = $_POST['date'];
			    $message = $_POST['message'];

			    $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'"; 
			    $result = $connect->query($sql);

			    header("Location:../main.php");
    		}
		}
  }

  function deleteComments($connect)
  {
  	if(isset($_POST['commentDelete']))
    	{
    			$cid = $_POST['cid'];
			    $sql = "DELETE FROM comments WHERE cid='$cid'"; 
			    $connect->query($sql);
			    
	    }
  }
?>