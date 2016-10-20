<?php 
namespace App\Http\Controllers;
use DB, Redirect, Input, Response, Request,Session,Validator,Paginate,Table;
use App\Http\Controllers\Controller;
class HomeController extends Controller {
	/**
	 * 首页
	 */
	public function chufa(){
        $g = DB::table('g')->get();
        $o = DB::table('o')->join('g', 'o.gid', '=', 'g.gid')->get();
        return view('chufa',['g'=>$g,'o'=>$o]);
    }
    /*
    *添加
     */
    public function chufa1(){
      $name = Request::get('name');
      $num = Request::get('num');
      $result = DB::table('o')->insert(['gid'=>$name,'much'=>$num]);
      if($result){
      	$o = DB::table('o')->join('g', 'o.gid', '=', 'g.gid')->get();
        $g = DB::table('g')->get();
        return view('chufa1',['g'=>$g,'o'=>$o]);
      }

    }
    /*
    *删除
     */
    public function chufadel(){
      $id = Request::get('id');
      $result = DB::table('o')->where('oid','=',$id)->delete();
      if($result){
        $o = DB::table('o')->join('g', 'o.gid', '=', 'g.gid')->get();
        $g = DB::table('g')->get();
        return view('chufadel',['g'=>$g,'o'=>$o]);
      }
    }
    /*
    *修改
     */
    public function chufaupd(){
        $id = Request::get('id');
        $data = DB::table('o')->join('g', 'o.gid', '=', 'g.gid')->where('o.oid','=',$id)->get();
        return view('chufaupd',['data'=>$data]);
    }

    public function chufaupd1(){
		$uname = Request::get('uname');
		$unum = Request::get('unum');
		$hid = Request::get('hid');
		$data = DB::table('g')->where('gname','=',$uname)->get();
		foreach($data as $Key=>$v){
			$gid = $v->gid;
		}
		$arr = DB::table('o')->where('oid','=',$hid)->update(['gid'=>$gid,'much'=>$unum]);
		if($arr){
			$data = DB::table('g')->get();
			$o = DB::table('o')->join('g', 'o.gid', '=', 'g.gid')->get();
			return view('chufa1',['g'=>$data,'o'=>$o]);
		}
    }

}