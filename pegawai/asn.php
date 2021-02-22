<div class="d-flex justify-content-between">
    <button type="button" class="btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#asnTambahModal">Tambah</button>
    <a href="cetak/asn.php" target="_blank" class="btn btn-sm btn-secondary shadow-sm">Cetak</a>
</div>
<div class="table-responsive mt-3">
    <table class="table table-bordered table-hover shadow-sm">
        <thead class="table-secondary">
            <tr>
                <th class="align-middle text-center">NO</th>
                <th class="align-middle text-center">NAMA / NIP</th>
                <th class="align-middle text-center">JABATAN</th>
                <th class="align-middle text-center">PANGKAT / GOLONGAN</th>
                <th class="align-middle text-center">OPSI</th>
            </tr>
        </thead>
        <tbody>
            <?php $noASN=1; while($asn = mysqli_fetch_assoc($getASN)) { ?>
                <tr>
                    <td class="align-middle text-center" width="5%"><?php echo $noASN++ ?></td>
                    <td class="align-middle"><?php echo '<strong>'.$asn['nama'].'</strong><br>'.$asn['nip'] ?></td>
                    <td class="align-middle text-center"><?php echo $asn['jabatan'] ?></td>
                    <td class="align-middle text-center"><?php echo $asn['pangkat'].' / '.$asn['golongan'] ?></td>
                    <td class="align-middle text-center" width="15%">
                        <button type="button" id="tblUbahASN" class="btn btn-sm btn-info text-white" data-bs-toggle="modal" data-bs-target="#asnUbahModal" data-id="<?php echo $asn['id'] ?>" data-nama="<?php echo $asn['nama'] ?>" data-nip="<?php echo $asn['nip'] ?>" data-jabatan="<?php echo $asn['jabatan'] ?>" data-pangkat="<?php echo $asn['pangkat'] ?>" data-golongan="<?php echo $asn['golongan'] ?>">Ubah</button>
                        <button type="button" id="tblHapusASN" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#asnHapusModal" data-id="<?php echo $asn['id'] ?>" data-nama="<?php echo $asn['nama'] ?>">Hapus</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="asnTambahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="asnTambahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white shadow-sm">
        <h5 class="modal-title" id="asnTambahModalLabel">Tambah ASN</h5>
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
                        <input type="text" maxlength="18" class="form-control shadow-sm" id="nip" name="nip" placeholder="NIP">
                        <label for="nip">NIP</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control shadow-sm" id="pangkat" name="pangkat" placeholder="Pangkat">
                        <label for="pangkat">Pangkat</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" maxlength="10" class="form-control shadow-sm" id="golongan" name="golongan" placeholder="Golongan">
                        <label for="golongan">Golongan</label>
                    </div>
                </div>
            </div>
            <div class="form-floating">
                <textarea class="form-control shadow-sm" placeholder="Jabatan" id="jabatan" name="jabatan" style="height: 100px"></textarea>
                <label for="jabatan">Jabatan</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-primary shadow-sm" name="tblSimpanASN" value="Simpan ASN">Simpan</button>
            <button type="button" class="btn btn-sm btn-secondary shadow-sm" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Ubah -->
<div class="modal fade" id="asnUbahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="asnUbahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-info text-white shadow-sm">
        <h5 class="modal-title" id="asnUbahModalLabel">Ubah ASN</h5>
      </div>
      <form id="formUbahASN" action="" method="post">
        <div class="modal-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control shadow-sm" id="nama" name="nama" placeholder="Nama Lengkap">
                        <input type="hidden" class="form-control shadow-sm" id="id" name="id" placeholder="id">
                        <label for="nama">Nama Lengkap</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" maxlength="18" class="form-control shadow-sm" id="nip" name="nip" placeholder="NIP">
                        <label for="nip">NIP</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control shadow-sm" id="pangkat" name="pangkat" placeholder="Pangkat">
                        <label for="pangkat">Pangkat</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" maxlength="10" class="form-control shadow-sm" id="golongan" name="golongan" placeholder="Golongan">
                        <label for="golongan">Golongan</label>
                    </div>
                </div>
            </div>
            <div class="form-floating">
                <textarea class="form-control shadow-sm" placeholder="Jabatan" id="jabatan" name="jabatan" style="height: 100px"></textarea>
                <label for="jabatan">Jabatan</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-info text-white shadow-sm" name="tblUbahASN" value="Ubah ASN">Ubah</button>
            <button type="button" class="btn btn-sm btn-secondary shadow-sm" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="asnHapusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="asnHapusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white shadow-sm">
        <h5 class="modal-title" id="asnHapusModalLabel">Hapus ASN</h5>
      </div>
      <form id="formHapusASN" action="" method="post">
        <div class="modal-body">
            <input type="hidden" class="form-control shadow-sm" id="id" name="id" placeholder="id">
            <p id="ket" class="text-center pt-3">Anda yakin ingin menghapus ASN ini?</p>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-danger shadow-sm" name="tblHapusASN" value="Hapus ASN">Hapus</button>
            <button type="button" class="btn btn-sm btn-secondary shadow-sm" data-bs-dismiss="modal">Tutup</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
  // Proses Tambah ASN
  if(isset($_POST['tblSimpanASN'])){
      $id_asn = time();
      $nama_asn = $_POST['nama'];
      $nip_asn = $_POST['nip'];
      $jabatan_asn = $_POST['jabatan'];
      $pangkat_asn = $_POST['pangkat'];
      $golongan_asn = $_POST['golongan'];
      
      $tambahASN = mysqli_query($conn, "INSERT INTO asn (id, nama, nip, jabatan, pangkat, golongan) VALUE ('$id_asn', '$nama_asn', '$nip_asn','$jabatan_asn', '$pangkat_asn', '$golongan_asn')");
      echo "<script> window.location.href = '".$url."/pegawai';</script>";
  }else if(isset($_POST['tblUbahASN'])){
      $id_asn = $_POST['id'];
      $nama_asn = $_POST['nama'];
      $nip_asn = $_POST['nip'];
      $jabatan_asn = $_POST['jabatan'];
      $pangkat_asn = $_POST['pangkat'];
      $golongan_asn = $_POST['golongan'];

      $hapusASN = mysqli_query($conn, "UPDATE asn SET nama='$nama_asn', nip='$nip_asn', jabatan='$jabatan_asn', pangkat='$pangkat_asn', golongan='$golongan_asn' WHERE id=$id_asn");
      echo "<script> window.location.href = '".$url."/pegawai';</script>";
  }else if(isset($_POST['tblHapusASN'])){
      $id_asn = $_POST['id'];

      $hapusASN = mysqli_query($conn, "DELETE FROM asn WHERE id = $id_asn");
      echo "<script> window.location.href = '".$url."/pegawai';</script>";
  }
?>

<script>
      // Ubah
      const tblUbahASN = document.querySelectorAll('#tblUbahASN');
      const inputUbahIdASN = document.querySelector('#formUbahASN #id');
      const inputUbahNamaASN = document.querySelector('#formUbahASN #nama');
      const inputUbahNipASN = document.querySelector('#formUbahASN #nip');
      const inputUbahJabatanASN = document.querySelector('#formUbahASN #jabatan');
      const inputUbahPangkatASN = document.querySelector('#formUbahASN #pangkat');
      const inputUbahGolonganASN = document.querySelector('#formUbahASN #golongan');

      for(let i = 0; i < tblUbahASN.length; i++){
        tblUbahASN[i].addEventListener("click", function(e){
          const id = this.dataset.id;
          const nama = this.dataset.nama;
          const nip = this.dataset.nip;
          const jabatan = this.dataset.jabatan;
          const pangkat = this.dataset.pangkat;
          const golongan = this.dataset.golongan;
          inputUbahIdASN.value = id;
          inputUbahNamaASN.value = nama;
          inputUbahNipASN.value = nip;
          inputUbahJabatanASN.value = jabatan;
          inputUbahPangkatASN.value = pangkat;
          inputUbahGolonganASN.value = golongan;
        });
      }

      // Hapus
      const tblHapusASN = document.querySelectorAll('#tblHapusASN');
      const inputHapusIdASN = document.querySelector('#formHapusASN #id');
      const ketHapusASN = document.querySelector('#formHapusASN #ket');

      for(let i = 0; i < tblHapusASN.length; i++){
        tblHapusASN[i].addEventListener("click", function(e){
          const id = this.dataset.id;
          const nama = this.dataset.nama;
          inputHapusIdASN.value = id;
          ketHapusASN.innerHTML = "Anda yakin ingin menghapus <strong>"+nama+"</strong>?";
        });
      }

    </script>