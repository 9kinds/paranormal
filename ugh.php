<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		-->

		<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC' rel='stylesheet' type='text/css'>
 		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
 		<link rel="stylesheet" type="text/css" href="css/paranormal.css">
	
		<title>VSS LLP</title>
</head>
<body>
<div id="thanks" class="container">
<?php 
$name = $tel = $email = $pic = $comment = '';

/*
$response_array = array (
	"This appears to be a class VII free-roamingcorporeal entity. Our on-call staff has been alerted and you will be contacted within five minutes.",
	"This appears to be a class V anchored vapor. You're not in danger, but take care to secure any valuables from the area. Our staff will be in touch with you shortly.",
	"This appears to be a class I focused vapor. You're not in danger. Our staff will be in touch with you shortly to schedule an visit."
	);

echo $response_array[array_rand($response_array)];
*/

if (isset($_POST['name'])) $name = $_POST['name'];
if (isset($_POST['tel'])) $tel = $_POST['tel'];
if (isset($_POST['email'])) $email = $_POST['email'];
if (isset($_POST['pic'])) $pic = $_POST['pic'];
if (isset($_POST['comment'])) $comment = $_POST['comment'];

var_dump($_POST);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["pic"])) {
    $check = getimagesize($_FILES["pic"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
};
// Allow certain file formats
if(isset($_POST["pic"])) {
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
	}
};

// if all successful, move from temp to upload file
if(isset($_POST['pic'])) {
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
	        echo "We've analyzed the picture you submitted.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
};

if(isset($_POST['pic'])) {
	var_dump($_FILES);
};

if (!isset($_POST['pic'])) 
echo "Thank you for contacting us, $name. We'll be in touch right away!";

?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	
	
	<script src="js/app.js"></script>
	<!-- <script src="js/paranormal.js"></script> -->
</body>