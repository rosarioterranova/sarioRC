<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["title"] ?></title>
    <?php foreach ($data["styles"] as $value) { ?>
        <link rel="stylesheet" href="<?= $value ?>">
    <?php } ?>
   
</head>
<body>