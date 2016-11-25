<!DOCTYPE html>
<html>
	<body>
		<h2>Get JSON From File</h2>
		<p id="demo"></p>
	</body>
	
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script>
		var file = "mhs.json";
		
		$.getJSON(file, function(data){
			$("#demo").html(
				"NIM : " + data.nim + "<br>" +
				"Nama : " + data.nama + "<br>" +
				"Jurusan : " + data.jurusan
			);
		});
	</script>
</html>