<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
    <div class="container-fluid">
        <!-- Page Heading -->

        <h2 class="h3 my-3 text-gray-800">Form Ubah Projek</h2>

    <div class="row">
        <div class="col-md-8 col-lg-6 col-12">
            <form action="/upload/update/<?= $upload['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $upload['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $upload['sampul']; ?>">

                <div class="mb-1 form-group-row">
                    <label for="judul" class="form-label">Judul Projek</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '';  ?>" id="judul" name="judul" value="<?= (old('judul')) ? old('judul') : $upload['judul'] ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="mb-1 form-group-row">
                    <label for="link" class="form-label">Link Download</label>
                    <input type="text" class="form-control  <?= ($validation->hasError('link')) ? 'is-invalid' : '';  ?>" id="link" name="link" value="<?= (old('link')) ? old('link') : $upload['link'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('link'); ?>
                    </div>
                </div>
                <div class="mb-1 form-group-row">
                    <label for="detail" class="form-label">Detail</label>
                    <small><p>(perhatian : Gunakan tag paragraf jika lebih dari 1 baris detail.</p></small>
                    <textarea rows="5"  class="form-control <?= ($validation->hasError('link')) ? 'is-invalid' : '';  ?>" id="detail" name="detail" value=""><?= (old('detail')) ? old('detail') : $upload['detail'] ?></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('detail'); ?>
                    </div>
                </div>

                <div class="mb-1 form-group-row row">
                    <label for="" class="form-label">Sampul</label>
                    <div class="col-md-4 col-4">
                        <span class="badge rounded-pill bg-primary text-light col-12">Preview gambar</span>
                        <img src="/img/<?= $upload['sampul']; ?>" id="preview" class="img-thumbnail img-preview" alt="preview">
                    </div>
                    <div class="col input-group">
                        <div class="custom-file">
                            <input onchange="previewImg()" type="file" name="sampul" id="sampul" class="form-control custom-file-input <?=($validation->hasError('sampul')) ? 'is-invalid' : '';?>" >
                            <div class="invalid-feedback" style="margin-bottom:-100px;">
                                <?= $validation->getError('sampul'); ?>
                            </div>
                            <label for="sampul" class="custom-file-label"><?= $upload['sampul']; ?></label>
                        </div>
                    </div>
                </div>

                <div class="mb-5 mt-5">
                    <button type="submit" class="btn btn-success">Ubah</button>
                    <a class="btn btn-warning float-right" href="/upload">Batal</a>
                </div>

            </form>

        </div>
    </div>



    </div>
<?= $this->endSection(); ?>