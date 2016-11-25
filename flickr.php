<!DOCTYPE html>
<html>
	<head>
		<title>Parsing JSON Flickr</title>
	</head>
	<body>
		<div id="container">
		</div>
	</body>
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		var source = "https://api.flickr.com/services/feeds/photos_public.gne?format=json&jsoncallback=?";
		
		$.getJSON(source,function(data){
			var items = data.items;
			
			$.each(items, function(i,item){
				$('#container').append('<img src="'+item.media.m+'" />');
			});
		});
	</script>
</html>