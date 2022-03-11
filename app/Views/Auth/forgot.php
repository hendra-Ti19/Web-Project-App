
<?= $this->extend('auth/templates/index'); ?>

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
                                    <h1 class="h4 text-gray-900 mb-2">Menu <?=lang('Auth.forgotPassword')?></h1>
                                    <p class="mb-4"><?=lang('Auth.enterEmailForInstructions')?></p>
                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>


                                <form class="user" action="<?= route_to('forgot') ?>" method="post">
                                <?= csrf_field() ?>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                            name="email" aria-describedby="emailHelp"
                                            placeholder="<?=lang('Auth.email')?>">
                                        <div class="invalid-feedback">
                                            <?= session('errors.email') ?>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-user btn-block">
                                        <?=lang('Auth.sendInstructions')?>
                                    </button>
                                </form>


                                <hr>

                                <div class="text-center small">
                                    <?php if ($config->allowRegistration) : ?>
                                        <p><a href="<?= route_to('register'); ?>"><?=lang('Auth.needAnAccount')?></a></p>
                                    <?php endif; ?>
                                </div>
                                <div class="text-center">
                                    <p>
                                        <a class="small" href="<?= route_to('login') ?>">
                                            <?=lang('Auth.alreadyRegistered')?>
                                            <?=lang('Auth.signIn')?>
                                        </a>
                                    </p>
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
