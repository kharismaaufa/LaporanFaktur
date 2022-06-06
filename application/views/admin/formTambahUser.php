<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

    <div class="card" style="width: 60%">
        <div class="card-body">

            <form method="POST" action="<?php echo base_url('admin/DataUser/tambahUserAksi') ?>" enctype="multipart/form-data">

            <div class="from-group">
                <label>Nama</label>
                <input type="text" name="nama_user" class="form-control">
                <?php echo form_error('nama_user', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Photo</label>
                <input type="file" name="photo" class="form-control">
                <?php echo form_error('photo', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
                <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <?php echo form_error('username', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Hak Akses</label>
                <select name="hak_akses" class="form-control">
                    <option value="1">Admin</option>
                </select>
                <?php echo form_error('hak_akses', '<div class="text-small text-danger"></div>') ?>
            </div>

            <br>
            <button type="submit" class="btn btn-success">Simpan</button>

            </form>

        </div>
    </div>

</div>
