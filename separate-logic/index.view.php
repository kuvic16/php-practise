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

        <h1>Task for the Day</h1>
        <ul>
            <?php foreach( $task as $heading => $value ) : ?>
                <li>
                    <strong><?= ucwords($heading); ?>: </strong> <?= $value; ?>
                </li>
            <?php endforeach; ?> 
        </ul>

        <h1>Another way</h1>
        <ul>
            <li>
                <strong>Name: </strong> <?= $task['title']; ?>
            </li>
            <li>
                <strong>Due Date: </strong> <?= $task['due']; ?>
            </li>
            <li>
                <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
            </li>
            <li>
                <strong>Status: </strong> 
                <?php if( $task['completed'] ) : ?>
                    <span class="icon">&#9989;</span>
                <?php else : ?>
                    <span class="icon">Incomplete</span>
                <?php endif; ?>
            </li>
        </ul>
    </body>
</html>
