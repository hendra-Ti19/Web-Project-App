<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
    <div class="container-fluid">
        <!-- Page Heading -->
        <h2 class="h3 mb-4 text-gray-800">Detail Projek</h2>

        <div class="row">
            <div class="col-12">
                <div class="card mb-3 d-block p-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-6 d-block text-center">
                            <img src="/img/<?= $upload['sampul']; ?>" class="img-img-thumbnail ml-2 mt-2 sampul-detail" alt="Gambar">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Judul : <?= $upload['judul']; ?></h5>
                                <br>
                                <p class="card-text">Detail : </p>
                                    <small class="text-info"><p><?= $upload['detail']; ?></p></small>
                                <br>
                                <p>Download : <br> | <a class="card-text" href="<?= $upload['link']; ?>" target="_blank"> Klik Disini </a> |</p>
                                <p class="card-text">Diubah : <br><small class="text-muted"><?= $upload['updated_at']; ?></small></p>

                                <?php if( in_groups('admin')) :  ?>
                                    <a href="/upload/edit/<?= $upload['slug']; ?>" class="btn btn-warning d-inline-block">Ubah</a>
                                    
                                    <form class="d-inline-block mt-3 ml-3" action="/upload/<?= $upload['id']; ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</button>
                                    </form>
                                <?php endif; ?>


                                <br>
                                <?php if( in_groups('admin')) :  ?>
                                    <a class="mt-3 d-block" href="/upload"><< Kembali Ke Projek</a>
                                <?php endif; ?>
                                <?php if(in_groups('user')) : ?>
                                    <a class="mt-3 d-block" href="/user"><< Kembali Ke Projek</a>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?= $this->endSection(); ?>