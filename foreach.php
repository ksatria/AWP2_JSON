<!DOCTYPE html>
<html>
	<body>
		<h4>Daftar Mahasiswa</h4>
		<p id="demo"></p>
	</body>
	
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script>
		var file = "mahasiswa.json";
		
		$.getJSON(file, function(data){
			$.each(data.mahasiswa, function(i,mhs){
				$("#demo").append(
					"NIM : " + mhs.nim + "<br>" +
					"Nama : " + mhs.nama + "<br>" +
					"Jurusan : " + mhs.jurusan + "<br><br>"
				);
			});
		});
	</script>
</html>