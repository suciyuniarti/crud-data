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

              <!-- Form update Data Diri -->
              <form action="<?= base_url('form/update'); ?>" method="post">

                <!-- Hidden input untuk ID -->
                <input type="hidden" name="id" value="<?= $data_diri->id ?>">

                <!-- Nama -->
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_diri->nama ?>" required>
                </div>

                <!-- Tanggal Lahir -->
                <div class="mb-3">
                  <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $data_diri->tgl_lahir ?>" required>
                </div>

                <!-- Jenis Kelamin -->
                <div class="mb-3">
                  <label class="form-label">Jenis Kelamin</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-laki" <?= ($data_diri->jenis_kelamin == 'Laki-laki') ? 'checked' : '' ?> required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" <?= ($data_diri->jenis_kelamin == 'Perempuan') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                  </div>
                </div>

                <!-- Agama -->
                <div class="mb-3">
                  <label for="agama" class="form-label">Agama</label>
                  <select class="form-select" id="agama" name="agama" required>
                    <option disabled value="">Pilih Agama</option>
                    <option value="Islam" <?= ($data_diri->agama == 'Islam') ? 'selected' : '' ?>>Islam</option>
                    <option value="Kristen" <?= ($data_diri->agama == 'Kristen') ? 'selected' : '' ?>>Kristen</option>
                    <option value="Katolik" <?= ($data_diri->agama == 'Katolik') ? 'selected' : '' ?>>Katolik</option>
                    <option value="Hindu" <?= ($data_diri->agama == 'Hindu') ? 'selected' : '' ?>>Hindu</option>
                    <option value="Buddha" <?= ($data_diri->agama == 'Buddha') ? 'selected' : '' ?>>Buddha</option>
                    <option value="Konghucu" <?= ($data_diri->agama == 'Konghucu') ? 'selected' : '' ?>>Konghucu</option>
                  </select>
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <textarea class="form-control" id="alamat" name="alamat" rows="3" required><?= $data_diri->alamat ?></textarea>
                </div>

                <!-- Tombol Submit -->
                <button type="submit" class="btn btn-success">Update</button>
                <a href="<?= base_url('form'); ?>" class="btn btn-primary">Kembali</a>

              </form>
              <!-- End Form -->
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
