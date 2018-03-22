<?php

function bu_place()
{
  return  [
    '0'=>'Alexandria',
    '1'=>'Aswan',
    '2'=>'Asyut',
    '3'=>'Beheira',
    '4'=>'Beni suef',
    '5'=>'Cairo',
    '6'=>'Dakahlia',
    '7'=>'Damietta',
    '8'=>'Faiyum',
    '9'=>'Gharbia',
    '10'=>'Giza',
    '11'=>'Ismailia',
    '12'=>'Kafr El Sheikh',
    '13'=>'Luxor',
    '14'=>'Matruh',
    '15'=>'Minya',
    '16'=>'Monufia',
    '17'=>'New Valley',
    '18'=>'North Sinai',
    '19'=>'Port Said',
    '10'=>'Qalyubia',
    '21'=>'Qena',
    '22'=>'Red Sea',
    '23'=>'Sharqia',
    '24'=>'Sohag',
    '25'=>'South  Sinai',
    '26'=>'Suez'


  ];
}






function setActive($array ,$class="active"){
  //dd(Request::segment());
// dd(Request::segments());
if(!empty($array))
{
$seg_array=[];
foreach ($array as $key => $url) {
if(Request::segment($key+1)==$url)
{
$seg_array [] =$url;
}
}
if(count($seg_array)==count(Request::segments()))
{
  if (Isset($seg_array[0])) {
    return $class;
  }

}
}
}





function getSetting($settingname ='sitename')
{

return   \app\SiteSetting::where('namesetting', $settingname)->get()[0]->value;


}

 function get_rooms()
{
['0'=>'1','1'=>'2','2'=>'3','3'=>'4','4'=>'5','5'=>'6','6'=>'7','7'=>'8','8'=>'9','9'=>'10','10'=>'11','11'=>'12'];
}
function get_type()
{
['0'=>'شقة','1'=>'فيلا','2'=>'شاليه'];
}
function get_rent()
{
['0'=>'تمليك','1'=>'إيجار'];
}
 function get_status($value='')
{
['0'=>'غير مفعل','1'=>'مفعل'];
}
function get_place()
{


}

function searcnamefield()
{
  return[
    'bu_price'=>'سعر العقار' ,
    'rooms'=>'عدد الغرف',
    'bu_tye'=>'نوع العقار',
    'bu_rent'=>'نوع العملية',
    'bu_squar'=>'مساحة العقار'
  ];
}

function buForUserCount($user_id,$status)
{
return \App\Bu::where('bu_status',$status)->where('user_id',$user_id)->count();

}
function userBusCount($user_id)
{
  return \App\Bu::where('user_id',$user_id)->count();

}
function CountBuDependingOnStatus($status)
{
  return \App\Bu::where('bu_status',$status)->count();
}
