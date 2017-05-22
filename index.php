<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul></ul>
<button>Load</button>
<script src="resources/jquery/jquery.js"></script>
<script>
	$("button").click(function(){
		$.get("api.php", function(res){
			$.each(res, function(k,v){
				$("ul").append("<li>"+ v.name + "</li>");
			});
		}, "json" );
	});

</script>
</body>
</html>