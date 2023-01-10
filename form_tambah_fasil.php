<html>
	<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <form action="pro_tambah_fasil.php" method="post">	
    <div class="container-sm">
    <div class="card mt-5" style="width: 67rem;">
  <div class="card-body">
    <h5 class="card-title">Tambah Fasilitas</h5>	
		<table>
			<tr>
				<td>Nama Alat</td>
				<td><input type="text" name="nama_alat"></td>					
			</tr>	
			<tr>
            
            <td>Jumlah</td>
            <td><input type="text" name="jumlah"></div></td>
            
			</tr>
            <tr>
                <td>Ruangan</td>
                <td>
                <select name="id_ruangan" id="input-3" class="form-control">
                    <option value="" disabled selected>Pilih Ruangan</option>
                        <?php 
                    include "koneksi.php";
                    $query = mysqli_query($koneksi, 'SELECT * FROM ruang');
                    while ($r = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?= $r["id_ruangan"] ?>">Ruang <?= $r["kode_ruangan"] ?></option>
                    <?php } ?>
                </select>
                </td>    
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	</div>
	</div>
	</div>
	</form>
</body>
</html>