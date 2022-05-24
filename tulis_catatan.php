<div class="card">
    <div class="card-header">
        <a href="user.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <form action="simpan_catatan.php" method="post">
            <div class="form-group">
                <label>Tanggal</label>
                <input name="tanggal" type="date" required class=form-control placeholder="Pilih Tanggal">
            </div>
            <div class="form-group">
                <label>Waktu</label>
                <input name="jam" type="time" required class=form-control placeholder="Masukkan Waktu">
            </div>
            <div class="form-group">
                <label>Lokasi yang dikunjungi</label>
                <input name="Lokasi" type="text" required class=form-control placeholder="Masukkan Nama Lokasi">
            </div>
            <div class="form-group">
                <label>Suhu Tubuh</label>
                <input name="Suhu_Tubuh" type="text" required class=form-control placeholder="Masukkan Suhu Tubuh">
            </div>
            
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> SIMPAN</button>
            <button type="reset" class="btn btn-warning"><i class="fa fa-paint-brush"></i> CLEAR</button>
        </form>
    </div>
</div>