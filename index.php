<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>MP3 em PHP</title>
</head>
<body>
    <div class="container">
        <?php
            include_once 'helpers.php';

            if (isset($_GET['page'])) {
                if(file_exists("pages/{$_GET['page']}.php")) {
                    include_once "pages/{$_GET['page']}.php";
                } else {
                    include_once 'pages/error404.php';
                }
            } else {
                include_once 'pages/albums.php';
            }
        ?>
    </div>
</body>
</html>