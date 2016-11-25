<!DOCTYPE html>
<html>
	<body>
		<h2>Contoh Parsing JSON di JavaScript</h2>
		<p id="demo"></p>
	</body>
	
	<script>
		var text = '{"nim":"1110001","nama":"Abdul Kadir","jurusan":"TI"}';
		var obj = JSON.parse(text);

		document.getElementById("demo").innerHTML =
			"NIM : " + obj.nim + "<br>" +
			"Nama : " + obj.nama + "<br>" +
			"Jurusan : " + obj.jurusan;
	</script>
</html>