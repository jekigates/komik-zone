<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<h2>User List</h2>

<?php if (! empty($users) && is_array($users)): ?>

    <?php foreach ($users as $user): ?>

        <h3><?= esc($user->username) ?></h3>

        <div class="main">
            <p>Name: <?= esc($user->username) ?></p>
            <p>Email: <?= esc($user->email) ?></p>
            <p>Role: <?= var_dump($user->roles) ?></p>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Users</h3>

    <p>Unable to find any users for you.</p>

<?php endif ?>

<?= $this->endSection() ?>