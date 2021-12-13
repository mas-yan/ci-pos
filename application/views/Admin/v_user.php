<!-- Main content -->
<div class="col-12">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Data User</h3>
    </div>
    <div class="card-body">
      <button data-toggle="modal" data-target="#tambah" style="margin-bottom: 20px" type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah User Admin</button>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No.</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($user as $users) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td class="text-center"><img style="width: 50px;height: 50px" src="<?= base_url('assets/') ?>img/<?= $users['foto'] ?>"></td>
              <td class="text-center"><?= $users['nama']; ?></td>
              <td class="text-center"><?= $users['username']; ?></td>
              <td class="text-center">***</td>
              <td class="text-center"><?= $users['level']; ?></td>
              <td class="text-center">
                <?php
                if ($users['status'] == 'Aktif') : ?>
                  <span class="badge badge-primary"><?= $users['status']; ?></span>
                <?php else : ?>
                  <span class="badge badge-danger"><?= $users['status']; ?></span>
                <?php endif ?>
              </td>
              <td class="text-center">
                <button type="button" data-toggle="modal" data-target="#modal-edit<?= $users['id_user']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                <a href="<?= base_url('user/delete/') ?><?= $users['id_user']; ?>" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a>
              </td>
            </tr>

            <div class="modal fade" id="modal-edit<?= $users['id_user']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?= base_url('user/edit/') ?><?= $users['id_user']; ?>">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Nama</label>
                          <input required value="<?= $users['nama']; ?>" name="nama" placeholder="ubah nama" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="email" name="username" value="<?= $users['username']; ?>" class="form-control" id="username">
                        </div>
                        <!-- <div class="form-group">
                          <label for="username">password</label>
                          <input type="text" name="password" class="form-control" id="password">
                        </div> -->
                        <div class="form-group">
                          <label for="level">level</label>
                          <input name="level" type="text" value="<?= $users['level']; ?>" class="form-control" id="level">
                        </div>
                      </div>

                      <!-- /.card-body -->
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="tombol_ubah" class="btn btn-primary">Ubah Data</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>


<!-- Modal Tambah-->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Tambah user</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" action="<?= base_url('user/add') ?>">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" value="<?= set_value('nama') ?>" required name="nama" class="form-control" placeholder="Masukkan Nama user" id="nama">
            <small class="text-danger"><?= form_error('nama'); ?></small>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" required name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Masukkan Nama user" id="username">
            <small class="text-danger"><?= form_error('username'); ?></small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password" class="form-control" placeholder="Masukkan password" id="password">
            <small class="text-danger"><?= form_error('password'); ?></small>
          </div>
          <div class="form-group">
            <label for="level">level</label>
            <select class="form-control" required name="level" id="level">
              <option value="">-- PILIH --</option>
              <option value="Admin">Admin</option>
              <option value="Kasir">Kasir</option>
            </select>
            <small class="text-danger"><?= form_error('level'); ?></small>
          </div>
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" name="foto" id="foto">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="tombol" name="tambah" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>