<?php 
	$category=loadModel('category');
	$id=$_REQUEST['id'];
	$row=$category->category_detail($id);
	$status=($row['status']==1)?0:1;
	$category->category_status($status,$id);
 ?>
 <script>
 	document.location='index.php?option=category';
 </script>