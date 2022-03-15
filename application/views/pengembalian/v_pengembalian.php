<?php
if (!empty($this->session->flashdata('info'))) { ?>
    <div class="alert alert-success" role="alert">
        <?= $this->session->flashdata('info') ?>
        <?= $this->session->unset_userdata('info') ?>
    </div>
<?php }
?>

<div class="row">
    <div class="col-md-12 mb-2">
        <a href="<?= base_url('Peminjaman/tambah_peminjaman') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
    </div>
</div>
<br>
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Tgl Dikembalikan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data as $row) :
                    $tgl_kembali = new DateTime($row->tgl_kembali);
                    $tgl_sekarang = new DateTime();
                    $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");

                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->nama_anggota; ?></td>
                        <td><?= $row->judul_buku; ?></td>
                        <td><?= $row->tgl_pinjam; ?></td>
                        <td><?= $row->tgl_kembali; ?></td>
                        <td><?= $row->tgl_kembalikan; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>