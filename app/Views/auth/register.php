<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container-fluid container-lg my-4">
    <div class="row mx-0 justify-content-center">
        <div class="col-xl-6 col-lg-7 col-8 bg-white">
            <div class="row justify-content-center">
                <div class="col-10 rounded p-4">
                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post" class="needs-validation">
                        <?= csrf_field() ?>
                        
                        <h4 class="fw-bold my-4 text-center"><?=lang('Auth.register')?> <b class="text-primary">KomikZone</b></h4>
    
                        <div class="mb-4">
                            <label for="email" class="form-label"><?=lang('Auth.email')?></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                        </div>

                        <div class="mb-4">
                            <label for="username" class="form-label"><?=lang('Auth.username')?></label>
                            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>
            
                        <div class="mb-4">
                            <label for="password" class="form-label"><?=lang('Auth.password')?></label>
                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                        </div>

                        <div class="mb-4">
                            <label for="pass_confirm" class="form-label"><?=lang('Auth.repeatPassword')?></label>
                            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
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
                            <button class="btn btn-primary btn-lg w-100 ms-4 "><?=lang('Auth.register')?></button>
                        </div>

                        <div class="text-center">
                            <a href="<?= url_to('login') ?>" class="text-secondary text-decoration-none d-block mb-4"><?=lang('Auth.alreadyRegistered')?> <?=lang('Auth.signIn')?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>