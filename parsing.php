<html>
	<head>
		<title>JSON Parsing</title>
	</head>
	<body>
		
	</body>
	
	<script type="text/javascript">
		var obj = {"mahasiswa" : [
					{"nim":"1110001","nama":"Abdul Kadir","jurusan":"TI"},
					{"nim":"1110105","nama":"Siti Maisyaroh","jurusan":"TI"},
					{"nim":"3112146","nama":"Zainuri","jurusan":"MI"}
				]}
		var mhs;
		
		for(var i = 0; i < obj.mahasiswa.length; i++){
			mhs = obj.mahasiswa[i];
			document.write('NIM: ' + mhs.nim + ' | Nama: ' + mhs.nama + ' | Jurusan : ' + mhs.jurusan + '<br />');
		}
	</script>
</html>