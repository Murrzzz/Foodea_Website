<?php

namespace App\Http\Controllers;

use App\Models\tbl_merchant_document;
use App\Models\tbl_merchant_info;
use App\Models\tbl_partner_accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PartnerRegistration extends Controller
{
    //
    public function index(){
        return view('partner_application');
    }
    
    public function PersonalInfo(Request $request){
        $request-> validate([
            'salutation' => 'required',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:tbl_merchant_account',
            'password' => 'required|min:6'
        ]);

        $merchant = new tbl_partner_accounts();
        $merchant->salutation = $request->salutation;
        $merchant->firstname = $request->firstname;
        $merchant->middlename = $request->middlename;
        $merchant->lastname = $request->lastname;
        $merchant->suffix = $request->suffix;
        $merchant->email = $request->email;
        $merchant->password = $request->password;
        
        $res = $merchant->save();

        if($res){
            $request->session()->put('merchant_id', $merchant->id);
            return redirect('/partner_application2');
        }else{
            return back()->with('fail', 'Something is wrong');
        }
    }
    public function partner2index(){
        return view('/partner_application2');
    }

    public function partner2submit(Request $request){

         $request-> validate([
            'business_type' => 'required',
            'business_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'barangay' => 'required',
            'street' => 'required',
            'country' => 'required',
            'postal_code' => 'required',
            'store_number' => 'required',
            'store_email' => 'required|email'
        ]);

        $merchant = new tbl_merchant_info();
        $merchant->merchant_id = $request->merchant_id;
        $merchant->business_type = $request->business_type;
        $merchant->business_name = $request->business_name;
        $merchant->country = $request->country;
        $merchant->address = $request->address;
        $merchant->city = $request->city;
        $merchant->barangay = $request->barangay;
        $merchant->street = $request->street;
        $merchant->postal_code = $request->postal_code;
        $merchant->store_number = $request->store_number;
        $merchant->store_email = $request->store_email; 

        $res = $merchant->save();
        if($res){
            return redirect('/partner_application3');
        }
        else{
         
        }


    }

    public function partnerrequirement(){
        return view('/partner_requirements');
    }

     public function SaveDocuments(Request $request){
        $request->validate([
            'menu_photo'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'business_permit'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'bir_cert'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'barangay_permit'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'dti_cert'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'front_license'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000',
            'back_license'=> 'required|mimes:jpeg,png,jpg,pdf|max:5000'
            

        ]);
        $document = new tbl_merchant_document();
        $document->merchant_id = $request->merchant_id;
        
        if($request->hasFile('menu_photo') && $request->hasFile('business_permit') && $request->hasFile('bir_cert') && $request->hasFile('dti_cert') && $request->hasFile('front_license') && $request->hasFile('back_license')){
            $menu = $request->file('menu_photo');
            $file = $request->file('business_permit');
            $file2 = $request->file('bir_cert');
            $file3 = $request->file('barangay_permit');
            $file4 = $request->file('dti_cert');
            $file5 = $request->file('front_license');
            $file6 = $request->file('back_license');

            
            
            $photo = $menu->getClientOriginalName();
            $permit = $file->getClientOriginalName();
            $bir = $file2->getClientOriginalName();
            $barangay = $file3->getClientOriginalName();
            $dti = $file4->getClientOriginalName();
            $front = $file5->getClientOriginalName();
            $back = $file6->getClientOriginalName();

            
            // $filename = $photo;
            // $filename2 = $license;

            $menu->move('uploads/rider_documents/', $photo);
            $file ->move('uploads/rider_documents/',  $permit );
            $file2->move('uploads/rider_documents/', $bir);
            $file3 ->move('uploads/rider_documents/',  $barangay );
            $file4->move('uploads/rider_documents/', $dti);
            $file5 ->move('uploads/rider_documents/',  $front );
            $file6 ->move('uploads/rider_documents/',  $back );


            $document->menu_photo = $photo;
            $document->business_permit =  $permit;
            $document->bir_cert = $bir;
            $document->barangay_permit =  $barangay;
            $document->dti_cert = $dti;
            $document->front_license =  $front;
            $document->back_license =  $back;

        }
        $document->save();
        return redirect('partner_application4');
    }

    public function LoginIndex(){
        return view('login');
    }
    public function LoginMerchant(Request $request){

         $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6'
        ]);
        
        $user = tbl_partner_accounts::where('email', '=', $request->email)->first();
        if($user){
            if($request->password == $user->password){
                $request->session()->put('loginID', $user->merchant_id);
                return redirect('/index');
            }else{
                  return back()->with('fail', 'Password does not match');
            }
        }else{
            return back()->with('fail', 'This is email is not registered');
        }
    }
    
     public function agreement(){
        return view('/merchant_application_agreement');
    }

}