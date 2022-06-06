<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

    <div class="card" style="width: 60%">
        <div class="card-body">

            <form method="POST" action="<?php echo base_url('admin/LaporanFaktur/tambahLaporanAksi') ?>">

            <div class="from-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control">
                <?php echo form_error('tanggal', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Jumlah</label>
                <input type="number" name="jumlah" class="form-control">
                <?php echo form_error('jumlah', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Cabang</label>
                <select name="cabang" class="form-control">
                    <option value="">--Pilih Cabang--</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Kendal">Kendal</option>>
                    <option value="Batang">Batang</option>
                    <option value="Demak">Demak</option>
                    <option value="Temanggung">Temanggung</option>
                    <option value="Salatiga">Salatiga</option>
                </select>
                <?php echo form_error('cabang', '<div class="text-small text-danger"></div>') ?>
            </div>

            <div class="from-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="">--Pilih Status--</option>
                    <option value="Jadi">Jadi</option>
                    <option value="Belum Jadi">Belum Jadi</option>
                </select>
                
                <?php echo form_error('status', '<div class="text-small text-danger"></div>') ?>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Simpan</button>

            </form>

        </div>
    </div>

</div>
