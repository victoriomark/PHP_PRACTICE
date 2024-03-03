<?php

// create a function to format the size of the image
function GetSize($size)
{
    $kb_size = $size / 1024;
    return number_format($kb_size, 2);
}

// check if a folder name is provided
if(isset($_POST['FolderName'])) {
    $folderName = $_POST['FolderName'];

    // create the path
    $path = 'imageUpload/' . $folderName;

    // check if the size of the image is less than 100.0 kb
    $Size = GetSize($_FILES['image']['size']);
    if ($Size < 100.0) {
        // check if the file exists or not
        if (!file_exists($path)) {
            // create the directory if it doesn't exist
            mkdir($path, 0777, true);
        }

        $tmp_file = $_FILES['image']['tmp_name'];

        // check if the tmp_file is not empty
        if ($tmp_file != "") {
            $new_file_path = $path . "/" . $_FILES['image']['name'];

            // check if the file is moved or not
            if (move_uploaded_file($tmp_file, $new_file_path)) {
                echo "Success!";
            } else {
                echo "Error";
            }
        }
    } else {
        echo "Too large file size";
    }
} else {
    echo "Folder name not provided";
}
?>
