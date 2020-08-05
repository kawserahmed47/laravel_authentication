<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //

    public function application(){
        return view();
    }

    public function insertApplication(Request $request){
        $time = time();
        $data = array();
        $data['name']= $request->name;
        $data['addresss']= $request->addresss;
        $data['representative']= $request->representative;
        $data['contact_person']= $request->contact_person;
        $data['mobile']= $request->mobile;
        $data['email']= $request->email;
        $data['travel']= $request->travel;
        $data['programs']= json_encode($request->programs);
        $data['unit_name']= $request->unit_name;
        $data['unit_address']= $request->unit_address;
        $data['subunit_name']= json_encode($request->subunit_name);
        $data['subunit_address']= json_encode($request->subunit_address);
        $count = 0;
        foreach($request->subunit_name as $sun){
            if($sun != null){
                $count++;
            }
            

        }

     
        $data['num_subunit']= $count;
        $data['created_at']= date("Y-m-d H:i:s",$time);

        $query = DB::table('quotations')->insertGetId($data);
        if($query){
            Session::flash('message','Data Inserted Successful');
            return redirect()->route('viewInvoice',$query);

        }


    }
}
