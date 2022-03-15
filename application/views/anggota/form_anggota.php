<div class="col-md-6">

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $judul ?></h3>
        </div>
        <form method="POST" action="<?= base_url('anggota/simpan') ?>" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">Id Anggota</label>
                    <div class="col-sm-8">
                        <input type="text" name="id_anggota" class="form-control" value="<?= $id_anggota ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Nama Anggota</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_anggota" class="form-control" placeholder="Nama Anggota" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                        <select name="jenkel" class="form-control" required>
                            <option value=""> - Pilih Jenis Kelamin - </option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea name="alamat" class="form-control" id="" cols="30" rows="5" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-4 control-label">No Telepon</label>
                    <div class="col-sm-8">
                        <input type="text" name="no_hp" class="form-control" placeholder="NO. HP" required>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="<?= base_url('anggota') ?>" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
            </div>
        </form>
    </div>
</div>