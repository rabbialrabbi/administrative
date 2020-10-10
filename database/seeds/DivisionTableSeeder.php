<?php

use App\Data;
use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Data $data
     * @return void
     */
    public function run(Data $data)
    {
        $header = ['DivisionId', 'DivisionCode', 'DivisionNameEnglish', 'DivisionNameBangla', 'DivisionImage1', 'DivisionImage2', 'Note', 'RecordStatus', 'RecordVersion', 'UserAccess', 'AccessDate'];
        $info = [
            [1, '10', 'Barisal', 'বরিশাল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [2, '20', 'Chittagong', 'চটগ্রাম', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [3, '30', 'Dhaka', 'ঢাকা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [4, '40', 'Khulna', 'খুলনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [5, '50', 'Rajshahi', 'রাজশাহী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [6, '55', 'Rangpur', 'রংপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [7, '60', 'Sylhet', 'সিলেট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
            [8, '70', 'Mymensingh', 'ময়মনসিংহ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00']
        ];

        $data->dbTableLoader('ada_division',$header,$info);
    }
}
