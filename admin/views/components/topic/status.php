<?php 
	$topic=loadModel('topic');
	$id=$_REQUEST['id'];
	$row=$topic->topic_detail($id);
	$status=($row['status']==1)?0:1;
	$topic->topic_status($status,$id);
 ?>
 <script>
 	document.location='index.php?option=topic';
 </script>