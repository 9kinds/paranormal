<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC' rel='stylesheet' type='text/css'>
 		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
 		<link rel="stylesheet" type="text/css" href="css/paranormal.css">
	
		<title>VSS LLP</title>
</head>
<body>
<div id="thanks" class="container">
<?php 
$name = $tel = $email = $pic = $comment = '';

$response_array = array (
	"This appears to be a class VII free-roaming corporeal entity. Please evacuate to a safe place.</span> Our on-call staff has been alerted and you will be contacted within five minutes.",
	"This appears to be a class V anchored vapor. You're not in danger, but take care to secure any valuables from the area. Our staff will be in touch with you shortly.",
	"This appears to be a class I focused vapor. You're not in danger. Our staff will be in touch with you shortly to schedule an visit."
	);

$k = $response_array[array_rand($response_array)];

if (isset($_POST['name'])) $name = $_POST['name'];
if (isset($_POST['tel'])) $tel = $_POST['tel'];
if (isset($_POST['email'])) $email = $_POST['email'];
if (isset($_POST['pic'])) $pic = $_POST['pic'];
if (isset($_POST['comment'])) $comment = $_POST['comment'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["pic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST['pic'])) {
	$check = getimagesize($_FILES["pic"]["tmp_name"]);
	if($check !== false) {
	    echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	} else {
	    echo "File is not an image.";
	    $uploadOk = 0;
	}
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
	}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
	} else {
    if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
        echo "Thank you for contacting us, $name.<br> We've analyzed the picture you submitted. $k";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

if (!isset($_FILES['pic']['name']))
	echo "Thank you for contacting us, $name. We'll be in touch right away!";
?>
</div>
</body>