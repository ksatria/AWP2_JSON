<!DOCTYPE html>
<html>
	<body>
		<h2>Contoh Parsing JSON Menggunakan jQuery</h2>
		<p id="demo"></p>
	</body>
	
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script>
		var text = '{"nim":"1110001","nama":"Abdul Kadir","jurusan":"TI"}';
		var obj = $.parseJSON(text);

		$("#demo").html(
			"NIM : " + obj.nim + "<br>" +
			"Nama : " + obj.nama + "<br>" +
			"Jurusan : " + obj.jurusan
		);
	</script>
</html>