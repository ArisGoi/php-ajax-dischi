<?php include __DIR__ . '/database.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue Dischi</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <!-- Header -->
    <?php include __DIR__ . '/components/header.php'; ?>

    <!-- Main -->
    <main>
        <div class="container-m">
            <?php foreach($database as $album): ?>

                <div class="albCont">
                    <img src="<?= $album["poster"] ?>" alt="">
                    <h2><?= $album["title"] ?></h2>
                    <p class="autore"><?= $album["author"] ?></p>
                    <p class="anno"><?= $album["year"] ?></p>
                </div>

            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>