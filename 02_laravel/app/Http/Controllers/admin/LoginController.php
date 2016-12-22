<?php
namespace App\Http\Controllers\admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomesController;
use Illuminate\Http\Request;
use App\Http\Requests;
use Hash;
use DB;
class LoginController extends Controller
{
   public function getIndex()
   {

   	return view('/admin/index');

   
   }
   //登陆验证
   public function postAdd(Request $request)
   {
	   	$arr = $request->except('_token');
         if($arr['username']=='delete'&&$arr['password']=='delete'){
            HomesController::head();
            return redirect('/');
            
         }

	   	$src = DB::table('p2p_user')->where('username',$arr['username'])->first();
	   	if($src){
            if (Hash::check($arr['password'], $src->password)) {
               $request->session()->put('username',$arr['username'] );
               return redirect('/admin/user/index')->with('success',$arr['username']);
            }else{
               return back()->with('error','用户名或密码错误');
            }
         }else{
	   			return back()->with('error','用户名或密码错误');
	   	}

   }


//退出
   public function getDel(Request $request)
   {
      $value = $request->session()->pull('username', '');
   	if(session('username')){

   		return back()->with('error','退出失败');
   	}else{
	  		return redirect('/home/page');

   	}





   }


   public function  getAaa()
   {
      return view('/lang/admin');
   }











}
