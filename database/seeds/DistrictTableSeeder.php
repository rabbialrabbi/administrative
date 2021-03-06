<?php

use App\Data;
use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Data $data)
    {
        $header = ['DistrictId', 'DivisionCode', 'DistrictCode', 'DistrictNameEnglish', 'DistrictNameBangla', 'DistrictImage1', 'DistrictImage2', 'Note', 'RecordStatus', 'RecordVersion', 'UserAccess', 'AccessDate'];
        $info = [
            [1, '10', '4', 'BARGUNA', 'বরগুনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[4, '10', '42', 'JHALOKATI', 'ঝালকাঠি', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[2, '10', '6', 'BARISAL', 'বরিশাল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[5, '10', '78', 'PATUAKHALI', 'পটুয়াখালী ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[6, '10', '79', 'PIROJPUR', 'পিরোজপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[3, '10', '9', 'BHOLA', 'ভোলা ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[8, '20', '12', 'BRAHMANBARIA', 'ব্রাহ্মণবাড়িয়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[9, '20', '13', 'CHANDPUR', 'চাঁদপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[10, '20', '15', 'CHITTAGONG', 'চট্টগ্রাম', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[11, '20', '19', 'COMILLA', 'কুমিল্লা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[12, '20', '22', 'COXS BAZAR', 'কক্সবাজার', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[7, '20', '3', 'BANDARBA', 'বান্দরবন', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[13, '20', '30', 'FENI', 'ফেনী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[14, '20', '46', 'KHAGRACHHARI', 'খাগড়াছড়ি', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[15, '20', '51', 'LAKSHMIPUR', 'লক্ষ্মীপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[16, '20', '75', 'NOAKHALI', 'নোয়াখালী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[17, '20', '84', 'RANGAMATI', 'রাঙামাটি', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[18, '30', '26', 'DHAKA', 'ঢাকা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[19, '30', '29', 'FARIDPUR', 'ফরিদপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[20, '30', '33', 'GAZIPUR', 'গাজীপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[21, '30', '35', 'GOPALGANJ', 'গোপালগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[22, '30', '48', 'KISHOREGONJ', 'কিশরগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[23, '30', '54', 'MADARIPUR', 'মাদারীপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[24, '30', '56', 'MANIKGANJ', 'মানিকগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[25, '30', '59', 'MUNSHIGANJ', 'মুন্সিগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[26, '30', '67', 'NARAYANGANJ', 'নারায়ণগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[27, '30', '68', 'NARSINGDI', 'নরসিংদি', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[28, '30', '82', 'RAJBARI', 'রাজবাড়ী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[29, '30', '86', 'SHARIATPUR', 'শরীয়তপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[30, '30', '93', 'TANGAIL', 'টাঙ্গাইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[31, '40', '1', 'BAGERHAT', 'বাগেরহাট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[32, '40', '18', 'CHUADANGA', 'চুয়াডাঙ্গা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[33, '40', '41', 'JESSORE', 'যশোর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[34, '40', '44', 'JHENAIDAH', 'ঝিনাইদহ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[35, '40', '47', 'KHULNA', 'খুলনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[36, '40', '50', 'KUSHTIA', 'কুষ্টিয়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[37, '40', '55', 'MAGURA', 'মাগুরা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[38, '40', '57', 'MEHERPUR', 'মেহেরপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[39, '40', '65', 'NARAIL', 'নড়াইল', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[40, '40', '87', 'SATKHIRA', 'সাতক্ষীরা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[41, '50', '10', 'BOGRA', 'বগুড়া', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[42, '50', '38', 'JOYPURHAT', 'জয়পুরহাট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[43, '50', '64', 'NAOGAO', 'নওগাঁ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[44, '50', '69', 'NATORE', 'নাটোর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[45, '50', '70', 'CHAPAI NABABGANJ', 'চাঁপাইনবাবগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[46, '50', '76', 'PABNA', 'পাবনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[47, '50', '81', 'RAJSHAHI', 'রাজশাহী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[48, '50', '88', 'SIRAJGANJ', 'সিরাজগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[49, '55', '27', 'DINAJPUR', 'দিনাজপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[50, '55', '32', 'GAIBANDHA', 'গাইবান্ধা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[51, '55', '49', 'KURIGRAM', 'কুড়িগ্রাম', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[52, '55', '52', 'LALMONIRHAT', 'লালমনিরহাট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[53, '55', '73', 'NILPHAMARI', 'নীলফামারী', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[54, '55', '77', 'PANCHAGARH', 'পঞ্চগড়', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[55, '55', '85', 'RANGPUR', 'রংপুর ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[56, '55', '94', 'THAKURGAO', 'ঠাকুরগাঁও', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[57, '60', '36', 'HABIGANJ', 'হবিগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[58, '60', '58', 'MAULVIBAZAR', 'মৌলভীবাজার', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[59, '60', '90', 'SUNAMGANJ', 'সুনামগঞ্জ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[60, '60', '91', 'SYLHET', 'সিলেট', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[61, '70', '39', 'JAMALPUR', 'জামালপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[64, '70', '61', 'MYMENSINGH', 'ময়মনসিংহ ', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[63, '70', '72', 'NETRAKONA', 'নেত্রকোনা', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00'],
[62, '70', '89', 'SHERPUR', 'শেরপুর', 'Path', 'Path', 'Note', 'Active', 'Draft', '01-10-01-001', '2018-06-04 00:00:00']
        ];

        $data->dbTableLoader('ada_district',$header,$info);

    }
}
