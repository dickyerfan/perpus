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
                    <th>ID Peminjaman</th>
                    <th>Peminjam</th>
                    <th>Buku</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Kembali</th>
                    <th>Status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) :
                    $tgl_kembali = new DateTime($row->tgl_kembali);
                    $tgl_sekarang = new DateTime();
                    $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");

                ?>
                    <tr>
                        <td><?= $row->id_pm; ?></td>
                        <td><?= $row->nama_anggota; ?></td>
                        <td><?= $row->judul_buku; ?></td>
                        <td><?= $row->tgl_pinjam; ?></td>
                        <td><?= $row->tgl_kembali; ?></td>
                        <td>
                            <?php
                            if ($tgl_kembali >= $tgl_sekarang or $selisih == 0) {
                                echo "<span class='label label-warning'>Belum dikembalikan</span>";
                            } else {
                                echo "Terlambat : <b style = 'color:red';>" . $selisih . "</b>  Hari <br> <span class='label label-danger'>Denda Perhari = 1.000</span>";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="<?= base_url() ?>peminjaman/kembalikan/<?= $row->id_pm; ?>" class="btn btn-primary btn-xs" onclick="return confirm('Yakin Buku ini mau di kembalikan.?')"> Kembalikan</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>