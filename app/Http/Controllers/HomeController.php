<?php

namespace App\Http\Controllers;
use Dompdf\Adapter\PDFLib;
use PDF;

use App\Exports\QuotationExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index(){
        $data = array();
        $data['programs']=DB::table('programs')->get();
        return view('applications.application',$data);

    }

    public function viewApplication(){
        $data = array();
        $data['results']=DB::table('quotations')->orderBy('id', 'desc')->get();
        return view('viewApplication',$data);
    }

    public function viewInvoice($id){
        $data = array();
        $data['result']=DB::table('quotations')->where('id',$id)->first();
        return view('viewInvoice',$data);
    }

    public function printInvoice($id){
        $data = array();
        $data['result']=DB::table('quotations')->where('id',$id)->first();
        // return view('printInvoice',$data);
        $pdf = PDF::loadView('printInvoice', $data);
        return $pdf->download("invoice$id.pdf");
    }

    public function genrateExcel(){
        return Excel::download(new QuotationExport, 'quotation.xlsx');
        // return view('excelGenerate');
    }
}