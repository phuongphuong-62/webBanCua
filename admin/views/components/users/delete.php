<?php 
	$users=loadModel('users');
	$id=$_REQUEST['id'];	
	$users->users_delete($id);
	//header('location:index.php?option=users&cat=trash');
 ?>
 <script>
 	document.location='index.php?option=users&cat=trash';
 </script>