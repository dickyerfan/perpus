<div class="col-md-6">

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul ?></h3>
        </div>
        <form method="POST" action="<?= base_url('pengarang/simpan') ?>" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Nama Pengarang</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_pengarang" class="form-control" placeholder="Nama Pengarang" required>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="<?= base_url('pengarang') ?>" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
            </div>
        </form>
    </div>
</div>