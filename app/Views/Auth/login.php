
<?= $this->extend('Auth/templates/index'); ?>

<?= $this->section('content'); ?>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="favicon.ico" class="img-fluid" style="max-width: 50px"alt="Kodeku">
                                        <h1 class="h4 text-gray-900 mb-4">Kodeku <?=lang('Auth.loginTitle')?></h1>
                                    </div>

                                    <?= view('Myth\Auth\Views\_message_block') ?>

                                    <form class="user" action="<?= route_to('login') ?>" method="post">
                                    <?= csrf_field() ?>

                                        <?php if ($config->validFields === ['email']): ?>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                    name="login" aria-describedby="emailHelp"
                                                    placeholder="<?=lang('Auth.email')?>">
                                                <div class="invalid-feedback">
						                            <?= session('errors.login') ?>
							                    </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="form-group">
                                                <label for="login"><?=lang('Auth.emailOrUsername')?></label>
                                                <input type="text" class="form-control form-control-user <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                    name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user  <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                            name="password" placeholder="<?=lang('Auth.password')?>">
                                            <div class="invalid-feedback">
								                <?= session('errors.password') ?>
							                </div>
                                        </div>
                                        
                                        <?php if ($config->allowRemembering): ?>
                                            <div class="form-check form-group small">
                                                <label class="form-check-label">
                                                    <input type="checkbox" name="remember" class="form-check-input" <?php if(old('remember')) : ?> checked <?php endif ?>>
                                                    Ingat saya
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        

                                        <button class="btn btn-info btn-user btn-block">
                                            Masuk
                                        </button>

                                    </form>
                                    <hr>

                                    <div class="text-center small">
                                        <?php if ($config->allowRegistration) : ?>
					                        <p><a href="<?= route_to('register') ?>">Belum Punya Akun ?<br>Daftar</a></p>
                                        <?php endif; ?>
                                        <?php if ($config->activeResetter): ?>
                                            <p><a href="<?= route_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
