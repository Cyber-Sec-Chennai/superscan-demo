<?php
$connection =	mysqli_connect('localhost' , 'root' ,'root' ,'vsamm');



if(isset($_POST['score'])){
	
	$question = $_POST['question'];
	$score = $_POST['score'];
	$audit = $_POST['audit'];
	$id = $_POST['id'];
	$tbl = $_POST['tbl'];
	$owner = $_POST['owner'];
	$commentor = $_POST['commentor'];
	$newcomment = $_POST['newcomment'];
	

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE $tbl SET score='$score' , audit = '$audit', owner= '$owner', comment='$newcomment', commentor='$commentor' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>