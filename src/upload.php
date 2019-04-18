<?php
$target_file = "../data/data.csv";
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($fileType === "csv") {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header('Location: table.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
} else {
    echo "Sorry, please upload only '.csv' files";
}
?>