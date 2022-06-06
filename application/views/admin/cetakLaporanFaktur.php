<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>
        <style type="text/css">
            body{
                font-family: Arial;
                color: black;
            }
        </style>
    </head>

    <body>
        <center>
            <img src="<?php echo base_url('template/photo/fajaranugerah.jpeg') ?>" style="width:10%">
            <h1>CV. FAJAR ANUGERAH</h1>
            <h2>Laporan Faktur</h2>
            <hr style="width: 50%; border-width: 5px; color: black">
        </center>

        <?php 
             if ((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $bulantahun = $bulan.$tahun;
            }
            else{
                $bulan = date('m');
                $tahun = date('Y');
                $bulantahun = $bulan.$tahun;
            }
        ?>

        <table>
            <tr>
                <td>Bulan</td>
                <td>:</td>
                <td><?php echo $bulan ?></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td><?php echo $tahun ?></td>
            </tr>
        </table>

        <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center table-secondary">No</th>
            <th class="text-center table-warning">Tanggal</th>
            <th class="text-center table-info">Jumlah</th>
            <th class="text-center table-success">Cabang</th>
            <th class="text-center table-danger">Status</th>
        </tr>

        <?php $no=1; foreach($faktur as $f) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $f->tanggal ?></td>
                <td><?php echo $f->jumlah ?></td>
                <td><?php echo $f->cabang ?></td>
                <td><?php echo $f->status ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <table width="98%">
        <tr>
            <td></td>
            <td width="200px">
                <p>Semarang, <?php echo date("d M Y")?> <br> Sekretaris</p><br><br>
                <p>_________________________</p>
            </td>
        </tr>
    </table>

    </body>
</html>

<script type="text/javascript">
    window.print();
</script>