<div class="col-md-6">

    <div class="box box-info">
        <!-- <div class="box-header with-border">
            <h3 class="box-title"><?= $judul ?></h3>
        </div> -->
        <br>
        <form method="POST" action="<?= base_url('buku/update') ?>" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Id Buku</label>
                    <div class="col-sm-8">
                        <input type="text" name="id_buku" value="<?= $data['id_buku']; ?>" class="form-control" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Judul Buku</label>
                    <div class="col-sm-8">
                        <input type="text" name="judul_buku" value="<?= $data['judul_buku']; ?>" class="form-control" placeholder="Judul Buku" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Pengarang</label>
                    <div class="col-sm-8">
                        <select name="id_pengarang" class="form-control select2" id="">
                            <option value=""> - Pilih Pengarang - </option>
                            <?php
                            foreach ($pengarang as $row) {
                                if ($data['id_pengarang'] == $row->id_pengarang) { ?>
                                    <option value="<?= $row->id_pengarang ?>" selected><?= $row->nama_pengarang ?></option>
                                <?php } else { ?>
                                    <option value="<?= $row->id_pengarang ?>"><?= $row->nama_pengarang ?></option>
                            <?php }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Penerbit</label>
                    <div class="col-sm-8">
                        <select name="id_penerbit" class="form-control select2" id="">
                            <option value=""> - Pilih Penerbit - </option>
                            <?php
                            foreach ($penerbit as $row) {
                                if ($data['id_penerbit'] == $row->id_penerbit) { ?>
                                    <option value="<?= $row->id_penerbit ?>" selected><?= $row->nama_penerbit ?></option>
                                <?php } else { ?>
                                    <option value="<?= $row->id_penerbit ?>"><?= $row->nama_penerbit ?></option>
                            <?php }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Tahun Terbit</label>
                    <div class="col-sm-8">
                        <select name="tahun_terbit" class="form-control select2" id="">
                            <option value=""> - Pilih Tahun - </option>
                            <?php
                            for ($tahun = 2000; $tahun <= 2022; $tahun++) {
                                if ($data['tahun_terbit'] == $tahun) { ?>
                                    <option value="<?= $tahun; ?>" selected><?= $tahun; ?></option>
                                <?php } else { ?>
                                    <option value="<?= $tahun; ?>"><?= $tahun; ?></option>
                            <?php }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">Jumlah</label>
                    <div class="col-sm-8">
                        <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" class="form-control">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="<?= base_url('buku') ?>" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
        </form>
    </div>
</div>