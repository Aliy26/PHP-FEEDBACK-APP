<?php
 if(isset($_POST["submit"])) {
    $allowed_ext = array("png", "jpg", "jpeg", "webp");

    if(!empty($_FILES["upload"]["name"])){
        $file_name = $_FILES["upload"]["name"];
        $file_size = $_FILES["upload"]["size"];
        $file_tmp = $_FILES["upload"]["tmp_name"];
        $target_dir = "uploads/$file_name";

        // Get file exention
        $file_ext = explode(".", $file_name);
        $file_ext = strtolower(end($file_ext));

        echo $file_ext;
   
        // Validate file ext

        if(in_array($file_ext, $allowed_ext)) {
            if($file_size <= 1000000) {
                move_uploaded_file($file_tmp, $target_dir);
            $message = '<p style="color: green;">File uploaded successfully</p>';

            } else {
            $message = '<p style="color: orangered;">The file is too large</p>';

            }
        } else {
            $message = '<p style="color: orangered;">Invalid file type</p>';
        }
  
    }else {
        $message = '<p style="color: red;"> Please choose a file</p>';
    }
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <?php echo $message ?? null; ?>
   <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
    Select Image to upload:
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
   </form> 
</body>
</html>