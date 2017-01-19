<?php

$target_path = "uploads/";
 
$target_path = $target_path.basename($_FILES['file']['name']);
 
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    echo "success"+$_FILES['file']['name'];
} else{
echo $target_path;
    echo "error ";
}
 	
?>