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
        <a href="<?= base_url('anggota/tambah_anggota') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Anggota</a>
    </div>
</div>
<br>
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama Anggota</th>
                    <th>Jenis kelamin</th>
                    <th>Alamat</th>
                    <th>No. Tlpn</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) : ?>
                    <tr>
                        <td><?= $row->id_anggota; ?></td>
                        <td><?= $row->nama_anggota; ?></td>
                        <td><?= $row->jenkel; ?></td>
                        <td><?= $row->alamat; ?></td>
                        <td><?= $row->no_hp; ?></td>
                        <td>
                            <a href="<?= base_url() ?>anggota/edit/<?= $row->id_anggota ?>" class="btn btn-success btn-xs">Edit</a>
                            <a href="<?= base_url() ?>anggota/hapus/<?= $row->id_anggota ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau dihapus.?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>