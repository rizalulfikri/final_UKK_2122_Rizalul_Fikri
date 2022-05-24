<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catatan Peduli Diri Harian - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <br/>
                            <h1 class="h3 text-gray-900 text-center">Selamat datang di Catatan Peduli Diri
                               </h1>
                                <br/>
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <img src="img/logo2.png" alt="Responsive image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h5 text-gray-900 mb-2">Masukkan NIK dan Nama Lengkap</h1>
                                </div>
                                    <form class="user" method="post" action="do_register.php">
                                        <div class="form-group">
                                            <input type="integer" name ="NIK" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="NIK">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Nama_Lengkap" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Nama Lengkap">
                                        </div>
                               
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            <i class="fa fa-key"></i>
                                            Register
                                        </button>
                                        <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                        
                                            Sudah punya akun..? Silahkan login
                                            <i class="fa fa-arrow-right"></i>
                                        </a> 
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>