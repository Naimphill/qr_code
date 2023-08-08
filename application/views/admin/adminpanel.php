<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12">
        <h1>Selamat Datang Dihalaman Adminpanel</h1><br>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h3>Jumlah Barang</h3>
                            <a href="" class="btn btn-block btn-primary" data-toggle="modal" data-target=".info_barang">
                                <?php $no = 0;
                                foreach ($barang as $bar) {
                                    $no++;
                                }
                                echo $no;
                                ?>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h3>Jumlah Barang (Normal)</h3>
                            <a href="" class="btn btn-block btn-success" data-toggle="modal"
                                data-target=".info_barang_n">
                                <?php $no = 0;
                                foreach ($barang as $bar) {
                                    if ($bar->status == 'Normal') {
                                        $no++;
                                    }
                                }
                                echo $no;
                                ?>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h3>Jumlah Barang (Rusak)</h3>
                            <a href="" class="btn btn-block btn-danger" data-toggle="modal"
                                data-target=".info_barang_r">
                                <?php $no = 0;
                                foreach ($barang as $bar) {
                                    if ($bar->status == 'Rusak') {
                                        $no++;
                                    }
                                }
                                echo $no;
                                ?>
                            </a>
                        </center>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <hr><br>
    </div>
    <div class="col-md-12">
        <h2>Cari Data Barang</h2>
        <div class="row">
            <div class="col-md-6 sm-12">
                <a class="btn btn-block btn-primary" href="" data-toggle="modal" data-target=".cari_scan">Scan</a>
            </div>
            <div class="col-md-6 sm-12">
                <form method="POST" action="<?php echo site_url('Adminpanel/cari_id') ?>">
                    <div class="row">
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="id_barang" placeholder="Masukkan ID">
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
                                if ($val->id_barang == $id_barang) {
                                    foreach ($master as $key) {
                                        if ($key->id_master == $val->id_master) {
                                            $jenis = $key->jenis_barang;
                                        }
                                    } ?>

                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Id Barang</label>
                                            <input type="text" class="form-control" name="" value="<?php echo $val->id_barang; ?>"
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Jenis Barang</label>
                                            <input type="text" class="form-control" name="" value="<?php echo $jenis; ?>" readonly>
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal cari -->
    <!-- top tiles -->
    <div class="col-md-12">
        <br><br>
        <div class="row">
            <div class="col-md-12 sm-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Data Barang</h2>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 sm-12">
                            <table id="datatabel" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id Barang</th>
                                        <th scope="col">Jenis</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tahun Pembelian</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($barang as $key) {
                                        $idb = $key->id_barang; ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++; ?>
                                            </th>
                                            <td>
                                                <?php echo $idb; ?>
                                            </td>
                                            <td>
                                                <?php foreach ($master as $mas) {
                                                    if ($mas->id_master == $key->id_master) {
                                                        echo $mas->jenis_barang;
                                                        $th_pembelian = $mas->th_pembelian;
                                                    }
                                                } ?>
                                            </td>
                                            <td>
                                                <?php echo $key->nm_barang ?>
                                            </td>
                                            <td>
                                                <?php echo $th_pembelian;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo $key->status; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /top tiles -->
    </div>
</div>
<!-- /page content -->

<!-- Modal info Barang-->
<div class="modal fade info_barang" id="info_barang" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="datatabel2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Barang</th>
                            <th scope="col">ID Master</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Qr Code</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($barang as $val) {
                            $idb = $val->id_barang; ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $no++; ?>
                                </th>
                                <td>
                                    <?php echo $val->id_barang; ?>
                                </td>
                                <td>
                                    <?php
                                    foreach ($master as $key) {
                                        if ($key->id_master == $val->id_master) {
                                            $jenis = $key->jenis_barang;
                                            echo $jenis;
                                        }
                                    } ?>
                                </td>
                                <td>
                                    <?php echo $val->nm_barang; ?>
                                </td>
                                <td>
                                    <?php echo $val->keterangan; ?>
                                </td>
                                <td>
                                    <?php echo $val->status; ?>
                                </td>
                                <td><a href="" data-toggle="modal" data-target=".qr_<?php echo $idb; ?>">
                                        <img style="width:50px;height:50px ;"
                                            src="<?php echo base_url('/assets/qrcode/' . $val->qr_code) ?>" alt="">
                                    </a>
                                </td>

                            </tr>

                            <!-- Modal Barcode-->
                            <div class="modal fade qr_<?php echo $idb ?>" id="qr_<?php echo $idb ?>" tabindex="-1"
                                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detail QR
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <center>

                                                <img style="width:500px;height:500px ;"
                                                    src="<?php echo base_url('/assets/qrcode/' . $val->qr_code) ?>" alt="">
                                                <br>
                                            </center>
                                            <h4 style="color:#000 ;">ID :
                                                <?php echo $idb; ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Barcode -->
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal info -->

<!-- Modal info Barang Normal-->
<div class="modal fade info_barang_n" id="info_barang_n" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="datatabel3" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Barang</th>
                            <th scope="col">ID Master</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Qr Code</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($barang as $val) {
                            if ($val->status == 'Normal') {
                                $idb = $val->id_barang; ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $no++; ?>
                                    </th>
                                    <td>
                                        <?php echo $val->id_barang; ?>
                                    </td>
                                    <td>
                                        <?php
                                        foreach ($master as $key) {
                                            if ($key->id_master == $val->id_master) {
                                                $jenis = $key->jenis_barang;
                                                echo $jenis;
                                            }
                                        } ?>
                                    </td>
                                    <td>
                                        <?php echo $val->nm_barang; ?>
                                    </td>
                                    <td>
                                        <?php echo $val->keterangan; ?>
                                    </td>
                                    <td>
                                        <?php echo $val->status; ?>
                                    </td>
                                    <td><a href="" data-toggle="modal" data-target=".qr_<?php echo $idb; ?>">
                                            <img style="width:50px;height:50px ;"
                                                src="<?php echo base_url('/assets/qrcode/' . $val->qr_code) ?>" alt="">
                                        </a>
                                    </td>

                                </tr>

                                <!-- Modal Barcode-->
                                <div class="modal fade qr_<?php echo $idb ?>" id="qr_<?php echo $idb ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail QR
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <center>

                                                    <img style="width:500px;height:500px ;"
                                                        src="<?php echo base_url('/assets/qrcode/' . $val->qr_code) ?>" alt="">
                                                    <br>
                                                </center>
                                                <h4 style="color:#000 ;">ID :
                                                    <?php echo $idb; ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Barcode -->
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal info Normal -->
<!-- Modal info Barang Rusak-->
<div class="modal fade info_barang_r" id="info_barang_r" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="datatabel4" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Barang</th>
                            <th scope="col">ID Master</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Qr Code</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($barang as $val) {
                            if ($val->status == 'Rusak') {
                                $idb = $val->id_barang; ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $no++; ?>
                                    </th>
                                    <td>
                                        <?php echo $val->id_barang; ?>
                                    </td>
                                    <td>
                                        <?php
                                        foreach ($master as $key) {
                                            if ($key->id_master == $val->id_master) {
                                                $jenis = $key->jenis_barang;
                                                echo $jenis;
                                            }
                                        } ?>
                                    </td>
                                    <td>
                                        <?php echo $val->nm_barang; ?>
                                    </td>
                                    <td>
                                        <?php echo $val->keterangan; ?>
                                    </td>
                                    <td>
                                        <?php echo $val->status; ?>
                                    </td>
                                    <td><a href="" data-toggle="modal" data-target=".qr_<?php echo $idb; ?>">
                                            <img style="width:50px;height:50px ;"
                                                src="<?php echo base_url('/assets/qrcode/' . $val->qr_code) ?>" alt="">
                                        </a>
                                    </td>

                                </tr>

                                <!-- Modal Barcode-->
                                <div class="modal fade qr_<?php echo $idb ?>" id="qr_<?php echo $idb ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Detail QR
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <center>

                                                    <img style="width:500px;height:500px ;"
                                                        src="<?php echo base_url('/assets/qrcode/' . $val->qr_code) ?>" alt="">
                                                    <br>
                                                </center>
                                                <h4 style="color:#000 ;">ID :
                                                    <?php echo $idb; ?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Barcode -->
                            <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Modal info Rusak-->


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
            fetch(`<?php echo site_url('Adminpanel/cari_id_JSON') ?>`, {
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
                                                <form method="POST" action="<?php echo site_url('Adminpanel/add_laporan') ?>" >
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="id_barang" value="${data.id_barang}">
                                                    </div>
                                                    <button type="button" class="btn btn-warning" onclick="redirectToLaporan(this)">Laporkan Kerusakan</button>    
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
    function redirectToLaporan(button) {
        const form = $(button).closest('form'); // Ubah ini menjadi selektor yang sesuai
        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Akan Mengirim Laporan Kerusakan?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Kirim!',
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
        return false; // Mencegah aksi bawaan tombol
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