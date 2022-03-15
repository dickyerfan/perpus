<div class="col-md-6">

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul ?></h3>
        </div>
        <form method="POST" action="<?= base_url('pengarang/update') ?>" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Id Pengarang</label>
                    <div class="col-sm-8">
                        <input type="text" name="id_pengarang" class="form-control" value="<?= $data['id_pengarang']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Nama Pengarang</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_pengarang" class="form-control" value="<?= $data['nama_pengarang']; ?>" placeholder="Nama Pengarang" required>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="<?= base_url('anggota') ?>" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
        </form>
    </div>
</div>