<?php include('config.php'); 
try{
//if(isset($_POST['submit']))

	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$cost=$_POST['cost'];
	$type=$_POST['type'];
	$cuisine=$_POST['cuisine'];
	$open=$_POST['open-time'];
	$close=$_POST['close-time'];
	$contact=$_POST['contact'];
	$pic=$_POST['pic'];
	$target= "images/";
	$menu=$_POST['menu'];
	$menu= $target.$menu;
	$pic= $target.$pic;
	//echo "hi";
	$sql=$db->prepare("INSERT INTO restaurant (r_name,r_type,r_add,r_cuisine,r_cost,r_contact,r_time,r_close,r_pic,r_menu) VALUES (:r_name, :r_type, :r_add, :r_cuisine,:r_cost, :r_contact, :r_time, :r_close, :r_pic, :r_menu)");
	$sql->execute(array(':r_name'=>$name, ':r_type'=>$type, ':r_add'=>$address, ':r_cuisine'=>$cuisine, ':r_cost'=>$cost, ':r_contact'=>$contact, ':r_time'=>$open, ':r_close'=>$close, ':r_pic'=>$pic, ':r_menu'=>$menu));
	
	header("Location: admin.php");
}catch(PDOException $e){
									echo $e->getMessage();
									}?>
