<?php
namespace App\Http\Controllers\admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UploadsController;
use App\Http\Requests;
use DB;
use Config;
class configsController extends Controller
{
   public function getIndex()
   {
    $arr = DB::table('p2p_configs')->get();
    return view('admin/config/configs',['arr'=>$arr]);
   }

  
   

  public function postUpdate(Request $request)
  {
    $arr = $request->only('webtitle','keywords','description','icp','address','phone','email','logo','weixin_pic','weibo_pic');
      
        foreach ($arr as $key => $value) 
        {
           if(is_object($value))
           {
               $arr[$key] = UploadsController::uploads($request,$key);
               if(strstr( $arr[$key],'上传'))
               {
                var_dump($arr[$key]);
                unset($arr[$key]);
               }else{
                $this->DeletePic($key);
               }
            }
            if(empty($value)){
              unset($arr[$key]);
            }
        }

        $str = DB::table('p2p_configs')->update($arr);
          if($str){
           return redirect('/admin/configs/index');
          }else{
           return back()->with('error','修改失败');
          
          }


  }
//图片删除
public function DeletePic($pic)
{
      $sre1 = DB::table('p2p_configs')->get();
      $file = $sre1[0]->$pic;
      $path = base_path($file);
      $src =  explode('/',$path);
      $src[0] = $src[0].'public';
      $unlinkpic = implode('\\',$src);
      unlink($unlinkpic);

}




}
