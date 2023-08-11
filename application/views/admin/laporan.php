<?php if ($this->session->flashdata('flash')): ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12">
        <h1>Kelola Data Laporan Kerusakan</h1><br>
    </div>
    <!-- top tiles -->
    <div class="col-md-12">
        <br><br>
        <div class="row">
            <div class="col-md-12 sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="card-title">Data Laporan Kerusakan </h2>
                            </div>
                            <!-- <div class="col-md-4">
                                <a class="btn btn-primary" href="" data-toggle="modal" data-target=".tambah">Tambah
                                    (+)</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 sm-12">
                            <table id="datatabel" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Barang</th>
                                        <th scope="col">Jenis & Nama Barang</th>
                                        <th scope="col">Pelapor</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($laporan as $lap) {
                                        $idl = $lap->id_laporan; ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++; ?>
                                            </th>
                                            <td>
                                                <?php echo $lap->id_barang; ?>
                                            </td>
                                            <td>
                                                <?php foreach ($barang as $key) {
                                                    if ($key->id_barang == $lap->id_barang) {
                                                        $nm_barang = $key->nm_barang;
                                                        foreach ($master as $mas) {
                                                            if ($mas->id_master == $key->id_master) {
                                                                echo $mas->jenis_barang . " | " . $nm_barang;
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php foreach ($user as $uss) {
                                                    if ($uss->id_user == $lap->id_user) {
                                                        echo $uss->nm_lengkap . "  (" . $uss->level . ")";
                                                    }
                                                } ?>
                                            </td>
                                            <td>
                                                <?php echo $lap->status; ?>
                                            </td>
                                            <td>
                                                <?php if ($lap->status == 'Diproses') { ?>
                                                    <a class="btn btn-outline-success"
                                                        href="<?php echo site_url('Adminpanel/konfirmasi_laporan/' . $idl) ?>">Konfirmasi</a>
                                                    <a class=" btn btn-outline-warning"
                                                        href="<?php echo site_url('Adminpanel/tolak_laporan/' . $idl) ?>">Tolak</a>
                                                <?php } else { ?>
                                                    <a class="btn btn-outline-danger tombolhapus"
                                                        href="<?php //echo site_url('Adminpanel/hapus_laporan/' . $idl) ?>">Hapus</a>
                                                <?php } ?>
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
<!-- Modal Tambah-->
<div class="modal fade tambah" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                <form method="POST" action="<?php echo site_url('Adminpanel/add_kategori') ?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Kategori</label>
                        <input type="text" class="form-control" name="nm_kategori">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Tambah -->