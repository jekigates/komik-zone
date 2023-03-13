<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<h2><?= esc($user->username) ?></h2>
<p><?= esc($user->email) ?></p>
<p><?= var_dump($user->roles) ?></p>

<?= $this->endSection() ?>