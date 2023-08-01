<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inventaris - Tunas Harapan Pati</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/user/img/logo.png') ?>" rel="icon">
    <link href="<?php echo base_url('assets/user/img/logo.png" rel="apple-touch-icon') ?>">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url('assets/user/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url('assets/user/lib/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/lib/animate/animate.min.css" rel="stylesheet') ?>">
    <link href="<?php echo base_url('assets/user/lib/ionicons/css/ionicons.min.css" rel="stylesheet') ?>">
    <link href="<?php echo base_url('assets/user/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/lib/lightbox/css/lightbox.min.css') ?>" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url('assets/user/css/style.css') ?>" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

    <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
    <!--==========================
  Header
  ============================-->
    <header id="header">
        <div id="topbar">
            <div class="container">
                <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1 class="text-light"><a href="#intro" class="scrollto"><span>SMK THP</span></a></h1>
                <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#intro">Home</a></li>
                    <li><a href="#about">Service</a></li>
                    <li><a href="#footer">Contact Us</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last">
                    <h2>Selamat Datang di <br><span>Inventaris</span></h2>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Cari Barang</a>
                    </div>
                </div>

                <div class="col-md-6 intro-img order-md-last order-first">
                    <img src="<?php echo base_url('assets/user/img/intro-img.svg') ?>" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section><!-- #intro -->

    <main id="main">
        <!--==========================
      About Us Section
    ============================-->
        <section id="about">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 sm-12">
                        <a class="btn btn-block btn-primary" href="" data-toggle="modal"
                            data-target=".cari_scan">Scan</a>
                    </div>
                    <div class="col-md-6 sm-12">
                        <form method="POST" action="<?php echo site_url('Dashboard/cari_id') ?>">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="number" class="form-control" name="id_barang"
                                        placeholder="Masukkan ID">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-block btn-primary">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br><br>
                <?php if (isset($id_barang)) { ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <center>
                                        <h2>Hasil Pencarian</h2>
                                    </center>
                                </div>
                                <div class="card-body">

                                    <?php foreach ($barang as $val) {
                                        if ($val->id_barang == $id_barang) { ?>

                                            <form method="POST" action="">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Id Barang</label>
                                                    <input type="text" class="form-control" name=""
                                                        value="<?php echo $val->id_barang; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Id Master</label>
                                                    <input type="text" class="form-control" name="" value="<?php // echo $jenis; ?>"
                                                        readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nama Barang</label>
                                                    <input type="text" class="form-control" name="nm_barang"
                                                        value="<?php echo $val->nm_barang; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Keterangan</label>
                                                    <input type="text" class="form-control" name="keterangan"
                                                        value="<?php echo $val->keterangan; ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Status</label>
                                                    <input type="text" class="form-control" name="keterangan"
                                                        value="<?php echo $val->status; ?>" readonly>

                                                </div>
                                            </form>
                                        <?php } else { ?>
                                            <center>
                                                <h4>Data Tidak Ditemukan</h4>
                                            </center>
                                            <?php break;
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>

                <?php } ?>
                <div class="col-md-12">
                </div>
            </div>

        </section><!-- #about -->

        <!-- Modal cari-->
        <div class="modal fade cari_scan" id="cari_scan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Scan Disini</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="reader" width="600px"></div>
                        <input type="hidden" name="result" id="result">

                        <div id="resultDisplay"></div>
                        <?php
                        // Misalkan $barang adalah array yang berisi data barang-barang
                        // foreach ($barang as $key) {
                        //     if ($key->id_barang == $resultdisplay) {
                        //         // Jika id_barang cocok dengan $resultdisplay, lakukan sesuatu di sini
                        //         // Misalnya, tambahkan data ke elemen 'resultDisplay'
                        //         echo '<script>';
                        //         echo "onScanSuccess('$key->id_barang', " . json_encode($key) . ");";
                        //         echo '</script>';
                        //     }
                        // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal cari -->


    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer" class="section-bg">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="footer-info">
                                    <h3>SMK Tunas Harapan Pati</h3>
                                    <p>SMK Tunas Harapan Pati merupakan sebuah sekolah menengah kejuruan yang berlokasi
                                        di Kabupaten Pati, Jawa Tengah, Indonesia. Sekolah ini telah berdiri sejak tahun
                                        2004 dan telah mendapatkan akreditasi A dari Badan Akreditasi Nasional
                                        Sekolah/Madrasah (BAN-S/M) pada tahun 2018.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="footer-links">
                                    <h4>Tentang Kami</h4>
                                    <p>SMK Tunas Harapan Pati memiliki 8 program keahlian, diantaranya, DKV, Kimia
                                        Analisis, Teknik Otomasi Industri, Teknik Jaringan Komputer Telekomunikasi,
                                        Teknik Mesin, dan lainnya. Sekolah ini juga memiliki 2534 Siswa dan 91 Guru.
                                        Fasilitas yang tersedia di sekolah ini cukup lengkap dengan ruang kelas yang
                                        dilengkapi proyektor dan AC, laboratorium, studio, dan bengkel.</p>
                                </div>
                                <div class="footer-links">
                                    <h4>Contact Us</h4>
                                    <p>
                                        Jln. Raya Pati Trangkil KM.4 <br>
                                        Pati, Jawa Tengah 59119<br>
                                        Indonesia <br>
                                        <strong>Phone:</strong> (0295) 382470<br>
                                    </p>
                                </div>
                                <div class="social-links">
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="form">
                            <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no"
                                    marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=SMK%20Tunas%20Harapan%20Pati+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                        href="https://www.maps.ie/population/">Find Population on Map</a></iframe></div>

                        </div>

                    </div>



                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
        -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url('assets/user/lib/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/jquery/jquery-migrate.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/easing/easing.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/mobile-nav/mobile-nav.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/wow/wow.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/counterup/counterup.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/isotope/isotope.pkgd.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/user/lib/lightbox/js/lightbox.min.js') ?>"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url('assets/user/contactform/contactform.js') ?>"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url('assets/user/js/main.js') ?>"></script>
    <!-- Scan JS -->
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // $('#result').val('test');
        function onScanSuccess(decodedText, decodedResult) {
            $('#result').val(decodedText);
            let id = decodedText;
            html5QrcodeScanner.clear().then(_ => {
                // Set nilai hasil pemindaian pada elemen dengan ID 'resultDisplay'
                // $('#resultDisplay').text(decodedText);
                // Kirim data ke server menggunakan Fetch API dengan metode POST                
                fetch(`<?php echo site_url('Dashboard/cari_id_JSON') ?>`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: `id_barang=${encodeURIComponent(decodedText)}`
                })
                    .then(response => response.json()) // Mengubah respons menjadi JSON (jika diperlukan)
                    .then(datas => {
                        // Tanggapan dari server
                        const barang = datas.barang;
                        const master = <?php echo json_encode($master); ?>; // Mengambil data master dari PHP ke JavaScript
                        const resultContainer = $('#resultDisplay');

                        if (barang.length <= 0) {
                            resultContainer.append(`
                    <center>
                        <h4>Data Tidak Ditemukan</h4>
                    </center>`);
                        } else {
                            barang.forEach(data => {
                                console.log(data)
                                if (data.id_barang === decodedText) {
                                    resultContainer.append(`
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <center>
                                                <h2>Hasil Pencarian</h2>
                                            </center>
                                        </div>
                                        <div class="card-body">
                                            <form method="POST" action="">
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Id Barang</label>
                                                    <input type="text" class="form-control" name="" value="${data.id_barang}" readonly>
                                                </div>
                                                
                                                <!-- Tambahkan foreach pada array master -->
                                                ${master.map(val => {
                                        // Lakukan perbandingan val->id_master dengan data->id_master
                                        if (val.id_master === data.id_master) {
                                            return `
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Jenis Barang</label>
                                                    <input type="text" class="form-control" name="jenis_barang" value="${val.jenis_barang}" readonly>
                                                </div>`;
                                        }
                                    }).join('')}
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Nama Barang</label>
                                                    <input type="text" class="form-control" name="nm_barang" value="${data.nm_barang}"readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Keterangan</label>
                                                    <input type="text" class="form-control" name="keterangan"
                                                        value="${data.keterangan}"readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleFormControlInput1">Status</label>
                                                    <input type="text" class="form-control" name="keterangan"
                                                        value="${data.status}"readonly>
                                                </div>
                                                
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                                }
                            });
                        }
                    })
                    .catch(error => {
                        // Jika terjadi kesalahan dalam permintaan Fetch
                        console.error(error);
                        alert('something wrong');
                    });
            }).catch(error => {
                alert('something wrong');
            });
        }


        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            { fps: 10, qrbox: { width: 250, height: 250 } },
                /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>

    <!-- TypeError: Failed to execute 'removeChild' on 'Node': parameter 1 is not of type 'Node'. -->

    <!-- Scan JS ENd -->
    <script>
        document.getElementById('searchForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission
            var id_barang = document.getElementById('id_barang').value;

            // You can use AJAX to send the id_barang to the server and get the data in JSON format.
            // For simplicity, I'll just toggle the visibility of the resultForm here.
            var resultForm = document.getElementById('resultForm');
            resultForm.style.display = 'block'; // Show the resultForm

            // You can also use AJAX to fetch the data and populate the form fields dynamically.
            // For this example, the data is already populated in the server-side code.
        });
    </script>
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
    </script>
    <!-- End DataTables -->
</body>

</html>