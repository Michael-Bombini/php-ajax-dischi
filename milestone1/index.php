<?php include "db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>

    <header class="p-3">
        <nav class="">
            <img src="../img/logo-small.svg" alt="" class="logo">
        </nav>
    </header>

    <main class="flex-grow-1">
        <div class="container">
            <div class="row row-cols-5 g-3">

                <?php foreach ($db as $dato) { ?>



                    <div class="col">
                        <img src="<?php echo $dato["poster"] ?>" alt="">
                        <h1><?php echo $dato["title"] ?></h1>
                        <h2><?php echo $dato["author"] ?></h2>
                        <h3><?php echo $dato["year"] ?>}</h3>
                    </div>



                <?php  } ?>

            </div>



        </div>

    </main>

</body>

</html>