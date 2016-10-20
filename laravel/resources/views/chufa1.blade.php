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