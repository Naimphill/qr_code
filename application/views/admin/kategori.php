<?php if ($this->session->flashdata('flash')): ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12">
        <h1>Kelola Data Kategori</h1><br>
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
                                <h2 class="card-title">Data Kategori</h2>
                            </div>
                            <div class="col-md-4">
                                <a class="btn btn-primary" href="" data-toggle="modal" data-target=".tambah">Tambah
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
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($kategori as $kat) {
                                        $idk = $kat->id_kategori; ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $no++; ?>
                                            </th>
                                            <td>
                                                <?php echo $kat->nm_kategori; ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-outline-warning" href="" data-toggle="modal"
                                                    data-target=".id_<?php echo $idk; ?>">Edit</a>
                                                <a class="btn btn-outline-danger tombolhapus"
                                                    href="<?php echo site_url('Adminpanel/hapus_kategori/' . $idk) ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        <!-- Modal Edit-->
                                        <div class="modal fade id_<?php echo $idk ?>" id="id_<?php echo $idk ?>"
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
                                                            action="<?php echo site_url('Adminpanel/edit_kategori') ?>">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Nama Kategori</label>
                                                                <input type="text" class="form-control" name="nm_kategori"
                                                                    value="<?php echo $kat->nm_kategori; ?>">

                                                                <input type="hidden" class="form-control" name="id_kategori"
                                                                    value="<?php echo $idk; ?>">
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