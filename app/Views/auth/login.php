<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container-fluid container-lg my-4">
    <div class="row mx-0 justify-content-center">
        <div class="col-xl-6 col-lg-7 col-8 bg-white">
            <div class="row justify-content-center">
                <div class="col-10 rounded p-4">
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('login') ?>" method="post" class="needs-validation" novalidate>
                        <?= csrf_field() ?>

                        <h4 class="fw-bold my-4 text-center"><?=lang('Auth.loginTitle')?> <b class="text-primary">KomikZone</b></h4>
            
                        <?php if ($config->validFields === ['email']): ?>
                            <div class="mb-4">
                                <label for="login" class="form-label"><?=lang('Auth.email')?></label>
                                <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                    name="login" placeholder="<?=lang('Auth.email')?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="mb-4">
                                <label for="login" class="form-label"><?=lang('Auth.emailOrUsername')?></label>
                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                    name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="mb-4">
							<label for="password" class="form-label"><?=lang('Auth.password')?></label>
							<input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

                        <div class="d-flex justify-content-center mb-4">
                            <button class="btn btn-lg text-white" style="background-color: #db4437;">
                                <i class="bi bi-google"></i>
                            </button>
                            <button class="btn btn-lg text-white mx-3" style="background-color: #3b5998;">
                                <i class="bi bi-facebook"></i>
                            </button>
                            <button class="btn btn-lg text-white" style="background-color: #000000;">
                                <i class="bi bi-apple"></i>
                            </button>
                            <button class="btn btn-primary btn-lg w-100 ms-4 "><?=lang('Auth.loginTitle')?></button>
                        </div>
                        
                        <div class="text-center mb-4">
                            <?php if ($config->allowRegistration) : ?>
                                <a href="<?= url_to('register') ?>" class="text-secondary text-decoration-none d-block mb-4"><?=lang('Auth.needAnAccount')?></a>
                            <?php endif; ?>
                            <?php if ($config->activeResetter): ?>
                                <a href="<?= site_url('forgot') ?>" class="text-secondary text-decoration-none"><?=lang('Auth.forgotYourPassword')?></a>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>