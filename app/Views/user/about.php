<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
    <div class="container-fluid mb-5">
        <br>
        <h2 class="text-center">Tentang Kami</h2><br>
        <hr>

        <div class="atas">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style="max-height: 400px; border-color:#2EA0B1;border-style:solid; border-width:5px; border-radius:10px;">
                    <div class="carousel-item active">
                    <img src="<?= base_url('/img/carousel/Artboard6.png'); ?>" class="d-block w-100" alt="..." title="Kodeku">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img  src="<?= base_url('/img/carousel/Artboard5.png'); ?>" class="d-block w-100" alt="..." title="kodeku">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img  src="<?= base_url('/img/carousel/Artboard4.png'); ?>" class="d-block w-100" alt="..." title="kodeku">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        
        <div class="row justify-content-center text-light">
            <div class="col-lg-10 col-8"  style="background-color:#2EA0B1; box-shadow : 0 3px 20px rgba(0,0,0,0.5); border-radius:12px; margin-top:-50px; z-index: 100; padding:10px">
                <div class="row">
                    <div class="col-md-4">
                        <img class="float-left" src="<?= base_url('img/carousel/download.png'); ?>" style="height: 70px; width: 70px;margin-right:20px; margin-buttom:20px;" alt="download">
                        <h5 style="font-size:16px; text-transform:uppercase; font-weight:bold; margin-top:5px;">Free Project</h5>
                        <p style="font-size:14; color:rgb(202, 200, 200);">Download project you need.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="float-left" src="<?= base_url('img/carousel/ebook.png'); ?>" style="height: 70px; width: 70px;margin-right:20px; margin-buttom:20px;" alt="ebook">
                        <h5 style="font-size:16px; text-transform:uppercase; font-weight:bold;margin-top:5px;">Free Ebook</h5>
                        <p style="font-size:14; color:rgb(202, 200, 200);">Download E-bock for learn more.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="float-left" src="<?= base_url('img/carousel/admin.png'); ?>" style="height: 70px; width: 70px;margin-right:20px; margin-buttom:20px;" alt="admin">
                        <h5 style="font-size:16px; text-transform:uppercase; font-weight:bold;margin-top:5px;">Contact Admin</h5>
                        <p style="font-size:14; color:rgb(202, 200, 200);">Contact admin to contribute or ask.</p>
                    </div>
                </div>
            </div>
        </div>



        <section class="text-center bagian1" style="margin-top:50px;">
            <h4>FITUR</h4>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-center">
                    <h5 class="mb-1">Projek Jadi</h5>
                    </div>
                    <p class="mb-1">Download projek dalam berbagai bahasa pemroraman yang sudah siap digunakan dan dipelajari</p>
                    <small class="text-muted">Fitur 1</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-center">
                    <h5 class="mb-1 text-center">Ebook Program</h5>
                    </div>
                    <p class="mb-1">Download E-book berbagai bahasa pemrograman dalam lingkup pembahasan tertentu</p>
                    <small class="text-muted">Fitur 2</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-center">
                    <h5 class="mb-1">Tanya Admin</h5>
                    </div>
                    <p class="mb-1">Jika anda ingin berpartisipasi atau memberikan pertanyaan seputar projek. contak kami langsung melalui link kontak dibawah.</p>
                    <small class="text-muted">Fitur 3.</small>
                </a>
            </div>
        </section>

        


        <!-- <svg style="display:block; margin-left:-40px; margin-right:-90px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgba(46,160,177,0.7)" fill-opacity="1" d="M0,256L18.5,224C36.9,192,74,128,111,101.3C147.7,75,185,85,222,90.7C258.5,96,295,96,332,96C369.2,96,406,96,443,106.7C480,117,517,139,554,170.7C590.8,203,628,245,665,240C701.5,235,738,181,775,160C812.3,139,849,149,886,160C923.1,171,960,181,997,202.7C1033.8,224,1071,256,1108,266.7C1144.6,277,1182,267,1218,266.7C1255.4,267,1292,277,1329,250.7C1366.2,224,1403,160,1422,128L1440,96L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path>
        </svg> -->


        <div class="kartu">
            <h1 class="text-center">KREATOR</h1>
            <div class="geser">
                <div class="container-fluid rata">
                    <div class="row justify-content-center">
                        <div class="batas col-md-3">
                            <div class="kreator">
                                <img class="img-thumbnail" src="<?= base_url('/img/kreator/hendra.jpg'); ?>" alt="">
                                <p>HENDRA</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <a target="_blank" href="https://www.facebook.com/hendra.010419"><img src="<?= base_url('/img/kreator/fb.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                        <div class="col-6">
                                            <a  target="_blank" href="https://www.instagram.com/hendra_infotech/"><img src="<?= base_url('/img/kreator/ig.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="naik">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="kreator">
                                <img class="img-thumbnail" src="<?= base_url('/img/kreator/syahrul.jpeg'); ?>" alt="">
                                <p>SYAHRUL</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <a target="_blank" href="https://mobile.facebook.com/syahrul.shanos"><img src="<?= base_url('/img/kreator/fb.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                        <div class="col-6">
                                            <a target="_blank" href="https://www.instagram.com/syahrul_mg/"><img src="<?= base_url('/img/kreator/ig.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="kreator">
                                <img class="img-thumbnail" src="<?= base_url('/img/kreator/tamdin.jpeg'); ?>" alt="">
                                <p>TAMDIN</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <a target="_blank" href="https://www.facebook.com/tamdin.aveiro.1"><img src="<?= base_url('/img/kreator/fb.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                        <div class="col-6">
                                            <a target="_blank" href="https://www.instagram.com/tamdin_aveiro/"><img src="<?= base_url('/img/kreator/ig.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <div class="kreator">
                                <img class="img-thumbnail" src="<?= base_url('/img/kreator/natan.jpeg'); ?>" alt="">
                                <p>NATAN</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <a target="_blank" href="https://www.facebook.com/yonathan.ona.9"><img src="<?= base_url('/img/kreator/fb.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                        <div class="col-6">
                                            <a target="_blank" href="https://www.instagram.com/yonatan4089"><img src="<?= base_url('/img/kreator/ig.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="kreator">
                                <img class="img-thumbnail" src="<?= base_url('/img/kreator/zain.jpg'); ?>" alt="">
                                <p>ZAIN</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100029229752661"><img src="<?= base_url('/img/kreator/fb.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                        <div class="col-6">
                                            <a target="_blank" href="https://www.instagram.com/dg_2318"><img src="<?= base_url('/img/kreator/ig.png'); ?>" width="40px" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <style>
            .geser{
                margin-left: 30px;
                margin-right: 30px;
            }
            .kartu{
                background-color:rgb(255,255,255);
                margin-top: 100px;
            }
            .kartu .geser .rata .kreator{
                background-color: rgba(0,0,0,0.05);
                padding: 5px;
                backdrop-filter: blur(0.6);
                border-radius: 20px;
                padding-bottom: 20px;
                padding-top:20px;
                margin-top: 15px;
                box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            }
            .kreator img{
                max-width: 120px;
                border-radius: 50%;
            }
            .kartu .geser .rata{
                text-align: center;
            }

        </style>




    </div>
<?= $this->endSection(); ?>