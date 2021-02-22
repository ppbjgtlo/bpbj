<?php
  include "../../config.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>BPBJ Prov. Gorontalo - Cetak ASN</title>
    <script type="text/javascript">
        window.onload = function(){
        window.print();
        window.setTimeout("window.close();", 100);
        };
    </script>
  </head>
  <body class="container-fluid mt-3">
  <div class="table-responsive small">
    <table class="table table-bordered table-sm caption-top">
        <caption class="text-center"><strong>ASN BIRO PENGADAAN BARANG / JASA SETDA PROVINSI GORONTALO</strong></caption>
        <thead class="table-secondary">
            <tr>
                <th class="align-middle text-center">NO</th>
                <th class="align-middle text-center">NAMA / NIP</th>
                <th class="align-middle text-center">JABATAN</th>
                <th class="align-middle text-center">PANGKAT / GOLONGAN</th>
            </tr>
        </thead>
        <tbody>
            <?php $noASN=1; while($asn = mysqli_fetch_assoc($getASN)) { ?>
                <tr>
                    <td class="align-middle text-center" width="5%"><?php echo $noASN++ ?></td>
                    <td class="align-middle"><?php echo '<strong>'.$asn['nama'].'</strong><br>'.$asn['nip'] ?></td>
                    <td class="align-middle text-center"><?php echo $asn['jabatan'] ?></td>
                    <td class="align-middle text-center"><?php echo $asn['pangkat'].' / '.$asn['golongan'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>