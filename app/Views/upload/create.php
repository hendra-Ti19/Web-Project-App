<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<script>
        function previewImg(){
           const sampul = document.querySelector('#sampul');
           const sampulLabel = document.querySelector('.custom-file-label');
           const imgPreview = document.querySelector('.img-preview');

           sampulLabel.textContent = sampul.files[0].name;

           const fileSampul = new FileReader();
           fileSampul.readAsDataURL(sampul.files[0]);

           fileSampul.onload = function(e){
                imgPreview.src = e.target.result;
            };
       };
    </script>


    <div class="container-fluid">
        <!-- Page Heading -->

        <h2 class="h3 my-3 text-gray-800">Form Upload Projek</h2>

    <div class="row">
        <div class="col-md-12 col-lg-8">
            <form action="/upload/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-1 form-group-row">
                    <label for="judul" class="form-label">Judul Projek</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '';  ?>" id="judul" name="judul" value="<?= old('judul'); ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="mb-1 form-group-row">
                    <label for="link" class="form-label">Link Download</label>
                    <input type="text" class="form-control  <?= ($validation->hasError('link')) ? 'is-invalid' : '';  ?>" id="link" name="link" value="<?= old('link'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('link'); ?>
                    </div>
                </div>
                <div class="mb-1 form-group-row">
                    <label for="detail" class="form-label">Detail</label>
                    <small><p>(perhatian : Gunakan tag paragraf jika lebih dari 1 baris detail.</p></small>
                    <textarea rows="5"  class="form-control  <?= ($validation->hasError('link')) ? 'is-invalid' : '';  ?>" id="detail" name="detail" value="<?= old('detail'); ?>"><?= old('detail'); ?> </textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('detail'); ?>
                    </div>
                </div>
                <div class="mb-1 mt-2 form-group-row row">
                    <label for= "" class="form-label">Sampul</label>
                    <div class="col-md-4 col-4">
                        <span class="badge rounded-pill bg-primary text-light col-12">Preview gambar</span>
                        <img src="/img/sampul.jpg" id="preview" class="img-fluid img-preview" alt="preview">
                    </div>
                    <div class="col input-group mt-3">
                        <div class="custom-file">
                            <input onchange="previewImg()" type="file" name="sampul" id="sampul" class="custom-file-input <?=($validation->hasError('sampul')) ? 'is-invalid' : '';  ?>">
                            <div class="invalid-feedback" style="margin-bottom:-100px;">
                                <?= $validation->getError('sampul'); ?>
                            </div>
                            <label for="sampul" class="custom-file-label">Pilih Gambar...</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 mt-5">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-warning float-right" href="/upload">Batal</a>
                </div>

            </form>

        </div>
    </div>



    </div>

    
<?= $this->endSection(); ?>