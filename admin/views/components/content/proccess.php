<?php
$content=loadModel('content');
$myclass=loadClass('myclass');
$author=(isset($_SESSION['id']))?$_SESSION['id']:1;
if(isset($_POST['THEM']))
{
	$data=array(
		'title'=>$_POST['title'],
		'alias'=>$myclass->str_alias($_POST['title']),
		'catid'=>$_POST['catid'],
		'metakey'=>$_POST['metakey'],
		'metadesc'=>$_POST['metadesc'],
		'detail'=>$_POST['detail'],
		'status'=>$_POST['status'],
		'trash'=>1,
		'access'=>1,
		'created_at'=>$myclass->ngayhientai(),
		'created_by'=>$author,
		'updated_at'=>$myclass->ngayhientai(),
		'updated_by'=>$author
	);
	$name_img=$_FILES["img"]['name'];
	$temp_img=$_FILES["img"]['tmp_name'];
	$data['img']=$name_img;
	move_uploaded_file($temp_img,"../public/imgs/content/".$name_img);
	$content->content_insert($data);
}
if(isset($_POST['CAPNHAT']))
{
	$id=$_REQUEST['id'];
	$data=array(
		'title'=>$_POST['title'],
		'alias'=>$myclass->str_alias($_POST['title']),
		'catid'=>$_POST['catid'],
		'metakey'=>$_POST['metakey'],
		'metadesc'=>$_POST['metadesc'],
		'detail'=>$_POST['detail'],
		'status'=>$_POST['status'],
		'updated_at'=>$myclass->ngayhientai(),
		'updated_by'=>$author
	);
	if (strlen($_FILES["img"]['name'])) {
		$id=$_REQUEST['id'];	
		$row=$content->content_detail($id);
		$hinh="../public/imgs/content".$row['img'];
		if (file_exists($hinh)) {
			unlink($hinh);
		}
		$name_img=$_FILES["img"]['name'];
		$temp_img=$_FILES["img"]['tmp_name'];
		$data['img']=$name_img;
		move_uploaded_file($temp_img,"../public/imgs/content/".$name_img);
	}
	
	$content->content_update($data,$id);
}
?>
 <script>
 	document.location='index.php?option=content';
 </script>