<!DOCTYPE html>
<html langs="en">

<head>
    <meta charset="UTF-8">
    <title>Kathamo</title>
</head>

<body>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike>
                        <?= $task->description ?>
                    </strike>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>