<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
    <div class="container-fluid ">
        <!-- Page Heading -->

        <?php if( in_groups('admin')) :  ?>
            <a href="/upload/create" class="btn btn-success mb-5 mt-3">Upload Project</a>
        <?php endif; ?>

        <?php if(session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-6 col-12">
                <form action="" method="get">

                <?php if(in_groups('admin')) : ?>
                    <h2 class="h3 mb-4 text-gray-800">Kelola Projek</h2>
                <?php endif ?>

                <?php if(in_groups('user')) : ?>
                    <h2 class="h3 mb-4 text-gray-800">Daftar Projek & Materi Terupload</h2>
                <?php endif ?>


                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukkan keyword Pencarian..." name="keyword">
                        <button class="btn btn-outline-info" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-10 col-12 col-lg-8">
                    <table class="table table-hover table-responsive" >
                        <thead>
                            <tr>
                            <th scope="col" width="5" class="text-center">NO</th>
                            <th scope="col" width="100" class="text-center">Sampul</th>
                            <th scope="col" width="400" class="text-center">Judul</th>
                            <th scope="col">Tindakan</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                        <?php foreach($upload as $k) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $i++; ?></th>
                                <td class="text-center"><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                                <td class="text-center"><?= $k['judul']; ?></td>
                                <td class="text-center">
                                    <a href="/upload/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="mt-5 mb-3">
                    <?= $pager->links('upload', 'upload_pagination'); ?>
                </div>
                
            </div>
        </div>


    </div>
<?= $this->endSection(); ?>