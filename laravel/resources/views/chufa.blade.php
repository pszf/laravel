<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
	<div id='list'>
		<table border=1>
			<h2>商品</h2>
			<tr>
				<td>id</td>
				<td>名称</td>
				<td>数量</td>
			</tr>
			@foreach($g as $key=>$v)
			<tr>
				<td>{{$v->gid}}</td>
				<td>{{$v->gname}}</td>
				<td>{{$v->gnum}}</td>
			</tr>

			@endforeach
		</table>
		<h2>订单</h2>
		<table border=1>
			<tr>
				<td>id</td>
				<td>商品</td>
				<td>数量</td>
				<td>操作</td>
			</tr>
			@foreach($o as $key=>$v)
			<tr>
				<td>{{$v->oid}}</td>
				<td>{{$v->gname}}</td>
				<td>{{$v->much}}</td>
				<td><a href="javascript:void(0)" onclick="del({{$v->oid}})">删除</a>||
					<a href="javascript:void(0)" onclick="upd({{$v->oid}})">修改</a></td>
			</tr>
			@endforeach
		</table>
	</div>

	<div id="bb"></div>
		<table>
			<h2>添加</h2>
			<tr>
				<td>名称：</td>
				<td><input type="text" id='name' /></td>
			</tr>
			<tr>
				<td>数量：</td>
				<td><input type="text" id='num' /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" value='添加' onclick="fun()" /></td>
			</tr>
		</table>
	</center>
</body>
<script src="{{URL('jq.js')}}"></script>
<script>
	function fun(){
		var name = $('#name').val();
		var num  = $('#num').val();
		$.get("{{URL('chufa1')}}",{'name':name,'num':num},function(e){
			$('#list').html(e);
		})
	}

	function del(id){
		$.get("{{URL('chufa/del')}}",{'id':id},function(e){
			$('#list').html(e);
		})
	}
	
	function upd(id){
		$.get("{{URL('chufa/upd')}}",{'id':id},function(e){
			$('#bb').html(e);
		})
	}

	function upd1(){
		var uname = $('#uname').val();
		var unum = $('#unum').val();
		var hid = $('#hid').val();
		 $("#bb").empty();
		$.get("{{URL('chufa/upd1')}}",{'uname':uname,'unum':unum,'hid':hid},function(e){
			 $("#bb").empty();
			 $('#list').html(e);
		})
	}


</script>
<script>
	
</script>
</html>