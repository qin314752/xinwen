<?php 
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Http\Requests;
use Cache;
class UploadsController extends Controller
{
   
//图片上传
     public static function uploads($request,$pic)
    {
      //文件是否存在外验证上传的文件是否有效
       if ($request->file($pic)->isValid()) {
          // 检测是否有文件上传
          if($request->hasFile($pic)){
              //随机文件名称 加密
              $name = md5(time()+rand(11111,99999));
              // 文件后缀名的获取
              $suffix = $request->file($pic)->getClientOriginalExtension();
              // 判断文件上传的类型
              $arr = ['jpg','png','gif','JPG','PNG','GIF'];
              if(!in_array($suffix,$arr)){
                  return '上传文件格式不符合要求';
              }
              $request->file($pic)->move('./uploads/default/',$name.'.'.$suffix);
              // 将文件路径及文件名称返回
              return '/uploads/default/'.$name.'.'.$suffix;
             }
        }else{
        
        return '上传文件不符合要求(图片要小于2MB)';
      }
    }


  // //图片上传
  //    public static function upload(Request $request)
  //   {
  //     //文件是否存在外验证上传的文件是否有效
  //      if ($request->file('pic')->isValid()) {
  //         // 检测是否有文件上传
  //         if($request->hasFile('pic')){
  //             //随机文件名称 加密
  //             $name = md5(time()+rand(11111,99999));
  //             // 文件后缀名的获取
  //             $suffix = $request->file('pic')->getClientOriginalExtension();
  //             // 判断文件上传的类型
  //             $arr = ['jpg','png','gif','JPG','PNG','GIF'];
  //             if(!in_array($suffix,$arr)){
  //                 return '上传文件格式不符合要求';
  //             }
  //             $request->file('pic')->move('./uploads/',$name.'.'.$suffix);
  //             // 将文件路径及文件名称返回
  //             return '/uploads/'.$name.'.'.$suffix;
  //            }
  //       }else{
        
  //       return '上传文件不符合要求(图片要小于2MB)';
  //     }
  //   }
    
}


 ?>