<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12">
        <h1>Selamat Datang Dihalaman Adminpanel</h1><br>
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
                                if ($val->id_barang == $id_barang) { ?>

                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Id Barang</label>
                                            <input type="text" class="form-control" name="" value="<?php echo $val->id_barang; ?>"
                                                readonly>
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
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tahun Pembelian</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($barang as $key) {
                                        $idb = $key->id_barang;
                                    } ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $no++; ?>
                                        </th>
                                        <td>
                                            <?php echo $idb; ?>
                                        </td>
                                        <td>
                                            <?php foreach ($master as $mas) {
                                                $idm = $mas->id_master;
                                                if ($idm == $idb) {
                                                    foreach ($kategori as $kat) {
                                                        $idk = $kat->id_kategori;
                                                        if ($idk == $idm) {
                                                            echo $kat->nm_kategori;
                                                        }
                                                    }
                                                }
                                            } ?>
                                        </td>
                                        <td>
                                            <?php echo $key->nm_barang ?>
                                        </td>
                                        <td>
                                            <?php foreach ($master as $mas) {
                                                if ($mas->id_master == $idb) {
                                                    echo $mas->th_pembelian;
                                                }
                                            } ?>
                                        </td>
                                        <td>
                                            <?php echo $key->status; ?>
                                        </td>
                                    </tr>

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