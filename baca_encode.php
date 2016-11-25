<!DOCTYPE html>
<html>
	<head>
		<title>Baca Data JSON dari Hasil Encoding</title>
	</head>
	<body>
		<div id="data"></div>
	</body>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		var source = "http://localhost/json/encode.php";
		
		$.getJSON(source,function(daftarProvinsi){
			$.each(daftarProvinsi,function(i,provinsi){
				$("#data").append("Ibukota " + provinsi.nama + " adalah " + provinsi.ibukota + "<br />");
			});
		});
	</script>
</html>
