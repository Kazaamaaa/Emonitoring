<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Imports\EmployeeImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;

class EmployeeController extends Controller
{
    public function table(Request $request){

        $data = new Employee;
        if($request->get('search')){
            $data = $data->where('kegiatan','LIKE','%' .$request->get('search').'%');
        }
        $data = $data->get();
        return view ('datarkap',compact('data','request'));
    }
    public function tambah(){
        return view('tambahdatarkap');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        Employee::create($request->all());
        return redirect()->route('rkap')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id){
        $data = Employee::find($id);
        // dd($data);

        return view('editdatarkap',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());

         return redirect()->route('rkap')->with('success','Data Berhasil DiEdit');
    }
    public function deletedata(Request $request, $id){
        $data = Employee::find($id);

        if($data){
            $data->delete();
        }
        return redirect()->route('rkap')->with('success','Data Berhasil Dihapus');
    }

    public function exportpdf(){
        $data = Employee::all();
        view()->share('data',$data);
        $pdf = PDF::loadview('datarkap-pdf');
        return $pdf->download('data.pdf');
    }
    public function exportexcel(){
        return Excel::download(new EmployeeExport,'datarkap.xlsx');
    }
    public function importexcel(Request $request){
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('EmployeeData', $namafile);

        Excel::import(new EmployeeImport, \public_path('/EmployeeData/'.$namafile));
        return \redirect()->back();
    }
}