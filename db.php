
ISERT ITO ada_Division
(DivisionId, DivisionCode, DivisionameEnglish, DivisionameBangla, DivisionImage1,DivisionImage2,ote, RecordStatus,RecordVersion, UserAccess, AccessDate)

VALUES ( '1','10','Barisal', 'বরিশাল', 'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
( '2','20','Chittagong', 'চটগ্রাম', 'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
( '3','30','Dhaka', 'ঢাকা', 'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
( '4','40','Khulna', 'খুলনা', 'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
('5', '50','Rajshahi', 'রাজশাহী', 'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
( '6','55','Rangpur', 'রংপুর', 'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
('7', '60','Sylhet', 'সিলেট', 'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
( '8','70','Mymensingh', 'ময়মনসিংহ', 'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018');


ISERT ITO [dbo].[Ada_District]
(DivisionId, DivisionCode, DistrictCode, DistrictameEnglish, DistrictameBangla,DistrictImage2,DistrictImage1,ote, RecordStatus, RecordVersion, UserAccess, AccessDate)
VALUES ('1','10','4' ,'BARGUA' ,'বরগুনা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('2','10','6' ,'BARISAL' ,'বরিশাল','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('3','10','9' ,'BHOLA' ,'ভোলা ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('4','10','42' ,'JHALOKATI' ,'ঝালকাঠি','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('5','10','78' ,'PATUAKHALI' ,'পটুয়াখালী ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('6','10','79' ,'PIROJPUR' ,'পিরোজপুর' ,'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
('7','20','3' ,'BADARBA' ,'বান্দরবন','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('8','20','12' ,'BRAHMABARIA' ,'ব্রাহ্মণবাড়িয়া','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('9','20','13' ,'CHADPUR' ,'চাঁদপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('10','20','15' ,'CHITTAGOG' ,'চট্টগ্রাম','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),

('11','20','19' ,'COMILLA' ,'কুমিল্লা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('12','20','22' ,'COXS BAZAR' ,'কক্সবাজার','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('13','20','30' ,'FEI' ,'ফেনী','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('14','20','46' ,'KHAGRACHHARI' ,'খাগড়াছড়ি' ,'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
('15','20','51' ,'LAKSHMIPUR' ,'লক্ষ্মীপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('16','20','75' ,'OAKHALI' ,'নোয়াখালী','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('17','20','84' ,'RAGAMATI' ,'রাঙামাটি','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('18','30','26' ,'DHAKA' ,'ঢাকা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('19','30','29' ,'FARIDPUR' ,'ফরিদপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('20','30','33' ,'GAZIPUR' ,'গাজীপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),

('21','30','35' ,'GOPALGAJ' ,'গোপালগঞ্জ' ,'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
('22','30','48' ,'KISHOREGOJ' ,'কিশরগঞ্জ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('23','30','54' ,'MADARIPUR' ,'মাদারীপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('24','30','56' ,'MAIKGAJ' ,'মানিকগঞ্জ' ,'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
('25','30','59' ,'MUSHIGAJ' ,'মুন্সিগঞ্জ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('26','30','67' ,'ARAYAGAJ' ,'নারায়ণগঞ্জ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('27','30','68' ,'ARSIGDI' ,'নরসিংদি','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('28','30','82' ,'RAJBARI' ,'রাজবাড়ী','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('29','30','86' ,'SHARIATPUR' ,'শরীয়তপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('30','30','93' ,'TAGAIL' ,'টাঙ্গাইল','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),

('31','40','1' ,'BAGERHAT' ,'বাগেরহাট','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('32','40','18' ,'CHUADAGA' ,'চুয়াডাঙ্গা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('33','40','41' ,'JESSORE' ,'যশোর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('34','40','44' ,'JHEAIDAH' ,'ঝিনাইদহ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('35','40','47' ,'KHULA' ,'খুলনা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('36','40','50' ,'KUSHTIA' ,'কুষ্টিয়া','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('37','40','55' ,'MAGURA' ,'মাগুরা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('38','40','57' ,'MEHERPUR' ,'মেহেরপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('39','40','65' ,'ARAIL' ,'নড়াইল','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('40','40','87' ,'SATKHIRA' ,'সাতক্ষীরা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),

('41','50','10' ,'BOGRA' ,'বগুড়া','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('42','50','38' ,'JOYPURHAT' ,'জয়পুরহাট' ,'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
('43','50','64' ,'AOGAO' ,'নওগাঁ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('44','50','69' ,'ATORE' ,'নাটোর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('45','50','70' ,'CHAPAI ABABGAJ','চাঁপাইনবাবগঞ্জ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('46','50','76' ,'PABA' ,'পাবনা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('47','50','81' ,'RAJSHAHI' ,'রাজশাহী','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('48','50','88' ,'SIRAJGAJ' ,'সিরাজগঞ্জ' ,'Path','Path','ote','Active','Draft','01-10-01-001','06/04/2018'),
('49','55','27' ,'DIAJPUR' ,'দিনাজপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('50','55','32' ,'GAIBADHA' ,'গাইবান্ধা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),

('51','55','49' ,'KURIGRAM' ,'কুড়িগ্রাম','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('52','55','52' ,'LALMOIRHAT' ,'লালমনিরহাট','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('53','55','73' ,'ILPHAMARI' ,'নীলফামারী','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('54','55','77' ,'PACHAGARH' ,'পঞ্চগড়','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('55','55','85' ,'RAGPUR' ,'রংপুর ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('56','55','94' ,'THAKURGAO' ,'ঠাকুরগাঁও','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('57','60','36' ,'HABIGAJ' ,'হবিগঞ্জ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('58','60','58' ,'MAULVIBAZAR' ,'মৌলভীবাজার','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('59','60','90' ,'SUAMGAJ' ,'সুনামগঞ্জ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('60','60','91' ,'SYLHET' ,'সিলেট','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),

('61','70','39' ,'JAMALPUR' ,'জামালপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('62','70','89' ,'SHERPUR' ,'শেরপুর','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('63','70','72' ,'ETRAKOA' ,'নেত্রকোনা','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018'),
('64','70','61' ,'MYMESIGH' ,'ময়মনসিংহ ','Path','Path' ,'ote','Active','Draft','01-10-01-001','06/04/2018');


INSERT INTO ada_upazila (UpazilaId, DivisionCode, DistrictCode, UpazilaCode, UpazilaNameEnglish, UpazilaNameBangla, UpazilaImage1, UpazilaImage2, Note, RecordStatus, RecordVersion, UserAccess, AccessDate)

VALUES  ('1','10','4' ,'9'	,'AMTALI'			,'আমতলী '			,'Path','Path'    ,'Note','Active','Draft','01-10-01-001','06/04/2018'),
('2','10','4' , '19'	,'BAMA'			,'বামনা'			,'Path','Path'    ,'Note','Active','Draft','01-10-01-001','06/04/2018'),
('3','10','4' , '28'	,'BARGUA SADAR'	,'বরগুনা সদর'		,'Path','Path'    ,'Note','Active','Draft','01-10-01-001','06/04/2018'),
('4','10','4' ,'47'	,'BETAGI'			,'পাথরঘাটা'			,'Path','Path'    ,'Note','Active','Draft','01-10-01-001','06/04/2018'),
('5','10','4' ,'85'	,'PATHARGHATA'		,'তালতলী'			,'Path','Path'    ,'Note','Active','Draft','01-10-01-001','06/04/2018');
