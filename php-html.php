<!DOCTYPE html>
<html langs="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            header{
                background: #e3e3e3;
                paddng: 2em;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header>
            <h1><?php echo 'Hello, World' ?></h1>
        </header>
        <!-- http://localhost:8000/php-html.php?name=palash -->
        <h2>
        <?php
            $param = $_GET['name'];
            echo "Hello, {$param}";
        ?>
        </h2>

        <h2>
        <?php echo "Hello, " . $_GET['name']; ?>
        </h2>

        <h2><?= "Hello, " . $_GET['name']; ?></h2>

        <!-- http://localhost:8000/php-html.php?name=<a href="">palash</a> -->
        <h2><?= "Hello, " . htmlspecialchars($_GET['name']); ?></h2>
    </body>
</html>
