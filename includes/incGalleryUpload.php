<?php

if (isset($_POST['submit'])) 
{
    
    $new_file_name = $_POST['file_name'];

    if (empty($_POST['file_name'])) 
    {
        $new_file_name = "gallery";
    }
    else
    {
        $new_file_name = strtolower(str_replace(" ", "-", $new_file_name));
    }

    $file_title = $_POST['file_title'];

    $file_desc = $_POST['file_desc'];

    $file = $_FILES['file'];

    // print_r($file);

    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];


}