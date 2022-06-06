<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-5">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<?php echo $this->session->flashdata('pesan') ?>

<table class="table table-striped table-bordered">
    <tr>
        <th class="text-center table-secondary">No</th>
        <th class="text-center table-warning">Tanggal</th>
        <th class="text-center table-info">Jumlah</th>
        <th class="text-center table-success">Cabang</th>
        <th class="text-center table-primary">Status</th>
        <th class="text-center table-danger">Action</th>
    </tr>

    <?php $no=1; foreach($faktur as $f) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $f->tanggal ?></td>
            <td><?php echo $f->jumlah ?></td>
            <td><?php echo $f->cabang ?></td>
            <td><?php echo $f->status ?></td>
            <td>
                <center>
                    <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/LaporanFaktur/updateFaktur/'.$f->id_faktur) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/LaporanFaktur/deleteFaktur/'.$f->id_faktur) ?>"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</div>
