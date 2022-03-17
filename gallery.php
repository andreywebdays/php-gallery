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
                    <a href="#">
                        <div></div>
                        <h3>Title test</h3>
                        <p>Paragraph test</p>
                    </a>
                    <a href="#">
                        <div></div>
                        <h3>Title test</h3>
                        <p>Paragraph test</p>
                    </a>
                    <a href="#">
                        <div></div>
                        <h3>Title test</h3>
                        <p>Paragraph test</p>
                    </a>
                    <a href="#">
                        <div></div>
                        <h3>Title test</h3>
                        <p>Paragraph test</p>
                    </a>
                    <a href="#">
                        <div></div>
                        <h3>Title test</h3>
                        <p>Paragraph test</p>
                    </a>
                    <a href="#">
                        <div></div>
                        <h3>Title test</h3>
                        <p>Paragraph test</p>
                    </a>
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