<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $header = collect(['DivisionId', 'DivisionCode', 'DivisionNameEnglish', 'DivisionNameBangla', 'DivisionImage1', 'DivisionImage2', 'Note', 'RecordStatus', 'RecordVersion', 'UserAccess', 'AccessDate']);
        $data = collect([
            [1, '10', 'Barisal', 'বরিশাল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [2, '20', 'Chittagong', 'চটগ্রাম', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [3, '30', 'Dhaka', 'ঢাকা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [4, '40', 'Khulna', 'খুলনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [5, '50', 'Rajshahi', 'রাজশাহী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [6, '55', 'Rangpur', 'রংপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [7, '60', 'Sylhet', 'সিলেট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [8, '70', 'Mymensingh', 'ময়মনসিংহ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00']
        ]);

        foreach ($data as $info ){
            $e[] = $header->combine($info);
        }
        $info = collect($e);

        foreach ($info as $i){
            DB::table('agency')->insert([
                'DivisionId'=>$i['DivisionId'],
                'DivisionCode'=>$i['DivisionCode'],
                'DivisionNameEnglish'=>$i['DivisionNameEnglish'],
                'DivisionNameBangla'=>$i['DivisionNameBangla'],
                'DivisionImage1'=>$i['DivisionImage1'],
                'DivisionImage2'=>$i['DivisionImage2'],
                'Note'=>$i['Note'],
                'RecordStatus'=>$i['RecordStatus'],
                'RecordVersion'=>$i['RecordVersion'],
                'UserAccess'=>$i['UserAccess'],
                'AccessDate'=>now(),
        ]);
        }
    }
}
