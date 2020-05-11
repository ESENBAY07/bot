
<?php
ob_start();
define('API_KEY','1085592780:AAHuBNjUNfUfzInHKmwXqlX6q-TYb8jQ6T0');
//tokenni yozing
$admin = "941522151"; 
function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
 
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}   
$update = json_decode(file_get_contents('php://input'));
$botim="editor_probot";
$message = $update->message;
$mid = $message->message_id;
$ism = $message->new_chat_member->first_name;
$chat_id = $message->chat->id;
$text1 = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$fadmin = $message->from->id;
$name2 = $update->callback_query->from->first_name;
$username2 = $update->callback_query->from->username;
$about2 = $update->callback_query->from->about;
$lname2 = $update->callback_query->from->last_name;
$message_id = $message->message_id;
$channel_id = $channel->chat->id; 
$cty = $message->chat->type;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$kanallar = file_get_contents("stat/kanal.list");
$fadmin = $message->from->id;
$sreply = $message->reply_to_message->text;  $sreplyd = $message->reply_to_message->document;
    $ent = $message->entities[0]->type;
    $reply_menu = json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
$kid = 'muzuk_tv'; $kkid = '@muzuk_tv'; if(isset($update->message->text)){ $gett = bot('getChatMember',[ 'chat_id' =>$kkid, 'user_id' => $update->message->chat->id, ]); $gget = $gett->result->status; if($gget == "member" or $gget == "creator" or $gget == "administrator"){ } else{ bot('sendMessage',[ 'chat_id'=>$update->message->chat->id, 'message_id'=>$update->message->message_id, 'parse_mode'=>'markdown', 'text'=>"*👋┇ Salom bot xush kelibsiz

🌟┇ Botdan foydalanish uchun kanalimizga a'zo boling

📡┇Kanalimiz
 $kkid 👈
👆👆👆

📌┇ A'zo bolib /start ni bosin *",  'reply_markup'=>json_encode([  'inline_keyboard'=>[  [['text'=>"A'zo bo'lish 🎗",'url'=>'http://t.me/'.$kid.'']], 
] 

]) 

]);return true;
}
    
}

if($text1=="/start"){  
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 $text = "
👋 <b>Salom  $name 🤖botimizga hush kelibsiz 💫

🤖 Botni 🔧ichlash 👇 Tarzi:
1) 🤖 Botga hoqlagan nomni ozgartirmoqchi bolgan faylni yiborasiz.📤
2) 📩 Yiborgan faylingizni ⬅ Reply-ga olasiz ✅
3) 💡hoqlagan 📝sozni yozasiz 📩
4) 🔧Va fayl tayyor qilib sizga jonatadi.😊</b>

🛠 <i>crektor :</i> @ms_xaker
🤖<i>Kanalimiz👇</i>:
🔹 @muzuk_tv ✅

<u>© 2019-2023 </u>";
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$text,
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
          ['text'=>'👥Guruhga qochish','url'=>'https://telegram.me/$botim?startgroup=new']
        ],
        [
          ['text'=>'📣KANAL','url'=>'https://telegram.me/muzuk_tv']
        ],
        [
          ['text'=>'👦Creator','url'=>'https://telegram.me/ms_xaker']
        ]
      ]
    ])
  ]);
  }
  if ( $text1 == "/start"){  
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"",
'caption'=>"bot namunasi👆", 'reply_markup'=>json_encode([
      'inline_keyboard'=>[

       
[
          ['text'=>'👦Admin','url'=>'https://telegram.me/ms_xaker']
        ]
      ]
    ])
]);
    
} 

$doc=$doc ->title;
 $doc=$message->audio;
$doc=$message->document;
 $doc=$message->document;
$doc_id=$sreplyd->file_id;       
 if(isset($sreplyd)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
$okey = file_put_contents("$text1.$type",file_get_contents($file));
if($okey){
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"<b>Fayl korilmoqda.........⏰</b>",
 'parse_mode'=>"HTML"
 ]);
 sleep(2);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'text'=>'➀ ➁ ➂ ➃ ➄ ➅ ➆ ➇ ➈ ➉'
 ]);
 sleep(1);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id +1,
 'text'=>'➊ ➁ ➂ ➃ ➄ ➅ ➆ ➇ ➈ ➉'
 ]);
 sleep(1);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id +1,
 'text'=>'➊ ➋  ➂ ➃ ➄ ➅ ➆ ➇ ➈ ➉'
 ]);
 sleep(1);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➊ ➋ ➌ ➃ ➄ ➅ ➆ ➇ ➈ ➉'
 ]);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➊ ➋ ➌ ➍ ➄ ➅ ➆ ➇ ➈ ➉'
 ]);
 sleep(1);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➊ ➋ ➌ ➍ ➎ ➅ ➆ ➇ ➈ ➉'
 ]);
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➊ ➋ ➌ ➍ ➎ ➏ ➆ ➇ ➈ ➉'
 ]);
 sleep(1);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➊ ➋ ➌ ➍ ➎ ➏ ➐ ➇ ➈ ➉'
 ]);
 sleep(1);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➊ ➋ ➌ ➍ ➎ ➏ ➐ ➑  ➈ ➉'
 ]);
 sleep(1);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➊ ➋ ➌ ➍ ➎ ➏ ➐ ➑ ➒ ➉'
 ]);
 sleep(1);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'➊ ➋ ➌ ➍ ➎ ➏ ➐ ➑ ➒ ➓'
 ]);
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);

Bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>"<b>Fayl tayyor✅</b>"
  , 'parse_mode'=>"HTML"
]);
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
Bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'<b>Hozr yiboraman.....📥</b>'
 , 'parse_mode'=>"HTML"
 ]);
 bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id + 1,
    ]);
sendAction ($chat_id,'upload_Document');
bot('sendDocument',[
          'chat_id'=>$chat_id,      
    'document'=>new CURLFile("$text1.$type"),
          'thumb'=>$fileid,
      'caption'=>"
📂Faylimiz : $text1.$type
📌By @editor_probot!!"
          ]);
          
del("$text1.$type");
} else {  

Bot('sendmessage',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'Bu fayl hajmi juda katda.⚠'
 ]);
}
}



$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$xabar = file_get_contents("xabarlar.txt");
if(isset($text1)){
  if($cty == "group" or $cty == "supergroup" or $cty == "channel_id "){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar \n $chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar \n $chat_id");
 
if(stripos($kanallar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/kanal.list","$kanallar \n $channel_id");
    }
  }
  }
 }

if($text == "/panel" && $fadmin==$admin){
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"🔸ADMIN PANEL🔸",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'👤Send user'],['text'=>'👥Send group']],
				[['text'=>'📡Send kanal'],['text'=>'📊Statistika']]
			]
		]),
	]);
       
}
if($text == "🔙Orqaga" && $fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"🔸ADMIN PANEL🔸",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'👤Userlar'],['text'=>'👥Guruhlar']],
[['text'=>'👤Send user'],['text'=>'👥Send group']],
				[['text'=>'📡Send kanal'],['text'=>'📊Statistika']]
			]
		]),
	]);
       
}

if($text == "👥Guruhlar" && $fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
  'parse_mode'=>'html',
 'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'🔙Orqaga']],
			]
		]),
	]);
       
}

if($text == "👤Userlar" && $fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
  'parse_mode'=>'html',
 'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'🔙Orqaga']],
			]
		]),
	]);
       
}

if($text == "📊Statistika" or $text == "/stat"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$ka = substr_count($kanallar,"\n");
$obsh = $gr + $us + $ka;
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
     bot('sendmessage',[
   'chat_id'=>$admin,
    'reply_to_message_id'=>$mesid,
    'text'=> "🔸STATISTIKA🔸

👤Foydalanuvchilar: <b>$us</b>
👥Guruhlar: <b>$gr</b>
  |
🌐Umumiy: <b>$obsh</b>",
'parse_mode' => 'html',
	]);
       
}

$replyik = $message->reply_to_message->text;
    $yubbi = "📩 Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

    if($text == "👤Send user" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text == "/no"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }   
	
      
       if($text == "👥Send group" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text == "/no"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
}

if($text == "📡Send kanal" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","kanal");
    }
    if($step == "kanal" and $chat_id == $admin){
      if($text == "/no"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$kanallar);
      foreach($idszs as $idlat){

     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"$text",
      'parse_mode'=>'markdown',
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Kanallarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    } 
    
    if(isset($update) !== false ){
if(isset($message->new_chat_member) or isset($message->left_chat_member)!==false){
    bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}
}
    
    
    
    
