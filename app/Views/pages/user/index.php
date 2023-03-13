<h2><?= esc($title) ?></h2>

<?php if (! empty($users) && is_array($users)): ?>

    <?php foreach ($users as $user): ?>

        <h3><?= esc($user['name']) ?></h3>

        <div class="main">
            <p>Name: <?= esc($user['name']) ?></p>
            <p>Email: <?= esc($user['email']) ?></p>
            <p>Role: <?= esc($user['role']) ?></p>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Users</h3>

    <p>Unable to find any users for you.</p>

<?php endif ?>
