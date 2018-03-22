<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddUserRequestAdmin;
use App\Http\Requests;
use Session;
use Hash;
use App\User;
use App\Bu;

use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    public function index(User $user)
    {
       $user=$user->all();

      return view('admin.user.index',compact('user'));
    }
    public function create()
    {
      return view('admin.user.add');
    }
  public function store(AddUserRequestAdmin $request,User $user )
    {
      $user->create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' => bcrypt( $request->password),
            'admin'=>0
        ]);
return redirect('/adminpanel/users')->with('success',' تمت إضافة العضو بنجاح');
}
  public function  edit($id ,User $user ,Bu $bu )
  {
$buwaiting=$bu->where('user_id',$id)->where('bu_status',0)->paginate(5);
$buenabled=$bu->where('user_id',$id)->where('bu_status',1)->paginate(5);


    $user=$user->find($id);
    return view('admin.user.edit',compact('user','buenabled','buwaiting'));

  }
public function update($id,User $user,Request $request)
{
$userUpdated=$user->find($id);
$userUpdated->fill($request->all())->save();
return redirect()->back()->with('success','تم تعديل العضو بنجاح');

}

public function UpdatePassword(Request $request,User $user )
{
$userUpdate=$user->find($request->user_id);
$password=bcrypt($request->password);
$userUpdate->fill(['password'=>$password])->save();
return redirect()->back()->with('success','تم تغيير الرقم السري بنجاح') ;

}

public function anyData(User $user)
    {

      $users = $user->all();

        return Datatables::of($users)

            ->editColumn('name', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id . '/edit').'">'.$model->name.'</a>';
            })
            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? '<span class="badge badge-info">' . 'عضو' . '</span>' : '<span class="badge badge-warning">' . 'مدير الموقع' . '</span>';
            })


            ->editColumn('mybu', function ($model) {
                return '<a href="'.url('/adminpanel/bu/' . $model->id).'"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            })

            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                if($model->id != 1){
                    $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })
            ->make(true);



}

public function destroy($id,User $user)
{
  if($user->id !=1){
    $user->find($id)->delete();
    User::where('user_id',$id)->delete();
    return redirect()->back()->with('success','  تم حذف العميل بنجاح ');

  }
  return redirect()->back()->with(' لا يمكن حذف هذا العنصر ');


}



public function editinfo()
{
  $user=Auth::user();

  return view('website.profile.edit',compact('user'));
}

public function userupdateprofile(Requests\UserUpdateRequest $request ,User $users  )
{
$user= Auth::user();
  if($request->email != $user->email)
  {

$checkemail=$users->where('email',$request->email)->count();

if($checkemail == 0)
{
    $user->fill($request->all())->save();
}
else
{
return redirect()->back()->withFlashMessage(' عذرا عميلنا العزيز هذا البريد الإلكتروني موجود لدينا مسبقا ');

}
}
  else{
     $user->fill(['name'=>$request->name])->save();
  }
return redirect()->back()->withFlashMessage(' تم تعديل البيانات بنجاح ');
}


public function changePassword(Requests\UserChangePasswordRequest $request ,User $users)
{
$user=Auth::user();
if(Hash::check($request->password,$user->password))
{
$hash=Hash::make($request->newpassword);
$user->fill(['password'=>$hash])->save();
return redirect()->back()->with('success',' تم تغيير كلمة المرور بنجاح ');


}
else
{

  return redirect()->back()->with('danger','  برجاء إدخال كلمة المرور القديمة بطريقة صحيحة  ');
}


}


















}
