<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$time=date("H:i",strtotime("5 hour"));//soat
$mint =date("i",strtotime("5 hour"));//minut

$kun=date("d.m.20y",strtotime("5 hour")); //sana
$sana =date("d.m.20y",strtotime("5 hour")); //sana
$yil = date("Y", strtotime("5 hour"));
$haf = date('N',strtotime('5 hour'));
$haft="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]"; // hafta kodi
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/karakalpakstan/nukus/');
$ex = explode('title="Havo harorati"',$obh);
$ex1 = explode('right-container',$ex[1]);
$ubk = str_replace($ex1[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4"); // ob-havo kodi




 
$xxxx = ["https://official07.000webhostapp.com/hacker.jpg","https://official07.000webhostapp.com/car.jpg","https://official07.000webhostapp.com/xuligan.jpg","https://official07.000webhostapp.com/city.jpg","https://official07.000webhostapp.com/2.jpg","https://official07.000webhostapp.com/analogclock.jpg","https://official07.000webhostapp.com/goto.jpg","https://official07.000webhostapp.com/qizq.jpg","https://official07.000webhostapp.com/qiziq.jpg","https://official07.000webhostapp.com/temr.jpg","https://official07.000webhostapp.com/tem.jpg","https://official07.000webhostapp.com/gold.jpg"];
  $xxx =array_rand($xxxx);
  $xx ="$xxxx[$xxx]";  
  
  
		
		



$profilkas = $MadelineProto->account->updateProfile(['about'=>"$time     |   $kun    | $hafta    |   $obhavo °C.    |  @Muzuk_Tv"]);// faxat bio sozi bor
$ofinder = $MadelineProto->account->updateStatus(['offline' => true, ]);// 24-soat online kodi
if($time !== "1"){
header('Content-type: image/jpg');
file_put_contents("ESENBAY.jpg",file_get_contents($xx));
$fileas = file_get_contents("ESENBAY.jpg");// ozingiz ozgartarsiz
$info = $MadelineProto->get_full_info('me');
$inputPhoto = ['_' => 'inputPhoto', 'id' => $info['User']['photo']['photo_id'], 'access_hash' => $info['User']['access_hash'], 'file_reference' => 'bytes'];
$deletePhoto = $MadelineProto->photos->deletePhotos(['id'=>[$inputPhoto]]);// 1-talik rasm qilib berivchi kodi
}

$rasmgo = $MadelineProto->photos->uploadProfilePhoto(['file' => "ESENBAY.jpg"]);//profilga rasm qoyadi

/*
MANA PROFIL UCHUN ENG SONGI SOAT KODI
@BALLER_UZ DUZIB CHIQDI
VA @UZB_DROID_HACKER KANALI TARQATDI.
HAQQIY ODAMLAR MANBA BILAN OLADI SIZCHI.?



*/


    
    



unlink("MadelineProto.log"); // manba @baller_uz kanal @uzb_droid_hacker
unlink("session.madeline");//sayt hafmini toldirmaydi.

	
	
?>