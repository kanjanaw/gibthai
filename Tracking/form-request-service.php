<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use App\Mail\Email;
use App\User;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\TokenGuard;

use App\Models\customer;
use App\Models\form_data;
use App\Models\form_data_a;
use App\Models\form_data_b;
use App\Models\form_data_tool;
use App\Models\data_tool;

use App\Models\dataset_amphures;
use App\Models\dataset_districts;
use App\Models\dataset_provinces;


use PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\support\carbon;
use Yajra\DataTables\Facades\DataTables;

class FontendController extends Controller
{


    public function get_ampure(Request $r){
        if($r->ajax()){
            $pv=dataset_provinces::where('name_th',$r->selectValue)->first();
            $div=dataset_amphures::where('province_id',$pv->id)->get();
        }
            return response()->json(['div'=>$div]);
    }

    public function get_dis(Request $r){
        if($r->ajax()){
            $am=dataset_amphures::where('name_th',$r->selectValue)->first();
            if($am!=null){
            $div=dataset_districts::where('amphure_id',$am->id)->get();
            $code=$am->code;
            }else{
                $div='';
                $code='';
            }
            
        }
            return response()->json(['div'=>$div,'code'=>$code,]);
    }

  

 public function index(){
    $lang = Session::get('lang');

    return view('fontend.index',[
        'lang'=>$lang,
    ]);
}

public function form_request_service(){
    $lang = Session::get('lang');

    return view('fontend.form-request-service',[
        'lang'=>$lang,
    ]);
}


public function check(Request $r){
    dd($r['g-recaptcha-response']);
    if($r['g-recaptcha-response']!=null){
        return redirect()->back();
    }else{
        return redirect()->back();
    }

    // $validator = Validator::make($request->all(), [
    //     'g-recaptcha-response' => 'required|recaptcha',
    // ]);

    // if ($validator->fails()) {
    //     return back()->withErrors($validator)->withInput();
    // }
   
}




public function search_form_customer(Request $r){
    if($r->ajax()){
    $id=$r->id;
    $data=form_data::where('1name_company',$id)->first(); 

    if($data!=null){
        $name_company=$data->{'1name_company'};
        $name_agency=$data->{'1name_agency'};
        $address=$data->{'1address'};
        $province=$data->{'1province'};
        $am=$data->{'am1'};
        $ds=$data->{'ds1'};
        $zip_code=$data->{'1zip_code'};
        $phone=$data->{'1phone'};
        $fax=$data->{'1fax'};
        $tax_number=$data->{'1tax_number'};
        $company_type=$data->{'1company_type'};
        $company_type_other=$data->{'1company_type_other'};
        $status='success';

        return response()->json([
        'name_company'=>$name_company,'name_agency'=>$name_agency,'address'=>$address,
        'province'=>$province,'zip_code'=>$zip_code,'phone'=>$phone,
        'fax'=>$fax,'tax_number'=>$tax_number,'company_type'=>$company_type,
        'company_type_other'=>$company_type_other,
        'am'=>$am,'ds'=>$ds,
        
        'status'=>$status,]);
    }else{
        $status='false';
        return response()->json(['status'=>$status]);
    }
    } 

}

public function form_request_service_send_data(Request $r){
    dd($r->formData);
    if($r->ajax()){
        $length = 12;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $check=form_data::where('code_form',$randomString)->first();
        if($check!=null){
            $length = 12;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        }


        // form_data
        // $companyName1 = $r->formData['companyName1'];
        // $department1 = $r->formData['department1'];
        // $companyAddress1 = $r->formData['companyAddress1'];
        // $province1 = $r->formData['province1'];
        // $am1 = $r->formData['am1'];
        // $ds1 = $r->formData['ds1'];
        // $zipcode1 = $r->formData['zipcode1'];
        // $tel1 = $r->formData['tel1'];
        // $fax1 = $r->formData['fax1'];
        // $taxpayerNo1 = $r->formData['taxpayerNo1'];
        // $companyTypeInfo1 = $r->formData['companyTypeInfo1'];
        // $companyTypeName1 = $r->formData['companyTypeName1'];

        // $contactName1 = $r->formData['contactName1'];
        // $email1 = $r->formData['email1'];
        // $contactTel1 = $r->formData['contactTel1'];
        // $lineId1 = $r->formData['lineId1'];

        // $data=new form_data();
        // $data->code_form=$randomString;
        // $data->{'1name_company'} = $companyName1;
        // $data->{'1name_agency'} = $department1;
        // $data->{'1address'} = $companyAddress1;
        // $data->{'1province'} = $province1;
        // $data->{'am1'} = $am1;
        // $data->{'ds1'} = $ds1;
        // $data->{'1zip_code'} = $zipcode1;
        // $data->{'1phone'} = $tel1;
        // $data->{'1fax'} = $fax1;
        // $data->{'1tax_number'} = $taxpayerNo1;
        // $data->{'1company_type'} = $companyTypeInfo1;
        // $data->{'1company_type_other'} = $companyTypeName1;

        // $data->{'1name_d'} = $contactName1;
        // $data->{'1email_d'} = $email1;
        // $data->{'1phone_d'} = $contactTel1;
        // $data->{'1line_d'} = $lineId1;
        
        // $data->save();
        // form_data






        // form_data_tool

        $array=$r->formData;
        // foreach($array as $item){
        $pipetteType1 = $item['pipetteType1'];
        $manufacture1 = $item['manufacture1'];
        $model1 = $item['model1'];
        $volumn = $item['volumn'];
        $serialNumber = $item['serialNumber'];
        $IdentifyNumber = $item['IdentifyNumber'];
        $calibration = $item['calibration'];
        $gain = $item['gain'];
        $otherPipette = $item['otherPipette'];

        $file = $item['file'];

        $data=new form_data_tool();
        $data->code_form=$randomString;
        $data->{'type_tool_new'} = $pipetteType1;
        $data->{'type_brand_new'} = $manufacture1;
        $data->{'type_model_new'} = $model1;
        $data->{'size'} = $volumn;
        $data->{'serial'} = $serialNumber;
        $data->{'code_tool'} = $IdentifyNumber;
        $data->{'location_test'} = $calibration;
        $data->{'past_gain'} = $gain;
        $data->{'other_tool'} = $otherPipette;

        if ($file) {
            // if ($r->hasFile('file')) 
            // $file = $r->file('file');
            $picture =$file->getClientOriginalExtension();
            $picture = date('YmdHis').'_'.$picture;
            $file->move(public_path() . '/img/upload', $picture);
            $data->{'picture'} = $picture;}
        
        // $data->save();


        $data_tool=data_tool::where('type_tool_new',$pipetteType1)
        ->where('type_brand_new',$manufacture1)
        ->where('type_model_new',$model1)->first(); 

        if($data_tool==null){
            $item=new data_tool();
            $item->{'type_tool_new'} = $pipetteType1;
            $item->{'type_brand_new'} = $manufacture1;
            $item->{'type_model_new'} = $model1;
            // $item->save();
        }

        // }


        // form_data_tool




        $status='success';
    }else{
        $status='fail';
    }
    return response()->json(['status'=>$status]); 

}




}
