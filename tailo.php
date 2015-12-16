<?php
$kasutaja = $_POST['kasutaja'];
$parool = $_POST['parool'];
$textarea = $_POST['textarea'];
$sõiduk = $_POST['sõiduk'];
$sex = $_POST['sex'];
$auto = $_POST['auto'];
//$fileToUpload = $_POST['fileToUpload'];


$fail = fopen("data.txt", "a");

$salvestusmeetod = '
Kasutaja: '.$kasutaja.'
Parool: '.$parool.'
Textarea: '.$textarea.'
Sõiduk: '.$sõiduk.'
Sex: '.$sex.'
Auto: '.$auto;


/*$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
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
} */

fwrite($fail, $salvestusmeetod);
fclose($fail);



?>
