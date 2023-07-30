<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12">
        <h2>Cari Data Barang</h2>
        <?php echo $barang->nm_barang; ?>
    </div>

    <!-- top tiles -->
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 sm-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Data Barang</h2>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 sm-12">
                            <table id="datatabel" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id Barang</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Data Barang</h2>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 sm-12">
                            <table id="datatabel2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NISN</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Rekomendasi Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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