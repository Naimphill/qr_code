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
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/vendors/iCheck/skins/flat/green.css'); ?>" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('assets/vendors/jqvmap/dist/jqvmap.min.css'); ?>" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>"
        rel="stylesheet">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/allert/package/dist/sweetalert2.min.css'); ?>">
    <!-- end seet allert -->
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css'); ?>" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?php echo site_url('Adminpanel') ?>" class="site_title"><i class="fa fa-paw"></i>
                            <span>AdminPanel</span></a>
                    </div>

                    <div class="clearfix"></div>
                    <br>

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="<?php echo site_url('Adminpanel') ?>"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li><a href="<?php echo site_url('Adminpanel/user') ?>"><i class="fa fa-user"></i>
                                        User</a>
                                </li>
                                <li><a href="<?php echo site_url('Adminpanel/kategori') ?>"><i class="fa fa-edit"></i>
                                        Data Kategori</a></li>
                                <li><a href="<?php echo site_url('Adminpanel/barang') ?>"><i
                                            class="fa fa-bar-chart-o"></i>Data Barang</a>
                                </li>
                                <li><a href="<?php echo site_url('Adminpanel/laporan') ?>"><i
                                            class="fa fa-envelope"></i>Laporan Kerusakan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">

                                    <?php echo $this->session->userdata('username'); ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item tombolkeluar"
                                        href="<?php echo site_url('Login/logout') ?>"><i
                                            class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <?php $this->load->view($content); ?>

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/vendors/nprogress/nprogress.js') ?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('assets/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('assets/vendors/gauge.js/dist/gauge.min.js') ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('assets/vendors/skycons/skycons.js') ?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.time.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/Flot/jquery.flot.resize.js') ?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/flot.curvedlines/curvedLines.js') ?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('assets/vendors/DateJS/build/date.js') ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('assets/vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets/vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/build/js/custom.min.js') ?>"></script>
    <!-- Sweet Alert Script -->
    <script src="<?php echo base_url('assets/allert/package/dist/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/allert/package/dist/myalert.js'); ?>"></script>
    <!-- QR & Quagga JS -->
    <script src="<?php echo base_url('assets/jsQR/dist/jsQR.js'); ?>"></script>
    <script src="<?php //echo base_url('assets/quaggaJS/dist/quagga.js'); ?>"></script>
    <script src="<?php //echo base_url('assets/quaggaJS/dist/quagga.min.js'); ?>"></script>
    <script>
        // Ambil elemen kontainer pemindaian dan hasil
        // const scannerContainer = document.getElementById('scanner-container');
        // const scanResult = document.getElementById('scan-result');

        // // Cek dukungan WebRTC dan akses kamera
        // if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        //     // Buat elemen video untuk menampilkan tampilan kamera
        //     const videoElement = document.createElement('video');
        //     videoElement.autoplay = true;

        //     // Panggil API WebRTC untuk mengakses kamera
        //     navigator.mediaDevices.getUserMedia({ video: true })
        //         .then(function (stream) {
        //             // Menampilkan tampilan kamera dalam elemen video
        //             videoElement.srcObject = stream;
        //             scannerContainer.appendChild(videoElement);

        //             // Buat objek pembaca QR code menggunakan library pihak ketiga (misalnya, jsQR, zxing.js)
        //             const qrCodeReader = new QrCodeReader();

        //             // Fungsi pemindaian QR code
        //             const scanQRCode = function () {
        //                 const canvasElement = document.createElement('canvas');
        //                 canvasElement.width = videoElement.videoWidth;
        //                 canvasElement.height = videoElement.videoHeight;
        //                 const context = canvasElement.getContext('2d');
        //                 context.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);
        //                 const imageData = context.getImageData(0, 0, canvasElement.width, canvasElement.height);

        //                 // Lakukan pemindaian QR code pada gambar
        //                 const qrCodeResult = qrCodeReader.scanQRCode(imageData);

        //                 // Tampilkan hasil pemindaian
        //                 if (qrCodeResult) {
        //                     scanResult.textContent = 'Hasil pemindaian: ' + qrCodeResult;
        //                 } else {
        //                     scanResult.textContent = 'QR code tidak dapat dipindai. Coba lagi.';
        //                 }

        //                 // Ulangi pemindaian setiap beberapa detik (jika diinginkan)
        //                 // setTimeout(scanQRCode, 2000);
        //             };

        //             // Mulai pemindaian QR code
        //             scanQRCode();
        //         })
        //         .catch(function (error) {
        //             console.error('Kamera tidak dapat diakses:', error);
        //         });
        // } else {
        //     console.error('WebRTC tidak didukung pada browser ini');
        // }
    </script>

    <!-- End Quagga JS -->
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
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatabel').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel2').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel3').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel4').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel5').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel6').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel7').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel8').DataTable();
        });
        $(document).ready(function () {
            $('#datatabel9').DataTable();
        });
    </script>
    <!-- End DataTables -->

</body>

</html>