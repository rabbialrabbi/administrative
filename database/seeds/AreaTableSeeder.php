<?php

use App\Data;
use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Data $data)
    {
        $header = ['AreaId','DivisionCode','DistrictCode','UpazilaCode','AreaTypeCode','AreaCode','Area_Dept_Code1','Area_Dept_Code2','AreaNameEnglish','AreaNameBangla','AreaImage1','AreaImage2','Note','RecordStatus','RecordVersion','UserAccess','AccessDate'];

        $info = [
        [ 1,'40','41','61','10','811' ,'1100', '1100'	,'NOAPARA Pourashava'			,'নোয়াপাড়া পৌরসভা'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 2,'40','41','61','10','555'	,'1200', '1200'	,'BAGHER PARA Pourashava'		,'বাঘারপাড়া পৌরসভা'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 3,'40','41','61','10','133'	,'1300', '1300'	,'CHAUGACHHA Pourashava'		,'চৌগাছা পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 4,'40','41','61','10','333'	,'1400', '1400'	,'JHIKARGACHHA Pourashava'		,'ঝিকরগাছা পৌরসভা'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 5,'40','41','61','10','37'	,'1500', '1500'	,'KESHABPUR Pourashava'		,'কেশবপুর পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 6,'40','41','61','10','16'	,'1600', '1600'	,'JESSORE Pourashava'			,'যশোর সদর পৌরসভা'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 7,'40','41','61','10','66'	,'1700', '1700'	,'MANIRAMPUR Pourashava'		,'মনিরামপুর পৌরসভা'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 8,'40','41','61','10','8'	,'1900', '1900'	,'BENAPOLE Pourashava'			,'বেনাপোল পৌরসভা'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 9,'40','41','61','20','83' ,'2000', '2000'		,'Abhaynagar Grameen'			,'অভয়নগর গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 10,'40','41','61','20','5'  ,'2100', '2100'		,'BAGHER PARA Grameen'			,'বাঘারপাড়া গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 11,'40','41','61','20','13'	,'2200', '2200'	,'CHAUGACHHA Grameen'			,'চৌগাছা গ্রামীণ'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 12,'40','41','61','20','33'	,'2300', '2300'	,'JHIKARGACHHA Grameen'		,'ঝিকরগাছা গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 13,'40','41','61','20','371'	,'2400', '2400'	,'KESHABPUR Grameen'			,'কেশবপুর গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 14,'40','41','61','20','161'	,'2500', '2500'	,'JESSORE Grameen'				,'যশোর সদর গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 15,'40','41','61','20','666'	,'2600', '2600'	,'MANIRAMPUR Grameen'			,'মনিরামপুর গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 16,'40','41','61','20','81'	,'2700', '2700'	,'BENAPOLE Grameen'			,'বেনাপোল গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 17,'30','35','32','10','25'	,'1800', '1800'	,'GOPALGANJ SADAR Pourashava'	,'গোপালগঞ্জ সদর পৌরসভা'	,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 18,'30','35','43','10','10'	,'2800', '2800'	,'KASHIANI Pourashava'			,'কাশিয়ানী পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 19,'30','35','51','10','50'	,'2900', '2900'	,'KOTALIPARA Pourashava'		,'কোটালিপাড়া পৌরসভা'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 20,'30','35','58','10','65'	,'3000', '3000'	,'MUKSUDPUR Pourashava'		,'মুকসুদপুর পৌরসভা'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 21,'30','35','91','10','75'	,'3100', '3100'	,'TUNGIPARA Pourashava'		,'টুঙ্গিপাড়া পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 22,'30','35','32','20','251'	,'3200', '3200'	,'GOPALGANJ SADAR Grameen'		,'গোপালগঞ্জ সদর গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 23,'30','35','43','20','101'	,'3300', '3300'	,'KASHIANI Grameen'			,'কাশিয়ানী গ্রামীণ'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 24,'30','35','51','20','501'	,'3400', '3400'	,'KOTALIPARA Grameen'			,'কোটালিপাড়া গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 25,'30','35','58','20','651'	,'3500', '3500'	,'MUKSUDPUR Grameen'			,'মুকসুদপুর গ্রামীণ'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 26,'30','35','91','20','751'	,'3600', '3600'	,'TUNGIPARA Grameen'			,'টুঙ্গিপাড়া গ্রামীণ'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 27,'30','93','9','10', '102'	,'3700', '3700'	,'BASAIL Pourashava'			,'বাসাইল পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 28,'30','93','19','10','12'	,'3800', '3800'	,'BHUAPUR Pourashava'			,'ভূঞাপুর পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 29,'30','93','23','10','103'	,'3900', '3900'	,'DELDUAR Pourashava'			,'দেলদুয়ার পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 30,'30','93','25','10','252'	,'4000', '4000'	,'DHANBARI Pourashava'			,'ধনবাড়ী পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 31,'30','93','28','10','372'	,'4100', '4100'	,'GHATAIL Pourashava'			,'ঘাটাইল পৌরসভা' 			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 32,'30','93','38','10','502'	,'4200', '4200'	,'GOPALPUR Pourashava'			,'গোপালপুর পৌরসভা'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 33,'30','93','47','10','62'	,'4300', '4300'	,'KALIHATI Pourashava'			,'কালিহাতি পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 34,'30','93','57','10','752'	,'4400', '4400'	,'MADHUPUR Pourashava'			,'মধুপুর পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 35,'30','93','66','10','70'	,'4500', '4500'	,'MIRZAPUR Pourashava'			,'মির্জাপুর পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 36,'30','93','76','10','104'	,'4600', '4600'	,'NAGARPUR Pourashava'			,'নাগরপুর পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 37,'30','93','85','10','80'	,'4700', '4700'	,'SAKHIPUR Pourashava'			,'সখীপুর পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 38,'30','93','95','10','87'	,'4800', '4800'	,'TANGAIL SADAR Pourashava'	,'টাঙ্গাইল পৌরসভা'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 39,'30','93','9','20', '105'	,'4900', '4900'	,'BASAIL Grameen'				,'বাসাইল গ্রামীণ'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 40,'30','93','19','20','121'	,'5000', '5000'	,'BHUAPUR Grameen'				,'ভূঞাপুর গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 41,'30','93','23','20','106'	,'5100', '5100'	,'DELDUAR Grameen'				,'দেলদুয়ার গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 42,'30','93','25','20','253'	,'5200', '5200'	,'DHANBARI Grameen'			,'ধনবাড়ী গ্রামীণ'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 43,'30','93','28','20','373'	,'5300', '5300'	,'GHATAIL Grameen'				,'ঘাটাইল গ্রামীণ'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 44,'30','93','38','20','503'	,'5400', '5400'	,'GOPALPUR Grameen'			,'গোপালপুর গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 45,'30','93','47','20','621'	,'5500', '5500'	,'KALIHATI Grameen'			,'কালিহাতি গ্রামীণ' 		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 46,'30','93','57','20','753'	,'5600', '5600'	,'MADHUPUR Grameen'			,'মধুপুর গ্রামীণ'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 47,'30','93','66','20','701'	,'5700', '5700'	,'MIRZAPUR Grameen'			,'মির্জাপুর গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 48,'30','93','76','20','107'	,'5800', '5800'	,'NAGARPUR Grameen'			,'নাগরপুর গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 49,'30','93','85','20','801'	,'5900', '5900'	,'SAKHIPUR Grameen'			,'সখীপুর গ্রামীণ'			,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020'],
		[ 50,'30','93','95','20','871'	,'6000', '6000'	,'TANGAIL SADAR Grameen'		,'টাঙ্গাইল গ্রামীণ'		,'Note','Image Path1','Image Path2'     ,'Active','Draft','01-10-01-001','02/04/2020']
        ];

        $data->dbTableLoader('ada_area',$header,$info);
    }
}
