<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<center>
	
		<table>
			<tr>
				<td>名称</td>
				<td><input type="text" id="gid"></td>
			</tr>
			<tr>
				<td>数量</td>
				<td><input type="text" id='much'></td>
			</tr>
			<tr>
				<td><input type="hidden" name="_token" value="<?php echo csrf_token()?>"></td>
				<td><input type="submit" value="insert" onclick="insert()"></td>
			</tr>
		</table>
	
</center>
</body>
<script src="jq.js"></script>
<script>
	function insert(){
		var gid = $('#gid').val()
		var much = $('#much').val()
		// alert(much);
		$.ajax({
		   type: "POST",
		   url: "inserts",
		   data: "gid="+gid+"&much="+much,
		   success: function(msg){
		     
		   }
		});
	}
</script>
</html>