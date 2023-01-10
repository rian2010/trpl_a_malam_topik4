<html>
	<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <form action="pro_saran.php" method="post">	
    <div class="container-sm">
    <div class="card mt-5">
	<div class="card-body">
    <h5 class="card-title">Laporan Kerusakan</h5>	
		<table>
			<tr>
				<td>Laporan</td>
				<td><textarea type="text" name="saran"></textarea></td>					
			</tr>	
			<tr>
            
            <td><div class="mb-4"><label for="formFile" class="form-label">Foto</label></td>
            <td><input class="form-control" type="file" id="formFile" name="foto"></div></td>
            
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	</div>
	</div>
	</div>
	</form>
</body>
</html>