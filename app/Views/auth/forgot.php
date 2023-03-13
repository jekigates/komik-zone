<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container-fluid container-lg my-4">
    <div class="row mx-0 justify-content-center">
        <div class="col-xl-6 col-lg-7 col-8 bg-white">
            <div class="row justify-content-center">
                <div class="col-10 rounded p-4">
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('forgot') ?>" method="post">
                        <?= csrf_field() ?>
                        
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <h4 class="fw-bold my-4 text-center">Forgot Password</h4>

                        <p class="text-secondary"><?=lang('Auth.enterEmailForInstructions')?></p>
                        
                        <div class="mb-4">
                            <label for="email" class="form-label"><?=lang('Auth.emailAddress')?></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100 mb-4"><?=lang('Auth.sendInstructions')?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>