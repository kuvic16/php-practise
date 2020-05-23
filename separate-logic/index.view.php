<!DOCTYPE html>
<html langs="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>        
    </head>
    <body>
        <h2><?= $greetings ?></h2>
        <h2>Displaying array items</h2>
        <ul>
        <?php foreach($animals as $animal) : ?>
            <li><?= $animal ?></li>
        <?php endforeach ?>
        </ul>
    </body>
</html>
