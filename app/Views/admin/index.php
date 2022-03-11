<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
    <div class="container-fluid">
        <!-- Page Heading -->

        <div class="row">
            <div class="col-md-6 col-12">
                <form action="" method="get">
                    <h2 class="h3 mb-4 text-gray-800">Daftar Pengguna & Admin</h2>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukkan keyword Pencarian..." name="keyword">
                        <button class="btn btn-outline-info" type="submit" name="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-12 col-lg-8">
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Activasi</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                        <?php foreach($users as $user) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $user['username'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= ($user['active'] == 1) ? 'Aktif' : 'Belum Aktif';  ?></td>
                                <td>
                                    <a class="btn btn-success" href="<?= base_url('admin/'.$user['id']); ?>">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>

                    <div class="mt-5 mb-3">
                    <?= $pager->links('users', 'upload_pagination'); ?>
                </div>

            </div>
        </div>

    </div>
<?= $this->endSection(); ?>