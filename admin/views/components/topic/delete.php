<?php 
	$topic=loadModel('topic');
	$id=$_REQUEST['id'];	
	$topic->topic_delete($id);
	//header('location:index.php?option=topic&cat=trash');
 ?>
 <script>
 	document.location='index.php?option=topic&cat=trash';
 </script>