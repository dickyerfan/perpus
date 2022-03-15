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
        <a href="<?= base_url('penerbit/tambah_penerbit') ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Penerbit</a>
    </div>
</div>
<br>
<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Penerbit</th>
                    <th>Nama Penerbit</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) : ?>
                    <tr>
                        <td><?= $row->id_penerbit; ?></td>
                        <td><?= $row->nama_penerbit; ?></td>
                        <td>
                            <a href="<?= base_url() ?>penerbit/edit/<?= $row->id_penerbit ?>" class="btn btn-success btn-xs">Edit</a>
                            <a href="<?= base_url() ?>penerbit/hapus/<?= $row->id_penerbit ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin mau dihapus.?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>