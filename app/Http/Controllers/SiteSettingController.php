<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SiteSetting;
class SiteSettingController extends Controller
{
public function index(SiteSetting $siteSetting )
{
  $siteSetting=$siteSetting->all();
 return view('admin.setting.index',compact('siteSetting'));
}

public function store(Request $request,SiteSetting $siteSetting )
{
  foreach (array_except($request->toArray(),['_token','submit']) as $key =>$req) {
    $siteSettingUpdate=$siteSetting->where('namesetting',$key)->get()[0];
    $siteSettingUpdate->fill(['value'=>$req])->save();
  }
return redirect()->back()->withFlashMessage('تم تعديل إعدادا ت الموقع بنجاح');

}


}
