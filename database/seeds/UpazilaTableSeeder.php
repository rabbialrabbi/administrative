<?php

use App\Data;
use Illuminate\Database\Seeder;

class UpazilaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Data $data)
    {
        $header = ['UpazilaId', 'DivisionCode', 'DistrictCode', 'UpazilaCode', 'UpazilaNameEnglish', 'UpazilaNameBangla', 'UpazilaImage1', 'UpazilaImage2', 'Note', 'RecordStatus', 'RecordVersion', 'UserAccess', 'AccessDate'];
        $info = [
            [2, '10', '4', '19', 'BAMA', 'বামনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[3, '10', '4', '28', 'BARGUA SADAR', 'বরগুনা সদর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[4, '10', '4', '47', 'PATHARGHATA', 'পাথরঘাটা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-16 14:19:19'],
[5, '10', '4', '85', 'PATHARGHATA', 'তালতলী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[1, '10', '4', '9', 'AMTALI', 'আমতলী ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[6, '30', '35', '32', 'GOPALGAJ SADAR', 'গোপালগঞ্জ সদর', 'Path', 'Path', 'ote', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[7, '30', '35', '43', 'KASHIAI', 'কাশিয়ানী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[8, '30', '35', '51', 'KOTALIPARA', 'কোটালিপাড়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[9, '30', '35', '58', 'MUKSUDPUR', 'মুকসুদপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[10, '30', '35', '91', 'TUGIPARA', 'টুঙ্গিপাড়া', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-04 09:59:09'],
[12, '30', '93', '19', 'BHUAPUR', 'ভূঞাপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[13, '30', '93', '23', 'DELDUAR', 'দেলদুয়ার', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[14, '30', '93', '25', 'DHABARI', 'ধনবাড়ী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[15, '30', '93', '28', 'GHATAIL', 'ঘাটাইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[16, '30', '93', '38', 'GOPALPUR', 'গোপালপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[4, '30', '93', '47', 'PATHARGHATA', 'পাথরঘাটা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-16 14:19:19'],
[18, '30', '93', '57', 'MADHUPUR', 'মধুপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[19, '30', '93', '66', 'MIRZAPUR', 'মির্জাপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[20, '30', '93', '76', 'AGARPUR', 'নাগরপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[21, '30', '93', '85', 'SAKHIPUR', 'সখীপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[11, '30', '93', '9', 'BASAIL', 'বাসাইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[22, '30', '93', '95', 'TAGAIL SADAR', 'টাঙ্গাইল সদর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[25, '40', '41', '11', 'CHAUGACHHA', 'চৌগাছা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[26, '40', '41', '23', 'JHIKARGACHHA', 'ঝিকরগাছা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[27, '40', '41', '38', 'KESHABPUR', 'কেশবপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[23, '40', '41', '4', 'ABHAYAGAR', 'অভয়নগর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[4, '40', '41', '47', 'PATHARGHATA', 'পাথরঘাটা', 'Default', 'Default', 'Note', 'Active', 'Draft', 'Default', '2020-04-16 14:19:19'],
[29, '40', '41', '61', 'MAIRAMPUR', 'মনিরামপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[24, '40', '41', '9', 'BAGHER PARA', 'বাঘারপাড়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00'],
[30, '40', '41', '90', 'SHARSHA', 'শার্শা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '0000-00-00 00:00:00']
        ];

        $data->dbTableLoader('ada_upazila',$header,$info);
    }
}
