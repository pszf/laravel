<table>
	@foreach($data as $key=>$v)
	<tr>
		<td>商品</td>
		<td><input type="text" id='uname' value="{{$v->gname}}"></td>
	</tr>
	<tr>
		<td>数量</td>
		<td><input type="text" id='unum' value="{{$v->much}}"></td>
	</tr>
	<tr>
		<td><input type="hidden" id='hid' value='{{$v->oid}}'></td>
		<td><input type="button" value="修改" onclick="upd1()"></td>
	</tr>
	@endforeach
</table>
