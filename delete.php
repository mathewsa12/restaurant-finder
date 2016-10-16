<?php include('config.php'); 
error_reporting(0);
try{
	
		$name=$_GET['id'];
		echo $name;
	$address=$_POST['address'];
	$cost=$_POST['cost'];
	$type=$_POST['type'];
	$cuisine=$_POST['cuisine'];
	$open=$_POST['open-time'];
	$close=$_POST['close-time'];
	$contact=$_POST['contact'];
	$pic=$_POST['pic'];
	$menu=$_POST['menu'];
	
//if($_POST['delete'])
//{
			//$name=$_POST['name'];
			/*
echo '<script> var r= confirm("Are you sure you want to delete this restaurant?");
									if(!(r)){
										
										window.location.href="admin.php";
										
										
										}
										</script>';  */
	//									echo "hi";
	
	$sql=$db->query("DELETE FROM `restaurant` WHERE `r_name`='".$name."'");
	header("Location: admin.php");




}catch(PDOException $e){
									echo $e->getMessage();
									}



?>
