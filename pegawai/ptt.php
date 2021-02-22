<div class="d-flex justify-content-between">
    <button type="button" class="btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#pttTambahModal">Tambah</button>
    <a href="cetak/ptt.php" target="_blank" class="btn btn-sm btn-secondary shadow-sm">Cetak</a>
</div>
<div class="table-responsive mt-3">
    <table class="table table-bordered table-hover shadow-sm">
        <thead class="table-secondary">
            <tr>
                <th class="align-middle text-center">NO</th>
                <th class="align-middle text-center">NAMA</th>
                <th class="align-middle text-center">PENDIDIKAN</th>
                <th class="align-middle text-center">TUPOKSI</th>
                <th class="align-middle text-center">BAGIAN</th>
                <th class="align-middle text-center">OPSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $noPTT=1; while($ptt = mysqli_fetch_assoc($getPTT)) { ?>
                <tr>
                    <td class="align-middle text-center" width="5%"><?php echo $noPTT++ ?></td>
                    <td class="align-middle"><?php echo '<strong>'.$ptt['nama'].'</strong><br>'.$ptt['jk'] ?></td>
                    <td class="align-middle text-center"><?php echo $ptt['pendidikan'] ?></td>
                    <td class="align-middle text-center"><?php echo $ptt['tupoksi'] ?></td>
                    <td class="align-middle text-center"><?php echo $ptt['bagian'] ?></td>
                    <td class="align-middle text-center" width="15%">
                        <button type="button" id="tblUbahPTT" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#pttUbahModal" data-id="<?php echo $ptt['id'] ?>" data-nama="<?php echo $ptt['nama'] ?>" data-jk="<?php echo $ptt['jk'] ?>" data-tempat_lahir="<?php echo $ptt['tempat_lahir'] ?>" data-tanggal_lahir="<?php echo $ptt['tanggal_lahir'] ?>" data-pendidikan="<?php echo $ptt['pendidikan'] ?>" data-tupoksi="<?php echo $ptt['tupoksi'] ?>"  data-bagian="<?php echo $ptt['bagian'] ?>">Ubah</button>
                        <button type="button" id="tblHapusPTT" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#pttHapusModal" data-id="<?php echo $ptt['id'] ?>" data-nama="<?php echo $ptt['nama'] ?>">Hapus</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="pttTambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="pttTambahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white shadow-sm">
        <h5 class="modal-title" id="pttTambahModalLabel">Tambah PTT</h5>
      </div>
      <form action="" method="post">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control shadow-sm" id="nama" name="nama" placeholder="Nama Lengkap">
                        <label for="nama">Nama Lengkap</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <select class="form-select shadow-sm" id="jk" name="jk" aria-label="Default select example">
                            <option value="" selected>-- Pilih --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <label for="jk">Jenis Kelamin</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control shadow-sm" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat">
                        <label for="tempat_lahir">Tempat</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control shadow-sm" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <select class="form-select shadow-sm" id="pendidikan" name="pendidikan" aria-label="Default select example">
                            <option value="" selected>-- Pilih --</option>
                            <option value="SMA">SMA</option>
                            <option value="D3">D3</option>
                            <option value="D4 / S1">D4 / S1</option>
                            <option value="S2">S2</option>
                        </select>
                        <label for="pendidikan">Pendidikan</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select shadow-sm" id="bagian" name="bagian" aria-label="Default select example">
                    <option value="" selected>-- Pilih --</option>
                    <option value="Pengelola Pengadaan Barang / Jasa">Pengelola Pengadaan Barang / Jasa</option>
                    <option value="Pembinaan Dan Advokasi Pengadaan Barang / Jasa">Pembinaan Dan Advokasi Pengadaan Barang / Jasa</option>
                    <option value="Pengelolaan LPSE">Pengelolaan LPSE</option>
                </select>
                <label for="bagian">Bagian</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control shadow-sm" placeholder="Tupoksi" id="tupoksi" name="tupoksi" style="height: 100px"></textarea>
                <label for="tupoksi">Tupoksi</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-primary shadow-sm" name="tblSimpanPTT" value="Simpan PTT">Simpan</button>
            <button type="button" class="btn btn-sm btn-secondary shadow-sm" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Ubah -->
<div class="modal fade" id="pttUbahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="pttUbahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-info text-white shadow-sm">
        <h5 class="modal-title" id="pttUbahModalLabel">Ubah PTT</h5>
      </div>
      <form id="formUbahPTT" action="" method="post">
        <div class="modal-body">
        <div class="row">
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control shadow-sm" id="nama" name="nama" placeholder="Nama Lengkap">
                        <input type="hidden" class="form-control shadow-sm" id="id" name="id" placeholder="ID">
                        <label for="nama">Nama Lengkap</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <select class="form-select shadow-sm" id="jk" name="jk" aria-label="Default select example">
                            <option value="" selected>-- Pilih --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <label for="jk">Jenis Kelamin</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control shadow-sm" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat">
                        <label for="tempat_lahir">Tempat</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control shadow-sm" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <select class="form-select shadow-sm" id="pendidikan" name="pendidikan" aria-label="Default select example">
                            <option value="" selected>-- Pilih --</option>
                            <option value="SMA">SMA</option>
                            <option value="D3">D3</option>
                            <option value="D4 / S1">D4 / S1</option>
                            <option value="S2">S2</option>
                        </select>
                        <label for="pendidikan">Pendidikan</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select shadow-sm" id="bagian" name="bagian" aria-label="Default select example">
                    <option value="" selected>-- Pilih --</option>
                    <option value="Pengelola Pengadaan Barang / Jasa">Pengelola Pengadaan Barang / Jasa</option>
                    <option value="Pembinaan Dan Advokasi Pengadaan Barang / Jasa">Pembinaan Dan Advokasi Pengadaan Barang / Jasa</option>
                    <option value="Pengelolaan LPSE">Pengelolaan LPSE</option>
                </select>
                <label for="bagian">Bagian</label>
            </div>
            <div class="form-floating">
                <textarea class="form-control shadow-sm" placeholder="Tupoksi" id="tupoksi" name="tupoksi" style="height: 100px"></textarea>
                <label for="tupoksi">Tupoksi</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-info text-white shadow-sm" name="tblUbahPTT" value="Ubah PTT">Ubah</button>
            <button type="button" class="btn btn-sm btn-secondary shadow-sm" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="pttHapusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="pttHapusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white shadow-sm">
        <h5 class="modal-title" id="pttHapusModalLabel">Hapus PTT</h5>
      </div>
      <form id="formHapusPTT" action="" method="post">
        <div class="modal-body">
            <input type="hidden" class="form-control shadow-sm" id="id" name="id" placeholder="id">
            <p id="ket" class="text-center pt-3">Anda yakin ingin menghapus PTT ini?</p>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-danger shadow-sm" name="tblHapusPTT" value="Hapus PTT">Hapus</button>
            <button type="button" class="btn btn-sm btn-secondary shadow-sm" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
  // Proses Tambah PTT
  if(isset($_POST['tblSimpanPTT'])){
      $id_ptt = time();
      $nama_ptt = $_POST['nama'];
      $jk_ptt = $_POST['jk'];
      $tempat_lahir_ptt = $_POST['tempat_lahir'];
      $tanggal_lahir_ptt = $_POST['tanggal_lahir'];
      $pendidikan_ptt = $_POST['pendidikan'];
      $tupoksi_ptt = $_POST['tupoksi'];
      $bagian_ptt = $_POST['bagian'];
      
      $tambahPTT = mysqli_query($conn, "INSERT INTO ptt (id, nama, jk, tempat_lahir, tanggal_lahir, pendidikan, tupoksi, bagian) VALUE ('$id_ptt', '$nama_ptt', '$jk_ptt','$tempat_lahir_ptt', '$tanggal_lahir_ptt', '$pendidikan_ptt', '$tupoksi_ptt', '$bagian_ptt')");
      echo "<script> window.location.href = '".$url."/pegawai';</script>";
  }else if(isset($_POST['tblUbahPTT'])){
      $id_ptt = $_POST['id'];
      $nama_ptt = $_POST['nama'];
      $jk_ptt = $_POST['jk'];
      $tempat_lahir_ptt = $_POST['tempat_lahir'];
      $tanggal_lahir_ptt = $_POST['tanggal_lahir'];
      $pendidikan_ptt = $_POST['pendidikan'];
      $tupoksi_ptt = $_POST['tupoksi'];
      $bagian_ptt = $_POST['bagian'];

      $hapusPTT = mysqli_query($conn, "UPDATE ptt SET nama='$nama_ptt', jk='$jk_ptt', tempat_lahir='$tempat_lahir_ptt', tanggal_lahir='$tanggal_lahir_ptt', pendidikan='$pendidikan_ptt', tupoksi='$tupoksi_ptt', bagian='$bagian_ptt' WHERE id=$id_ptt");
      echo "<script> window.location.href = '".$url."/pegawai';</script>";
  }else if(isset($_POST['tblHapusPTT'])){
      $id_ptt = $_POST['id'];

      $hapusPTT = mysqli_query($conn, "DELETE FROM ptt WHERE id = $id_ptt");
      echo "<script> window.location.href = '".$url."/pegawai';</script>";
  }
?>

<script>
      // Ubah
      const tblUbahPTT = document.querySelectorAll('#tblUbahPTT');
      const inputUbahIdPTT = document.querySelector('#formUbahPTT #id');
      const inputUbahNamaPTT = document.querySelector('#formUbahPTT #nama');
      const inputUbahJkPTT = document.querySelector('#formUbahPTT #jk');
      const inputUbahTempatlahirPTT = document.querySelector('#formUbahPTT #tempat_lahir');
      const inputUbahTanggalLahirPTT = document.querySelector('#formUbahPTT #tanggal_lahir');
      const inputUbahPendidikanPTT = document.querySelector('#formUbahPTT #pendidikan');
      const inputUbahTupoksiPTT = document.querySelector('#formUbahPTT #tupoksi');
      const inputUbahBagianPTT = document.querySelector('#formUbahPTT #bagian');

      for(let i = 0; i < tblUbahPTT.length; i++){
        tblUbahPTT[i].addEventListener("click", function(e){
          const id = this.dataset.id;
          const nama = this.dataset.nama;
          const jk = this.dataset.jk;
          const tempat_lahir = this.dataset.tempat_lahir;
          const tanggal_lahir = this.dataset.tanggal_lahir;
          const pendidikan = this.dataset.pendidikan;
          const tupoksi = this.dataset.tupoksi;
          const bagian = this.dataset.bagian;
          inputUbahIdPTT.value = id;
          inputUbahNamaPTT.value = nama;
          inputUbahJkPTT.value = jk;
          inputUbahTempatlahirPTT.value = tempat_lahir;
          inputUbahTanggalLahirPTT.value = tanggal_lahir;
          inputUbahPendidikanPTT.value = pendidikan;
          inputUbahTupoksiPTT.value = tupoksi;
          inputUbahBagianPTT.value = bagian;
        });
      }

      // Hapus
      const tblHapusPTT = document.querySelectorAll('#tblHapusPTT');
      const inputHapusIdPTT = document.querySelector('#formHapusPTT #id');
      const ketHapusPTT = document.querySelector('#formHapusPTT #ket');

      for(let i = 0; i < tblHapusPTT.length; i++){
        tblHapusPTT[i].addEventListener("click", function(e){
          const id = this.dataset.id;
          const nama = this.dataset.nama;
          inputHapusIdPTT.value = id;
          ketHapusPTT.innerHTML = "Anda yakin ingin menghapus <strong>"+nama+"</strong>?";
        });
      }

    </script>