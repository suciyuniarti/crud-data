<body class="bg-primary">
  <div class="container-fluid p-5">
    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow-sm border-0">
          <div class="card-header">
            <h3 class="card-title p-4"><?= $title; ?></h3>
          </div>
          <div class="card-body">
            <div class="table-responsive px-4">

              <!-- Tombol Aksi -->
              <a href="<?= base_url('form/add'); ?>" class="btn btn-sm btn-primary mb-3">Tambah Data</a>

              <!-- Alert Flashdata -->
              <?php if ($this->session->flashdata('message')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('message'); ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php endif; ?>

              <!-- Tabel Data -->
              <table class="table table-bordered table-hover" id="table">
                <thead class="table-light">
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($form as $data) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= htmlspecialchars($data->nama); ?></td>
                      <td><?= date('d-m-Y', strtotime($data->tgl_lahir)); ?></td>
                      <td><?= htmlspecialchars($data->jenis_kelamin); ?></td>
                      <td><?= htmlspecialchars($data->agama); ?></td>
                      <td><?= htmlspecialchars($data->alamat); ?></td>
                      <td>
                      <a href="<?= base_url('form/edit/' . $data->id); ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="<?= base_url('form/delete/' . $data->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">
                          <i class="fas fa-trash"></i> Hapus
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Tabel -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>