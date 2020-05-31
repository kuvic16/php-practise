<!DOCTYPE html>
<html langs="en">

<head>
    <meta charset="UTF-8">
    <title>Kathamo</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/kathamo/about">About</a></li>
            <li><a href="/kathamo/contact">Contact</a></li>
        </ul>
    </nav>
    <h1>My Tasks</h1>
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