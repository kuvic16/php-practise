<?php require('partials/header.php'); ?>
<h1>Submit Your Name</h1>
<form method='POST' action="/name">
    <input type="text" name="name" />
    <button type="submit">Save</button>
</form>

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
<?php require('partials/footer.php'); ?>