<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WPU Blog | About</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Halaman About</h1>
    <h3><?php echo $name; ?></h3>
    <p><?= $email; ?></p>
    <img src="img/<?= $image; ?>" alt="<?= $name; ?>" width="200">
</body>
</html>