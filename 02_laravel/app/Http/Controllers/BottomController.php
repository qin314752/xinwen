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
use DB;
use Config;
use Cache;
class BottomController extends Controller
{
    public static function bottom()
    {
    	$config = DB::table('p2p_configs')->get();
    	return view('lang/bottom',['config'=>$config]);
    }
}
