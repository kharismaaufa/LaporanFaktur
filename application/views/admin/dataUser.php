<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<a class="btn btn-sm btn-success mb-4" href="<?php echo base_url('admin/DataUser/tambahUser/') ?>"><i class="fas fa-plus"></i> Tambah User</a>

<?php echo $this->session->flashdata('pesan') ?>

<table class="table table-striped table-bordered" style="width: 50%">
    <tr>
        <th class="text-center table-secondary">No</th>
        <th class="text-center table-warning">Nama User</th>
        <th class="text-center table-info">Photo</th>
        <th class="text-center table-success">Action</th>
    </tr>

    <?php $no=1; foreach($user as $u) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama_user ?></td>
            <td><center><img src="<?php echo base_url().'template/photo/'.$u->photo ?>" width="50px"></center></td>
            <td>
                <center>
                    <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/DataUser/updateUser/'.$u->id_user) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/DataUser/deleteUser/'.$u->id_user) ?>"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</div>
