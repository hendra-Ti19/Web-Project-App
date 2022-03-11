<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
    <div class="container-fluid">
        <!-- Page Heading -->
        <h2 class="h3 mb-4 text-gray-800">Ubah Profil</h2>

        <div class="row mt-5 mb-5">
            <div class="col-md-8 col-lg-6 col-12">

          
<!---------------------------------------------------------  -->
                <form action="/user/update_profile/<?= user()->id; ?>" method="post"  enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= user()->id; ?>">
                    <input type="hidden" name="username" value="<?= user()->username; ?>">
                    <input type="hidden" name="sampulLama" value="<?= user()->user_image; ?>">

                    <div class="mb-1 form-group-row row">
                        <label for="user_image" class="form-label">Foto Profil</label>
                        <div class="col-md-4 col-6">
                            <span  class="row text-center badge rounded-pill bg-primary text-light">Preview gambar</span>
                            <img style="max-width:180px;" src="/img/<?= user()->user_image; ?>" id="preview" class="row img-thumbnail img-preview" alt="preview">
                        </div>
                        <div class="mt-4 input-group col-md-6 col-6">
                            <div class="custom-file">
                                <input onchange="previewImg2()" type="file" name="user_image" id="user_image" class="form-control custom-file-input <?=($validation->hasError('user_image')) ? 'is-invalid' : '';?>">
                                <div class="invalid-feedback" style="margin-bottom:-110px;">
                                    <?= $validation->getError('user_image'); ?>
                                </div>
                                <label for="user_image" class="custom-file-label"><?= user()->user_image; ?></label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-1 form-group-row">
                        <label for="username" class="form-label">Nama Pengguna</label>
                        <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '';  ?>" id="username" name="username" value="<?= (old('username')) ? old('username') : user()->username; ?>" >
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>

                    <div class="mb-1 form-group-row">
                        <label for="fullname" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : '';  ?>" id="fullname" name="fullname" value="<?= (old('fullname')) ? old('fullname') : user()->fullname; ?>" autofocus>
                        <div class="invalid-feedback">
                            <?= $validation->getError('fullname'); ?>
                        </div>
                    </div>

                    <div class="mb-1 form-group-row">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '';  ?>" id="email" name="email" value="<?= (old('email')) ? old('email') : user()->email; ?>" >
                        <div class="invalid-feedback">
                            <?= $validation->getError('email'); ?>
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a class="btn btn-warning float-right" href="/user/my_profile">Batal</a>
                    </div>

                </form>
<!--  ------------------------------------------------------------  -->
            </div>
        </div>

        

    </div>
<?= $this->endSection(); ?>