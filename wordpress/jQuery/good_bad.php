<html>
<head>
	<title>jQuery.get()</title>
	<style type="text/css">
		ul{
			border:1px solid black;
			list-style:none;
			margin:0pt;
			padding:0pt;
			float:left;
			font-family:Verdana,Arial,Helvetica,sans-serif;
			font-size:12px;
			width:300px;
		}
		li{
			padding:10px 5px;
			border-bottom:1px solid black;
		}
		
	</style>
</head>
<body>
	<form>
		
		<br>
		<p>Show list of:
			<select id="choice">
				<option value="">select</option>
				<option value="good">Good Guys</option>
				<option value="bad">Bad Guys</option>
			</select>
		</p>
		<p id="result">
	</p>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function (){
			$('#choice').change(function(){
				if($(this).val()!=''){
					$.get('good_bad_data.php',{
						what:$(this).val()},function(data){
							$('#result').html(data);
						});
					}
				});
			});
		</script>
</form>
</body>
</html>