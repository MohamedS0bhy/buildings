<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ContactUs;
class ContactController extends Controller
{


public function index()
{
   $contactUs=ContactUs::all();

  return view('admin.contact.index',compact('contactUs'));
}

public function store(Requests\ContactRequest $request ,ContactUs $contactUs )
{

$contactUs->create($request->all());
return redirect()->back()->with('success','تم إرسال البيانات بنجاح');

}

public function  edit($id ,ContactUs $contactUs )
{
  $singlecontact=$contactUs->find($id);
  $singlecontact->fill(['view'=>1])->save();
  return view('admin.contact.edit',compact('singlecontact'));

}


public function update($id,ContactUs $contactUpdate ,Request $request)
{
$contactUpdate=$user->find($id);
$contactUpdate->fill($request->all())->save();
return redirect()->back()->with('تم التعديل علي الرسائل بنجاح');

}

public function destroy($id,ContactUs $contactUs)
{
  $contactUs->find($id);
  ContactUs::where('id',$id)->delete();

session()->flash('success','تم حذف الرسالة بنجاح');

return redirect()->back();
}


}
