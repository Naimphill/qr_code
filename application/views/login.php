<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('assets/gambar/logo.png'); ?>" type="image/ico" />

    <title>THP Inventory</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/vendors/animate.css/animate.min.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css') ?>" rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.min.css'); ?>">
    <!-- end seet allert -->
</head>

<body class="login">



    <body class="login">

        <div>
            <a class="hiddenanchor" id="signup"></a>
            <!-- Login Form Section -->
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <script>
                    // Automatically close the alert after 3 seconds
                    $(document).ready(function () {
                        setTimeout(function () {
                            $(".alert").alert("close");
                        }, 3000);
                    });
                </script>
            <?php endif; ?>

            <!-- Registration Form Section -->
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <script>
                    // Automatically close the alert after 3 seconds
                    $(document).ready(function () {
                        setTimeout(function () {
                            $(".alert").alert("close");
                        }, 3000);
                    });
                </script>
            <?php endif; ?>
            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form method="POST" action="<?php echo site_url('Login/aksi_login') ?>">
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" name="username"
                                    required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required="" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-block btn-primary">Log in</button>
                            </div>
                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">New to site?
                                    <a href="#signup" class="to_register"> Create Account </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><img style="width:50px ;height:50px ; "
                                            src="<?php echo base_url('assets/gambar/logo.png'); ?>" alt=""> Inventori
                                        SMK Tunas Harapan Pati</h1>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>

                <div id="register" class="animate form registration_form">
                    <section class="login_content">
                        <form method="POST" action="<?php echo site_url('Login/save_register') ?>">
                            <h1>Create Account</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nm_lengkap"
                                    required="" />
                            </div>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" name="username"
                                    required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" name="password"
                                    required="" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-block btn-primary">Sign up</button>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Already a member ?
                                    <a href="#signin" class="to_register"> Log in </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h1><img style="width:50px ;height:50px ; "
                                            src="<?php echo base_url('assets/gambar/logo.png'); ?>" alt="">
                                        Inventori
                                        SMK Tunas Harapan Pati</h1>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Sweet Alert Script -->
        <script src="<?php echo base_url('assets/allert/package/dist/sweetalert2.all.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/allert/package/dist/myalert.js'); ?>"></script>
        <script>
            const flashData = $('.flash-data').data('flashdata');
            if (flashData) {
                Swal.fire({
                    title: 'Data',
                    text: 'Berhasil ' + flashData,
                    icon: 'success'
                });
            }
            // Tombol Keluar
            $('.tombolkeluar').on('click', function (e) {
                e.preventDefault();
                const href = $(this).attr('href');

                Swal.fire({
                    title: 'Kamu Yakin?',
                    text: "Akan Keluar ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'keluar !',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = href;
                    }
                })
            });
            // Tombol Hapus
            $('.tombolhapus').on('click', function (e) {
                e.preventDefault();
                const href = $(this).attr('href');

                Swal.fire({
                    title: 'Kamu Yakin?',
                    text: "Data Akan Dihapus !",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Hapus !',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = href;
                    }
                })
            });
            $('.tombolkirim').on('click', function (e) {
                e.preventDefault();
                const form = $(this).closest('form');

                Swal.fire({
                    title: 'Kamu Yakin?',
                    text: "Akan Mengirim Laporan Kerusakan?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Kirim !',
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // submit form jika tombol "OK" ditekan
                    }
                })
            });

        </script>
        <!-- End sweet allert -->
    </body>

</html>