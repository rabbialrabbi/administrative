<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use mysql_xdevapi\Exception;

class DivisionController extends Controller
{
    public function index($currentPage)
    {
        $dataPerPage = 10;
        $total = DB::table('ada_division')->count();
        $checkFraction = $total%$dataPerPage;
        $division['count']= ceil($total/$dataPerPage);

        if($currentPage == 'lastPage'){
            $currentPage = floor($total/$dataPerPage);
            $firstData = $currentPage * $dataPerPage;
            if($checkFraction){
                $currentPage = floor($total/$dataPerPage);
                $firstData = $currentPage * $dataPerPage;
                $dataPerPage = $checkFraction;
            }
        }else{
            $currentPage = $currentPage -1 ;
            $firstData = $currentPage * $dataPerPage;
        }
        $division['tableData'] = DB::table('ada_division')->orderBy('DivisionId','asc')->offset($firstData)->limit($dataPerPage)->get();

        return $division;
    }

    public function add()
    {
        $validation = request()->validate([
            'DivisionId'=>'required',
            'DivisionCode'=>'required',
            'DivisionNameEnglish'=>'required',
            'DivisionNameBangla'=>'required',
            'Note'=>'required',
            'RecordStatus'=>'required',
            'RecordVersion'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg'
        ]);

        try{

            $data = base64_encode(file_get_contents( request()->file('image')->path()));

            $imgName = request()->DivisionNameEnglish.'.'.request()->file('image')->getClientOriginalExtension();
            request()->file('image')->storeAs('public/rsc/division',$imgName);

            DB::table('ada_division')->insert([
                'DivisionId'=>request()->DivisionId,
                'DivisionCode'=>request()->DivisionCode,
                'DivisionNameEnglish'=>request()->DivisionNameEnglish,
                'DivisionNameBangla'=>request()->DivisionNameBangla,
                'DivisionImage1'=>$imgName,
                'DivisionImage2'=>$data,
                'Note'=>request()->Note,
                'RecordStatus'=>request()->RecordStatus,
                'RecordVersion'=>request()->RecordVersion,
                'UserAccess'=>'Default',
                'AccessDate'=>now(),
            ]);

        }catch (\Exception $e){
            dd($e->getMessage());
        }

     return 'Input Successful';
    }

    public function update()
    {
        $entity = DB::table('ada_division')
            ->where('DivisionCode', request()->DivisionCode)->first();

        if(request()->file('image')){
            try{
                $img = $entity->DivisionImage1;

                $file = storage_path('/app/public/division/'.$img);
                if(is_file($file)){
                    unlink($file);
                }
                $data = base64_encode(file_get_contents( request()->file('image')->path()));
                $imgName = request()->DivisionNameEnglish.'.'.request()->file('image')->getClientOriginalExtension();
                request()->file('image')->storeAs('public/rsc/division',$imgName);

                $response = DB::table('ada_division')
                    ->where('DivisionCode', request()->DivisionCode)
                    ->update([
                        'DivisionId'=>request()->DivisionId,
                        'DivisionNameEnglish'=>request()->DivisionNameEnglish,
                        'DivisionNameBangla'=>request()->DivisionNameBangla,
                        'DivisionImage1'=>$imgName,
                        'DivisionImage2'=>$data,
                        'Note'=>request()->Note,
                        'RecordStatus'=>request()->RecordStatus,
                        'RecordVersion'=>request()->RecordVersion,
                        'UserAccess'=>'Default',
                        'AccessDate'=>now(),
                    ]);

                return 'Update Successful';

            }catch (\Exception $e){
                echo $e->getMessage();
            }
        }

        $response = DB::table('ada_division')
            ->where('DivisionCode', request()->DivisionCode)
            ->update([
                'DivisionId'=>request()->DivisionId,
                'DivisionNameEnglish'=>request()->DivisionNameEnglish,
                'DivisionNameBangla'=>request()->DivisionNameBangla,
                'Note'=>request()->Note,
                'RecordStatus'=>request()->RecordStatus,
                'RecordVersion'=>request()->RecordVersion,
                'UserAccess'=>'Default',
                'AccessDate'=>now(),
            ]);
        return 'Update Successful';
    }

    public function destroy($id)
    {
        DB::table('ada_division')->where('DivisionCode', '=', $id)->delete();
        return 'Delete Successful';
    }

    public function show($id)
    {
        $division = DB::table('ada_division')->where('DivisionCode','=',$id)->get();

        return $division;
    }
}
