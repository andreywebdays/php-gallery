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

    $file_ext = explode(".", $file_name);

    $file_actual_ext = strtolower(end($file_ext));

    $file_allowed = array("jpeg", "jpg", "png");

    if (in_array($file_actual_ext, $file_allowed)) 
    {
        if ($file_error === 0) 
        {
            if ($file_size < 2000000) 
            {
                $file_full_name = $new_file_name . "." . uniqid("", true) . "." . $file_actual_ext;
                $file_destination = "../gallery/" . $file_full_name;

                include_once 'incDBH.php';

                if (empty($file_title) || empty($file_desc)) {
                    header("Location: ../gallery.php?upload=empty");
                    exit();
                }
                else
                {
                    $sql = "SELECT * FROM gallery;";
                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) 
                    {
                        echo "SQL statement failed!";
                    }
                    else
                    {
                        mysqli_stmt_execute($stmt);
                        
                        $result = mysqli_stmt_get_result($stmt);
                        $rows = mysqli_num_rows($result);
                        $set_file_order = $rows + 1;

                        $sql = "INSERT INTO gallery (file_title, file_desc, file_unique_name, file_order) VALUE (?, ?, ?, ?);";

                        if (!mysqli_stmt_prepare($stmt, $sql)) 
                        {
                            echo "SQL statement failed!";
                        }
                        else
                        {
                            mysqli_stmt_bind_param($stmt, "ssss", $file_title, $file_desc, $file_full_name, $set_file_order);
                            mysqli_stmt_execute($stmt);

                            move_uploaded_file($file_tmp_name, $file_destination);

                            header("Location: ../gallery.php?upload=success");
                        }
                    }
                }
            }
            else
            {
                echo "File size is too big!";
            }
        }
        else
        {
            "You had an error!";
            exit();
        }
    }
    else
    {
        echo "You need to upload a proper file type!";
        exit();
    }


}