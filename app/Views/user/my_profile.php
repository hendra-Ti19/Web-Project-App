<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">My Profile</h1>
        <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-12">
                <div class="card mb-3 m-2 p-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="max-width:180px;" src="<?= base_url('/img/'. user()->user_image); ?>" class="img-fluid  rounded" alt="<?= user()->username; ?>">
                        </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <h4><?= user()->username; ?></h4>
                                        </li>
                                        <?php if(user()->fullname) : ?>
                                            <li class="list-group-item">Nama Lengkap : <?= user()->fullname; ?></li>
                                        <?php endif; ?>
                                        <li class="list-group-item">Email  : <?= user()->email; ?></li>
                                        
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>