<?php
$title = "Project 2";
include("header.php");
?>
<div class="container">
    <div class="row">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <p>Select the .csv file you want to upload:</p>
            <div>
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <br>
            <input type="submit" value="Upload File" name="submit">
        </form>
    </div>
</div>
