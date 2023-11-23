<?php
session_start();
require_once "../models/AccountantModel.php";

/* 
	if(isset($_POST['up'])){
		//print_r($_FILES['myfile']);
		$src = $_FILES['impFile']['tmp_name'];
		$des = '..Assets/file/'.$_FILES['profilepic']['name'];
		
		if(move_uploaded_file($src, $des)){

			$status = uplaodFile($des);
			if($status)
			{
				header('location: ../views/accountantHomepage.php');
			}
			else
			{
				echo"Samething error......!!!";
			}
		}else{
			header('location: ../view/accountantHomepage.php?error=there is no photo for upload');
			
			echo "error";
		}
	} */

?>

<?php

//print_r($_FILES);

$src = $_FILES['myfile']['tmp_name'];
$file_name = $_FILES['myfile']['name'];
$des = "../Assets/file/$file_name";

if (move_uploaded_file($src, $des)) {
    //echo "success";
    $user = ['des' => $des];

    $status = uplaodFile($user);
    if ($status) {
        header('location: ../views/accountantHomepage.php');
       // echo $des;
    } else {
      //  echo "something error......!!!";
    }
} else {
    echo "error";
}

?>