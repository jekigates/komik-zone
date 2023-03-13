<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container-fluid container-lg my-4">
    <div class="row mx-0 justify-content-center">
        <div class="col-xl-6 col-lg-7 col-8 bg-white">
            <div class="row justify-content-center">
                <div class="col-10 rounded p-4">
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('reset-password') ?>" method="post">
                        <?= csrf_field() ?>
                        
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <h4 class="fw-bold my-4 text-center">Reset Password</h4>

                        <p class="text-secondary"><?=lang('Auth.enterCodeEmailPassword')?></p>
                        
                        <div class="mb-4">
                            <label for="token" class="form-label"><?=lang('Auth.token')?></label>
                            <input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>"
                                   name="token" placeholder="<?=lang('Auth.token')?>" value="<?= old('token', $token ?? '') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.token') ?>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="form-label"><?=lang('Auth.email')?></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label"><?=lang('Auth.newPassword')?></label>
                            <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                   name="password">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="pass_confirm" class="form-label"><?=lang('Auth.newPasswordRepeat')?></label>
                            <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                   name="pass_confirm">
                            <div class="invalid-feedback">
                                <?= session('errors.pass_confirm') ?>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100 mb-4"><?=lang('Auth.resetPassword')?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>