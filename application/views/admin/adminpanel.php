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
                <form action="">
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-block btn-primary">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
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
            $('#resultDisplay').text(decodedText);
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