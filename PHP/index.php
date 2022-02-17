<?php

require_once __DIR__ .  "/data/data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="d-flex flex-wrap justify-content-center container-disc pt-5">
        <?php
        foreach ($discList as $key=>$value) {
            echo "<div class='disc-card py-3 px-2 mb-4 mx-2'>
                    <div class='img-box mb-2'>
                        <img class='img-fluid' :src='" .$value["poster"]. "' alt=''>
                    </div>

                    <h5>" . strtoupper($value["title"]) . "</h5>
                    <div class='txt-disc'>" .$value["author"]. "</div>
                    <div class='txt-disc'>" .$value["year"]. "</div>
                 </div>";
        } 
        ?>
        </div>
    </main>
</body>
</html>