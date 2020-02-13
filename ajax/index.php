<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>

<body>

<div id="calendar"><? require("calendar.php")?></div>

<script type="text/javascript">
	
$(document).ready(function(){
	
	function setupAction()
	{
	
		$(".month").click(function(e){

			e.preventDefault();


			$.post("calendar.php",{month:$(this).data("month")},function(resp){

				$("#calendar").html(resp);
				
				
				setupAction();

			});

		});
		
	}
	
	setupAction();
	
});	
	
</script>

</body>
</html>
