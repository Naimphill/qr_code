<?php if ($this->session->flashdata('flash')): ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php unset($_SESSION['flash']); ?>
<?php endif; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="col-md-12">
        <h1>Kelola Data User</h1><br>
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
                                <h2 class="card-title">Data Admin</h2>
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
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($user as $key) {
                                        if ($key->level == 'admin') {
                                            $idu = $key->id_user; ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $no++; ?>
                                                </th>
                                                <td>
                                                    <?php echo $key->nm_lengkap; ?>
                                                </td>
                                                <td>
                                                    <?php echo $key->username; ?>
                                                </td>
                                                <td>
                                                    <?php echo $key->level ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-danger tombolhapus"
                                                        href="<?php echo site_url('Adminpanel/hapus_user/' . $idu) ?>">Hapus</a>
                                                </td>

                                            </tr>

                                        <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-md-6 sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="card-title">Data user guru</h2>
                            </div>
                            <!-- <div class="col-md-4">
                                <a class="btn btn-primary" href="" data-toggle="modal" data-target=".tambah">Tambah
                                    (+)</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 sm-12">
                            <table id="datatabel2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($user as $key) {
                                        if ($key->level == 'guru') {
                                            $idu = $key->id_user; ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $no++; ?>
                                                </th>
                                                <td>
                                                    <?php echo $key->nm_lengkap; ?>
                                                </td>
                                                <td>
                                                    <?php echo $key->username; ?>
                                                </td>
                                                <td>
                                                    <?php echo $key->level ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-danger tombolhapus"
                                                        href="<?php echo site_url('Adminpanel/hapus_user/' . $idu) ?>">Hapus</a>
                                                </td>

                                            </tr>

                                        <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="card-title">Data user Siswa</h2>
                            </div>
                            <!-- <div class="col-md-4">
                                <a class="btn btn-primary" href="" data-toggle="modal" data-target=".tambah">Tambah
                                    (+)</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12 sm-12">
                            <table id="datatabel3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($user as $key) {
                                        if ($key->level == 'siswa') {
                                            $idu = $key->id_user; ?>
                                            <tr>
                                                <th scope="row">
                                                    <?php echo $no++; ?>
                                                </th>
                                                <td>
                                                    <?php echo $key->nm_lengkap; ?>
                                                </td>
                                                <td>
                                                    <?php echo $key->username; ?>
                                                </td>
                                                <td>
                                                    <?php echo $key->level ?>
                                                </td>
                                                <td>
                                                    <a class="btn btn-outline-danger tombolhapus"
                                                        href="<?php echo site_url('Adminpanel/hapus_user/' . $idu) ?>">Hapus</a>
                                                </td>

                                            </tr>

                                        <?php }
                                    } ?>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo site_url('Adminpanel/add_user') ?>">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nm_lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Level</label>
                        <select name="level" class="form-control" id="exampleFormControlSelect1">
                            <option value="">--PILIH--</option>
                            <option value="admin">Admin</option>
                            <option value="guru">Guru</option>
                            <option value="siswa">Siswa</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Tambah -->