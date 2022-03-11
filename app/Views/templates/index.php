<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <style>
        .kaki{
            background-color:#36B9CC;
            margin-top: -40px;
            max-height: 20px;
           
        }
        .kaki .text-light{
            font-size: 14px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?= $this->include('templates/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?= $this->include('templates/topbar') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <?= $this->renderSection('page-content') ?>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            
            <!-- Footer -->

            <!-- <svg style="display:block; margin-left:-40px; margin-right:-90px; margin-top:40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="rgba(46,160,177,0.7)" fill-opacity="1" d="M0,64L18.5,90.7C36.9,117,74,171,111,202.7C147.7,235,185,245,222,218.7C258.5,192,295,128,332,128C369.2,128,406,192,443,208C480,224,517,192,554,186.7C590.8,181,628,203,665,208C701.5,213,738,203,775,213.3C812.3,224,849,256,886,277.3C923.1,299,960,309,997,266.7C1033.8,224,1071,128,1108,128C1144.6,128,1182,224,1218,224C1255.4,224,1292,128,1329,90.7C1366.2,53,1403,75,1422,85.3L1440,96L1440,320L1421.5,320C1403.1,320,1366,320,1329,320C1292.3,320,1255,320,1218,320C1181.5,320,1145,320,1108,320C1070.8,320,1034,320,997,320C960,320,923,320,886,320C849.2,320,812,320,775,320C738.5,320,702,320,665,320C627.7,320,591,320,554,320C516.9,320,480,320,443,320C406.2,320,369,320,332,320C295.4,320,258,320,222,320C184.6,320,148,320,111,320C73.8,320,37,320,18,320L0,320Z">
            </path>
        </svg> -->
        <svg class="motif-kaki"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#36B9CC" fill-opacity="1" d="M0,64L20,90.7C40,117,80,171,120,192C160,213,200,203,240,197.3C280,192,320,192,360,176C400,160,440,128,480,112C520,96,560,96,600,128C640,160,680,224,720,224C760,224,800,160,840,144C880,128,920,160,960,170.7C1000,181,1040,171,1080,144C1120,117,1160,75,1200,90.7C1240,107,1280,181,1320,192C1360,203,1400,149,1420,122.7L1440,96L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
            <footer class="sticky-footer kaki">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span class="text-light">Copyright &copy; Kodeku <?= date('Y') ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">yakin Ingin Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" dibawah jika kamu ingin keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-danger" href="<?= base_url(
                        'logout'
                    ) ?>">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url(
        '/vendor/bootstrap/js/bootstrap.bundle.min.js'
    ) ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(
        '/vendor/jquery-easing/jquery.easing.min.js'
    ) ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('/js/sb-admin-2.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
            }
        }
        function previewImg2(){
            const sampul = document.querySelector('#user_image');
            const sampulLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            sampulLabel.textContent = sampul.files[0].name;
            
            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e){
                imgPreview.src = e.target.result;
            }
        }
    </script>

</body>

</html>