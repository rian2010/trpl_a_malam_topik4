<?php
include 'koneksi.php'
?>
<html>
    
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <!--content-->
    <div class="container-sm">
    <div class="card mt-5">
    <div class="card-body">
    <h5 class="card-title">Form Pengajuan</h5>
    <!-- Content here -->
    <!--NIM-->
    <form class="form-horizontal mt-4 mb-5" method="POST" action="proses_pengajuan.php">
    <div class="form-group row">
        <label class="control-label col-sm-2" for="nim">NIM</label>
            <div class="col-sm-10">
                <input type="text" name="nim" placeholder="Masukan NIM Anda" id="nim" class="form-control" onkeypress="return hanyaAngka(event)" required/>         
            </div>
    </div>
    <!--nama-->
    <div class="form-group row">
        <label class="control-label col-sm-2" for="nama">Nama Lengkap</label>
        <div class="col-sm-10">
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Nama Lengkap" required/>
        </div>
    </div>
    <!--email-->
    <div class="form-group row">
        <label class="control-label col-sm-2" for="hp">Email</label>
        <div class="col-sm-10">
            <input name="hp" type="email" class="form-control" id="hp" placeholder="aaaaa@a.co.id" required/>
        </div>
    </div>


        <div class="form-group row">
                            <label class="control-label col-sm-2" for="input-3">Penanggung Jawab</label>
                            <div class="col-sm-10">
                                <select name="dosen_penanggung" id="input-3" class="form-control" required>
                                    <option value="" disabled selected>Penanggung Jawab</option>
                                    <?php  $query = mysqli_query($koneksi, 'SELECT * FROM dosen');
                                        while ($data = mysqli_fetch_array($query)) {

                                                
                                                ?>
                                        <option value="<?= $data["id_dosen"]; ?>"><?= $data["nama_dosen"]; ?></option>
                                    <?php } ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="input-3">Ruangan</label>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="kode_ruangan" id="input-3" class="form-control" required>
                                        <option value="" disabled selected>Pilih Ruangan</option>
                                            <?php 
                                            $query = mysqli_query($koneksi, "SELECT * FROM ruang WHERE ruang.status_ruangan='Kosong'");
                                            while ($r = mysqli_fetch_array($query)) {
                                            ?>
                                                <option value="<?= $r["id_ruangan"] ?>">Ruang <?= $r["kode_ruangan"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="input-5">Tanggal Peminjaman</label>
                            <div class="col-sm-10">
                                <input name="tanggal_pinjam" type="date" class="form-control" id="input-5" placeholder="30/12/2022" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="input-6">Jam Peminjaman</label>
                            <div class="col-sm-10">
                                <input name="waktu_pinjam" type="time" class="form-control" id="input-6" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2" for="input-6">Jam Selesai</label>
                            <div class="col-sm-10">
                                <input name="waktu_balik" type="time" class="form-control" id="input-6" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button name="submit" type="submit" class="btn btn-dark">Submit</button>
                            </div>
                        </div>
    </div>
    </div>
    </div>
</form>
<script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>
</body>
