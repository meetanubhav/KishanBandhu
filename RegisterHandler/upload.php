<?php
session_start();
if (isset($_POST["register"]))
{
$target_dir = "../assets/uploads/";
$uploaded_image =  rand().basename($_FILES["fileToUpload"]["name"]);
$pic = $target_dir . $uploaded_image;
$uploadOk = 1;
echo $pic;
$imageFileType = strtolower(pathinfo($pic,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($pic)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pic)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

	$name = strip_tags($_POST["name"]);
	$username =md5($_POST["username"]);
	$password = strip_tags($_POST["password"]);
    $uid = strip_tags($_POST["uid"]);
    $city = strip_tags($_POST["city"]);
    $district = strip_tags($_POST["district"]);
    // $timestamp=date("Y-m-d H:i:s");
	// $pic = strip_tags($_POST["pic"]);

	include '../database_driver/db.php';
	// $r=mysqli_query($con,"insert into fredg(name, username, password, pic, uid, city, district) values('$name','$username','$password','$pic','$uid','$city','$district')");

    $r=mysqli_query($con,"INSERT INTO fredg(name, username, password, pic, uid, city, district) VALUES ('$name','$username','$password','$pic','$uid','$city','$district')");

	if ($r>0)
	{
		// $id = mysqli_query($con,"SELECT * FROM userdetails");

		// $update_id=$r=mysqli_query($con,"insert into profie(user_id) values('$uid')");
        // $_SESSION['username']=$username;
        header('location: dash.php');
		

	}else{
		header('location: farmer.php');
	}
}

?>