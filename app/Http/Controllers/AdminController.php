<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bu;
use App\ContactUs;
use App\User;
use DB;
use App\Http\Requests;

class AdminController extends Controller
{
  public function index(Bu $bu ,User $user ,ContactUs $contactUs)
  {
$buCountActive=CountBuDependingOnStatus(1);
$buCountWaiting=CountBuDependingOnStatus(0);
$userscount=$user->count();
$contactUsCount=$contactUs->count();
$mapping=$bu->select('bu_latitude','bu_langitude','bu_name')->get();
$chart=$bu->select(DB::raw('COUNT(*) as counting , month '))->where('year',date('Y'))->groupBy('month')->orderBy('month','asc')->get()->toArray();
$array=[];
if (Isset($chart[0]['month'])) {
  for ($i=1; $i<$chart[0]['month'] ; $i++) {
  $array[]=0;
  }
}

$new=array_merge($array,$chart);


$latestusers=$user->take('8')->orderBy('id','desc')->get();
$latestbu=$bu->take('10')->orderBy('id','desc')->get();
$latestcontactus=$contactUs->take('7')->orderBy('id','desc')->get();




      return view('admin.home.index' ,compact('buCountActive','buCountWaiting',
      'userscount','contactUsCount','mapping','new','latestusers','latestbu','latestcontactus') );
  }

public function showYearStatics(Bu $bu)
{
  $year=date('Y');
  $chart=$bu->select(DB::raw('COUNT(*) as counting , month '))->where('year',date('Y'))->groupBy('month')->orderBy('month','asc')->get()->toArray();

  $array=[];
  if (Isset($chart[0]['month'])) {
    for ($i=1; $i<$chart[0]['month'] ; $i++) {
    $array[]=0;
    }
  }

  $new=array_merge($array,$chart);
return view('admin.home.statics',compact('year','new'));
}
public function showThisYear(Request $request ,Bu $bu)
{
  $year=$request->year;
  $chart=$bu->select(DB::raw('COUNT(*) as counting , month '))->where('year',$year)->groupBy('month')->orderBy('month','asc')->get()->toArray();

  $array=[];
  if (Isset($chart[0]['month'])) {
    for ($i=1; $i<$chart[0]['month'] ; $i++) {
    $array[]=0;
    }
  }

  $new=array_merge($array,$chart);
  return view('admin.home.statics',compact('year','new'));
}











}
