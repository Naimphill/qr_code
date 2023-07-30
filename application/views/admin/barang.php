<?php if ($this->session->flashdata('flash')): ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12">
        <h1>Kelola Data Barang</h1><br>
    </div>
    <!-- Data Master -->
    <div class="col-md-12">
        <br><br>
        <div class="">
            <div class="col-md-12 sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="card-title">Data Master barang</h2>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary" href="" data-toggle="modal"
                                    data-target=".tambahmaster">Tambah
                                    (+)</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 sm-12">
                            <table id="datatabel" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Jenis Barang</th>
                                        <th scope="col">Th. Pembelian</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($master as $key) {
                                        $idm = $key->id_master; ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++; ?>
                                            </th>
                                            <td>
                                                <?php foreach ($kategori as $kat) {
                                                    if ($kat->id_kategori == $key->id_kategori) {
                                                        $nm_kategori = $kat->nm_kategori;
                                                        echo $nm_kategori;
                                                    }
                                                } ?>
                                            </td>
                                            <td>
                                                <?php echo $key->jenis_barang; ?>
                                            </td>
                                            <td>
                                                <?php echo $key->th_pembelian; ?>
                                            </td>

                                            <td>
                                                <a class="btn btn-outline-warning" href="" data-toggle="modal"
                                                    data-target=".id_<?php echo $idm; ?>">Edit</a>
                                                <a class="btn btn-outline-danger tombolhapus"
                                                    href="<?php echo site_url('Adminpanel/hapus_master/' . $idm) ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit-->
                                        <div class="modal fade id_<?php echo $idm ?>" id="id_<?php echo $idm ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kategori
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="<?php echo site_url('Adminpanel/edit_master') ?>">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Id Kategori</label>
                                                                <select class="form-control" name="id_kategori" id="">
                                                                    <option value="<?php echo $key->id_kategori; ?>"><?php echo $nm_kategori; ?></option>
                                                                    <?php foreach ($kategori as $kat) { ?>
                                                                        <option value="<?php echo $kat->id_kategori ?>"><?php echo $kat->nm_kategori ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Jenis Barang</label>
                                                                <input type="text" class="form-control" name="jenis_barang"
                                                                    value="<?php echo $key->jenis_barang; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Th. Pembelian</label>
                                                                <input class="form-control" type="number" id="tahun"
                                                                    name="th_pembelian" min="1900" max="2099" step="1"
                                                                    value="<?php echo $key->th_pembelian; ?>">
                                                            </div>
                                                            <input type="hidden" class="form-control" name="id_master"
                                                                value="<?php echo $idm; ?>">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Edit -->
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Master -->
            <!-- Barang -->

            <div class="col-md-12 sm-12">
                <br><br>
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="card-title">Data barang</h2>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary" href="" data-toggle="modal"
                                    data-target=".tambahbarang">Tambah
                                    (+)</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 sm-12">
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
                                        <th scope="col">Action</th>
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
                                            <td>
                                                <img style="width:50px;height:50px ;"
                                                    src="<?php echo base_url('./qr_code/.$key->qr_code') ?>" alt="">
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-warning" href="" data-toggle="modal"
                                                    data-target=".id_<?php echo $idb; ?>">Edit</a>
                                                <a class="btn btn-outline-danger tombolhapus"
                                                    href="<?php echo site_url('Adminpanel/hapus_barang/' . $idb) ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit-->
                                        <div class="modal fade id_<?php echo $idb ?>" id="id_<?php echo $idb ?>"
                                            tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Form Edit Barang
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="<?php echo site_url('Adminpanel/edit_master') ?>">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Id Barang</label>
                                                                <input type="text" class="form-control" name=""
                                                                    value="<?php echo $val->id_barang; ?>" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Id Master</label>
                                                                <input type="text" class="form-control" name=""
                                                                    value="<?php echo $jenis; ?>" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Nama Barang</label>
                                                                <input type="text" class="form-control" name="nm_barang"
                                                                    value="<?php echo $val->nm_barang; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Keterangan</label>
                                                                <input type="text" class="form-control" name="keterangan"
                                                                    value="<?php echo $val->keterangan; ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Status</label>
                                                                <select class="form-control" name="status" id="">
                                                                    <option value="<?php echo $val->status; ?>"><?php echo $val->status; ?></option>
                                                                    <option value="Normal">Normal</option>
                                                                    <option value="Rusak">Rusak</option>
                                                                </select>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal Edit -->
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Barang -->
</div>
<!-- /page content -->
<!-- Modal Tambah  Master-->
<div class="modal fade tambahmaster" id="tambahmaster" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Master Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo site_url('Adminpanel/add_master') ?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Id Kategori</label>
                        <select class="form-control" name="id_kategori" id="">
                            <option value="">---Pilih---</option>
                            <?php foreach ($kategori as $kat) { ?>
                                <option value="<?php echo $kat->id_kategori ?>"><?php echo $kat->nm_kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Barang</label>
                        <input type="text" class="form-control" name="jenis_barang">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Th. Pembelian</label>
                        <input class="form-control" type="number" id="tahun" name="th_pembelian" min="1900" max="2099"
                            step="1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Tambah -->
<!-- Modal Tambah Barang-->
<div class="modal fade tambahbarang" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo site_url('Adminpanel/add_barang') ?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Id Master</label>
                        <select class="form-control" name="id_master" id="">
                            <option value="">---Pilih---</option>
                            <?php foreach ($master as $key) { ?>
                                <option value="<?php echo $key->id_master; ?>"><?php echo $key->jenis_barang; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Barang</label>
                        <input type="text" class="form-control" name="nm_barang">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Status</label>
                        <select class="form-control" name="status" id="">
                            <option value="Normal">Normal</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Tambah -->

<script>
    // Disable input arrows for number input to avoid manual year entry
    var tahunInput = document.getElementById("tahun");
    tahunInput.addEventListener("keydown", function (e) {
        if (e.which === 38 || e.which === 40) {
            e.preventDefault();
        }
    });
</script>