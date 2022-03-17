<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Gallery</title>
</head>
<body>
    <main>
        <section class="gallery-links">
            <div class="wrapper">
                <h2>Gallery</h2>

                <div class="gallery-container">
                    <?php

                    include_once 'includes/incDBH.php';

                    $sql = "SELECT * FROM gallery ORDER BY file_order DESC;";

                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        echo "SQL statement failed!";
                    }
                    else
                    {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                        while ($rows = mysqli_fetch_assoc($result)) 
                        {
                            echo '
                            <a href="#">
                                <div style="background-image: url(gallery/'.$rows['file_unique_name'].');"></div>
                                <h3>'.$rows['file_title'].'</h3>
                                <p>'.$rows['file_desc'].'</p>
                            </a>';
                        }
                    }

                        
                    ?>
                </div>

                <div class="gallery-upload">
                    <form action="includes/incGalleryUpload.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="file_name" placeholder="File name...">
                        <input type="text" name="file_title" placeholder="Image title...">
                        <input type="text" name="file_desc" placeholder="Image description...">
                        <input type="file" name="file">
                        <button type="submit" name="submit">Upload</button>
                    </form>
                </div>

            </div>
        </section>
    </main>   
</body>
</html>