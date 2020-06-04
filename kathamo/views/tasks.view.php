<?php require('partials/header.php'); ?>
<h1>All Tasks</h1>
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
<h1>Submit Task</h1>
<form method='POST' action="/tasks">
    <input type="text" name="name" />
    <button type="submit">Save</button>
</form>
<?php require('partials/footer.php'); ?>