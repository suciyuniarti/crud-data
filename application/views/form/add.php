<body>
  <div class="container-fluid p-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title p-4"><?= $title; ?></h3>
          </div>
          <div class="card-body">
            <div class="table-responsive p-4">

            <form action="<?= base_url('form/insert'); ?>" method="post">
                <!-- Nama -->
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                
                <!-- Tanggal Lahir -->
                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                </div>
                
                <!-- Jenis Kelamin -->
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" required>
                        <label class="form-check-label" for="laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                
                <!-- Agama -->
                <div class="mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" id="agama" name="agama" required>
                        <option selected disabled value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div>

                <!-- Tombol -->
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?= base_url('form'); ?>" class="btn btn-primary">Kembali</a>
            </form>

       
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
