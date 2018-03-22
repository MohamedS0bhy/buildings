<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BuRequest;
use App\Http\Requests;
use App\Bu;
use App\User;
use DB;
use Session;
use Illuminate\Support\Facades\Auth;
class BuController extends Controller

{
    public function index(Request $request ,  Bu $bu)
    {
      $id=$request->id!==null?$request->id:null;

      $user_id=$request->id!==null?'user_id':null;

   if($user_id)
        {
          $bu= $bu->where('user_id',$id)->get();
        }
      $bu=$bu->all();

      return view('admin.bu.index',compact('bu','id'));
    }



    public function create()
    {
      return view('admin.bu.add');
    }

    public function store(Requests\BuRequest $buRequest,Bu  $bu)
    {
      $user=Auth::user();
      if($buRequest->file('image'))
      {
        $fileName=$buRequest->file('image')->getClientOriginalName();

        $buRequest->file('image')->move( base_path().'/public/website/bu_images/',$fileName);

      $image=$fileName;
      }else
      {
        $image='';
      }


$bu->create([
'bu_name' =>$buRequest->bu_name,
'bu_price'=>$buRequest->bu_price,
'bu_type'=>$buRequest->bu_type,
'bu_rent'=>$buRequest->bu_rent,
'bu_squar'=>$buRequest->bu_squar,
'bu_small_dis'=>$buRequest->bu_small_dis,
'bu_meta'=>$buRequest->bu_meta,
'bu_langitude'=>$buRequest->bu_langitude,
 'bu_latitude'=>$buRequest->bu_latitude,
 'bu_larg_dis'=>$buRequest->bu_larg_dis,
 'bu_status'=>$buRequest->bu_status,
 'user_id'=>$user->id,
 'rooms'=>$buRequest->rooms,
 'image'=>$image,
 'bu'=>date('d'),
 'year'=>date('Y')

]);
return redirect('/adminpanel/bu')->with('success',' تمت إضافة العضو بنجاح');

    }
public function edit($id ,User $user )
{
    $bu= Bu::find($id);
if( $bu->user_id==0 ){
  $user="";
}else{
  $user=$user->where('id',$bu->user_id)->get()[0];

}



  return view('admin.bu.edit',compact('bu','user') );
}

public function update($id, Requests\BuRequest $request)
{
$buUpdate=Bu::find($id);


$buUpdate->fill(array_except($request->all(),['image']))->save();
if($request->file('image'))
{
  $fileName=$request->file('image')->getClientOriginalName();

  $request->file('image')->move( base_path().'/public/website/bu_images/',$fileName);
// array_only($request->all(),
$buUpdate->fill(['image'=>$fileName])->save();
}

return redirect()->back()->withFlashMessage('تم التعديل علي العقار بنحاح');

}

public function destroy($id,Bu $bu)
{
  $bu->find($id);
  Bu::where('id',$id)->delete();

Session::flash('success','تم حذف العقار بنجاخ');

return redirect()->back();
}
public function buallenable(Bu $bu)
{
  $buall=$bu->where('bu_status',1)->OrderBy('id','desc')->paginate(3);
  return view('website.bu.all',compact('buall'));
}
public function ForRent(Bu $bu)
{
  $buall=$bu->where('bu_status',1)->where('bu_rent',1)->OrderBy('id','desc')->paginate(3);
  return view('website.bu.all',compact('buall'));
}
public function ForBuy(Bu $bu)
{
  $buall=$bu->where('bu_status',1)->where('bu_rent',0)->OrderBy('id','desc')->paginate(3);
  return view('website.bu.all',compact('buall'));
}
public function showBytype($type,Bu $bu)
{
if(in_array($type,['0','1','2']))
{
  $buall=$bu->where('bu_status',1)->where('bu_type',$type)->OrderBy('id','desc')->paginate(3);
  return view('website.bu.all',compact('buall'));
}
else{return redirect()->back();}
}

public function search(Request $request ,Bu $bu)
{



  //this way does not support pagination so it is not gonna be efficient when you have a huge amount of element (your page gonna hung up)
// $requestall=array_except($request->toArray(),['submit','_token']);
// $out='';
// $i=0;
// foreach ($requestall as $key => $req) {
//   if($req !='')
//   {
//     $where=$i==0?" where ":" and ";
//     $out .=$where.' '.$key.' = '.$req;
//     $i=2;
//   }
// }
// $query='select * from bu'.$out;
//
// $buall=DB::select($query);
// $search='search';
//end of the above way


//this way support pagination and it is also suuported by laravel

$requestall=array_except($request->toArray(),['submit','_token','page']);
$query=DB::table('bu')->select('*');
foreach ($requestall as $key => $req) {
  if($req !='')
  {
  $query->where($key,$req);
  }
}


$buall=$query->paginate(3);



// dd($buall);
   // $buall=$bu->where('bu_status',1)
   // ->where('bu_rent',$request->rent)
   // ->where('bu_price',$request->price)
   // ->where('rooms',$request->rooms)
   // ->where('bu_type',$request->type)
   // ->where('bu_squar',$request->squar)->OrderBy('id','desc')->paginate(15);
   //

  return view('website.bu.all',compact('buall') );
}
public function ShowSingle($id ,Bu $bu)
{



$buinfo=$bu->findOrFail($id);
$messageTitle=$buinfo->bu_name;
$messageContent='
تنبيه

العقار
 * '.$buinfo->bu_name .'*
 لم يتم الموافقة عليه من لإدارة لتفعيله';


if($buinfo->bu_status==0)
{
  return view('website.bu.no-per',compact('buinfo','messageTitle','messageContent'));
}


$same_rent=$bu->where('bu_rent',$buinfo->bu_rent)->OrderBy(DB::raw('RAND()'))->take(3)->get();
$same_type=$bu->where('bu_type',$buinfo->bu_type)->OrderBy(DB::raw('RAND()'))->take(3)->get();
return view('website.bu.buinfo',compact('buinfo','same_rent','same_type'));

}

public function userAddView()
{
  return view('website.userbu.useradd');
}

public function userstore(Requests\BuRequest $buRequest,Bu  $bu)
{
  $user=Auth::user()?Auth::user()->id:0;

  if($buRequest->file('image'))
  {
    $fileName=$buRequest->file('image')->getClientOriginalName();

    $buRequest->file('image')->move( base_path().'/public/website/bu_images/',$fileName);

  $image=$fileName;
  }else
  {
    $image='';
  }


$bu->create( [
'bu_name' =>$buRequest->bu_name,
'bu_price'=>$buRequest->bu_price,
'bu_type'=>$buRequest->bu_type,
'bu_rent'=>$buRequest->bu_rent,
'bu_squar'=>$buRequest->bu_squar,
'bu_small_dis'=>strip_tags(str_limit($buRequest->bu_larg_dis,100)),
'bu_meta'=>$buRequest->bu_meta,
'bu_langitude'=>$buRequest->bu_langitude,
'bu_latitude'=>$buRequest->bu_latitude,
'bu_larg_dis'=>$buRequest->bu_larg_dis,
'user_id'=>$user,
'rooms'=>$buRequest->rooms,
'image'=>$image,
'month'=>date('m'),
'year'=>date('Y')
]);

Session::flash('success','تم إضافة العقار بنجاح');
return view('website.userbu.done');



}
public function usershowbuilding(Bu $bu)
{
$user=Auth::user();
$bu=Bu::where('user_id',$user->id)->where('bu_status',1)->paginate(10);
return view('website/userbu/showuserbu',compact('bu','user'));
}

public function usershowbuildingwaitng(Bu $bu)
{
$user=Auth::user();
$bu=Bu::where('user_id',$user->id)->where('bu_status',0)->paginate(10);
return view('website/userbu/showuserbu',compact('bu','user'));
}
public function usershowbuildingall(Bu $bu)
{
$user=Auth::user();
$bu=Bu::where('user_id',$user->id)->paginate(10);
return view('website/userbu/showuserbu',compact('bu','user'));
}
public function userEditBuilding($id,Bu $bu)
{
$user=Auth::user();

$buinfo=$bu->find($id);


$messageTitle=$buinfo->bu_name;
$messageContent='
تنبيه هذا العقار تمت إضافته من قبل عضوية أخري
 * '.$buinfo->bu_name.'*
';


if($user->id !=$buinfo->user_id)
{

  return view('website.bu.no-per',compact('buinfo','messageTitle','messageContent'));
}
elseif ($buinfo->bu_status ==1 ) {


  $messageTitle=$buinfo->bu_name;
  $messageContent='  تنبيه هذا العقار تم تفعيله ولا يمكن التعديل عليه بهذه الطريقة !! إن أردت التعديل يمكنك إرسال طلبب للإدارة والتواصل معهم بهذا الشأن   ';
  return view('website.bu.no-per',compact('buinfo','messageTitle','messageContent'));
}

$bu=$buinfo;

return view('website.userbu.editUserBu',compact('bu','user')) ;
}




public function  userUpdateBuilding(Request $request ,Bu $bu ){

$buUpdate=$bu->find($request->bu_id);

$buUpdate->fill(array_except($request->all(),['image']))->save();
if($request->file('image'))
{
  $fileName=$request->file('image')->getClientOriginalName();

  $request->file('image')->move( base_path().'/public/website/bu_images/',$fileName);
// array_only($request->all(),
$buUpdate->fill(['image'=>$fileName])->save();
}



return redirect()->back()->with('success','تم  التعديل علي العقار بنجاح');

}

public function changeStatus($id,Bu $bu ,$status )
{
$buUpdate=$bu->find($id);

$buUpdate->fill(['bu_status'=>$status])->save();


return redirect()->back()->with('success','  تم تفعيل العقار ');

}




}
