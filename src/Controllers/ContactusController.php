<?php

namespace Hosein\Contactus\Controllers;


use Hosein\Contactus\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ContactusController extends Controller
{
    public function index(){
        return view("ContactView::contactus");
    }
    public function create(Request $request){
        $validator=Validator::make($request->all(),[
            "name"=>'required|max:100',
            "family"=>'required|max:100',
            "email"=>'required|email',
            "message"=>'required|max:500'
        ]);
        if($validator->fails()){
            return redirect("contactus")
                ->withErrors($validator,"contactus")
                ->withInput();
        }
        $contact=new Contact();
        $contact->name=$request->all()["name"];
        $contact->family=$request->all()["family"];
        $contact->email=$request->all()["email"];
        $contact->message=$request->all()["message"];
        $contact->save();
        return redirect("contactus")->with("message","پیام با موفقیت ارسال شد");

    }
    public function panelContact(){
        $data["contact"]=Contact::select("*")->get();
        return view("ContactView::panelContact",$data);
    }
    public function showContact($id){
        $contact=Contact::where("id",$id)->first();
        return redirect("panelContact")->with("showContact",$contact);
    }
    public function deleteContact($id){
        $contact=Contact::where("id",$id)->first();
        $contact->delete();
        return redirect("panelContact")->with("message","حذف شد");
    }
}
